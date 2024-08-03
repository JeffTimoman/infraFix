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
    @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    <div class="container mt-5">
        <div class="row " style="border-radius: 20px">
            @include('profile.sidebar')
            <div class="card col-11">
                <div class="col">
                    <div class="title mt-2">
                        <h4>Profile</h4>
                    </div>
                    @if(!$user->profile_picture)
                        <div class="image text-center justify-content-center mb-3"  >
                            <img src="{{ asset('components/img/icon/user.png') }}" alt="" >
                        </div>
                    @else
                        <div class="image text-center justify-content-center mb-3"  >
                            <img src="{{ asset('upload/profilepicture/' . $user->profile_picture) }}" alt="Profile Picture" style="width: 150px;">
                        </div>
                    @endif
                    <div class="username text-center">
                        <h4 style="color: #626262;">{{ $user->username }}</h4>
                    </div>
                    <div class="email text-center">
                        <h4>{{ $user->email }}</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-end mt-3">
            <a href="{{ route('profile.edit', ['user' => $user->id]) }}" class="justify-content-end text-end">
                <button class="edit col-2">Ubah Profile</button>
            </a>
        </div>
    </div>
</div>
@endsection
