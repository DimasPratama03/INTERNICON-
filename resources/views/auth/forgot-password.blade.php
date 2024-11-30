@extends('layouts.app')

@section('title', 'Forgot Password InternIcon+')

@section('content')
  <div class="container">
    <div class="left-panel">
      <div class="text-container">
        <h1>
          WELCOME TO
          <br/>
          THE INTERNICON+ APP
        </h1>
        <p>Reset Your Password</p>
      </div>
      <div class="image-container">
        <img src="{{ asset('images/logo 2.png') }}" alt="Deskripsi Gambar" class="centered-image"/>
      </div>
    </div>
    <div class="right-panel">
      <div class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="Internicon+" />
      </div>
      <h2>Forgot Password</h2>
      <p>Please enter your username and new password</p>
      <form method="POST" action="">
        @csrf
        <div class="input-group">
          <input type="text" name="username" placeholder="Username" required>
        </div>
        <div class="input-group">
          <input type="password" name="new_password" placeholder="New Password" required>
          <span class="toggle-password"></span>
        </div>
        <div class="input-group">
          <input type="password" name="confirm_password" placeholder="Confirm Password" required>
          <span class="toggle-password"></span>
        </div>
        <button type="submit" class="sign-in-button">Reset Password</button>
      </form>
      <div class="register-link">
        <p>Remembered your password? <a href="{{ route('login') }}" class="register-button">Login here</a></p>
      </div>
    </div>
  </div>
@endsection