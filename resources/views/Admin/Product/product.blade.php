@extends('Admin.index')
@section('contant')
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="d-md-flex align-items-center justify-content-between">
                    <div>
                      <h4 class="card-title">Products</h4>
                    </div>
                    <div class="btn">
                        <button class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#adddrop">Add New Product</button>
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
                        @foreach ($product as $item)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $item->productName }}</td>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->category }}</td>
                                <td>{{ $item->price }}</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-success" style="margin-right: 10px" data-bs-toggle="modal" data-bs-target="#adddrop">Edit</a>
                                    <a href="" class="btn btn-sm btn-danger">Delete</a>
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
        </div>

        <!-- Add Customer Modal -->
        <div class="modal fade" id="adddrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                    <input type="text" class="form-control" id="productname" name="productname" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="description" class="form-label">Description </label>
                                    <input type="text" class="form-control" id="description" name="description" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="category" class="form-label">Category </label>
                                    <input type="text" class="form-control" id="category" name="category">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="price" class="form-label">Price </label>
                                    <input type="number" class="form-control" id="price" name="price">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-info">Add Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
