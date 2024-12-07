@extends('admin.layouts.app')

@section('title', 'Recent History')

@section('content')
<link rel="stylesheet" href="{{ asset('css/recent-history.css') }}">

<div class="main-content">
    <div class="content">
        <h2>Recent History</h2>
        <div class="search-container">
            <input type="text" class="search-box" placeholder="Cari...">
            <div class="searchlogo-container">
                <div class="searchlogo-box">
                    <img src="{{ asset('images/search.png') }}" alt="Search Icon" class="searchlogo">
                </div>
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
                    <th>Action</th>
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
                    <td>
                        <a href="{{ route('detailhistory') }}" class="btn btn-edit">
                            <img src="{{ asset('images/edit.png') }}" alt="Edit" class="action-icon">
                        </a>
                        <form action="#" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure you want to delete this user?');">
                                <img src="{{ asset('images/delete.png') }}" alt="Delete" class="action-icon">
                            </button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>Kamis</td>
                    <td>09/12/2024</td>
                    <td>Hadir</td>
                    <td>Testcom</td>
                    <td>
                        <a href="#" class="btn btn-edit">
                            <img src="{{ asset('images/edit.png') }}" alt="Edit" class="action-icon">
                        </a>
                        <form action="#" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure you want to delete this user?');">
                                <img src="{{ asset('images/delete.png') }}" alt="Delete" class="action-icon">
                            </button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection