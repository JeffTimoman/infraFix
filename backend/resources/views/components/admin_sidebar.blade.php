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
            <a href="{{ route('profile.show') }}" class="sidebar-link">
                <i class="lni lni-user"></i>
                <span>Profile</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{ route('user.index') }}" class="sidebar-link {{ Route::currentRouteName() == 'user.index' ? 'active' : '' }}">
                <i class="lni lni-users"></i>
                <span>User</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{route('admin.report.index')}}" class="sidebar-link">
                <i class="lni lni-warning"></i>
                <span>Laporan</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{route('damage_type.index')}}" class="sidebar-link">
                <i class="lni lni-line-double"></i>
                <span>Tipe Kerusakan</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{route('comment.index')}}" class="sidebar-link">
                <i class="lni lni-comments"></i>
                <span>Komentar</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{route('milestone.index')}}" class="sidebar-link">
                <i class="lni lni-flag-alt"></i>
                <span>Milestone</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{route('province.index')}}" class="sidebar-link">
                <i class="lni lni-map"></i>
                <span>Provinsi</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{route('city.index')}}" class="sidebar-link">
                <i class="lni lni-apartment"></i>
                <span>Kota</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{route('kecamatan.index')}}" class="sidebar-link">
                <i class="lni lni-map-marker"></i>
                <span>Kecamatan</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="{{route('kelurahan.index')}}" class="sidebar-link">
                <i class="lni lni-home"></i>
                <span>Kelurahan</span>
            </a>
        </li>


    <div class="sidebar-footer">
        <a href="#" class="sidebar-link">
            <i class="lni lni-exit"></i>
            <span>Logout</span>
        </a>
    </div>
</aside>
