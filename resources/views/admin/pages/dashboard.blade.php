@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="main-content">
    <div class="content">
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
        <h4>Statistics</h4>
        <div class="chart-container">
            <canvas id="attendanceChart"></canvas>
        </div>
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