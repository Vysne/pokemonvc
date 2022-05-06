@extends('expansions')

@section('navbar')
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="dashboard" style="text-decoration: none; color: white; font-family: Do Hyeon,sans-serif; font-size: 1.5rem;">
                <img src="assets/logo.png" alt="Pokemonvc logo" width="90" height="80">
                Pokemon VC
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="color: orange; border: 1px solid orange;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('expansions') }}" style="color: white;" >Expansions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: white;">Cards opening</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: white;">Trading</a>
                    </li>
                </ul>
                <div class="navbar-nav ms-auto">
                    <a class="nav-item nav-link" style="color: white;"><i class="fas fa-user"></i> {{ auth()->user()->username }}</a>
                    <a href="signout" class="nav-item nav-link" style="color: white;"><i class="fas fa-sign-in-alt"></i> Log out</a>
                </div>
            </div>
        </div>
    </nav>
@endsection

@section('content')
    <div class="expansions-wrapper">
        @foreach($data as $expansion)
            <a href="{{ route('selected_expansion', $expansion['id']) }}">
                <div class="expansions-card">
                    <h3 class="card-title">{{$expansion['name']}}</h3>
                    <img src="{{$expansion['images']['logo']}}" alt="{{$expansion['name']}}" width="200px" height="120px">
                </div>
            </a>
        @endforeach
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
