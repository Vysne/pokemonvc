@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card-header">
            <h3 style="color: white;">Register</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('custom-register') }}">
                @csrf
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-user"></i>
                        </span>
                    </div>
                    <input id="username" type="text" value="{{ old('username') }}" class="form-control @error('username') is-invalid @enderror" placeholder="Username" name="username" required autofocus>
                    @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div><br>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fa fa-envelope"></i>
                        </span>
                    </div>
                    <input id="email" type="text" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" name="email" required
                           autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div><br>
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-key"></i>
                    </span>
                    </div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div></br>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirm password" name="password_confirmation" required>
                    @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div><br>
                <div class="loginbutton">
                    <input type="submit" value="Register" class="btn float-right login_btn" style="width:100%" >
                </div>
            </form>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-center links">
                <p style="color: white;">Already have an account?<a href="login"> Log in</a></p>

            </div>
            @if (session()->has('success'))
                <div x-data="{ show: true }"
                     x-init="setTimeout(() => show = false, 4000)"
                     x-show="show"
                     class="notification"
                     class="notification"
                     style="text-align: center; color: white"
                >
                    <a>{{ session('success') }}</a>
                </div>
            @endif
        </div>
    </div>
@endsection
