@extends('layouts.app')

@section('title')
    Ganti Sandi
@endsection

@section('style')
    <style>
        .register-input {
            border: 1px solid #A50000;
            border-color: #A50000;
        }

        .register-input:focus {
            box-shadow: 0 0 10px #E39292;
            border-color: #E39292;
        }
    </style>
@endsection

@section('content')
    <div class="row mx-auto d-flex align-items-center justify-content-center w-50 mt-5 card" style="height: 30vh;">
        <div class="d-flex justify-content-center align-item-center my-3">
            <form action="{{ route('auth.reset_password_form') }}" class="col-md-12 row d-flex justify-content-center align-item-center"
                method="POST">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <input type="hidden" name="email" value="{{ request('email') }}">
                <h2 class="text-center">Ganti Sandi</h2>
                <div class="col-md-12">
                    <input class="form-control register-input" placeholder="Sandi Baru" name="password" type="password" required>

                </div>
                <div class="col-md-12 mt-2 mb-2">
                    <input class="form-control register-input" placeholder="Konfirmasi Sandi" name="password_confirmation" type="password" required>

                </div>
                <div class="col-md-12 d-flex align-items-center justify-content-center">
                    <button class="btn btn-md text-light col-md-12" style="background-color: #A50000; ">Ubah</button>

                </div>
            </form>
        </div>
    </div>
@endsection
