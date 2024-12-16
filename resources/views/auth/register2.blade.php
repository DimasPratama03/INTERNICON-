{{-- @extends('layouts.app')

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
      <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="input-group">
          <input type="input" name="agency" placeholder="Agency Name" required>
        </div>
        <div class="input-group">
          <input type="input" name="department" placeholder="Department" required>
        </div>
        <div class="input-group-double">
            <input type="date" name="start_date" required placeholder="Start Date">
            <input type="date" name="end_date" required placeholder="End Date">
        </div>
        <div class="button-container">
          <button type="button" class="sign-in-button back-button" id="backButton">Back</button>
          <button type="submit" class="sign-in-button continue-button">Register</button>
        </div> 
      </form>
      <script>
        document.getElementById('backButton').addEventListener('click', function() {
            window.location.href = '{{ route('register') }}';
        });
      </script>
    </div>
  </div>
@endsection --}}