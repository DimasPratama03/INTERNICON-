@extends('admin.layouts.app')

@section('title', 'Recent History')

@section('content')
<link rel="stylesheet" href="{{ asset('css/recent-history.css') }}">

<div class="main-content">
    <div class="content">
        <h2>Presence Report</h2>
        <div class="search-container">
            <input type="text" class="search-box" placeholder="Cari...">
            <div class="searchlogo-container">
                <div class="searchlogo-box">
                    <img src="{{ asset('images/search.png') }}" alt="Search Icon" class="searchlogo">
                </div>
            </div>
            <div class="dropdown-container">
                <select class="name-dropdown">
                    <option>Choose name</option>
                    <option>John Doe</option>
                    <option>Jane Smith</option>
                </select>
                <select class="status-dropdown">
                    <option>All</option>
                    <option>Present</option>
                    <option>Absent</option>
                </select>
            </div>
        </div>

        <table class="data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Day</th>
                    <th>Date</th>
                    <th>Attendance</th>
                    <th>Activity</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>Kamis</td>
                    <td>09/12/2024</td>
                    <td>Hadir</td>
                    <td>Testcom</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>Kamis</td>
                    <td>09/12/2024</td>
                    <td>Hadir</td>
                    <td>Testcom</td>
                </tr>
            </tbody>
        </table>
        <div class="export-container">
            <button class="export-button">Export</button>
        </div>
    </div>
</div>
@endsection