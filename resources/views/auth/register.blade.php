@extends('layouts.app')

@section('title', 'Register Page InternIcon+')

@section('content')
  <div class="container">
    <div class="left-panel">
      <div class="text-container">
        <h1>
          WELCOME TO
          <br/>
          THE INTERNICON+ APP
        </h1>
        <p>Create Your Account</p>
      </div>
      <div class="image-container">
        <img src="{{ asset('images/logo 2.png') }}" alt="Deskripsi Gambar" class="centered-image"/>
      </div>
    </div>
    <div class="right-panel">
      <div class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="Internicon+" />
      </div>
      <h2>Register</h2>
      <p>Fill in the details to create an account</p>
    <!-- Form Gabungan Step 1 & Step 2 -->
    <form action="{{ route('register.submit') }}" method="POST" id="registrationForm">
      @csrf
      <!-- Display validation errors -->
      @if($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

      <!-- Step 1 (Informasi Dasar) -->
      <div id="step-1" class="form-step">
        <div class="input-group-double">
          <input type="text" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" required>
          <input type="text" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" required>
        </div>
        <div class="input-group">
          <input type="text" name="username" placeholder="Username" value="{{ old('username') }}" required>
        </div>
        <div class="input-group">
          <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
        </div>
        <div class="input-group">
          <input type="text" name="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}" required>
        </div>
        <div class="input-group-double">
          <input type="password" name="password" placeholder="Password" required>
          <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
        </div>

        <!-- Buttons Back to Login & Continue -->
        <div class="button-container">
          <button type="button" class="sign-in-button back-button" id="backButton">Back</button>
          <button type="button" class="sign-in-button continue-button" onclick="nextStep()">Continue</button>
        </div>
      </div>

      <!-- Step 2 (Informasi Magang) -->
      <div id="step-2" class="form-step" style="display: none;">
        <div class="input-group">
          <input type="text" name="agency_name" placeholder="Agency Name" value="{{ old('agency_name') }}" required>
        </div>
        <div class="input-group">
          <input type="text" name="major" placeholder="Major" value="{{ old('major') }}" required>
        </div>
        <div class="input-group-double">
          <input type="date" name="internship_start_date" value="{{ old('internship_start_date') }}" required>
          <input type="date" name="internship_end_date" value="{{ old('internship_end_date') }}" required>
        </div>

        <!-- Buttons Back & Register -->
        <div class="button-container">
          <button type="button" class="sign-in-button continue-button" onclick="prevStep()">Back</button>
          <button type="submit" class="sign-in-button continue-button">Register</button>
        </div>
      </div>
    </form>
  </div>
</div>

<script>
  let currentStep = 1;
  document.getElementById('backButton').addEventListener('click', function() {
            window.location.href = '{{ route('login') }}';
        });
  function nextStep() {
    document.getElementById(`step-${currentStep}`).style.display = "none"; // Hide current step
    currentStep++; // Move to next step
    document.getElementById(`step-${currentStep}`).style.display = "block"; // Show next step
  }

  function prevStep() {
    document.getElementById(`step-${currentStep}`).style.display = "none"; // Hide current step
    currentStep--; // Move to previous step
    document.getElementById(`step-${currentStep}`).style.display = "block"; // Show previous step
  }
</script>
@endsection
