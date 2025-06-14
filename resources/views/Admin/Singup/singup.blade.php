@extends('Admin.auth')
@section('form')
    {{-- Form Singup --}}
    <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
            <div class="col-md-8 col-lg-6 col-xxl-3">
                <div class="card mb-0">
                    <div class="card-body">
                        <h1 class="text-center">Sing Up</h1>
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputtext1" class="form-label">Name</label>
                                <input type="text" class="form-control" id="exampleInputtext1"
                                    aria-describedby="textHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-4">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <a href="{{ route('login') }}" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign Up</a>
                            <div class="d-flex align-items-center justify-content-center">
                                <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
                                <a class="text-primary fw-bold ms-2" href="{{ route('login') }}">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script></script>
@endsection
