@extends('layouts.admin')
@section('title')
    Dashboard    
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

@section('content')
    <div class="container-fluid p-2">
        <div class="mb-3">
            <div class="row">
                <div class="cardbox col-12 col-md-4 ">
                    <div class="card border-0">
                        <div class="card-body py-4">
                            <div class="card-text">
                                <h5 class="mb-2 fw-bold">
                                    600
                                </h5>
                                <p class="mb-2 fw-bold">
                                    Laporan
                                </p>
                            </div>
                            <div class="card-icon">
                                <i class="fa-solid fa-gauge"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cardbox col-12 col-md-4 ">
                    <div class="card border-0">
                        <div class="card-body py-4">
                            <div class="card-text">
                                <h5 class="mb-2 fw-bold">
                                    600
                                </h5>
                                <p class="mb-2 fw-bold">
                                    Pengguna
                                </p>
                            </div>
                            <div class="card-icon">
                                <i class="fa-solid fa-gauge"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cardbox col-12 col-md-4 ">
                    <div class="card border-0">
                        <div class="card-body py-4">
                            <div class="card-text">
                                <h5 class="mb-2 fw-bold">
                                    600
                                </h5>
                                <p class="mb-2 fw-bold">
                                    Laporan
                                </p>
                            </div>
                            <div class="card-icon">
                                <i class="fa-solid fa-gauge"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <div class="row">
                <div class="reportbox col-12 col-md-8 ">
                    <div class="report border-0">
                        <div class="report-body py-2">
                            <div class="table-header py-2 px-3">
                                <div class="table-title">
                                    <h5>Laporan</h5>
                                </div>
                                <div class="table-button">
                                    <button class="button-seeAll">Semua</button>
                                </div>
                            </div>
                            <table class="report-table ">
                                <thead>
                                    <tr>
                                        <th>Judul</th>
                                        <th>Tanggal</th>
                                        <th>Prioritas</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <!-- Example content rows -->
                                    <tr>
                                        <td>Judul 1</td>
                                        <td>2024-05-21</td>
                                        <td>High</td>
                                        <td>2024-05-21</td>
                                    </tr>
                                    <tr>
                                        <td>Judul 2</td>
                                        <td>2024-05-22</td>
                                        <td>Medium</td>
                                        <td>2024-05-22</td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>

                <div class="reportbox col-12 col-md-4 ">
                    <div class="report border-0">
                        <div class="report-body py-2">
                            <div class="table-header py-2 px-3">
                                <div class="table-title">
                                    <h5>Komentar Baru</h5>
                                </div>
                                <div class="table-button">
                                    <button class="button-seeAll">Semua</button>
                                </div>
                            </div>
                            <table class="report-table ">
                                <thead>
                                    <tr class="report-highlight">
                                        <th>Nama</th>
                                        <th>Komentar</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <!-- Example content rows -->
                                    <tr>
                                        <td>Jep</td>
                                        <td>Jelek banget jalannya</td>
                                    </tr>
                                    <tr>
                                        <td>Shandez</td>
                                        <td>Tidakkkk lubanggg</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
