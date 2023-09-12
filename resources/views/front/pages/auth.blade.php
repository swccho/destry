@extends('front.app')
@section('content')
    <div class="page auth">
        {{-- breadcrumb section start--}}
        <section class="bread-crumb">
            <div class="title">Login | Register</div>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <span>/</span>
                </li>
                <li>
                    <span>Login | Register</span>
                </li>
            </ul>
        </section>
        {{-- breadcrumb section end--}}
        <section class="auth-content">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="login">
                            <form action="">
                                <div class="title">Login</div>
                                <div class="desc">Please login using account detail bellow.</div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email or Username">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter your Password">
                                </div>
                                <div class="remember-forget">
                                    <div class="form-group">
                                        <input type="checkbox" class="d-none" id="rememberMe">
                                        <label for="rememberMe">Remember Me</label>
                                    </div>
                                    <a href="javascript:void(0)" class="forget">Forget Password?</a>
                                </div>
                                <button class="btn btn-theme">Login</button>
                                <div>
                                    <a href="javascript:void(0)" class="create">Create Account</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-6">

                        <div class="register">
                            <form action="">
                                <div class="title">Create Account</div>
                                <div class="desc">Please Register using account detail bellow.</div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email or Username">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter your Password">
                                </div>
                                <div class="newsletter">
                                    <div class="form-group">
                                        <input type="checkbox" class="d-none" id="newsletter">
                                        <label for="newsletter">Subscribe Our Newsletter</label>
                                    </div>
                                </div>
                                <button class="btn btn-theme">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
