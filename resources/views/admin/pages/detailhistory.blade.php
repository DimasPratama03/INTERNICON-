@extends('admin.layouts.app')

@section('title', 'User  Detail')

@section('content')
<div class="main-content">
    <div class="content">
        <h2>User Detail</h2>
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
        <div class="form-group">
            <div class="half">
                <label for="location">Location</label>
                <input type="text" id="location" value="" readonly>
            </div>
        </div>
        <div class="form-group">
            <div class="half">
                <label for="activity">Activity Plan Statement</label>
                <input type="text" id="activity" value="" readonly>
            </div>
        </div>
        <div class="image-group">
            <div class="image-width">
                <label for="Evidence">Evidence Of Attendance</label>
                <input type="file" id="evidence" value="" readonly>
            </div>
            <div class="image-width">
                <label for="Evidence">Evidence Of Attendance</label>
                <input type="file" id="evidence" value="" readonly>
            </div>
        </div>
        <div class="buttons">
            <button onclick="window.history.back()">Back</button>
        </div>
    </div>
</div>
@endsection