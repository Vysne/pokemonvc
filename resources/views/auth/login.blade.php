@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card-header">
            <h3 style="color: white;">Log in</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('custom-login') }}">
                @csrf
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-user"></i>
                    </span>
                    </div>
                    <input id="username" type="text" value="{{ old('username') }}" class="form-control @error('username') is-invalid @enderror" placeholder="Username" name="username" required
                           autofocus>
                    @error('username')
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
                <div class="loginbutton">
                    <input type="submit" value="Log in" class="btn float-right login_btn" style="width:100%" >
                </div>
            </form>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-center links">
                <p style="color: white;">Don't have an account?<a href="/"> Register</a></p>

            </div>
            @if (session()->has('success'))
                <div x-data="{ show: true }"
                     x-init="setTimeout(() => show = false, 4000)"
                     x-show="show"
                     class="notification"
                     style="text-align: center; color: white"
                >
                    <a>{{ session('success') }}</a>
                </div>
            @endif
        </div>
    </div>
@endsection
