@extends('layouts.manager')

@section('style')
<style>
    .main {
        background-color: #F1F1F1;
    }

    .cardbox:nth-child(3) .card {
        background-color: #a50000;
    }

    .cardbox:nth-child(3) .material-symbols-outlined {
        color: white;
    }

    .cardbox h5 {
        font-size: 30px;
    }

    .cardbox p {
        font-size: 20px;
        color: #D4D4D4;
    }

    .cardbox:nth-child(3) h5 {
        color: white;
    }

    .cardbox:nth-child(3) p {
        color: #D8A4A4;
    }


    .card-body {
        display: flex;
        align-items: center;
        /* Align items vertically in the center */
        justify-content: space-between;
        /* Distribute space between items */
    }

    .card-text {
        margin-right: 10px;
        /* Adjust spacing between text and icon as needed */
    }

    .card-text {
        margin-right: 10px;
        /* Adjust spacing between text and icon as needed */
    }

    .card-icon {
        /* Optional: styles for the card icon */
    }

    .reportBox {
        display: flex;
        align-items: center;
        /* Align items vertically in the center */
        justify-content: space-between;
    }

    .report {
        background-color: white;
    }

    .table-header {
        display: flex;
        border-bottom: 3px solid #EDEDED;
        /* background-color: #a50000; */
        align-items: center;
        /* margin-bottom: 3px; */
    }

    .table-title {
        width: 50%;
    }


    .table-button {
        width: 50%;
        display: flex;
        justify-content: end;
    }

    .table-title h5 {
        font-weight: bold;
        font-size: 24px;
    }

    .button-seeAll {
        border-radius: 20px;
        border-width: 0px;
        background-color: #a50000;
        width: 92px;
        height: 43px;
        color: white;
        font-size: 16px;
        font-weight: bold;
    }

    .report-table {
        width: 100%;
    }

    .report-table th {
        border-bottom: 3px solid #EDEDED;
        text-align: center;
    }

    .report-table td {
        border-bottom: 1px solid #EDEDED;
        text-align: center;
    }
</style>

<style>
    input[type="checkbox"]:checked {
        background-color: #D8A4A4;
        border-color: #A50000;
    }

    input[type="checkbox"]:checked::before {
        content: "";
        display: block;
        width: 100%;
        height: 100%;
        background-color: white;
    }

    /* Mengubah warna ceklis (centang) */
    input[type="checkbox"]:checked::after {
        content: "✔";
        /* Karakter centang */
        display: block;
        color: #A50000;
        /* Warna centang */
        position: relative;
        top: -45%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>
<style>
    .semua:hover a {
        border-color: white;
        border-width: thin;
        border-style: ridge;
        transition: .2s;
    }
</style>

@endsection

@section('title')
Laporan Belum Diunggah
@endsection

@section('content')
<div class="container-fluid">
    <div class="row" style="background-color: #EDEDED;">
        <!-- 1 -->
        <div class="row justify-content-evenly p-5">
            <div class="col-lg-6">
                <ul class="nav nav-pills">
                    <li class="nav-item semua">
                        <a class="nav-link rounded"
                            style="background-color: white; border-color: #A50000; color: black; scale: 120%; border-color: #A50000;"
                            aria-current="page" href="{{ route ('manager.laporan_semua')}}">Semua</a>
                    </li>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <li class="nav-item active rounded">
                        <a class="nav-link"
                            style="background-color: #A50000; color: white; border-color: white; scale: 120%;"
                            href="#">Belum Diunggah</a>
                    </li>
                </ul>
            </div>
            @include('components.filter')
        </div>
        <!-- 2 -->
        <div class="row justify-content-center mb-4">
            <div class="col-lg-10 text-center rounded" style="background-color: white; height: 38.1rem; width: 82vw;">
                <div class="row">
                    <table class="table align-middle">
                        <thead style="border-bottom-width: 3px; border-top-width: 3px;">
                            <tr>
                                <th scope="col">Judul Laporan</th>
                                <th scope="col">Tipe Kerusakan</th>
                                <th scope="col">Tanggal Unggah</th>
                                <th scope="col">Lokasi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table">
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Larry the Bird</td>
                                <td>Ngueng</td>
                                <td>@twitter</td>
                                <td>
                                    <div class="form-check d-flex justify-content-center">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="row justify-content-end align-items-end py-4">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end px-5">
                            <form action="{{ route('manager.tambah_1')}}" method="GET">
                                <button type="submit" class="btn btn-m rounded"
                                    style="background-color: #A50000; color: white;">Tambahkan ke Kasus</button>
                            </form>
                            <form action="{{ route('manager.unggah_1')}}" method="GET">
                                <button type="submit" class="btn btn-m rounded"
                                    style="background-color: #A50000; color: white;">Buat Kasus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection