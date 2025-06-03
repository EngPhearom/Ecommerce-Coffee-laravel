@extends('Admin.index')
@section('contant')
    <div id="app" class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center justify-content-between">
                            <div>
                                <h4 class="card-title">Products</h4>
                            </div>
                            <div class="btn">
                                <button class="btn btn-outline-info" @click="showModal()">Add New
                                    Product</button>
                            </div>
                        </div>
                        <div class="table-responsive mt-4">
                            <table class="table mb-0 text-nowrap varient-table align-middle fs-3">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Product Name</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item, index) in product_list" :key="item.id">
                                        <td>[[ index + 1 ]]</td>
                                        <td>[[ item.productName ]]</td>
                                        <td>[[ item.description ]]</td>
                                        <td>[[ item.category ]]</td>
                                        <td>[[ item.price ]]</td>
                                        <td>
                                            <button class="btn btn-sm btn-success" style="margin-right: 10px"
                                                @click="getEdit(item)">Edit</button>
                                            <button class="btn btn-sm btn-danger"
                                                @click="deleteProduct(item)">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Customer Modal -->
        <div class="modal fade" id="adddrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addUserModalLabel">Add New Product</h5>
                    </div>
                    <form>
                        @csrf
                        <div class="modal-body">
                            <input type="hidden" class="form-control" id="userId" name="userId" required>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="productname" class="form-label">Product Name </label>
                                    <input type="text" class="form-control" id="productname" name="productname" required v-model="form.productName">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="description" class="form-label">Description </label>
                                    <input type="text" class="form-control" id="description" name="description" required v-model="form.description">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="category" class="form-label">Category </label>
                                    <input type="text" class="form-control" id="category" name="category" v-model="form.category">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="price" class="form-label">Price </label>
                                    <input type="number" class="form-control" id="price" name="price" v-model="form.price">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" @click="resetForm()">Cancel</button>
                            <button type="submit" class="btn btn-info" v-if="status == 'add'" @click="addProduct()">Add Product</button>
                            <button type="submit" class="btn btn-info" v-if="status == 'edit'" @click="editProduct()">Edit Product</button>
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
            },
            delimiters: ["[[", "]]"],
            setup() {
                const status = ref('add');
                const product_list = ref([]);
                const form = {
                    id: null,
                    productName: null,
                    description: null,
                    category: null,
                    price: null,
                }
                return {
                    status,
                    product_list,
                    form,
                }
            },
            methods: {
                showModal() {
                    $('#adddrop').modal('show');
                },
                closeModal() {
                    $('#adddrop').modal('hide');
                },
                fetch() {
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
                addProduct() {
                    const vm = this;
                    const input = {
                        productName: vm.form.productName,
                        description: vm.form.description,
                        category: vm.form.category,
                        price: vm.form.price,
                    };
                    $.LoadingOverlay("show");
                    axios
                        .post("/admin/add-product", input)
                        .then(function(response) {
                            if (response.status === 200) {
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
                getEdit(item) {
                    this.status = 'edit';
                    this.form.id = item.id;
                    this.form.productName = item.productName;
                    this.form.description = item.description;
                    this.form.category = item.category;
                    this.form.price = item.price;
                    this.showModal();
                },
                editProduct(){
                    const vm = this;
                    const input = {
                        id: vm.form.id,
                        productName: vm.form.productName,
                        description: vm.form.description,
                        category: vm.form.category,
                        price: vm.form.price,
                    };
                    $.LoadingOverlay("show");
                    axios
                        .post("/admin/edit-product", input)
                        .then(function(response) {
                            if (response.status === 200) {
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
                deleteProduct(item) {
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
                                .post("/admin/delete-product", input)
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
                resetForm() {
                    this.form.id = null;
                    this.form.productName = null;
                    this.form.description = null;
                    this.form.category = null;
                    this.form.price = null;
                    this.status = 'add';
                    this.closeModal();
                }
            },
        }).mount('#app')
    </script>
@endsection
