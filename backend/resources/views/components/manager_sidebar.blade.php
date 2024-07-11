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
            <a href="{{route('manager.dashboard')}}" class="sidebar-link active">
                <i class="lni lni-layout"></i>
                <span>Beranda</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{route('manager.laporan_semua')}}" class="sidebar-link">
                <i class="lni lni-agenda"></i>
                <span>Laporan</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{route('manager.hot_topic')}}" class="sidebar-link">
                <i class="lni lni-popup"></i>
                <span>Hot Topic</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#auth"
                aria-expanded="false" aria-controls="auth">
                <i class="lni lni-user"></i>
                <span>Akun</span>
            </a>
            <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Login</a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Register</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link">
                <i class="lni lni-cog"></i>
                <span>Setting</span>
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