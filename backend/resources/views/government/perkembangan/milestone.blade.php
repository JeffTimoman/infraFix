@extends('layouts.government')

@section('style')

<style>

    .main {
    background-color: #EDEDED;
    }

    .line-custom {
        width: 100%;
        height: 5px;
        background-color: #6A040F;
        border-radius: 20px;
        margin-top: 8px;
        /* margin-top: 2%;
        margin-right: 2%; */
    }

    .icons-custom {
        border: red;
        /* background: red; */
        opacity: 20%;
    }

    .icons-customHighLight{
        border: red;
        /* background: red; */
        /* margin-right: 35%;
        margin-left: 35%; */
    }

    .middle-custom {
        opacity: 20%;
    }

    .texts-custom {
        opacity: 20%;
    }

    .card {
        height: 60vh;
    }

    .card-header {
        background-color: white;
    }

    .texting{
        color: #6A040F;
    }

    .material-symbols-outlined {
        font-variation-settings:
        'FILL' 0,
        'wght' 400,
        'GRAD' 0,
        'opsz' 60
    }


</style>
@endsection

@section('content')

<div class="container-fluid">
    <div class="mb-0">
        <div class="row">
            <div class="LeftArrow col-md-1 d-flex align-items-center pb-3">
                <a href="">
                    <span class="material-symbols-outlined">
                        arrow_back_ios
                    </span>
                </a>
            </div>
            <div class="Milestone col-md-10 p-0">
                <div class="row p-0">
                    <div class="col-md-2 d-flex flex-column justify-content-center align-center-items">
                        {{-- <div class="left-arrow">
                            <img src="public/img/government/leftArrow.png" alt="">
                        </div> --}}
                        <div class="icons-customHighLight rounded-circle d-flex justify-content-center p-2">
                            <span class="material-symbols-outlined">
                                person_check
                            </span>
                        </div>
                        <div class="middle-customHighLight d-flex">
                            <div class="line-custom col-md-7 p-1"></div>
                            <span class="material-symbols-outlined">
                                arrow_right
                            </span>
                        </div>
                        <div class="texts-customHighLight d-flex justify-content-center text-center ">
                            <p class="texting fw-bold">
                                Laporan <br>
                                Diproses
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2 d-flex flex-column justify-content-center align-center-items">
                        <div class="icons-custom rounded-circle d-flex justify-content-center p-2">
                            <span class="material-symbols-outlined">
                                quick_reference_all
                            </span>
                        </div>
                        <div class="middle-custom d-flex">
                            <div class="line-custom col-md-7 p-1"></div>
                            <span class="material-symbols-outlined">
                                arrow_right
                            </span>
                        </div>
                        <div class="texts-custom d-flex justify-content-center text-center">
                            <p class="texting fw-bold">
                                Survei <br>
                                Lokasi
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2 d-flex flex-column justify-content-center align-center-items">
                        <div class="icons-custom rounded-circle d-flex justify-content-center p-2">
                            <span class="material-symbols-outlined">
                                export_notes
                            </span>
                        </div>
                        <div class="middle-custom d-flex">
                            <div class="line-custom col-md-7 p-1"></div>
                            <span class="material-symbols-outlined">
                                arrow_right
                            </span>
                        </div>
                        <div class="texts-custom d-flex justify-content-center text-center">
                            <p class="texting fw-bold">
                                Memberikan <br>
                                Laporan
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2 d-flex flex-column justify-content-center align-center-items">
                        <div class="icons-custom rounded-circle d-flex justify-content-center p-2">
                            <span class="material-symbols-outlined">
                                groups
                            </span>
                        </div>
                        <div class="middle-custom d-flex">
                            <div class="line-custom col-md-7 p-1"></div>
                            <span class="material-symbols-outlined">
                                arrow_right
                            </span>
                        </div>
                        <div class="texts-custom d-flex justify-content-center text-center">
                            <p class="texting fw-bold">
                                Mengirim <br>
                                Tim Terkait
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2 d-flex flex-column justify-content-center align-center-items">
                        <div class="icons-custom rounded-circle d-flex justify-content-center p-2">
                            <span class="material-symbols-outlined">
                                monitoring
                            </span>
                        </div>
                        <div class="middle-custom d-flex">
                            <div class="line-custom col-md-7 p-1"></div>
                            <span class="material-symbols-outlined">
                                arrow_right
                            </span>
                        </div>
                        <div class="texts-custom d-flex justify-content-center text-center">
                            <p class="texting fw-bold">
                                Bukti <br>
                                Perkembangan
                            </p>
                        </div>
                    </div>
                    <div class="col-md-2 d-flex flex-column justify-content-center align-center-items">
                        <div class="icons-custom rounded-circle d-flex justify-content-center p-2 mb-1.5">
                            <span class="material-symbols-outlined">
                                task
                            </span>
                        </div>
                        <div class="middle-custom d-flex">
                            <div class="line-custom col-md-7 p-1"></div>
                        </div>
                        <div class="texts-custom d-flex justify-content-center text-center mt-2">
                            <p class="texting fw-bold">
                                Status <br>
                                Perbaikan
                            </p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="LeftArrow col-md-1 d-flex align-items-center justify-content-end pb-3">
                <a href="">
                    <span class="material-symbols-outlined">
                        arrow_forward_ios
                    </span>
                </a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header d-flex justify-content-between px-3">
            <h5 class="fw-bold mt-3">Laporan Terkini</h5>
            <div class="searchBar mt-2">
                <div class="container-fluid">
                    <form class="d-flex">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>


        <div class="card-body">
            <table class="table table-striped table-hover table-sm" style="width: 100%">
                <thead >
                    <tr>
                        <th>Judul Laporan</th>
                        <th>Daerah</th>
                        <th>Jumlah Laporan</th>
                        <th>Tanggal Unggah</th>
                        <th>Eksekusi</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($data as $item)

                    <tr>
                        <td>{{$item->title}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->count}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>
                            <button class="btn btn-outline-success m-0" type="submit">Cancel</button>
                            <button class="btn btn-outline-success m-0" type="submit">Next</button>
                        </td>

                    </tr>

                    @endforeach

                    {{-- <tr>
                        <td>Woilah</td>
                        <td>Sukabumi</td>
                        <td>107</td>
                        <td>High</td>
                        <td>2024-01-22</td>
                        <td>
                            <button class="btn btn-outline-success m-0" type="submit">Cancel</button>
                            <button class="btn btn-outline-success m-0" type="submit">Next</button>
                        </td>

                    </tr>
                    <tr>
                        <td>Hahaha Pize</td>
                        <td>Sukatanah</td>
                        <td>2000</td>
                        <td>Low</td>
                        <td>2025-13-60</td>
                        <td>
                            <button class="btn btn-outline-success m-0" type="submit">Cancel</button>
                            <button class="btn btn-outline-success m-0" type="submit">Next</button>
                        </td>
                    </tr> --}}

                </tbody>
            </table>
        </div>
    </div>
    {{-- <div class="Isian">
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
    </div> --}}

</div>

@endsection
