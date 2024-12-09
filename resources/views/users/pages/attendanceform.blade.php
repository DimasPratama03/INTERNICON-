@extends('users.layouts.app')

@section('title', 'User  Detail')

@section('content')
<div class="main-content">
    <div class="content">
        <h2>attendance form</h2>
        <div class="form-group">
            <div class="date-box">
                <label for="start-date">Start Date</label>
                <div class="input-container">
                    <input type="text" id="start-date" value="" readonly>
                    <span class="dates-icon">
                        <i class="fa fa-calendar" onclick="showDatePicker('start-date')"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="half">
                <label for="location">Location</label>
                <div class="input-container">
                    <input type="text" id="location" value="" readonly>
                    <span class="location-icon">
                        <i class="fa fa-map-marker-alt"></i>
                    </span>
                </div>
                <div class="thirdbuttons-container" style="margin-top: 10px;">
                    <a href="#" class="thirdbutton">Present</a>
                    <a href="#" class="thirdbutton">Permission</a>
                    <a href="#" class="thirdbutton">Sick</a>
                </div>
            </div>
        </div>
        <div class="photo-group">
            <div class="photo-width">
                <label for="evidence1">Evidence Of Attendance</label>
                <input type="file" id="evidence 1" value="" readonly>
            </div>
        </div>
        <div class="buttons-container">
            <button class="take-button">Take a Photo</button>
        </div>
    </div>
</div>
@endsection