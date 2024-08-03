<aside id="sidebar">
    <div class="d-flex">
        <button class="toggle-btn" type="button">
            <i class="lni lni-grid-alt"></i>
        </button>
        <div class="sidebar-logo" class="ml-5">
            <a href="#"><img src="{{ asset('components/img/icon/infrafix.png') }}" alt="" width="100"></a>
        </div>
    </div>
    <ul class="sidebar-nav">
        <li class="sidebar-item">
            <a href="{{ route('government.dashboard') }}" class="sidebar-link active">
                <i class="bi bi-house-door-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('government.tindakan') }}" class="sidebar-link">
                <i class="bi bi-list-task"></i>
                <span>Tindakan</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('government.milestone', ['id' => 1]) }}" class="sidebar-link">
            <i class="bi bi-clipboard2-data"></i>
            <span>Milestone</span>
            </a>
        </li>
    </ul>
    <div class="sidebar-footer">
        <a href="#" class="sidebar-link">
            <i class="lni lni-exit"></i>
            <span>Logout</span>
        </a>
    </div>
</aside>
