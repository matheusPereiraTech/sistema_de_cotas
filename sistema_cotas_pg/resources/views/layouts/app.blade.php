
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="background-color: #87CEFA;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}" defer></script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<!-- teste navbar -->
<!--<html>
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Cadastro de Produtos</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
<body>
    <div class=”container”>
        @component('componentes.component_navbar', [ "current" =>$current ?? '' ])
        @endcomponent
        <main role="main">
            @hasSection('body')
                @yield('body')
            @endif
        </main>

    <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>-->

    <!-- teste -->
    <!--<div class="collapse navbar-collapse" id="navbarSupportedContent">-->
                        <!-- Left Side Of Navbar -->
                        <!--<ul class="navbar-nav mr-auto">

                        </ul>-->
                        <!--fim teste -->

</body>


</html>

<!-- fim teste navbar -->

<body>
    <div class="w-100 p-3 h-100 d-inline-block" style="background-color: #87CEFA;">
        <div id="app">
            <nav class="navbar navbar-expand-md">
                <div class="container text-white" style="background-color: #87CEFA;">

                    <!-- teste compnent
                    @component('componentes.component_navbar', [ "current" =>$current ?? '' ])
        @endcomponent
        fim teste compnent -->

                   <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                       <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                            @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>

