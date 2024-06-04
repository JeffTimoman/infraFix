@extends('layouts.government')

@section('style')

<style>
    
    .main {
    background-color: #EDEDED;
    }

    .line-custom {
        width: 100%;
        height: 5px;
        background-color: red;
        border-radius: 20px;
        margin-top: 2%;
        margin-right: 2%;
    }

    .icons-custom {
        /* margin-right: 4%; */
    }

</style>
@endsection

@section('content')
    
<div class="container-fluid">
    <div class="mb-3">
        <div class="row">
            <div class="Milestone">
                <div class="row">
                    <div class="col-md-2 d-flex flex-column justify-content-center align-center-items">
                        <div class="icons-custom rounded-circle d-flex justify-content-center">
                            <i class="fa-solid fa-gauge"></i>
                        </div>
                        <div class="middle-custom d-flex">
                            <div class="line-custom col-md-7"></div>
                            <i class="fa-solid fa-gauge col-md-3 offset-1"></i>
                        </div>
                        <div class="texts-custom d-flex justify-content-center">
                            <h5>
                                Laporan <br>
                                Disease
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-2 d-flex flex-column justify-content-center align-center-items">
                        <div class="icons-custom rounded-circle d-flex justify-content-center">
                            <i class="fa-solid fa-gauge"></i>
                        </div>
                        <div class="middle-custom d-flex">
                            <div class="line-custom col-md-7"></div>
                            <i class="fa-solid fa-gauge col-md-3 offset-1"></i>
                        </div>
                        <div class="texts-custom d-flex justify-content-center">
                            <h5>
                                Laporan <br>
                                Disease
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-2 d-flex flex-column justify-content-center align-center-items">
                        <div class="icons-custom rounded-circle d-flex justify-content-center">
                            <i class="fa-solid fa-gauge"></i>
                        </div>
                        <div class="middle-custom col-md-12 d-flex">
                            <div class="line-custom col-md-7"></div>
                            <i class="fa-solid fa-gauge col-md-3 offset-1"></i>
                        </div>
                        <div class="texts-custom d-flex justify-content-center">
                            <h5>
                                Laporan <br>
                                Disease
                            </h5>
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