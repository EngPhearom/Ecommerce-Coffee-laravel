@extends('Admin.index')
@section('contant')
    <div id="app" class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center justify-content-between">
                            <div>
                                <h4 class="card-title">Employees</h4>
                            </div>
                            <div class="btn">
                                <button class="btn btn-outline-info" @click="showModal()">Add New
                                    Employee</button>
                            </div>
                        </div>
                        <div class="table-responsive mt-4">
                            <table class="table mb-0 text-nowrap varient-table align-middle fs-3">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Gender</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Position</th>
                                        <th>Hire Date</th>
                                        <th>Salary</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(item, index) in employee_list" :key="item.id">
                                        <td>[[ index + 1 ]]</td>
                                        <td>[[ item.firstName ]]</td>
                                        <td>[[ item.lastname ]]</td>
                                        <td>[[ item.gender ]]</td>
                                        <td>[[ item.email ]]</td>
                                        <td>[[ item.phoneNumber ]]</td>
                                        <td>[[ item.position ]]</td>
                                        <td>[[ item.hireDate ]]</td>
                                        <td>[[ item.salary ]]</td>
                                        <td>
                                            <button @click="getEdit(item)" class="btn btn-sm btn-success" style="margin-right: 10px"
                                                >Edit</button>
                                            <button @click="deleteEmployee(item)" class="btn btn-sm btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Employee Modal -->
        <div class="modal fade" id="adddrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addUserModalLabel">Add New Employee</h5>
                    </div>
                    <form>
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstname" class="form-label">First Name </label>
                                    <input type="text" class="form-control" id="firstname" name="firstname" required v-model="form.firstName">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastname" class="form-label">Last Name </label>
                                    <input type="text" class="form-control" id="lastname" name="lastname" required v-model="form.lastname">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select class="form-select" id="gender" name="gender" v-model="form.gender">
                                        <option value="male" selected>Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email </label>
                                    <input type="email" class="form-control" id="email" name="email" v-model="form.email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">Phone Number </label>
                                    <input type="tel" class="form-control" id="phone" name="phone" v-model="form.phoneNumber">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="position" class="form-label">Position </label>
                                    <input type="text" class="form-control" id="position" name="position" v-model="form.position">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="date" class="form-label">Hire Date </label>
                                    <input type="date" class="form-control" id="date" name="date" v-model="form.hireDate">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="salary" class="form-label">Salary </label>
                                    <input type="number" class="form-control" id="salary" name="salary" v-model="form.salary">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" @click="resetForm()">Cancel</button>
                            <button type="submit" class="btn btn-info" v-if="status == 'add'" @click="addEmployee()">Add Employee</button>
                            <button type="submit" class="btn btn-info" v-if="status == 'edit'" @click="editEmployee()">Edit Employee</button>
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
            setup() {
                const status = ref('add');
                const employee_list = ref([]);
                const form = ref({
                    id: null,
                    firstName: null,
                    lastname: null,
                    gender: 'male',
                    email: null,
                    phoneNumber: null,
                    position: null,
                    hireDate: null,
                    salary: null,
                })
                return {
                    status,
                    employee_list,
                    form,
                }
            },
            delimiters: ['[[', ']]'],
            methods: {
                fetch() {
                    const vm = this;
                    $.LoadingOverlay("show");
                    axios
                        .get("/admin/get-employees")
                        .then(function(response) {
                            vm.employee_list = response.data;
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
                addEmployee(){
                    const vm = this;
                            const input = {
                                firstName: vm.form.firstName,
                                lastname: vm.form.lastname,
                                gender: vm.form.gender,
                                email: vm.form.email,
                                phoneNumber: vm.form.phoneNumber,
                                position: vm.form.position,
                                hireDate: vm.form.hireDate,
                                salary: vm.form.salary,
                            }
                            $.LoadingOverlay("show");
                            axios
                                .post("/admin/add-employee", input)
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
                    this.form.firstName = item.firstName;
                    this.form.lastname = item.lastname;
                    this.form.gender = item.gender;
                    this.form.email = item.email;
                    this.form.phoneNumber = item.phoneNumber;
                    this.form.position = item.position;
                    this.form.hireDate = item.hireDate;
                    this.form.salary = item.salary;
                    this.showModal();
                },
                editEmployee(){
                    const vm = this;
                            const input = {
                                id: vm.form.id,
                                firstName: vm.form.firstName,
                                lastname: vm.form.lastname,
                                gender: vm.form.gender,
                                email: vm.form.email,
                                phoneNumber: vm.form.phoneNumber,
                                position: vm.form.position,
                                hireDate: vm.form.hireDate,
                                salary: vm.form.salary,
                            }
                            $.LoadingOverlay("show");
                            axios
                                .post("/admin/edit-employee", input)
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
                deleteEmployee(item) {
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
                                .post("/admin/delete-employee", input)
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
                        this.form.firstName = null,
                        this.form.lastname = null,
                        this.form.gender = 'male',
                        this.form.email = null,
                        this.form.phoneNumber = null,
                        this.form.position = null,
                        this.form.hireDate = null,
                        this.form.salary = null,
                        this.closeModal();
                },
            },
        }).mount('#app')
    </script>
@endsection
