@extends('admin.layouts.app')

@section('title', 'User  Detail')

@section('content')
<div class="main-content">
    <div class="content">
        <h2>User Detail</h2>
        <div class="form-group">
            <div class="half-width">
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" value="" readonly>
            </div>
            <div class="half-width">
                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" value="" readonly>
            </div>
        </div>
        <div class="form-group">
            <div class="half-width">
                <label for="username">Username</label>
                <input type="text" id="username" value="" readonly>
            </div>
            <div class="half-width">
                <label for="password">Password</label>
                <div class="password-container">
                    <input type="password" id="password" value="" readonly>
                    <span class="toggle-password" onclick="togglePasswordVisibility()">
                        <i class="fa fa-eye" id="eye-icon"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="half-width">
                <label for="email">Email</label>
                <input type="email" id="email" value="" readonly>
            </div>
            <div class="half-width">
                <label for="phone">Phone</label>
                <input type="text" id="phone" value="" readonly>
            </div>
        </div>
        <div class="form-group">
            <div class="half-width">
                <label for="department">Department</label>
                <input type="text" id="department" value="" readonly>
            </div>
            <div class="half-width">
                <label for="instansi">Instansi</label>
                <input type="text" id="instansi" value="" readonly>
            </div>
        </div>
        <div class="form-group">
            <div class="half-width">
                <label for="start-date">Start Date</label>
                <div class="date-container">
                    <input type="text" id="start-date" value="" readonly>
                    <span class="date-icon">
                        <i class="fa fa-calendar" onclick="showDatePicker('start-date')"></i>
                    </span>
                </div>
            </div>
            <div class="half-width">
                <label for="end-date">End Date</label>
                <div class="date-container">
                    <input type="text" id="end-date" value="" readonly>
                    <span class="date-icon">
                        <i class="fa fa-calendar" onclick="showDatePicker('end-date')"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="buttons">
            <button onclick="window.history.back()">Back</button>
            <button onclick="alert('Update functionality not implemented')">Update</button>
        </div>
    </div>
</div>

@section('scripts')
<script>
    function togglePasswordVisibility() {
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eye-icon');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.classList.remove('fa-eye');
            eyeIcon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
        }
    }

    function showDatePicker(id) {
        alert('Date picker for ' + id + ' not implemented');
    }
</script>
@endsection

@endsection