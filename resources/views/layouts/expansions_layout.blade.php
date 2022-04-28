@extends('expansions')

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

@section('content')
    <div id="page-content">
        <div class="container">
            <div id="expansions-series-containers">
                <div class="expansions-container">
                    <a href="#" title="Brilliant Stars">
                        <h3>Brilliant Stars</h3>
                    </a>
                </div>

            </div>
        </div>
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
