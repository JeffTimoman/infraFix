@extends('layouts.manager')

@section('link_style')
    <link href="{{ asset('css/unggah/progress_bar.css') }}" rel="stylesheet">
@endsection

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
@endsection

@section('title')
    Unggah Kasus
@endsection

@section('content')
<div class="container-fluid">
        <div class="row" style="background-color: #EDEDED;">
            <!-- 1 -->
            <div class="row pt-3 px-5">
                <div class="col-lg-2">
                    <button type="button" class="btn-close" disabled aria-label="Close"></button>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="container">
                        <div class="step-progress">
                        <div class="step done"></div>
                        <div class="step"></div>
                        <div class="step"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 2 -->
            <div class="row justify-content-center my-4">
                <div class="col-lg-10 rounded p-5" style="background-color: white; height: 40rem; width: 82vw;">
                    <div class="row mb-4">
                        <label for="" class="form-label" style="margin-left: -1rem; font-size: large; font-weight: 400;">Judul Kasus</label>
                        <input type="text" id="inputJudulKasus" class="form-control" style="background-color: #F2F2F2;">
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2">
                            <label for="" class="form-label" style="margin-left: -1rem; font-size: large; font-weight: 400;">Tipe Kerusakan</label>
                            <input type="text" readonly class="form-control-plaintext p-2 rounded border" id="staticKasus" value="Kerusakan Jalan Raya" style="background-color: #F2F2F2; margin-left: -0.7rem;">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2">
                            <label for="" class="form-label" style="margin-left: -1rem; font-size: large; font-weight: 400;">Status</label>
                            <input type="text" readonly class="form-control-plaintext p-2 rounded border" id="staticKasus" value="Baru dilaporkan" style="background-color: #F2F2F2; margin-left: -0.7rem;">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="row">
                            <label for="" class="form-label" style="margin-left: -1rem; font-size: large; font-weight: 400;">Lokasi</label>
                        </div>
                        <div class="row">
                        <div class="col-lg-2">
                            <label for="" class="form-label" style="margin-left: -0.5rem; font-size: medium; font-weight: 100;">Provinsi</label>
                            <input type="text" readonly class="form-control-plaintext p-2 rounded border" id="staticProvinsi" value="Tangerang Selatan" style="background-color: #F2F2F2; margin-left: -0.7rem;">
                        </div>
                        <div class="col-lg-2">
                            <label for="" class="form-label" style="margin-left: -0.5rem; font-size: medium; font-weight: 100;">Kecamatan</label>
                            <input type="text" readonly class="form-control-plaintext p-2 rounded border" id="staticKecamatan" value="Pondok Aren" style="background-color: #F2F2F2; margin-left: -0.7rem;">
                        </div>
                        <div class="col-lg-8">
                            <label for="" class="form-label" style=" font-size: medium; font-weight: 100;">Alamat</label>
                            <input type="text" id="inputAlamat" class="form-control" style="background-color: #F2F2F2;">
                        </div>
                        </div>
                    </div>
                    
                    <div class="row justify-content-end">
                        <div class="col-lg-2">
                            <form action="{{ route('manager.unggah_3')}}" method="GET">
                                <button type="submit" class="btn btn-lg rounded" style="background-color: #A50000; color: white;">Selanjutnya</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection