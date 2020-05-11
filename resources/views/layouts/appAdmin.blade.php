<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MBT') }}</title>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="/js/app.js" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a href="#!" class="brand-logo" id="logo-style">MBT</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger center-color hide-on-med-and-up"><i class="material-icons">menu</i></a>
                <ul class="sidenav hide-on-med-and-up" id="mobile-demo">

                        <li>
                            <div>
                                <a class="center-color" href="/logout"
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="/logout" method="POST" >
                                    @csrf
                                </form>
                            </div>
                        </li>
                        <li>
                            <a href="/main">Main</a>
                            <a href="/event">Create Event</a>
                            <a href="/announcement">Create Announcement</a>
                        </li>

                  </ul>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Admin<span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/logout"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <a class="dropdown-item" href="/main">Main</a>
                                <a class="dropdown-item" href="/event">Create Event</a>
                                <a class="dropdown-item" href="/announcement">Create Announcement</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
        {{-- <main class="py-4">

        </main> --}}
    </div>
</body>
</html>
