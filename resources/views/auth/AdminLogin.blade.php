@extends('master.login')

@section('container')
    <div class="card o-hidden border-0 shadow-lg mt-5">
        <div class="card-body p-0">
            @if (session()->has('loginError'))
                <div id="errorAlert" class="alert alert-danger position-absolute z-3 w-100 text-center" role="alert">
                    {{ session('loginError') }}
                </div>
            @endif
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Admin Login</h1>
                        </div>
                        <form class="user" method="post" action="/admin">
                            @csrf
                            <div class="form-group">
                                <input type="email"
                                    class="form-control form-control-user  @error('email')
                            is-invalid
                        @enderror"
                                    id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..."
                                    name="email" required>
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user" id="exampleInputPassword"
                                    placeholder="Password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block mt-5">
                                Login
                            </button>
                            <hr>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
