@extends('welcome')

@section('navbar')
    <div class="container">
        <div id="navbar-content">
            <a href="/" class="navbar-logo">
                <img src="assets/logo.png" alt="Pokemonvc logo" width="90" height="80">
                Pokemon VC
            </a>
            <ul class="navbar-menu">
                <li class="navbar-menu-item">
                    <a href="expansions" class="navbar-menu-link">Expansions</a>
                </li>
            </ul>
        </div>
    </div>
@endsection

@section('headline-logo')
    <div id="home-banner-headline-logo">
        <img src="assets/title.png" alt="Pokemon virtual collection" width="900" height="380">
    </div>
@endsection

@section('register')
{{--    <div class="card-header">--}}
{{--        <h3>Track your collection progress and catch them all</h3>--}}
{{--        <h4>Please create an account to start Pokémon collecting adventure.</h4>--}}
{{--    </div><br>--}}
    <div class="register-body">
        <form method="POST" action="{{ url('custom-register') }}">
            @csrf
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input id="firstname" name="firstname" value="{{ old('firstname') }}" class="form-control @error('firstname') is-invalid @enderror" placeholder="First name" type="text">
                @error('firstname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <input id="lastname" name="lastname" value="{{ old('lastname') }}" class="form-control @error('lastname') is-invalid @enderror" placeholder="Last name" type="text">
                @error('lastname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div><br>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                </div>
                <input id="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" type="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div><br>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                </div>
                <input id="mobile" name="mobile" value="{{ old('mobile') }}" class="form-control @error('mobile') is-invalid @enderror" placeholder="Phone number" type="text">
                @error('mobile')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div><br>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                </div>
                <select id="status_id" name="status_id" class="form-control" id="selectUserType">
                    <option value="1">Singer</option>
                    <option value="2">Band</option>
                    <option value="3">Sponsor</option>
                    <option value="4">Admin</option>
                </select>
            </div><br>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fas fa-address-card"></i> </span>
                </div>
                <select id="subscription_id" name="subscription_id" class="form-control" id="selectUserSubscription">
                    <option value="1">Bronze</option>
                    <option value="2">Silver</option>
                    <option value="3">Gold</option>
                    <option value="4">Platinum</option>
                </select>
            </div><br>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Create password" type="password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div><br>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                </div>
                <input id="password_confirmation" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirm password" type="password">
                @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div><br>
                <div class="loginbutton">
                    <input type="submit" value="Register" class="btn float-right login_btn" style="width:100%">
                </div>
        </form><br>
    </div>
@endsection

@section('footer')
    <div class="container">
        <div id="footer-content">
            <p id="home-banner-footer-text">
                The information presented on this website about the Pokémon Trading Card Game, including images and text, is copyright of The Pokémon Company, Nintendo, Game Freak, Creatures and/or Wizards of the Coast. This website is not produced by, endorsed by, supported by, or affiliated with any of these companies.
            </p>
        </div>
    </div>
@endsection


