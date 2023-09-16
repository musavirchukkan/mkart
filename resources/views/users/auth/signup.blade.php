@extends('users.auth.login')
@section('content')
    <div class="row justify-content-center wrapper" id="register-box">
        <div class="col-lg-10 my-auto myShadow">
            <div class="row">
                <div class="col-lg-5 d-flex flex-column justify-content-center myColor p-4">
                    <h1 class="text-center font-weight-bold text-white">Welcome Back!</h1>
                    <hr class="my-4 bg-light myHr" />
                    <p class="text-center font-weight-bolder text-light lead">To keep connected with us please login
                        with your personal info.</p>
                    <button class="btn btn-outline-light btn-lg font-weight-bolder mt-4 align-self-center myLinkBtn"
                        id="login-link">Sign In</button>
                </div>
                <div class="col-lg-7 bg-white p-4">
                    <h1 class="text-center font-weight-bold text-secondary">Create Account</h1>
                    <hr class="my-3" />
                    <form action="{{ route('do.signup') }}" method="POST" class="px-3" id="register-form">
                        @csrf
                        <div class="input-group input-group-lg form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text rounded-0"><i class="far fa-user fa-lg fa-fw"></i></span>
                            </div>
                            <input type="text" id="fname" name="fname" class="form-control rounded-0"
                                placeholder="First Name" required />
                        </div>
                        <div class="input-group input-group-lg form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text rounded-0"><i class="far fa-user fa-lg fa-fw"></i></span>
                            </div>
                            <input type="text" id="lname" name="lname" class="form-control rounded-0"
                                placeholder="Last Name" required />
                        </div>
                        <div class="input-group input-group-lg form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text rounded-0"><i class="far fa-envelope fa-lg fa-fw"></i></span>
                            </div>
                            <input type="email" id="remail" name="email" class="form-control rounded-0"
                                placeholder="E-Mail" required />
                        </div>
                        <div class="input-group input-group-lg form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text rounded-0"><i
                                        class="far fa-solid fa-phone fa-lg fa-fw"></i></span>
                            </div>
                            <input type="number" id="rphone" name="phone" class="form-control rounded-0"
                                placeholder="Phone" required />
                        </div>
                        <div class="input-group input-group-lg form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text rounded-0"><i class="fas fa-key fa-lg fa-fw"></i></span>
                            </div>
                            <input type="password" id="rpassword" name="password" class="form-control rounded-0"
                                minlength="5" placeholder="Password" required />
                        </div>
                        <div class="input-group input-group-lg form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text rounded-0"><i class="fas fa-key fa-lg fa-fw"></i></span>
                            </div>
                            <input type="password" id="cpassword" name="cpassword" class="form-control rounded-0"
                                minlength="5" placeholder="Confirm Password" required />
                        </div>
                        <div class="form-group">
                            <div id="passError" class="text-danger font-weight-bolder"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" id="register-btn" class="btn btn-primary btn-lg btn-block myBtn">Sign
                                Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
