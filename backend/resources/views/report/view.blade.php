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

        .form-input-modified {
            border-color: rgb(49, 44, 44);
        }

        .form-input-modified:focus {
            border: 1px solid #A50000;
            box-shadow: 1px 1px 5px #A50000;
        }
    </style>
@endsection

@section('content')
    <form action="" method="POST">
        @csrf
        <div class="card p-3">
            <h3 class="text-center">Cek Laporanmu Disini!</h3>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <label for="" class="form-label">Kode Laporan</label>
                        <input type="text" class="form-control form-input-modified" name="report_code"required>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label">Kode Akses</label>
                        <input type="text" class="form-control form-input-modified" name="access_key" required>
                    </div>
                </div>
                <button class="btn btn-modified col-md-12 mt-3" type="submit">
                    Cari
                </button>
            </div>
        </div>
    </form>
@endsection

@section('script')
@endsection
