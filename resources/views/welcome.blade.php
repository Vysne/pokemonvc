<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pokemonvc</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">

</head>
    <body>
    <div class="page-brand">
        <img src="{{ asset('assets/logo.png') }}" alt="Pokemon VC Logo">
        <h3 class="display-6">Pokemon VC</h3>
    </div>
    <section id="welcome-container" class="container-fluid">
        <div class="row">
            <!-- LEFT SIDE (LOGIN) -->
            <div class="col-lg-6 left-side">
                <div class="content-wrapper">
                    <div class="link-wrapper">
                        <a href="{{ route('login') }}" class="link">
                            <h2 class="display-5">Login</h2>
                            <img src="{{ asset('assets/svg/charmander.svg') }}" alt="Charmander Image">
                        </a>
                    </div>
                </div>
            </div>

            <!-- RIGHT SIDE (REGISTER) -->
            <div class="col-lg-6 right-side">
                <div class="content-wrapper">
                    <div class="link-wrapper">
                        <a href="{{ route('register') }}" class="link">
                            <h2 class="display-5">Register</h2>
                            <img src="{{ asset('assets/svg/bulbasaur.svg') }}" alt="Bulbasaur Image">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
