<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <h3 style="font-weight: bold;">Edit Kasus</h3>
        </div>
        <div class="row">
            <div class="col-lg-10 rounded p-5" style="background-color: white; height: 40rem; width: 82vw;">
                <div class="row mb-4">
                    <div class="col-lg-12">
                        <label for="" class="form-label" style="margin-left: -1rem; font-size: large; font-weight: 400;">Judul Kasus</label>
                        <input type="text" id="inputJudulKasus" class="form-control" style="background-color: #F2F2F2; width: 93vw; margin-left: -0.7rem;">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-lg-3">
                        <label for="" class="form-label" style="margin-left: -1rem; font-size: large; font-weight: 400;">Tipe Kerusakan</label>
                        <input type="text" readonly class="form-control-plaintext p-2 rounded border" id="staticKasus" value="Kerusakan Jalan Raya" style="background-color: #F2F2F2; margin-left: -0.7rem;">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-lg-3">
                        <label for="" class="form-label" style="margin-left: -1rem; font-size: large; font-weight: 400;">Status</label>
                        <input type="text" readonly class="form-control-plaintext p-2 rounded border" id="staticKasus" value="Baru dilaporkan" style="background-color: #F2F2F2; margin-left: -0.7rem;">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="row">
                        <label for="" class="form-label" style="margin-left: -1rem; font-size: large; font-weight: 400;">Lokasi</label>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <label for="" class="form-label" style="margin-left: -0.5rem; font-size: medium; font-weight: 100;">Provinsi</label>
                            <input type="text" readonly class="form-control-plaintext p-2 rounded border" id="staticProvinsi" value="Tangerang Selatan" style="background-color: #F2F2F2; margin-left: -0.7rem;">
                        </div>
                        <div class="col-lg-3">
                            <label for="" class="form-label" style="margin-left: -0.5rem; font-size: medium; font-weight: 100;">Kecamatan</label>
                            <input type="text" readonly class="form-control-plaintext p-2 rounded border" id="staticKecamatan" value="Pondok Aren" style="background-color: #F2F2F2; margin-left: -0.7rem;">
                        </div>
                        <div class="col-lg-6">
                            <label for="" class="form-label" style=" font-size: medium; font-weight: 100;">Alamat</label>
                            <input type="text" id="inputAlamat" class="form-control" style="background-color: #F2F2F2; width: 54.5vw;">
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-lg-2">
                        <label for="" class="form-label" style="margin-left: -1rem; font-size: large; font-weight: 400;">Deskripsi</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="background-color: #F2F2F2; margin-left: -0.5rem; width: 93vw;"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>