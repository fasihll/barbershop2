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
    <div class="wrapper bg-light">

        <nav class="sidebar">
            <div class="text">Admin Polkah</div>
            <div class="profil mb-2 pl-4">
                <div class="img-area float-left overflow-hidden mr-2"><img src="{{ url('images/FADE.png') }}"
                        class="img img-fluid" alt=""></div>
                <div class="img-text text-white">
                    <h6>{{ Auth::user()->name }}</h6>
                    <a href="">Admin</a>
                </div>
            </div>
            <ul>
                <li><a href="/dashboard"><i class="fa fa-home"></i> Dashboard</a></li>
                <li>
                    <a href="#" class="emp-btn"><i class="fa fa-user-cog"></i> Employes
                        <span class="fa fa-caret-down"></span>
                    </a>
                    <ul class="emp-show">
                        <li><a href="/employes">Add Employes</a></li>
                        <li><a href="/shift">Employes Shift</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="wrt-btn"><i class="fa fa-pencil-alt"></i> Write Content
                        <span class="fa fa-caret-down"></span>
                    </a>
                    <ul class="wrt-show">
                        <li><a href="">About</a></li>
                        <li><a href="">Hairstyle</a></li>
                        <li><a href="">Testimoni</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="set-btn"><i class="fa fa-cog"></i> Setting
                        <span class="fa fa-caret-down"></span>
                    </a>
                    <ul class="set-show">
                        <li><a href="">Change Name</a></li>
                        <li><a href="">Change Email</a></li>
                        <li><a href="">Change Password</a></li>
                    </ul>
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

        <div class="content">

            <div class="navbar navbar-expand-lg navbar-light bg-white shadow">
                <a href="#" class="navbar-brand">
                    <span class="fa fa-bars"></span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navmenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ml-auto">
                        <li class="navbar-item">
                            <a href="" class="nav-link">{{ Auth::user()->name }}</a>
                        </li>
                    </ul>
                </div>
            </div>

            @yield('content')

            <footer class="bg-dark text-white p-2 text-left">
                &copy; Copyright 2021 Ach Fasihul Lisan
            </footer>
        </div>
    </div>
    {{-- content --}}



    <script src="{{ asset('bootstrap/js/jquery-3.5.1.slim.min.js') }}">
    </script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}">
    </script>
    <script>
        $('.emp-btn').click(function() {
            $('nav ul .emp-show').toggleClass("show");
        });
        $('.wrt-btn').click(function() {
            $('nav ul .wrt-show').toggleClass("show1");
        });
        $('.set-btn').click(function() {
            $('nav ul .set-show').toggleClass("show2");
        });
        $('nav ul li').click(function() {
            $(this).addClass("active").siblings().removeClass("active")
        });
        $('.navbar-brand').click(function() {
            $('.sidebar').toggleClass("d-none");
            $('.content').toggleClass("resize");
        });

    </script>
</body>

</html>
