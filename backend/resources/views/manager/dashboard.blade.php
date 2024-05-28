@extends('layouts.admin')

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
    Dashboard
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row" style="background-color: #EDEDED;">
            <!-- 1 -->
            <div class="row justify-content-evenly p-4">
                <div class="col-lg-3 rounded p-5" style="background-color: white;">
                    <div class="row justify-content-between">
                        <div class="col-lg-3"><h4>600</h4></div>
                        <div class="col-lg-3">
                            <span class="material-symbols-outlined" style="color: #A50000; scale: 200%;">assignment</span>
                        </div>
                    </div>
                    <div class="row">
                        <h4 style="color: grey;">Laporan</h4>
                    </div>
                </div>
                <div class="col-lg-3 rounded p-5" style="background-color: white;">
                    <div class="row justify-content-between">
                        <div class="col-lg-3"><h4>600</h4></div>
                        <div class="col-lg-3">
                            <span class="material-symbols-outlined" style="color: #A50000; scale: 200%;">pending_actions</span>
                        </div>
                    </div>
                    <div class="row">
                        <h4 style="color: grey;">Belum Diunggah</h4>
                    </div>
                </div>
                <div class="col-lg-3 rounded p-5" style="background-color: #A50000;">
                    <div class="row justify-content-between">
                        <div class="col-lg-3"><h4 style="color: white;">600</h4></div>
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
            <div class="row justify-content-center mb-4"> 
                <div class="col-lg-12 text-center rounded" style="background-color: white; height: 33rem; width: 82vw;">
                    <div class="row justify-content-between align-items-center p-3">
                        <div class="col-lg-3 text-start">
                            <h3 class="" style="font-weight: bold;">Laporan Terkini</h3>
                        </div>
                        <div class="col-lg-2">
                            <form action="{{ route('manager.laporan_semua')}}" method="GET">
                               <button type="submit" class="btn btn-lg rounded" style="background-color: #A50000; color: white;">Selengkapnya</button>
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
@endsection





