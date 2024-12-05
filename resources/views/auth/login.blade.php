@extends('layouts.app')

@section('title', 'Login Page InternIcon+')

@section('content')
<div class="container">
    <div class="left-panel">
        <div class="text-container">
            <h1>
                WELCOME TO
                <br/>
                THE INTERNICON+ APP
            </h1>
            <p>
                Sign In To Access Your Account
            </p>
        </div>
        <div class="image-container">
            <img src="{{ asset('images/logo 2.png') }}" alt="logo" class="centered-image"/>
        </div>
    </div>
    <div class="right-panel">
        <div class="logo">
            <img src="" alt="Internicon+" />
        </div>
        <h2>Sign In</h2>
        <p>Enter your username and password to continue</p>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-group">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
                <span class="toggle-password"></span>
            </div>
            <a href="{{ route('forgot.password') }}" class="forgot-password">Forgot password?</a>
            <button type="submit" class="sign-in-button">Sign In</button>
        </form>
        <div class="register-link">
            <p>Don't have an account? <a href="{{ route('register') }}" class="register-button">Register here</a></p>
        </div>
    </div>
</div>
@endsection