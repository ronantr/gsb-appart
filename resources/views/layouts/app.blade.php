<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-right">
            <div class="container">
                @guest()
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'KLOC') }}
                    </a>
                @endguest
                @auth
                    @if(Auth::user()->role == 'admin')
                        <a class="navbar-brand" href="{{ url('/home') }}">
                            {{ config('app.name', 'KLOC') }}
                        </a>
                    @endif
                    @if(Auth::user()->role == 'Proprietaire')
                        <a class="navbar-brand" href="{{ url('/home') }}">
                            {{ config('app.name', 'KLOC') }}
                        </a>
                    @endif
                @if(Auth::user()->role == 'Locataire')
                <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ config('app.name', 'KLOC') }}
                </a>
                @endif
                    @endauth
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="container">


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item " href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @auth
                            @if(Auth::user()->role == 'admin')
                                <li class="nav-item">
                                    <a class="nav-link" href="rechercheadmin">{{ __(' Tous les Appartements') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="utilisateurs">{{ __('Nos Utilisateurs') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="locataires">{{ __('Les Locations en cours') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="MonCompte">{{ __('Mon Compte') }}</a>
                                </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="visters">{{ __('Les visites') }}</a>
                                    </li>
                                @endif
                            @if(Auth::user()->role == 'Proprietaire')
                                <li class="nav-item">
                                    <a class="nav-link" href="appartements">{{ __('Mes appartements') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="locataires ">{{ __('Mes Locataires') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="">{{ __('Mes revenus') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="MonCompte">{{ __('Mon compte') }}</a>
                                </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="visters">{{ __('Mes visites') }}</a>
                                    </li>
                            @endif
                            @if(Auth::user()->role == 'Locataire')
                                <li class="nav-item">
                                    <a class="nav-link" href="">{{ __('Recherche Appartements') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="visters">{{ __('Mes Visites de prévues !') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="MonCompte">{{ __('Mon compte') }}</a>
                                </li>
                            @endif
                        @endauth
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
        <div class="container text-md">
            <small>Copyright &copy; Your Website</small>
        </div>
    </footer>
</body>
</html>
