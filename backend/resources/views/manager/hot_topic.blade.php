<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Hot Topic</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row" style="background-color: #EDEDED;">
            <!-- 1 -->
            <div class="row justify-content-evenly p-5">
                <div class="col-lg-5"></div>
                @include('components.filter')
            </div>
            <!-- 2 -->
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10 text-center rounded" style="background-color: white; height: 44rem;">
                    <div class="row">
                        <table class="table">
                            <thead style="border-bottom-width: 3px; border-top-width: 3px;">
                                <tr>
                                <th scope="col">Judul Laporan</th>
                                <th scope="col">Tipe Kerusakan</th>
                                <th scope="col">Tanggal Unggah</th>
                                <th scope="col">Lokasi</th>
                                <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="table align-middle">
                                <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>
                                    <span class="material-symbols-outlined align-middle">edit</span>
                                    <label for="">Edit</label>
                                </td>
                                </tr>
                                <tr>
                                <th scope="row">2</th>
                                <td>Larry the Bird</td>
                                <td>Ngueng</td>
                                <td>@twitter</td>
                                <td>
                                    <span class="material-symbols-outlined align-middle">edit</span>
                                    <label for="">Edit</label>
                                </td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>