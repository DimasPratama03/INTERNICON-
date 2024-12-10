@extends('admin.layouts.app')

@section('title', 'User  Detail')

@section('content')
<div class="main-content">
    <div class="content">
        <h2>Detail Profile</h2>
        <!-- Profile Picture Section -->
        <div class="profile-picture-section">
            <img id="profile-picture" src="path/to/default/profile/picture.jpg" alt="" style="width: 150px; height: 150px; border-radius: 50%;">
            <div class="buttons">
                <button onclick="alert('Change picture functionality not implemented')">Change Picture</button>
                <button onclick="alert('Delete picture functionality not implemented')">Delete Picture</button>
            </div>
        </div>

        <div class="form-group">
            <div class="half-width">
                <label for="fullname">Fullname</label>
                <input type="text" id="fullname" value="" >
            </div>
            <div class="half-width">
                <label for="username">Username</label>
                <input type="text" id="username" value="" >
            </div>
        </div>
        <div class="form-group">
            <div class="half-width">
                <label for="jabatan">Jabatan</label>
                <input type="text" id="jabatan" value="" >
            </div>
            <div class="half-width">
                <label for="divisi">Divisi</label>
                <input type="text" id="divisi" value="" >
            </div>
        </div>
        <div class="form-group">
            <div class="half-width">
                <label for="email">Email</label>
                <input type="email" id="email" value="" >
            </div>
            <div class="half-width">
                <label for="phone">Phone</label>
                <input type="text" id="phone" value="" >
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