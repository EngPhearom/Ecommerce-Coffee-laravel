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
                        <button
                            class="btn btn-outline-info"
                            @click="showModal()"
                        >Add New Customer</button>
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
                        @foreach ($customer as $item)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $item->user_id }}</td>
                                <td>{{ $item->firstName }}</td>
                                <td>{{ $item->lastName }}</td>
                                <td>{{ $item->gender }}</td>
                                <td>{{ $item->emailAddress }}</td>
                                <td>{{ $item->phoneNumber }}</td>
                                <td>
                                    <a
                                        href="javascript:void(0)"
                                        class="btn btn-sm btn-success"
                                        style="margin-right: 10px"
                                        @click="getEdit()"
                                    >Edit</a>
                                    <a
                                        href="javascript:void(0)"
                                        class="btn btn-sm btn-danger"
                                        @click="deleteCustomer()"
                                    >Delete</a>
                                </td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Add Customer Modal -->
        <div class="modal fade" id="adddrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addUserModalLabel">Add New Customer</h5>
                    </div>
                    <form>
                        @csrf
                        <div class="modal-body">
                            <input type="hidden" class="form-control" id="userId" name="userId" required>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstname" class="form-label">First Name </label>
                                    <input type="text" class="form-control" id="firstname" name="firstname" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastname" class="form-label">Last Name </label>
                                    <input type="text" class="form-control" id="lastname" name="lastname" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select class="form-select" id="gender" name="gender">
                                        <option value="male" selected>Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email Address </label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">Phone Number </label>
                                    <input type="tel" class="form-control" id="phone" name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" @click="clearForm()">Cancel</button>
                            <button
                                type="submit"
                                class="btn btn-info"
                                v-if = "status == 'add'"
                            >Add Customer</button>
                            <button
                                type="submit"
                                class="btn btn-info"
                                v-if = "status == 'edit'"
                            >Edit Customer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        const { createApp, ref } = Vue

        createApp({
            setup() {
                const status = ref('add');
                return {
                    status,
                }
            },
            methods: {
                showModal(){
                    $('#adddrop').modal('show');
                },
                closeModal(){
                    $('#adddrop').modal('hide');
                },
                getEdit(){
                    this.status = 'edit';
                    this.showModal();
                },
                deleteCustomer(){
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
                            swalWithBootstrapButtons.fire({
                                title: "Deleted",
                                text: "Your customer has been deleted",
                                icon: "success"
                            });
                        }
                    });
                },
                clearForm(){
                    this.status = 'add';
                    this.closeModal();
                }
            },
        }).mount('#app')
    </script>
@endsection
