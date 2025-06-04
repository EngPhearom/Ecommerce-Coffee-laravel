@extends('Admin.index')
@section('contant')
    <div id="app" class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center justify-content-between">
                            <div>
                                <h4 class="card-title">Customers</h4>
                            </div>
                            <div class="btn">
                                <button class="btn btn-outline-info" @click="showModal()">Add New Customer</button>
                            </div>
                        </div>
                        <div class="table-responsive mt-4">
                            <table class="table mb-0 text-nowrap varient-table align-middle fs-3">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>User Id</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Gender</th>
                                        <th>Email Address</th>
                                        <th>Phone Number</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-if="customers_list.length === 0">
                                        <td colspan="8" class="text-center">No records found!</td>
                                    </tr>
                                    <tr v-for = "(item, index) in customers_list" :key="item.id">
                                        <td>[[ index + 1 ]]</td>
                                        <td>[[ item.user_id ]]</td>
                                        <td>[[ item.firstName ]]</td>
                                        <td>[[ item.lastName ]]</td>
                                        <td>[[ item.gender ]]</td>
                                        <td>[[ item.emailAddress ]]</td>
                                        <td>[[ item.phoneNumber ]]</td>
                                        <td>
                                            <button class="btn btn-sm btn-success" style="margin-right: 10px"
                                                @click="getEdit(item)">Edit</button>
                                            <button class="btn btn-sm btn-danger"
                                                @click="deleteCustomer(item)">Delete</button>
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
                        <h5 class="modal-title" id="addUserModalLabel">Add New Customer</h5>
                    </div>
                    <form>
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6 mb-3" v-if = "status == 'add'">
                                    <label for="userid" class="form-label">User Id</label>
                                    <select class="form-select" id="userid" name="userid" v-model="form.user_id">
                                        <option :value="item.id" v-for = "item in user_list" :key="item.id" selected>[[ item.id ]]</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3" v-if = "status == 'edit'">
                                    <label for="userid" class="form-label">User Id</label>
                                    <input type="text" class="form-control" id="userid" name="userid" required
                                        v-model="form.user_id" disabled>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="firstname" class="form-label">First Name </label>
                                    <input type="text" class="form-control" id="firstname" name="firstname" required
                                        v-model="form.firstName">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="lastname" class="form-label">Last Name </label>
                                    <input type="text" class="form-control" id="lastname" name="lastname" required
                                        v-model="form.lastName">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select class="form-select" id="gender" name="gender" v-model="form.gender">
                                        <option value="male" selected>Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email Address </label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        v-model="form.emailAddress">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">Phone Number </label>
                                    <input type="tel" class="form-control" id="phone" name="phone"
                                        v-model="form.phoneNumber">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" @click="resetForm()">Cancel</button>
                            <button type="submit" class="btn btn-info" @click="addCustomer()"
                                v-if = "status == 'add'">Add Customer</button>
                            <button type="submit" class="btn btn-info" @click="editCustomer()" v-if = "status == 'edit'">Edit Customer</button>
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
                this.fetchusers();
            },
            setup() {
                const status = ref('add');
                const customers_list = ref([]);
                const user_list = ref([]);
                const form = ref({
                    id: null,
                    user_id: null,
                    firstName: null,
                    lastName: null,
                    gender: 'male',
                    emailAddress: null,
                    phoneNumber: null,
                })
                return {
                    status,
                    customers_list,
                    user_list,
                    form,
                }
            },
            delimiters: ['[[', ']]'],
            methods: {
                fetch() {
                    const vm = this;
                    $.LoadingOverlay("show");
                    axios
                        .get("/admin/get-customers")
                        .then(function(response) {
                            vm.customers_list = response.data;
                            $.LoadingOverlay("hide");
                        })
                        .catch(function(error) {
                            console.log(error);
                            $.LoadingOverlay("hide");
                        });
                },
                fetchusers() {
                    const vm = this;
                    // $.LoadingOverlay("show");
                    axios
                        .get("/admin/get-users")
                        .then(function(response) {
                            vm.user_list = response.data;
                            // $.LoadingOverlay("hide");
                        })
                        .catch(function(error) {
                            console.log(error);
                            // $.LoadingOverlay("hide");
                        });
                },
                showModal() {
                    $('#adddrop').modal('show');
                },
                closeModal() {
                    $('#adddrop').modal('hide');
                },
                getEdit(item) {
                    this.form.id = item.id;
                    this.form.user_id = item.user_id;
                    this.form.firstName = item.firstName;
                    this.form.lastName = item.lastName;
                    this.form.gender = item.gender;
                    this.form.emailAddress = item.emailAddress;
                    this.form.phoneNumber = item.phoneNumber;
                    this.status = 'edit';
                    this.showModal();
                },
                editCustomer(){
                    const vm = this;
                    $.LoadingOverlay("show");
                    const input = {
                        id: vm.form.id,
                        user_id: vm.form.user_id,
                        firstName: vm.form.firstName,
                        lastName: vm.form.lastName,
                        gender: vm.form.gender,
                        emailAddress: vm.form.emailAddress,
                        phoneNumber: vm.form.phoneNumber,
                    };
                    axios
                        .post("/admin/edit-customer", input)
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
                addCustomer() {
                    const vm = this;
                    $.LoadingOverlay("show");
                    const now = new Date();
                    const options = {
                        day: '2-digit',
                        month: 'short',
                        year: 'numeric'
                    };
                    const formattedDate = now.toLocaleDateString('en-GB', options);
                    const input = {
                        user_id: vm.form.user_id,
                        firstName: vm.form.firstName,
                        lastName: vm.form.lastName,
                        gender: vm.form.gender,
                        emailAddress: vm.form.emailAddress,
                        phoneNumber: vm.form.phoneNumber,
                        datetime: formattedDate,
                    };
                    axios
                        .post("/admin/add-customer", input)
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
                deleteCustomer(item) {
                    const swalWithBootstrapButtons = Swal.mixin({
                        customClass: {
                            confirmButton: "btn btn-success mx-2",
                            cancelButton: "btn btn-danger mx-2"
                        },
                        buttonsStyling: false
                    });
                    swalWithBootstrapButtons.fire({
                        title: "Are you sure?",
                        text: "You want to deleted customer!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonText: "Yes",
                        cancelButtonText: "No",
                        reverseButtons: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            const vm = this;
                            const input = {
                                id: item.id
                            }
                            $.LoadingOverlay("show");
                            axios
                                .post("/admin/delete-customer", input)
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
                    this.status = 'add';
                    this.form.id = null,
                        this.form.user_id = null,
                        this.form.firstName = null,
                        this.form.lastName = null,
                        this.form.gender = 'male',
                        this.form.emailAddress = null,
                        this.form.phoneNumber = null,
                        this.closeModal();
                },
            },
        }).mount('#app')
    </script>
@endsection
