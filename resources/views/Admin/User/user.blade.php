@extends('Admin.index')
@section('contant')
    {{-- Table --}}
    <div id="app" class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center justify-content-between">
                            <div>
                                <h4 class="card-title">Users</h4>
                            </div>
                            <div class="btn">
                                <button @click="showModal()" class="btn btn-outline-info">Add New User</button>
                            </div>
                        </div>
                        <div class="table-responsive mt-4">
                            <table class="table mb-0 text-nowrap varient-table align-middle fs-3">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Passowed</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Status</th>
                                        <th>Last Login</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for = "(item, index) in users_list" :key = "users_list.id">
                                        <td>[[ index + 1 ]]</td>
                                        <td>[[ item.userName ]]</td>
                                        <td>[[ item.password ]]</td>
                                        <td>[[ item.email ]]</td>
                                        <td>[[ item.phoneNumber ]]</td>
                                        <td>[[ item.status ]]</td>
                                        <td>[[ item.lastLogin ]]</td>
                                        <td>
                                            <a @click="getEdit(item)" href="javascript:void(0)"
                                                class="btn btn-sm btn-success" style="margin-right: 10px">Edit</a>
                                            <a href="javascript:void(0)" class="btn btn-sm btn-danger"
                                                @click="deleteUser(item)">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Modal --}}
        <div class="modal fade" id="adddrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addUserModalLabel">Add New User</h5>
                    </div>
                    <form>
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Name </label>
                                    <input type="text" class="form-control" id="name" name="name" required
                                        v-model="form.name">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="password" class="form-label">Password </label>
                                    <input type="password" class="form-control" id="password" name="password" required
                                        v-model="form.password">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email </label>
                                    <input type="email" class="form-control" id="email" name="email" required
                                        v-model="form.email">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" name="phone"
                                        v-model="form.phone">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-select" id="status" name="status" v-model="form.status">
                                        <option value="active" selected>Active</option>
                                        <option value="inactive">Inactive</option>
                                        <option value="pending">Pending</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastlogin" class="form-label">Last Login</label>
                                    <input type="text" class="form-control" id="lastlogin" name="lastlogin"
                                        v-model="form.lastLogin">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" @click="resetForm()">Cancel</button>
                            <button v-if = "status == 'add'" @click="addUser()" type="submit" class="btn btn-info">Add
                                User</button>
                            <button v-if = "status == 'edit'" @click="editUser()" type="submit" class="btn btn-info">Edit
                                User</button>
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
            delimiters: ['[[', ']]'],
            setup() {
                const status = ref('add');
                const users_list = ref([]);
                const form = ref({
                    id: null,
                    name: null,
                    password: null,
                    email: null,
                    phone: null,
                    status: 'active',
                    lastLogin: null,
                });
                return {
                    status,
                    users_list,
                    form,
                }
            },
            methods: {
                fetch() {
                    const vm = this;
                    $.LoadingOverlay("show");
                    axios
                        .get("/admin/get-users")
                        .then(function(response) {
                            vm.users_list = response.data;
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
                getEdit(item) {
                    this.form.id = item.id;
                    this.form.name = item.userName;
                    this.form.password = item.password;
                    this.form.email = item.email;
                    this.form.phone = item.phoneNumber;
                    this.form.status = item.status;
                    this.form.lastLogin = item.lastLogin;
                    this.status = 'edit';
                    this.showModal();
                },
                editUser() {
                    const vm = this;
                    $.LoadingOverlay("show");
                    const input = {
                        id: vm.form.id,
                        userName: vm.form.name,
                        password: vm.form.password,
                        email: vm.form.email,
                        phoneNumber: vm.form.phone,
                        status: vm.form.status,
                        lastLogin: vm.form.lastLogin
                    };
                    axios
                        .post("/admin/edit-user", input)
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
                addUser() {
                    const vm = this;
                    $.LoadingOverlay("show");
                    const input = {
                        userName: vm.form.name,
                        password: vm.form.password,
                        email: vm.form.email,
                        phoneNumber: vm.form.phone,
                        status: vm.form.status,
                        createdDate: new Date().toISOString().slice(0, 19).replace('T', ' '),
                        lastLogin: vm.form.lastLogin
                    };
                    axios
                        .post("/admin/add-user", input)
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
                deleteUser(item) {
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
                                .post("/admin/delete-user", input)
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
                    this.form.id = null;
                    this.form.name = null;
                    this.form.password = null;
                    this.form.email = null;
                    this.form.phone = null;
                    this.form.status = 'active';
                    this.form.lastLogin = null;
                    this.closeModal();
                }
            },
        }).mount('#app')
    </script>
@endsection
