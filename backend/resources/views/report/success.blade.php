@extends('layouts.app')
@section('title')
    Finish Report
@endsection
@section('style')
<style>
    .btn-modified{
        background-color: #A50000;
        border-color: #A50000;
        color: white;
    }

    .btn-modified:hover{
        /* secondary color */
        background-color: #780202;
        border-color: #780202;
        color: white;
    }

    /* btn modified on click change color */
    .btn-modified:active{
        /* secondary color */
        background-color: #780202;
        border-color: #780202;
        color: white;
    }

    .btn-modified:focus{
        /* secondary color */
        background-color: #780202;
        border-color: #780202;
        color: white;
    }
</style>
@endsection

@section('content')
    {{-- <div class="row"> --}}
    <div class="card p-2">
        <div class="card-body text-center d-flex align-items-center flex-column justify-content-center" style="height:50vh;">
            <h3 class="text-center">Laporanmu telah berhasil dibuat!</h3>
            <h4 class="" style="">
                ID Laporan : {{ $data['report_code'] }}
            </h4>
            <h4 >
                Kode Akses : {{ $data['access_key'] }}
            </h4>
            <h5 class="text-danger text-center">Harap Simpan ID Laporan dan Kode Akses untuk melihat progres pada laporan
                yang telah kamu buat.</h5>
            <h5 class="text-danger text-center">Apabila alamat emailmu valid, maka akan dikirimkan salinan dari halaman ini
                yang berisi ID Laporan dan Kode Akses.</h5>
            <div>
                <a href="#" class="btn btn-secondary">Cara mengakses laporanmu</a>
                <form action="{{route('report.show')}}" method="POST">
                    @csrf
                    <input type="hidden" class="form-control form-input-modified" name="report_code" value="$data['report_code']">
                    <input type="hidden" class="form-control form-input-modified" name="access_key" value="$data['access_key']">
                    <button class="btn btn-modified" type="submit">Lihat Perkembangan Laporan Disini</button>
                </form>
            </div>
        </div>
    </div>
    {{-- </div> --}}
@endsection

@section('script')
@endsection
