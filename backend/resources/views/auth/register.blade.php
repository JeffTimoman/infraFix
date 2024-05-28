@extends('layouts.app')

@section('title')
    Register
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

        /* Increase the size of the radio buttons */
        .form-check-input {
            width: 20px;
            height: 20px;
        }

        .form-check-input {
            border-color: red;
        }

        /* Change the color of the radio buttons to red */
        .form-check-input:checked {
            background-color: red;
            border-color: red;
            box-shadow: 0 0 2px #E39292;
            border-color: #E39292;
        }

        /* Change the color of the radio buttons before they are checked */
        .form-check-input {
            accent-color: red;
        }
    </style>
@endsection

@section('content')
    <div class="row mx-auto d-flex align-items-center justify-content-center w-50 mt-5" style="height: 70vh;">
        {{-- <div class="col-md-4"> --}}
            <div class="d-flex justify-content-center align-item-center my-3">
                <form action="{{route('auth.register')}}" class="col-md-12 row d-flex justify-content-center align-item-center" method="POST">
                    @csrf
                    <h2 class="text-center">Daftar</h2>
                    <div class="col-md-12 mb-2">
                        <input type="text" class="form-control register-input" placeholder="Nama" name="name">
                    </div>
                    <div class="col-md-12 mb-2">
                        <input type="date" class="form-control register-input" placeholder="Tanggal Lahir" name="birth">
                    </div>
                    <div class="col-md-12 mb-2">
                        <input type="email" class="form-control register-input" placeholder="Email" name='email'>
                    </div>
                    <div class="col-md-12 mb-2">
                        <input type="text" class="form-control register-input" placeholder="Username" name="username">
                    </div>
                    <div class="col-md-6">
                        <input type="password" class="form-control register-input" placeholder="Kata Sandi" name="password">
                    </div>
                    <div class="col-md-6">
                        <input type="password" class="form-control register-input col-md-5" placeholder="Ulangi Kata Sandi" name="confirm">
                    </div>
                    <p><small>Sudah pernah daftar? <a href="{{ route('auth.login')}}" style="text-decoration: none; color: #A50000;">Masuk.</a></small></p>
                    <div class="col-md-12 d-flex align-items-center justify-content-center">
                        <button class="btn btn-md text-light col-md-4" style="background-color: #A50000; ">Daftar</button>
                    </div>
                </form>
            </div>
        {{-- </div> --}}
    </div>
@endsection
