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

<div class="container-fluid pt-4">
    <div class="mb-3">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="latihan">
                    <div class="card border-0 shadow p-1 mb-5 bg-body rounded">
                        <div class="card-body d-flex py-4">
                            <div class="card-text mt-2 col-9">
                                <h5 class="mb-2 fw-bold">
                                    {{$dataIncomplete}}
                                </h5>
                                <p class="text-black-50 mb-2 fw-bold">
                                    Laporan Masuk
                                </p>
                            </div>
                            <div class="card-icon col-3 d-flex justify-content-end align-items-center">
                                <img src="{{ asset('img/government/InCase.png') }}" alt="InCase">
                            </div>
                        </div>
</a>                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="latihan border-0 shadow p-1 mb-5 bg-body rounded">
                    <div class="card border-0">
                        <div class="card-body d-flex py-4">
                            <div class="card-text mt-2 col-9">
                                <h5 class="mb-2 fw-bold">
                                    {{$dataProcess}}
                                </h5>
                                <p class="text-black-50 mb-2 fw-bold">
                                    Laporan Ditindak
                                </p>
                            </div>
                            <div class="card-icon col-3 d-flex justify-content-end align-items-center">
                                <img src="{{ asset('img/government/Process.png') }}" alt="Process">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="latihan border-0 shadow-lg p-1 mb-5 rounded" style="background-color: #A50000">
                    <div class="card border-0" >
                        <div class="costum-card rounded">
                            <div class="card-body d-flex py-4">
                                <div class="card-text mt-2 col-9">
                                    <h5 class="mb-2 text-white fw-bold">
                                        {{$dataDone}}
                                    </h5>
                                    <p class="text-white-50 mb-2 fw-bold">
                                        Laporan Selesai
                                    </p>
                                </div>
                                <div class="card-icon col-3 d-flex justify-content-end align-items-center">
                                    <img src="{{ asset('img/government/DoneCase.png') }}" alt="DoneCase">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Isian ">
        <div class="row ">
            <div class="tablebox col-12 col-md-11 shadow p-1 mb-5 bg-body rounded">
                <div class="table border-0">
                    <div class="table-body py-1">
                        <div class="table-header mt-3 px-3 d-flex justify-content-between">
                            <div class="table-title d-flex align-items-center">
                                <h5 class="fw-bold m-0">Laporan Terkini</h5>
                            </div>

                            <div class="buttoni">
                                <button class="btn btn-primary" id="selengkapnyaBtn" style="background-color: #A50000; border: none;" onclick="window.location.href = '{{ route('government.tindakan') }}'">Selengkapnya</button>
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
                                        <th>Tanggal Unggah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{$item->title}}</td>
                                            <td>{{$item->address}}</td>
                                            <td>{{$item->reports->count()}}</td>
                                            <td>{{$item->created_at}}</td>
                                        </tr>
                                    @endforeach
                                    {{-- <tr>
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
                                    </tr> --}}
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
