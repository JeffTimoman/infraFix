<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap">
</head>
<style>
    .logo-box{
        background-color: #a50000;
    }

    .logo-box img{
        height: 102px;
        width: 184px;
    }

</style>
@yield('style')
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="logo-box col-2" style="justify-content: center; text-align:center">
                <img src="{{ asset('components/img/icon/infrafix.png') }}" alt="">
            </div>
            <div class="bar">

            </div>
        </div>
    </div>
    @yield('content')
</body>
</html>
