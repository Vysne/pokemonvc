<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="" style="text-decoration: none; color: white; font-family: Do Hyeon,sans-serif; font-size: 1.5rem;">
            <img src="{{asset('assets/logo.png')}}" alt="Pokemonvc logo" width="90" height="80">
            Pokemon VC
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color: orange; border: 1px solid orange;">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;" >Expansions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;">Cards opening</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;">Trading</a>
                </li>
                @if(Auth::check())
                    <li>
                        <a href="#" class="nav-link" style="color: white;">Profile</a>
                    </li>
                @endif
            </ul>
            @if(Auth::check())
                <div class="navbar-nav ms-auto">
                    <a class="nav-item nav-link" style="color: white;"><i class="fas fa-user"></i> {{ auth()->user()->username }}</a>
                    <a href="signout" class="nav-item nav-link" style="color: white;"><i class="fas fa-sign-in-alt"></i> Log out</a>
                </div>
            @else
                <div class="navbar-nav ms-auto">
                    <a href="{{ route('login') }}" class="nav-item nav-link" style="color: white;"><i class="fas fa-sign-in-alt"></i> Log in</a>
                    <a href="{{ route('register') }}" class="nav-item nav-link" style="color: white;"><i class="fas fa-user-check"></i> Create account</a>
                </div>
            @endif
        </div>
    </div>
</nav>
