@extends('admin.layouts.app')

@section('title', 'Users')

@section('content')
<div class="main-content">
    <div class="content">
        <h2>Users</h2>
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
                    <th>Username</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>johndoe</td>
                    <td>johndoe@example.com</td>
                    <td>1234567890</td>
                    <td>
                        <a href="{{ route('detailusers') }}" class="btn btn-edit">
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
                    <td>janesmith</td>
                    <td>janesmith@example.com</td>
                    <td>0987654321</td>
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
                <tr>
                    <td>3</td>
                    <td>John Doe</td>
                    <td>johndoe</td>
                    <td>johndoe@example.com</td>
                    <td>1234567890</td>
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
                <tr>
                    <td>4</td>
                    <td>Jane Smith</td>
                    <td>janesmith</td>
                    <td>janesmith@example.com</td>
                    <td>0987654321</td>
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
                <tr>
                    <td>5</td>
                    <td>John Doe</td>
                    <td>johndoe</td>
                    <td>johndoe@example.com</td>
                    <td>1234567890</td>
                    <td>
                        <a href="{{ route('detailusers') }}" class="btn btn-edit">
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
                    <td>6</td>
                    <td>Jane Smith</td>
                    <td>janesmith</td>
                    <td>janesmith@example.com</td>
                    <td>0987654321</td>
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