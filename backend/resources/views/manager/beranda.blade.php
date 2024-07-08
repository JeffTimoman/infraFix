<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Beranda</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row" style="background-color: #EDEDED;">
            <!-- 1 -->
            <div class="row justify-content-evenly p-5">
                <a href="{{ route ('manager.laporan_semua')}}">
                    <div class="col-lg-3 rounded p-5" style="background-color: white;">
                        <div class="row justify-content-between">
                            <div class="col-lg-3">
                                <h4>600</h4>
                            </div>
                            <div class="col-lg-3">
                                <span class="material-symbols-outlined"
                                    style="color: #A50000; scale: 200%;">assignment</span>
                            </div>
                        </div>
                        <div class="row">
                            <h4 style="color: grey;">Laporan</h4>
                        </div>
                    </div>
                </a>
                <div class="col-lg-3 rounded p-5" style="background-color: white;">
                    <div class="row justify-content-between">
                        <div class="col-lg-3">
                            <h4>600</h4>
                        </div>
                        <div class="col-lg-3">
                            <span class="material-symbols-outlined"
                                style="color: #A50000; scale: 200%;">pending_actions</span>
                        </div>
                    </div>
                    <div class="row">
                        <h4 style="color: grey;">Belum Diunggah</h4>
                    </div>
                </div>
                <div class="col-lg-3 rounded p-5" style="background-color: #A50000;">
                    <div class="row justify-content-between">
                        <div class="col-lg-3">
                            <h4 style="color: white;">600</h4>
                        </div>
                        <div class="col-lg-3">
                            <span class="material-symbols-outlined" style="color: white; scale: 200%;">newspaper</span>
                        </div>
                    </div>
                    <div class="row">
                        <h4 style="color: #D8A4A4;">Hot Topic</h4>
                    </div>
                </div>
            </div>
            <!-- 2 -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10 text-center rounded" style="background-color: white; height: 36rem;">
                    <div class="row justify-content-between align-items-center p-3">
                        <div class="col-lg-2">
                            <h3 class="" style="font-weight: bold;">Laporan Terkini</h3>
                        </div>
                        <div class="col-lg-2">
                            <form action="{{ route('gov.laporan_semua')}}" method="GET">
                                <button type="submit" class="btn btn-lg rounded"
                                    style="background-color: #A50000; color: white;">Selengkapnya</button>
                            </form>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <table class="table">
                            <thead style="border-bottom-width: 3px; border-top-width: 3px;">
                                <tr>
                                    <th scope="col">Judul Laporan</th>
                                    <th scope="col">Tipe Kerusakan</th>
                                    <th scope="col">Urgensi</th>
                                    <th scope="col">Tanggal Unggah</th>
                                </tr>
                            </thead>
                            <tbody class="table align-middle">
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry the Bird</td>
                                    <td>Ngueng</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<<<<<<< HEAD
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

=======
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
>>>>>>> cd9f1161f23e5f066d3fdad59da5c7fb4ba94a6c
</html>
