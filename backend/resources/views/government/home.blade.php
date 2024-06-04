@extends('layouts.government')

@section('style')

<style>

    .main {
        background-color: #EDEDED;
    }
    
    .tablebox {
        background-color: white;
        margin-left: 4.25%;
        /* margin-bottom: 10%; */
        height: 60vh;
    }

    .table-lower {
        margin-left: 1.5%;
        margin-right: 1.5%;
    }



    .latihan {
        margin-left: 10%;
        margin-right: 10%;
        margin-top: 5%;
    }

    .costum-card {
        background-color: #A50000;
    }

    .costum-divider {
        border-top: 2px solid #EDEDED;
        margin-left: 1.5%;
        margin-right: 1.5%;
    }

</style>

@endsection

@section('content')

<div class="container-fluid">
    <div class="mb-3">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="latihan">
                    <div class="card border-0">
                        <div class="card-body d-flex py-4">
                            <div class="card-text mt-2 col-9">
                                <h5 class="mb-2 fw-bold">
                                    200
                                </h5>
                                <p class="text-black-50 mb-2 fw-bold">
                                    Laporan Masuk
                                </p>
                            </div>
                            <div class="card-icon col-3 d-flex justify-content-end align-items-center">
                                <i class="fa-solid fa-gauge"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="latihan">
                    <div class="card border-0">
                        <div class="card-body d-flex py-4">
                            <div class="card-text mt-2 col-9">
                                <h5 class="mb-2 fw-bold">
                                    1
                                </h5>
                                <p class="text-black-50 mb-2 fw-bold">
                                    Laporan Ditindak
                                </p>
                            </div>
                            <div class="card-icon col-3 d-flex justify-content-end align-items-center">
                                <i class="fa-solid fa-gauge"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="latihan">
                    <div class="card border-0">
                        <div class="costum-card rounded">
                            <div class="card-body d-flex py-4">
                                <div class="card-text mt-2 col-9">
                                    <h5 class="mb-2 text-white fw-bold">
                                        2
                                    </h5>
                                    <p class="text-white-50 mb-2 fw-bold">
                                        Laporan Selesai
                                    </p>
                                </div>
                                <div class="card-icon col-3 d-flex justify-content-end align-items-center">
                                    <i class="fa-solid fa-gauge"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Isian">
        <div class="row">
            <div class="tablebox col-12 col-md-11 rounded">
                <div class="table border-0">
                    <div class="table-body py-1">
                        <div class="table-header mt-3 px-3">
                            <div class="table-title">
                                <h5 class="fw-bold">Laporan Terkini</h5>
                            </div>
                        </div>
                        <div class="costum-divider"></div>
                        <div class="table-lower justify-content-center">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Judul Laporan</th>
                                        <th>Daerah</th>
                                        <th>Jumlah Laporan</th>
                                        <th>Urgensi</th>
                                        <th>Tanggal Unggah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Woilah</td>
                                        <td>Sukabumi</td>
                                        <td>107</td>
                                        <td>High</td>
                                        <td>2024-01-22</td>
                                    </tr>
                                    <tr>
                                        <td>Hahaha Pize</td>
                                        <td>Sukatanah</td>
                                        <td>2000</td>
                                        <td>Low</td>
                                        <td>2025-13-60</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

    
@endsection