@extends('profile.navbar')
@section('style')
<style>

    .content {
        min-height: 100vh;
        width: 100%;
        overflow: hidden;
        transition: all 0.35s ease-in-out;
        background-color: #F1F1F1;
        min-width: 0;
    }

    .sidebar{
        background-color: #a50000;
    }

    .material-symbols-outlined {
        color: white;
    }

    .image img{
        width: 170px;
        height: 170px;
    }

    .edit{
        border-radius: 15px;
        border-width: 0px;
        background-color: #a50000;
        width: 154px;
        height: 49px;
        color: white;
        font-size: 16px;
        font-weight: bold;
    }

</style>
@endsection
@section('content')
<div class="content">
    <div class="container mt-5">
        <div class="row " style="border-radius: 20px">
            @include('profile.sidebar')
            <div class="card col-11">
                <div class="col">
                    <div class="title mt-2">
                        <h4>Profile</h4>
                    </div>
                    <div class="image text-center justify-content-center mb-3"  >
                        <img src="{{ asset('components/img/icon/user.png') }}" alt="" >
                    </div>
                    <div class="username text-center">
                        <h4 style="color: #626262;">@cremecheeze</h4>
                    </div>
                    <div class="email text-center">
                        <h4>chizu@gmail.com</h4>
                    </div>
                    <div class="no-telp text-center">
                        <h4>08121929120</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-end mt-3">
            <a href="{{ route('profile.edit') }}" class="justify-content-end text-end">
                <button class="edit col-2">Ubah Profile</button>
            </a>
        </div>
    </div>
</div>
@endsection
