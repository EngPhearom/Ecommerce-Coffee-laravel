@extends('Admin.index')
@section('contant')
    <div id="app" class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center justify-content-between">
                            <div>
                                <h4 class="card-title">Inventories</h4>
                            </div>
                            <div class="btn">
                                <button class="btn btn-outline-info" @click="showModal()">Add New
                                    Inventory</button>
                            </div>
                        </div>
                        <div class="table-responsive mt-4">
                            <table class="table mb-0 text-nowrap varient-table align-middle fs-3">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Product Id</th>
                                        <th>Stock Quantity</th>
                                        <th>Cost Price</th>
                                        <th>Selling Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item, index) in inventory_list" :key="item.id">
                                        <td>[[ index + 1 ]]</td>
                                        <td>[[ item.product_id ]]</td>
                                        <td>[[ item.stockQuantity ]]</td>
                                        <td>[[ item.costPrice ]]</td>
                                        <td>[[ item.sellingPrice ]]</td>
                                        <td>
                                            <button class="btn btn-sm btn-success" style="margin-right: 10px"
                                                @click="getEdit(item)">Edit</button>
                                            <button class="btn btn-sm btn-danger" @click="deleteInventory(item)">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="adddrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addUserModalLabel">Add New Inventory</h5>
                    </div>
                    <form>
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6 mb-3" v-if="status == 'add'">
                                    <label for="productid" class="form-label">Product Id </label>
                                    <select class="form-select" id="productid" name="productid" v-model="form.product_id">
                                        <option :value="item.id" selected v-for="item in product_list" :key="item.id">[[ item.id ]]</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3" v-if="status == 'edit'">
                                    <label for="productid" class="form-label">Product Id </label>
                                    <input type="number" class="form-control" id="productid" name="productid" required
                                        disabled v-model="form.product_id">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="stock" class="form-label">Stock Quantity </label>
                                    <input type="text" class="form-control" id="stock" name="stock" required v-model="form.stock">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="cost" class="form-label">Cost Price</label>
                                    <input type="number" class="form-control" id="cost" name="cost" v-model="form.cost">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="sell" class="form-label">Selling Price </label>
                                    <input type="number" class="form-control" id="sell" name="sell" v-model="form.sell">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" @click="resetForm()">Cancel</button>
                            <button type="submit" class="btn btn-info" v-if="status == 'add'" @click="addInventory()">Add Inventory</button>
                            <button type="submit" class="btn btn-info" v-if="status == 'edit'" @click="editInventory()">Edit Inventory</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        const {
            createApp,
            ref
        } = Vue

        createApp({
            mounted() {
                this.fetch();
                this.fetchProduct();
            },
            setup() {
                const status = ref('add');
                const inventory_list = ref([]);
                const product_list = ref([]);
                const form = ref({
                    id: null,
                    product_id: null,
                    stock: null,
                    cost: null,
                    sell: null,
                });
                return {
                    status,
                    inventory_list,
                    product_list,
                    form,
                }
            },
            delimiters: ["[[", "]]"],
            methods: {
                fetch() {
                    const vm = this;
                    $.LoadingOverlay("show");
                    axios
                        .get("/admin/get-inventories")
                        .then(function(response) {
                            vm.inventory_list = response.data;
                            $.LoadingOverlay("hide");
                        })
                        .catch(function(error) {
                            console.log(error);
                            $.LoadingOverlay("hide");
                        });
                },
                fetchProduct() {
                    const vm = this;
                    $.LoadingOverlay("show");
                    axios
                        .get("/admin/get-products")
                        .then(function(response) {
                            vm.product_list = response.data;
                            $.LoadingOverlay("hide");
                        })
                        .catch(function(error) {
                            console.log(error);
                            $.LoadingOverlay("hide");
                        });
                },
                showModal() {
                    $('#adddrop').modal('show');
                },
                closeModal() {
                    $('#adddrop').modal('hide');
                },
                addInventory(){
                    const vm = this;
                    const input = {
                        product_id: vm.form.product_id,
                        stockQuantity: vm.form.stock,
                        costPrice: vm.form.cost,
                        sellingPrice: vm.form.sell,
                    };
                    $.LoadingOverlay("show");
                    axios
                        .post("/admin/add-inventory", input)
                        .then(function(response) {
                            if(response.status === 200){
                                vm.resetForm();
                                vm.fetch();
                            }
                            $.LoadingOverlay("hide");
                        })
                        .catch(function(error) {
                            console.log(error);
                            $.LoadingOverlay("hide");
                        });
                },
                deleteInventory(item){
                    const swalWithBootstrapButtons = Swal.mixin({
                        customClass: {
                            confirmButton: "btn btn-success mx-2",
                            cancelButton: "btn btn-danger mx-2"
                        },
                        buttonsStyling: false
                    });
                    swalWithBootstrapButtons.fire({
                        title: "Are you sure?",
                        text: "You want to deleted user!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonText: "Yes",
                        cancelButtonText: "No",
                        reverseButtons: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            const vm = this;
                            const input = {
                                id: item.id,
                            };
                            $.LoadingOverlay("show");
                            axios
                                .post("/admin/delete-inventory", input)
                                .then(function(response) {
                                    if (response.status === 200) {
                                        vm.fetch();
                                    }
                                    $.LoadingOverlay("hide");
                                })
                                .catch(function(error) {
                                    console.log(error);
                                    $.LoadingOverlay("hide");
                                });
                        }
                    });
                },
                getEdit(item) {
                    this.status = 'edit';
                    this.form.id = item.id;
                    this.form.product_id = item.product_id;
                    this.form.stock = item.stockQuantity;
                    this.form.cost = item.costPrice;
                    this.form.sell = item.sellingPrice;
                    this.showModal();
                },
                editInventory(){
                    const vm = this;
                    const input = {
                        id: vm.form.id,
                        product_id: vm.form.product_id,
                        stockQuantity: vm.form.stock,
                        costPrice: vm.form.cost,
                        sellingPrice: vm.form.sell,
                    };
                    $.LoadingOverlay("show");
                    axios
                        .post("/admin/edit-inventory", input)
                        .then(function(response) {
                            if(response.status === 200){
                                vm.resetForm();
                                vm.fetch();
                            }
                            $.LoadingOverlay("hide");
                        })
                        .catch(function(error) {
                            console.log(error);
                            $.LoadingOverlay("hide");
                        });
                },
                resetForm() {
                    this.form.id = null;
                    this.form.product_id = null;
                    this.form.stock = null;
                    this.form.cost = null;
                    this.form.sell = null;
                    this.status = 'add';
                    this.closeModal();
                },
            },
        }).mount('#app')
    </script>
@endsection
