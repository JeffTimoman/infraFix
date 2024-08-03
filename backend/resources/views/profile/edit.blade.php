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

    .editIcon .material-symbols-outlined {
        color: red;
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
                    <div class="row">
                        <div class="data col-7">
                            <form action="{{ route('profile.update', $userId = auth()->user()->id) }}" method="POST" enctype="multipart/form-data" id="submit">
                                @csrf
                                <div class="mb-3">
                                    <label for="Username" class="form-label" style="font-weight: bold">Username</label>
                                    <input type="Username" class="form-control" id="Username" name="username" aria-describedby="Usernamehelp" value="{{ auth()->user()->username }}">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label" style="font-weight: bold">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" value="{{ auth()->user()->email }}">
                                </div>
                                <div class="form-group">
                                    <label for="image">Upload Image</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                </div>
                            </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="row justify-content-end mt-3">
            <button class="edit col-2" type="submit" onclick="document.getElementById('submit').submit()">
                Simpan
            </button>
        </div>
    </div>
</div>
@endsection
