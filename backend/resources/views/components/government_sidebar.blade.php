<aside id="sidebar">
    <div class="d-flex">
        <button class="toggle-btn" type="button">
            <i class="lni lni-grid-alt"></i>
        </button>
        <div class="sidebar-logo ml-5">
            <a href="#"><img src="{{ asset('components/img/icon/infrafix.png') }}" alt="" width="100"></a>
        </div>
    </div>
    <ul class="sidebar-nav">
        <li class="sidebar-item">
            <a href="{{ route('profile.show', $user = Auth::user()) }}" class="sidebar-link">
                <i class="lni lni-user"></i>
                <span>Profile</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('government.dashboard') }}" class="sidebar-link {{ Request::routeIs('government.dashboard') ? 'active' : '' }}">
                <i class="bi bi-house-door-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('government.tindakan') }}" class="sidebar-link {{ Request::routeIs('government.tindakan') ? 'active' : '' }}">
                <i class="bi bi-list-task"></i>
                <span>Tindakan</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('government.milestone', ['id' => 1]) }}" class="sidebar-link {{ Request::routeIs('government.milestone', ['id' => 1]) ? 'active' : '' }}">
                <i class="bi bi-clipboard2-data"></i>
                <span>Milestone</span>
            </a>
        </li>
    </ul>
    <div class="sidebar-footer">
        <a href="{{route('auth.logout')}}" class="sidebar-link">
            <i class="lni lni-exit"></i>
            <span>Logout</span>
        </a>
    </div>
</aside>
