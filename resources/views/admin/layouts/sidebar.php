<div class="sidebar">
    <a href="dashboard">
        <i class="fas fa-tachometer-alt"></i>
        Dashboard
    </a>
    <a href="users">
        <i class="fas fa-users"></i>
        Users
    </a>
    <a href="recenthistory">
        <i class="fas fa-history"></i>
        Recent History
    </a>
    <a href="report">
        <i class="fas fa-file-alt"></i>
        Presence Report
    </a>
    <a class="logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fas fa-sign-out-alt"></i>
        Logout
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>