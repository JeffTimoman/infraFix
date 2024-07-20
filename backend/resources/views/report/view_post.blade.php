@extends('layouts.app')
@section('title')
    Finish Report
@endsection
@section('style')
    <style>
        .btn-modified {
            background-color: #A50000;
            border-color: #A50000;
            color: white;
        }

        .btn-modified:hover {
            /* secondary color */
            background-color: #780202;
            border-color: #780202;
            color: white;
        }

        /* btn modified on click change color */
        .btn-modified:active {
            /* secondary color */
            background-color: #780202;
            border-color: #780202;
            color: white;
        }

        .btn-modified:focus {
            /* secondary color */
            background-color: #780202;
            border-color: #780202;
            color: white;
        }

        .statuslaporan {
            position: relative;
        }

        .unprocessed::after {
            content: '';
            width: 10px;
            height: 10px;
            left: 0;
            border-radius: 50%;
            top: 50%;
            background: red;
            transform: translate(0%, -50%);
            position: absolute;
        }

        .processed::after {
            content: '';
            width: 10px;
            height: 10px;
            left: 0;
            border-radius: 50%;
            top: 50%;
            background: green;
            transform: translate(0%, -50%);
            position: absolute;
        }
    </style>
@endsection

@section('content')
    <div class="card mx-5">

        <div class="card-body">
            <div class="col-md-12 row" id="form-4">
                <div class="col-md-12" style="margin: 0; padding: 0;">
                    <h3 class="text-center pb-2 border-bottom">Laporan | <span>{{ $data['report']->report_code }}</span></h3>
                </div>
                <div class="col-md-8 row">
                    <div class="col-md-6">
                        <h5>Tipe Kerusakan</h5>
                        <p class="summary-damage">{{ $data['report']->damage_type->name }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Lokasi</h5>
                        <p class="summary-lokasi">{{ $data['report']->kelurahan->name }}, {{$data['report']->kelurahan->kecamatan->name}}, {{$data['report']->kelurahan->kecamatan->kota->name}}, {{$data['report']->kelurahan->kecamatan->kota->provinsi->name}}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Detail Kerusakan</h5>
                        <p class="summary-detail">{{ $data['report']->description }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Alamat</h5>
                        <p class="summary-alamat">{{ $data['report']->address }}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-12">
                        <h5>Gambar Terlampir</h5>
                        <div class="summary-image">
                            {{-- {{ $data['report']->images }} --}}
                            @foreach ($data['report']->images as $item)
                                <img src="{{ asset('upload/reportimage/' . $item->name) }}" alt="" height="100px"
                                    width="auto">
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-12 row">
                    <div class="col-md-4">
                        <h5>Status Laporan</h5>
                        @if ($data['report']->status == -1)
                            <p class="statuslaporan unprocessed mr-2">&nbsp &nbsp Laporan tidak valid atau dianulir.</p>
                        @elseif ($data['report']->case_id == null)
                            <p class="statuslaporan unprocessed mr-2">&nbsp &nbsp Laporan belum di proses.</p>
                        @else
                            <p class="statuslaporan processed mr-2">&nbsp &nbsp Laporan telah di proses.</p>
                            <a href="#">Klik disini untuk melihat kasus yang telah diterbitkan.</a>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <h5>Tanggal Laporan Diterbitkan</h5>
                        <p>{{ $data['report']->created_at->format('l, d F Y, H:i:s') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="{{route('report.show')}}" class="btn btn-md btn-danger btn-modified mt-2 mx-5"> < Kembali</a>
@endsection

@section('script')
@endsection
