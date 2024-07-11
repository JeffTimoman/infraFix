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
                            <form>
                                <div class="mb-3">
                                  <label for="Username" class="form-label" style="font-weight: bold">Username</label>
                                  <input type="Username" class="form-control" id="Username" aria-describedby="Usernamehelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label" style="font-weight: bold">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                 </div>
                                 <div class="mb-3">
                                    <label for="phoneNumber" class="form-label" style="font-weight: bold">Phone Number</label>
                                    <input type="number" class="form-control" id="phoneNumber" aria-describedby="phoneNumberhelp">
                                  </div>
                            </form>
                        </div>
                        <div class="image col-4 justify-content-end text-end">
                            <img src="{{ asset('components/img/icon/user.png') }}" alt="" >
                        </div>
                        {{-- <div class="editIcon col-1">
                            <span class="material-symbols-outlined">
                                edit
                            </span>
                        </div> --}}
                    </div>

                </div>
            </div>
        </div>

        <div class="row justify-content-end mt-3">
            <button class="edit col-2">Simpan</button>
        </div>
    </div>
</div>
@endsection
