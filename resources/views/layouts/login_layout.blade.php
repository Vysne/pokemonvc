@extends('login')

@section('navbar')
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/" style="text-decoration: none; color: white; font-family: Do Hyeon,sans-serif; font-size: 1.5rem;">
                <img src="assets/logo.png" alt="Pokemonvc logo" width="90" height="80">
                Pokemon VC
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color: orange; border: 1px solid orange;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: white;">Expansions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: white;">Cards opening</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: white;">Trading</a>
                    </li>
                </ul>
                <div class="navbar-nav ms-auto">
                    <a href="login" class="nav-item nav-link" style="color: white;"><i class="fas fa-sign-in-alt"></i> Log in</a>
                    <a href="/" class="nav-item nav-link" style="color: white;"><i class="fas fa-user-check"></i> Create account</a>
                </div>
            </div>
        </div>
    </nav>
@endsection

@section('login')
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

@section('footer')
    <div class="container">
        <footer class="py-3 my-1">
            <p id="home-banner-footer-text">
                The information presented on this website about the Pokémon Trading Card Game, including images and text, is copyright of The Pokémon Company, Nintendo, Game Freak, Creatures and/or Wizards of the Coast. This website is not produced by, endorsed by, supported by, or affiliated with any of these companies.
            </p>
        </footer>
    </div>
@endsection
