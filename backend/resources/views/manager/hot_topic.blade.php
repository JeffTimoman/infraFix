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
Hot Topic
@endsection

@section('content')
<div class="container-fluid">
    <div class="row" style="background-color: #EDEDED;">
        <!-- 1 -->
        <div class="row justify-content-evenly p-5">
            <div class="col-lg-6">
                <div class="col-lg-6">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active rounded"
                                style="background-color: #A50000; color: white; border-color: white; scale: 120%;"
                                aria-current="page" href="#">Semua</a>
                        </li>
                </div>
            </div>
            @include('components.filter', ['datas' => $filter])
        </div>
        <!-- 2 -->
        <div class="row justify-content-center mb-4">
            <div class="col-lg-10 text-center rounded" style="background-color: white; height: 38.1rem; width: 82vw;">
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
                            @foreach ($cases as $case)
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
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <br>
                {{$cases -> links('pagination::bootstrap-5')}}
            </div>
        </div>
    </div>
    @endsection