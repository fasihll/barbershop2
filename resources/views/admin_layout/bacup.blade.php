<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome5/css/all.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    @yield('css')
</head>

<body>



    {{-- sidebar --}}
    <div class="wrapper">

        <nav class="sidebar bg-dark">
            <div class="sidebar-header">
                <h3 class="text-white">Polkah BarberShop</h3>
            </div>
            <div class="profil">
                <div class="img">
                    <img src="{{ url('images/FADE.png') }}" class="img-fluid" alt="">
                </div>
                <div class="img-text text-white text-capitalize">
                    <a>{{ Auth::user()->name }}</a>
                    <a href="" class="text-success">Admin</a>
                </div>
            </div>
            <ul class="list-unstyled">
                <li class="">
                    <a href="/dashboard"><i class="fa fa-home"></i> Dashboard</a>
                </li>
                <li class="">
                    <a href="#dashboard"><i class="fa fa-pencil-alt"></i> Write</a>
                </li>
                <li class="">
                    <a href="#dashboard"><i class="fa fa-user-cog"></i> Employes</a>
                </li>
                <li class="">
                    <a href="#dashboard"><i class="fa fa-cog"></i> Settting</a>
                </li>
                <li class="">
                    <a class="text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out-alt"></i>
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>

        {{-- content --}}

        <div class="content">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">

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
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                                                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            @yield('content')
        </div>

        {{-- content --}}



    </div>
    {{-- sidebar --}}
    {{-- footer --}}
    <footer class="bg-dark text-white p-2 text-right">
        &copy; Copyright 2021 Ach Fasihul Lisan
    </footer>
    {{-- footer --}}

    <script src="{{ asset('bootstrap/js/jquery-3.5.1.slim.min.js') }}">
    </script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}">
    </script>
</body>

</html>
