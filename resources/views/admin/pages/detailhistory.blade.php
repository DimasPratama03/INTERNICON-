@extends('admin.layouts.app')

@section('title', 'User  Detail')

@section('content')
<div class="main-content">
    <div class="content">
        <h2>User Detail</h2>
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
        <div class="form-group">
            <div class="half">
                <label for="location">Location</label>
                <div class="input-container">
                    <input type="text" id="location" value="" readonly>
                    <span class="location-icon">
                        <i class="fa fa-map-marker-alt"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="half">
                <label for="activity">Activity Plan Statement</label>
                <div class="input-container">
                    <input type="text" id="activity" value="" readonly>
                    <span class="activity-icon">
                        <i class="fa fa-clipboard-list"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="image-group">
            <div class="image-width">
                <label for="evidence1">Evidence Of Attendance</label>
                <input type="file" id="evidence 1" value="" readonly>
            </div>
            <div class="image-width">
                <label for="evidence2">Evidence Of Attendance</label>
                <input type="file" id="evidence2" value="" readonly>
            </div>
        </div>
        <div class="buttons">
            <button onclick="window.history.back()">Back</button>
        </div>
    </div>
</div>
@endsection