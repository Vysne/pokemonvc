<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pokemonvc</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Do Hyeon" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">

    </head>
    <body>
        <nav id="navbar">
            @yield('navbar')
        </nav>
        <header id="home-banner">
            <div class="container">
                <div id="home-banner-content">
                    <div id="home-banner-inner-content">
                        @yield('headline-logo')
                        @yield('register')
                    <img id="home-banner-artwork" src="assets/homepage.png">
                    </div>

                </div>
            </div>

        </header>

        <footer id="home-banner-footer">
            @yield('footer')
        </footer>
        </body>
    </body>
</html>
