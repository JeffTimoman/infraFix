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
                        <h4>Change Password</h4>
                    </div>
                    <div class="row">
                        <form name="passwordChange" id="passwordChange" class="passwordChange" action="{{ route('profile.changePassword',  $userId = auth()->user()->id) }}">
                            <div class="data col-6">
                                <div class="mb-3">
                                    <label for="CurrrentPassword" class="form-label">Current Password</label>
                                    <input type="password" class="form-control" id="CurrrentPassword" name="current_password" aria-describedby="CurrentPasswordhelp">
                                </div>
                            </div>
                            <div class="data col-6">
                                    <div class="mb-3">
                                        <label for="NewPassword" class="form-label">New Password</label>
                                        <input type="password" class="form-control" id="NewPassword" name="new_password" aria-describedby="NewPasswordhelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="ConfirmPassword" class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" id="ConfirmPassword" name="confirm_password"  aria-describedby="ConfirmPasswordhelp">
                                    </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="row justify-content-end mt-3">
            <button class="edit col-2" type="submit" onclick="document.getElementById('passwordChange').submit()">
                Simpan
            </button>
        </div>
    </div>
</div>
@endsection
