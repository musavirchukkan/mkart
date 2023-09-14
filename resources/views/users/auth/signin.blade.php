@extends('users.auth.login')
@section('content')
    <div class="row justify-content-center wrapper" id="login-box">
        <div class="col-lg-10 my-auto myShadow">
            <div class="row">
                <div class="col-lg-7 bg-white p-4">
                    <h1 class="text-center font-weight-bold text-secondary">Sign in to Account</h1>
                    <hr class="my-3" />
                    <form action="{{ route('do.login') }}" method="post" class="px-3" id="login-form">
                        @csrf
                        <div class="input-group input-group-lg form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text rounded-0"><i class="far fa-envelope fa-lg fa-fw"></i></span>
                            </div>
                            <input type="email" id="email" name="email" class="form-control rounded-0"
                                placeholder="E-Mail" required />
                        </div>
                        <div class="input-group input-group-lg form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text rounded-0"><i class="fas fa-key fa-lg fa-fw"></i></span>
                            </div>
                            <input type="password" id="password" name="password" class="form-control rounded-0"
                                minlength="5" placeholder="Password" required autocomplete="off" />
                        </div>
                        <div class="form-group clearfix">
                            <div class="custom-control custom-checkbox float-left">
                                <input type="checkbox" class="custom-control-input" id="customCheck" name="remember_me"
                                    value="1" />
                                <label class="custom-control-label" for="customCheck">Remember me</label>
                            </div>
                            <div class="forgot float-right">
                                <a href="{{ route('forgot.password') }}" id="forgot-link">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" id="login-btn" value="Sign In"
                                class="btn btn-primary btn-lg btn-block myBtn" />
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 d-flex flex-column justify-content-center myColor p-4">
                    <h1 class="text-center font-weight-bold text-white">Hello Friends!</h1>
                    <hr class="my-3 bg-light myHr" />
                    <p class="text-center font-weight-bolder text-light lead">Enter your personal details and start
                        your journey with us!</p>
                    <a href="{{ route('signup') }}"><button
                            class="btn btn-outline-light btn-lg align-self-center font-weight-bolder mt-4 myLinkBtn"
                            id="register-link">Sign Up</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection
