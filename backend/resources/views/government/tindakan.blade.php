@extends('layouts.admin')

@section('style')

@endsection
<style>

    .main {
        background-color: #EDEDED;
    }

    .tablebox {
        background-color: white;
        margin-left: 4.25%;
        /* margin-bottom: 10%; */
        height: 80vh;
    }

</style>

@section('content')

<div class="container-fluid">
    <div class="Isian">
        <div class="row">
            <div class="tablebox col-12 col-md-11 rounded">
                <div class="table border-0">
                    <div class="table-body py-1">
                        <div class="table-header mt-3 px-3">
                            <div class="table-title d-flex justify-content-end">
                                <a href="">

                                    <span class="material-symbols-outlined">
                                        tune
                                    </span>
                                </a>
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
                                        <th>Terima Laporan</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($data as $item)
                                        <tr>
                                           <td>{{$item->title}}</td>
                                            <td>{{$item->address}}</td>
                                            <td>{{$item->case_number}}</td>
                                            <td>{{$item->created_at}}</td>
                                            <td>
                                                <button class="btn btn-outline-success m-0" type="submit">Kutindak</button>
                                            </td>
                                        </tr>
                                    @endforeach

                                    {{-- <a href="government.home">
                                    </a>
                                    <tr>
                                        <td>Hahaha Pize</td>
                                        <td>Sukatanah</td>
                                        <td>2000</td>
                                        <td>Low</td>
                                        <td>2025-13-60</td>
                                    </tr> --}}
                                </tbody>
                            </table>
                            {{-- {{$data->links()}} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
