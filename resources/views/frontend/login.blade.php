@extends('frontend/template')
@section('title', 'Login | Polkah')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
@endsection
@section('content')

    <div class="row justify-content-center">
        <div class="shadow mt-5">
            <div class="row">
                <div class="col-md-6 overflow-hidden">
                    <img src="{{ url('images/black.jpg') }}" alt="">
                </div>
                <div class="col-md-5">
                    <form method="POST" action="{{ route('login') }}" class="ml-5" style="margin-top: 60px">
                        <h3>Login</h3>
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="password">Password</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <button type="submit" class="btn btn-primary mt-3">
                                {{ __('Login') }}
                            </button>
                            <a href="{{ route('register') }}" class="btn btn-light mt-3 text-primary">Registrasi</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
