@extends('layout_login_home.app')

@section('content')
{{-- <div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Login</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control"
                                placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="Enter your password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-1">
            <div class="login-form">
                <!--login form-->
                <h2>Login to your account</h2>
                <form action="{{ route('login') }}" method="post">
                    @csrf

                    <input type="email" id="email" name="email" placeholder="email" :value="old('email')" required
                        autocomplete="username" />
                    <input type="password" id="password" name="password" placeholder="password" required
                        autocomplete="new-password" />
                    <span>
                        <input type="checkbox" class="checkbox">
                        Keep me signed in
                    </span>
                    <button type="submit" class="btn btn-default">Login</button>
                </form>
            </div>
            <!--/login form-->
        </div>
        <div class="col-sm-1">
            <h2 class="or">OR</h2>
        </div>
        <div class="col-sm-4">
            <div class="signup-form">
                <!--sign up form-->
                <h2>New User Signup!</h2>
                <form action="#">
                    <input type="text" placeholder="Name" />
                    <input type="email" placeholder="Email Address" />
                    <input type="password" placeholder="Password" />
                    <button type="submit" class="btn btn-default">Signup</button>
                </form>
            </div>
            <!--/sign up form-->
        </div>
    </div>
</div>
@endsection
