@extends('users.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="main-content">
    <div class="content">
        <h2>Dashboard</h2>
        <div class="cards">
            <div class="card">
                <h3>25</h3>
                <p>Total Attendance</p>
                <p>this month</p>
            </div>
            <div class="card">
                <h3>25</h3>
                <p>Total Sickness</p>
                <p>this month</p>
            </div>
            <div class="card">
                <h3>25</h3>
                <p>Total Permission</p>
                <p>this month</p>
            </div>
            <div class="card">
                <h3>25</h3>
                <p>Total Progress On Site</p>
                <p>this month</p>
            </div>
        </div>
        <h4>Statistics</h4>
        <div class="chart-container">
            <canvas id="attendanceChart"></canvas>
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
                    <td>johndoe</td>
                    <td>johndoe@example.com</td>
                    <td>1234567890</td>
                    <td>Teskom</td>
                    <td>
                        <a href="{{ route('detailusers') }}" class="btn btn-edit">
                            <img src="{{ asset('images/edit.png') }}" alt="Edit" class="action-icon">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>janesmith</td>
                    <td>janesmith@example.com</td>
                    <td>0987654321</td>
                    <td></td>
                    <td>
                        <a href="#" class="btn btn-edit">
                            <img src="{{ asset('images/edit.png') }}" alt="Edit" class="action-icon">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>John Doe</td>
                    <td>johndoe</td>
                    <td>johndoe@example.com</td>
                    <td>1234567890</td>
                    <td>Teskom</td>
                    <td>
                        <a href="#" class="btn btn-edit">
                            <img src="{{ asset('images/edit.png') }}" alt="Edit" class="action-icon">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Jane Smith</td>
                    <td>janesmith</td>
                    <td>janesmith@example.com</td>
                    <td>0987654321</td>
                    <td></td>
                    <td>
                        <a href="#" class="btn btn-edit">
                            <img src="{{ asset('images/edit.png') }}" alt="Edit" class="action-icon">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>John Doe</td>
                    <td>johndoe</td>
                    <td>johndoe@example.com</td>
                    <td>1234567890</td>
                    <td></td>
                    <td>
                        <a href="{{ route('detailusers') }}" class="btn btn-edit">
                            <img src="{{ asset('images/edit.png') }}" alt="Edit" class="action-icon">
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Jane Smith</td>
                    <td>janesmith</td>
                    <td>janesmith@example.com</td>
                    <td>0987654321</td>
                    <td></td>
                    <td>
                        <a href="#" class="btn btn-edit">
                            <img src="{{ asset('images/edit.png') }}" alt="Edit" class="action-icon">
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Include Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('attendanceChart').getContext('2d');
    const attendanceChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat'],
            datasets: [
                {
                    label: 'Hadir',
                    data: [12, 19, 3, 5, 10],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Izin',
                    data: [5, 10, 7, 3, 1],
                    backgroundColor: 'rgba(255, 206, 86, 0.2)',
                    borderColor: 'rgba(255, 206, 86, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Sakit',
                    data: [2, 3, 1, 4, 2],
                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                    borderColor: 'rgba(153, 102, 255, 1)',
                    borderWidth: 1
                }
            ]
        },
        options: {
            responsive: true,
        }
    });
</script>
@endsection