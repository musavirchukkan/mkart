@extends('admin.auth.auth')
@section('title', 'Login')
@section('content')

    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-left">
                </div>
            </div>
            <div class="col-lg-5 col-12">
                <div id="auth-right">
                    <div class="auth-logo">
                        <a href={{ route('homepage') }}><img src={{ asset('img/Admin/images/logo.png') }} alt="Logo">
                            Mkart</a>
                    </div>
                    <h1 class="auth-title">Log in.</h1>
                    @if (session()->has('message'))
                        <h6 class="text-danger"> {{ session()->get('message') }} </h6>
                        <p class="auth-subtitle mb-5">Log in with your data that you entered during registration.</p>
                    @endif

                    <form action={{ route('admin.do.login') }} method="post">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Username"
                                name="username">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Password"
                                name="password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" name="remember_me" value="1"
                                id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                Keep me logged in
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">

                        <p><a class="font-bold" href={{ route('admin.forgot.password') }}>Forgot password?</a>.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
