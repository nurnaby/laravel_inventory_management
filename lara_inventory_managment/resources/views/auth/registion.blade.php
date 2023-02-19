@extends('auth.auth_master')
@section('register')
    <div class="account-content">
        <div class="login-wrapper">
            <div class="login-content">
                <div class="login-userset">
                    <div class="login-logo">
                        <img src="{{ 'admin/assets/img/logo.png' }}" alt="img">
                    </div>
                    <div class="login-userheading">
                        <h3>Create an Account</h3>
                        <h4>Continue where you left off</h4>
                    </div>
                    <form action="{{ route('registerUser') }}" method="POST">
                        @csrf
                        <div class="form-login">
                            <label>Full Name</label>
                            <div class="form-addons">
                                <input type="text" name="name" placeholder="Enter your full name">
                                <img src="{{ 'admin/assets/img/icons/users1.svg' }}" alt="img">
                            </div>
                        </div>
                        <div class="form-login">
                            <label>Email</label>
                            <div class="form-addons">
                                <input type="text" name="email" placeholder="Enter your email address">
                                <img src="{{ 'admin/assets/img/icons/mail.svg' }}" alt="img">
                            </div>
                        </div>
                        <div class="form-login">
                            <label>Password</label>
                            <div class="pass-group">
                                <input type="password" name="password" class="pass-input" placeholder="Enter your password">
                                <span class="fas toggle-password fa-eye-slash"></span>
                            </div>
                        </div>
                        <div class="form-login">
                            {{-- <a class="btn btn-login" type="submit">Sign Up</a> --}}
                            <button class="btn btn-login" type="submit">Sign Up</button>
                        </div>
                    </form>
                    <div class="signinform text-center">
                        <h4>Already a user? <a href="signin.html" class="hover-a">Sign In</a></h4>
                    </div>
                    <div class="form-setlogin">
                        <h4>Or sign up with</h4>
                    </div>
                    <div class="form-sociallink">
                        <ul>
                            <li>
                                <a href="javascript:void(0);">
                                    <img src="{{ 'admin/assets/img/icons/google.png' }}" class="me-2" alt="google">
                                    Sign Up using Google
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <img src="{{ 'adminassets/img/icons/facebook.png' }}" class="me-2" alt="google">
                                    Sign Up using Facebook
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="login-img">
                <img src="{{ 'admin/assets/img/login.jpg' }}" alt="img">
            </div>
        </div>
    </div>
@endsection
