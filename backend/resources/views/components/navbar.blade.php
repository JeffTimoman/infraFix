<style>
    .bg-custom {
        background-color: #a50000 !important;

        font-family: "Inter", sans-serif;
        font-weight: 600;
    }

    .temp{
        display: flex;
        align-items: center;
    }

    .nav-gap{
        gap: 3rem;

    }

    .dropdown-menu-modified{
        
    }

</style>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

<header class="p-3 mb-3 border-bottom bg-custom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-between">
            <a href="#" class="d-flex align-items-center col-md-1">
                <img src="{{ asset('components/img/icon/infrafix.png') }}" alt="" height="50">
                {{-- <p class="text-light align-items-center">InfraFix</p> --}}
            </a>

            <ul class="nav col-md-8 ms-5 d-flex align-items-center nav-gap">
                <li><a href="#" class="nav-link px-2 text-light ms-3">Beranda</a></li>
                <li><a href="#" class="nav-link px-2 text-light">Lapor</a></li>
                <li><a href="#" class="nav-link px-2 text-light">Tentang Aplikasi</a></li>
            </ul>

            <div class="ms-auto">
                <a href="#" class="btn text-light" style="text-decoration: none">Masuk</a>
                <a href="#" class="btn btn-outline-light">Daftar</a>
            </div>
        </div>
    </div>
</header>

<header class="p-3 mb-3 border-bottom bg-custom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-between">
            <a href="#" class="d-flex align-items-center col-md-1">
                <img src="{{ asset('components/img/icon/infrafix.png') }}" alt="" height="50">
            </a>

            <ul class="nav col-md-8 ms-5 d-flex align-items-center nav-gap">
                <li><a href="#" class="nav-link px-2 text-light ms-3">Beranda</a></li>
                <li><a href="#" class="nav-link px-2 text-light">Lapor</a></li>
                <li><a href="#" class="nav-link px-2 text-light">Tentang Aplikasi</a></li>
            </ul>

            <div class="dropdown text-end ms-auto">
                <a href="#" class="d-block text-decoration-none dropdown-toggle text-light"
                    data-bs-toggle="dropdown" aria-expanded="false" style="">
                    <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32"
                    class="rounded-circle mx-2">
                    Ajeng &nbsp;
                </a>
                <ul class="dropdown-menu text-small dropdown-menu-modified">
                    <li><a class="dropdown-item" href="#">Admin</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav> --}}


{{-- admin mode --}}
{{--
<header class="p-3 mb-3 border-bottom  bg-custom">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-around">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 ">
                <li><a href="#" class="nav-link px-2 text-light">Beranda</a></li>
                <li><a href="#" class="nav-link px-2 text-light">Lapor</a></li>
                <li><a href="#" class="nav-link px-2 text-light">Tentang Aplikasi</a></li>
            </ul>
            <div class="dropdown text-end">
                <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32"
                        class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
 --}}
