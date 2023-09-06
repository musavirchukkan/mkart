@extends('admin.auth.auth')
@section('title', 'Reset Password')
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
                    <h1 class="auth-title">Reset Password</h1>
                    <p class="auth-subtitle mb-5">We will send a link to reset your password</p>

                    <form action="index.html">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Email">
                            <div class="form-control-icon">
                                <i class="bi bi-envelope"></i>
                            </div>
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="New Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>

                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Confirm Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>

                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Send</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class='text-gray-600'>Remember your account? <a href={{ route('admin.login') }}
                                class="font-bold">Log
                                in</a>.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
