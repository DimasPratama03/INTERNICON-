@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="main-content">
    <div class="dashboard">
        <h2>Dashboard</h2>
        <div class="cards">
            <div class="card">
                <h3>25</h3>
                <p>Total Participants</p>
                <p>this month</p>
            </div>
            <div class="card">
                <h3>25</h3>
                <p>Total Attendance</p>
                <p>from today</p>
            </div>
            <div class="card">
                <h3>25</h3>
                <p>Total Permission/Sickness</p>
                <p>from today</p>
            </div>
            <div class="card">
                <h3>25</h3>
                <p>Total Progress On Site</p>
                <p>from today</p>
            </div>
        </div>
    </div>
</div>
@endsection