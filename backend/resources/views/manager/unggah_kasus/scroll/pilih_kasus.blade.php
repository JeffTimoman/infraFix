<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="row justify-content-center mb-4">
                <div class="col-lg-10 text-center rounded"
                    style="background-color: white; height: 38.1rem; width: 82vw;">
                    <div class="row">
                        <table class="table">
                            <thead style="border-bottom-width: 3px; border-top-width: 3px;">
                                <tr>
                                    <th scope="col">Nomor Kasus</th>
                                    <th scope="col">Judul Kasus</th>
                                    <th scope="col">Tipe Kerusakan</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Lokasi</th>
                                    <th scope="col">Pengunggah</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="table align-middle">
                                {{-- @foreach ($cases as $case)
                                <tr>
                                    <th scope="row">{{$case->case_number}}</th>
                                    <td>{{$case->title}}</td>
                                    @php
                                    $damage_type = DB::table('damage_types')->where('id', $case ->
                                    damage_type_id)->value('name')
                                    @endphp
                                    <td>{{$damage_type}}</td>
                                    <td>{{$case->status}}</td>
                                    <td>{{$case->address}}</td>
                                    <td>{{$case->created_by}}</td>
                                    <td>
                                        <span class="material-symbols-outlined align-middle">edit</span>
                                        <label style="color: grey;">Edit</label>
                                    </td>
                                </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                    <br>
                    {{$cases -> links('pagination::bootstrap-5')}}
                </div>
            </div>
        </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>