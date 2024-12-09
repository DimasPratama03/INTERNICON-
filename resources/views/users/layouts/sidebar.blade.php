<div class="sidebar">
    <a href="usersdashboard">
        <i class="fas fa-tachometer-alt"></i>
        Dashboard
    </a>
    <a href="attendanceform">
        <i class="fas fa-users"></i>
        Attendance form
    </a>
    <a href="usersreport">
        <i class="fas fa-history"></i>
        Presence Report
    </a>
    <a class="logout" href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fas fa-sign-out-alt"></i>
        Logout
    </a>
    <form id="logout-form" action="" method="POST" style="display: none;">
        @csrf
    </form>
</div>