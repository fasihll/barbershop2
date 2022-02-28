<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Polkah | BarberShop</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome5/css/all.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
    @yield('css')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparant">
        <div class="container">
            <a href="/" class="navbar-brand font-weight-bold">Polkah</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menunav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menunav">
                <ul class="navbar-nav ml-auto">
                    <li class="navbar-item">
                        <a href="/#home" class="nav-link">Home</a>
                    </li>
                    <li class="navbar-item">
                        <a href="/#about" class="nav-link">About</a>
                    </li>
                    <li class="navbar-item">
                        <a href="/#hairstyle" class="nav-link">Hairstyle</a>
                    </li>
                    <li class="navbar-item">
                        <a href="/#testimoni" class="nav-link">Testimoni</a>
                    </li>
                    <li class="navbar-item">
                        <a href="/#kontak" class="nav-link">Kontak</a>
                    </li>
                    <li class="navbar-item login">
                        <a href="{{ route('login') }}" class="nav-link">Admin</a>
                    </li>
                    <li class="navbar-item sosmed d-flex">
                        <a href="" class="nav-link sosmed-link text-warning">|</a>
                        <a href="" class="nav-link sosmed-link fab fa-whatsapp mt-1"></a>
                        <a href="" class="nav-link sosmed-link fab fa-facebook mt-1"></a>
                        <a href="" class="nav-link sosmed-link fab fa-instagram mt-1"></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    @yield('content')

    <script src="{{ asset('bootstrap/js/jquery-3.5.1.slim.min.js') }}">
    </script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}">
    </script>
</body>

</html>
