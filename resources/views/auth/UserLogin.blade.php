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
                <div class="col-lg-4 d-none d-lg-block bg-login"></div>
                <div class="col-lg-8">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Login E-Voting</h1>
                        </div>
                        <form class="user" method="post" action="/login">
                            @csrf
                            <div class="form-group">
                                <input type="number"
                                    class="form-control form-control-user  @error('nisn')
                            is-invalid
                        @enderror"
                                    id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan NISN kamu..."
                                    name="email" required>
                                @error('nisn')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block mt-5">
                                Login
                            </button>
                            <hr>
                        </form>
                        <div class="text-xs">
                            *Jika NISN tidak terdaftar, silahkan hubungi admin TU untuk detail lebih lanjut
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
