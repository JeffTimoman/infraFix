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
                <!-- Kasih Aler Yakin batal Bikin Kasus -->
                <div class="button">
                    <a href="{{ route('manager.clearSelectedIds') }}">
                        <button type="button" class="btn-close" disabled aria-label="Close"></button>
                    </a>
                </div>
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
        <div class="row justify-content-center mt-4">
            <div class="col-lg-10 text-center rounded" style="background-color: white; height: 35.3rem; width: 82vw;">
                <div class="row text-start p-3">
                    <h4>{{$selectedCount}} laporan dipilih</h4>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        @if(count($selectedLaporans) > 0)
                        <table class="table">
                            <thead style="border-bottom-width: 3px; border-top-width: 3px;">
                                <tr>
                                    <th scope="col">Kode Laporan</th>
                                    <th scope="col">Judul Laporan</th>
                                    <th scope="col">Tipe Kerusakan</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Kelurahan</th>
                                    <th scope="col">Kecamatan</th>
                                    <th scope="col">Kota</th>
                                    <th scope="col">Provinsi</th>
                                </tr>
                            </thead>
                            <tbody class="table align-middle">
                                @foreach ($selectedLaporans as $selected)
                                <tr>
                                    <td>{{$selected->report_code}}</td>
                                    <td>{{$selected->title}}</td>
                                    <td>{{$selected->damage_type->name}}</td>
                                    <td>{{$selected->address}}</td>
                                    <td>{{$selected->kelurahan->name}}</td>
                                    <td>{{$selected->kelurahan->kecamatan->name}}</td>
                                    <td>{{$selected->kelurahan->kecamatan->kota->name}}</td>
                                    <td>{{$selected->kelurahan->kecamatan->kota->provinsi->name}}</td>
                                    <td>
                                        <form action="" method="post">
                                            @csrf
                                            @method('delete')
                                            <span class="material-symbols-outlined align-middle"
                                                style="color: #A50000;">delete</span>
                                            <label for="">Hapus</label>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <p>Silakan pilih laporan terlebih dahulu</p>
                        @endif
                    </div>
                </div>
                <div class="row"></div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-lg-2 p-4">
                <form action="{{ route('manager.unggah_2')}}" method="GET">
                    <button type="submit" class="btn btn-lg rounded"
                        style="background-color: #A50000; color: white;">Selanjutnya</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
