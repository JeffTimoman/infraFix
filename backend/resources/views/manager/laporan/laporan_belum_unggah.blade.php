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
        border-width: 0.5px;
        border-style: ridge;
        transition: .2s;
    }

    .bottom-button {
        background-color: #A50000;
        color: white;
    }

    .bottom-button:hover {
        border-color: #A50000;
        background-color: white;
        border-width: 1.5px;
        border-style: ridge;
        transition: .2s;
    }
</style>

<style>
    .pagination .page-link {
        color: #A50000;
    }

    .pagination .page-link:hover {
        color: darkred;
    }

    .pagination .active {
        color: #A50000;
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
            @include('components.filter', ['datas' => $filter]);
        </div>
        <!-- 2 -->
        <div class="row justify-content-center mb-4">
            <div class="col-lg-10 text-center rounded" style="background-color: white; height: 38.1rem; width: 82vw;">
                <div class="row">
                    <table class="table align-middle">
                        <thead style="border-bottom-width: 3px; border-top-width: 3px;">
                            <tr>
                                <th scope="col">Kode Laporan</th>
                                <th scope="col">Judul Laporan</th>
                                <th scope="col">Tipe Kerusakan</th>
                                <th scope="col">Tanggal Unggah</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Kelurahan</th>
                                <th scope="col">Kecamatan</th>
                                <th scope="col">Kota</th>
                                <th scope="col">Provinsi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="table align-middle">
                            @foreach ($laporans as $laporan)
                            <tr>
                                <td>{{$laporan->report_code}}</td>
                                <td>{{$laporan->title}}</td>
                                <td>{{$laporan->damage_type->name}}</td>
                                <td>{{$laporan->created_at}}</td>
                                <td>{{$laporan->address}}</td>
                                <td>{{$laporan->kelurahan->name}}</td>
                                <td>{{$laporan->kelurahan->kecamatan->name}}</td>
                                <td>{{$laporan->kelurahan->kecamatan->kota->name}}</td>
                                <td>{{$laporan->kelurahan->kecamatan->kota->provinsi->name}}</td>
                                <td>
                                    <div class="form-check d-flex justify-content-center ms-3">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="row-d-flex justify-content-end align-items-end" style="">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <form action="{{ route('manager.tambah_1')}}" method="GET">
                                <button type="submit" class="btn btn-m rounded bottom-button">Tambahkan ke
                                    Kasus</button>
                            </form>
                            &nbsp &nbsp
                            <form action="{{ route('manager.unggah_1')}}" method="GET">
                                <button type="submit" class="btn btn-m rounded bottom-button">Buat Kasus</button>
                            </form>
                        </div>
                    </div>
                </div>
                <br>
                {{$laporans ->links('pagination::bootstrap-5')}}
            </div>
        </div>
    </div>
</div>
@endsection