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
                <input type="password" id="password" value="" readonly>
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
                <input type="text" id="start-date" value="" readonly>
            </div>
            <div class="half-width">
                <label for="end-date">End Date</label>
                <input type="text" id="end-date" value="" readonly>
            </div>
        </div>
        <div class="buttons">
            <button onclick="window.history.back()">Back</button>
            <button onclick="alert('Update functionality not implemented')">Update</button>
        </div>
    </div>
</div>
@endsection