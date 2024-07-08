@extends('layouts.admin')
@section('title')
    User    
@endsection
@section('style')
    <style>
           
           .content {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        width: 100%;
        overflow: hidden;
        transition: all 0.35s ease-in-out;
        background-color: #F1F1F1;
        min-width: 0;
    }

    .material-symbols-outlined {
        font-variation-settings:
        'FILL' 0,
        'wght' 400,
        'GRAD' 0,
        'opsz' 24;
        color: #a50000;
        
    }


    .row{
        justify-content: center;
    }

    .actions{
        display: flex;
    }

    .edit .material-symbols-outlined{
        font-variation-settings:
    'FILL' 0,
    'wght' 400,
    'GRAD' 0,
    'opsz' 24;
    color: #949494;
    }

    .reportBox{
    display: flex;
    align-items: center; /* Align items vertically in the center */
    justify-content: space-between; 
    }

    .report{
        background-color: white;
    }

    .table-header{
        display: flex;
        border-bottom: 3px solid #EDEDED;
        /* background-color: #a50000; */
        align-items: center;
        /* margin-bottom: 3px; */
    }

    .table-title{
        width: 50%;
    }


    .table-button{
        width: 50%;
        display: flex;
        justify-content: end;
    }

    .table-title h5{
        font-weight: bold;
        font-size: 24px;
    }


    .report-table{
    width: 100%;    
    }

    .report-table th{
        border-bottom: 3px solid #EDEDED;
        text-align: center;
    }

    .report-table td{
        border-bottom: 1px solid #EDEDED;
        text-align: center;
    }

    .color-input {
        background-color: #F2F2F2; /* Light gray background */
        border: 1px solid #F2F2F2; /* Gray border */
        color: #000; /* Text color */
    }

    .actions {
        display: flex;
        justify-content: center; /* Center horizontally */
        align-items: center; /* Center vertically */
        width: 100%;
        height: 100%;
    }
    
    .button-header{
        display: flex;
        justify-content: end;
        /* background-color: red; */
    }

    .button-add{
        border-radius: 15px;
        border-width: 0px;
        background-color: #a50000;
        width: 154px;
        height: 49px;
        color: white;
        font-size: 16px;
        font-weight: bold;
    }

    .button-seeAll{
        border-radius: 20px;
        border-width: 0px;
        background-color: #a50000;
        width: 92px;
        height: 43px;
        color: white;
        font-size: 16px;
        font-weight: bold;
    }


    .pagination{
        display: flex;
        justify-content: end;
        /* background-color: red; */
    }


    </style>    
@endsection
@section('content')
<div class="content">
    <div class="mb-3">
       
        <div class="row mb-3">
            <div class="reportbox col-12 col-md-11 ">
                <div class="report border-0">
                    <div class="report-body py-2">
                        <div class="row mb-3">
                            <div class="insert col-12 col-md-11">
                                <form action="{{ route('user.store') }}" id="submit">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama</label>
                                        <input type="name" class="form-control color-input" id="name" name="name" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="username" class="form-control color-input" id="username" name="username" required>
                                    </div>
                                  
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control color-input" id="email" name="email"  required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control color-input" id="password" name="password" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="date_of_birth" class="form-label">Tanggal Lahir</label>
                                        <input type="date_of_birth" class="form-control color-input" id="date_of_birth" name="date_of_birth" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="role">Role:</label>
                                        <select class="form-control color-input" id="role" name="role" required>
                                                <option value="admin">Admin</option>
                                                <option value="manager">Manager</option>
                                                <option value="government">Government</option>
                                                <option value="user">user</option>

                                        </select>
                        
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="is_active">Aktif:</label>
                                        <select class="form-control color-input" id="is_active" name="is_active" required>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>

                                        </select>
                        
                                    </div>

                                    <div class="mb-3">
                                        <label for="email_verified_at" class="form-label">Tanggal Verifikasi Email</label>
                                        <input type="email_verified_at" class="form-control color-input" id="email_verified_at" name="email_verified_at" required>
                                    </div>
                                   
                                </form>
                            </div>
                           
                        </div>
                        <div class="row mb-3">
                            <div class="button-header col-12 col-md-11">
                                    <button class="button-add" type="submit" onclick="document.getElementById('submit').submit()">
                                        Tambah +
                                    </button>
                                </a>
                             
                            </div>
                        </div>     
                    </div>
                </div>
            </div>
        </div>
       
    </div>
@endsection