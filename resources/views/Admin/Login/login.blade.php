@extends('Admin.auth')
@section('form')
    {{-- Form Login --}}
    <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
            <div class="col-md-8 col-lg-6 col-xxl-3">
                <div class="card mb-0">
                    <div class="card-body">
                        <h1 class="text-center">Login</h1>
                        <form action="/do-login" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username">
                            </div>
                            <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="form-check">
                                    <input class="form-check-input primary" type="checkbox" value=""
                                        id="flexCheckChecked" checked>
                                    <label class="form-check-label text-dark" for="flexCheckChecked">
                                        Remeber this Device
                                    </label>
                                </div>
                                {{-- <a class="text-primary fw-bold" href="javascrip:void(0)">Forgot Password ?</a> --}}
                            </div>
                            <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Login</button>
                            <div class="d-flex align-items-center justify-content-center">
                                <p class="fs-3 mb-0 fw-bold">Don't have account?</p>
                                <a class="text-primary fw-bold ms-2" href="{{ route('singup') }}">Create an
                                    account</a>
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
