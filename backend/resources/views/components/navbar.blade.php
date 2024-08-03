@if (Auth::check())
    <style>
        nav.bg-body-tertiary {
            background-color: #A50000 !important;
        }

        .sidebar.bg-body-tertiary {
            background-color: #A50000 !important;
        }
    </style>
    <nav class="navbar bg-body-tertiary navbar-dark navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('components/img/icon/infrafix.png') }}" alt="" width="100">
            </a>

            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- sidebar -->
            <div class="sidebar offcanvas offcanvas-end bg-body-tertiary" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <!-- atasnye sidebar -->
                <div class="offcanvas-header">
                    <button type="button" class="btn-close shadow-none text-white" data-bs-dismiss="offcanvas"
                        aria-label="Close" style="color: white;"></button>
                </div>
                <!-- badan sidebar -->
                <div class="offcanvas-body d-flex flex-column p-4 flex-lg-row p-lg-1 justify-content-between align-items-center"
                    style="font-weight: 600; ">
                    <ul class="navbar-nav justify-content-center align-items-center   "
                        style="margin-left: 15%; margin-right: 15%;">
                        <li class="nav-item mx-5">
                            <a class="nav-link {{ request()->is('hottopic*') ? 'active' : '' }}" aria-current="page" href="{{ route('hottopic.index') }}">Beranda</a>
                        </li>
                        <li class="nav-item mx-5">
                            <a class="nav-link {{ request()->is('report*') ? 'active' : '' }}" aria-current="page" href="{{ route('report.index') }}">Lapor</a>
                        </li>
                        <li class="nav-item mx-5">
                            <a class="nav-link" href="{{route('main.about')}}">Tentang</a>
                        </li>
                    </ul>
                    <!-- sudah ada akun -->
                    <div class="d-flex justify-content-center align-items-center flex-lg-row text-end  "
                        style="font-weight: 500;">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle d-flex align-items-center justify-content-end border-0 gap-2"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false"
                                style="background-color: transparent; ">
                                <div class=" d-flex align-items-center justify-content-center gap-2">

                                     @if (auth()->check())
                                        <img src="{{ asset('upload/profilepicture/' . auth()->user()->profile_picture) }}"
                                            alt="" width="50" height="50" class="rounded-circle border">
                                    @else
                                        <img src="{{ asset('upload/profilepicture/default.png') }}"
                                            alt="" width="50" height="50" class="rounded-circle border">
                                    @endif
                                    <span>{{ Auth::user()->name }}</span>
                                </div>
                            </button>
                            @if (Auth::user()->role == 'admin')
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('admin.dashboard')}}">Admin Dashboard</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="{{ route('profile.show', $user = Auth::user()) }}">Profile</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('auth.logout') }}">Keluar<small> |
                                                Admin</small> </a></li>
                                </ul>
                            @endif
                            @if (Auth::user()->role == 'manager')
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('manager.dashboard')}}">Manager Dashboard</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item"href="{{ route('profile.show', $user = Auth::user()) }}">Profile</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('auth.logout') }}">Keluar<small> |
                                                Manager</small> </a></li>
                                </ul>
                            @endif
                            @if (Auth::user()->role == 'government')
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{route('government.dashboard')}}">Government Dashboard</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="{{ route('profile.show', $user = Auth::user()) }}">Profile</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('auth.logout') }}">Keluar<small> |
                                                Government</small> </a></li>
                                </ul>
                            @endif
                            @if (Auth::user()->role == 'user')
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li><a class="dropdown-item" href="{{ route('profile.show', $user = Auth::user()) }}">Profile</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('auth.logout') }}">Keluar<small> |
                                                User</small> </a></li>
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </nav>
@else
    <style>
        nav.bg-body-tertiary {
            background-color: #A50000 !important;
        }

        .sidebar.bg-body-tertiary {
            background-color: #A50000 !important;
        }

        .btn-daftar:hover {
            background-color: white !important;
            color: #A50000 !important;
            transition: ease-in-out 0.3s;
        }

        .btn-daftar {
            transition: ease-in-out 0.3s;
        }

        .btn-masuk {
            /* make a white line below */

            color: rgb(212, 203, 203) !important;
            transition: ease-in-out 0.3s;
        }

        .btn-masuk:hover {
            color: white !important;
            transition: ease-in-out 0.3s;
        }
    </style>
    <nav class="navbar  navbar-dark navbar-expand-lg sticky-top bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('components/img/icon/infrafix.png') }}" alt="" width="100">
            </a>

            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- sidebar -->
            <div class="sidebar tessa offcanvas offcanvas-end bg-body-tertiary" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <!-- atasnye sidebar -->
                <div class="offcanvas-header">
                    <button type="button" class="btn-close shadow-none text-white" data-bs-dismiss="offcanvas"
                        aria-label="Close" style="color: white;"></button>
                </div>
                <!-- badan sidebar -->
                <div class="offcanvas-body d-flex flex-column p-4 flex-lg-row p-lg-1 justify-content-between align-items-center"
                    style="font-weight: 600; ">
                    <ul class="navbar-nav justify-content-center align-items-center   "
                        style="margin-left: 15%; margin-right: 15%;">
                       <li class="nav-item mx-5">
                            <a class="nav-link {{ request()->is('hottopic*') ? 'active' : '' }}" aria-current="page" href="{{ route('hottopic.index') }}">Beranda</a>
                        </li>
                        <li class="nav-item mx-5">
                            <a class="nav-link {{ request()->is('report*') ? 'active' : '' }}" aria-current="page" href="{{ route('report.index') }}">Lapor</a>
                        </li>
                        <li class="nav-item mx-5">
                            <a class="nav-link" href="{{route('main.about')}}">Tentang</a>
                        </li>
                    </ul>
                    <!-- login / sign up -->
                    <div class="d-flex justify-content-center align-items-center gap-3 flex-lg-row"
                        style="font-weight: 500; ">
                        <a href="{{ route('auth.login') }}" class="text-white text-decoration-none btn-masuk">
                            Masuk
                        </a>
                        <a href="{{ route('auth.register') }}"
                            class=" text-decoration-none  px-3 bg-transparent rounded-3 text-white btn-daftar"
                            style="
                    border: 1px solid rgba(255, 255, 255, 0.585); padding-top: 10px; padding-bottom: 10px;
                    background-color: #fff;">Daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
@endif
