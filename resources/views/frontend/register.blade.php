@extends('frontend/template')
@section('title', 'Login | Polkah')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
@endsection
@section('content')

    <div class="row justify-content-center">
        <div class="shadow mt-5">
            <div class="row ">
                <div class="col-md-6 overflow-hidden">
                    <img src="{{ url('images/black.jpg') }}" alt="">
                </div>
                <div class="col-md-5">

                    <form method="POST" action="{{ route('register') }}" class="ml-5" style="margin-top: 10px">
                        <h2>Register</h2>
                        @csrf
                        <label for="name">Name</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label for="password-confirm">Password Confirm</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password">
                        <button type="submit" class="btn btn-primary mt-3">
                            {{ __('Register') }}
                        </button>
                        <a href="{{ route('login') }}" class="btn btn-light mt-3 text-primary">Login</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
