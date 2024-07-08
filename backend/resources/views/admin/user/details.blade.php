@extends('layouts.admin')
@section('title')
    Laporan    
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

    .detail .material-symbols-outlined{
        font-variation-settings:
    'FILL' 0,
    'wght' 400,
    'GRAD' 0,
    'opsz' 24;
    color: #D8A4A4;
    }

    .reportBox{
    display: flex;
    align-items: center; /* Align items vertically in the center */
    justify-content: space-between; 
    }

    .report{
        background-color: white;
    }

    .row-detail{
        display: flex;
        
    }

    h5{
        font-size: 20px;
        font-weight: bold;

    }
  
    h3{
        font-size: 20px;
        font-weight: bold;

    }

    h7{
        word-wrap: break-word;
    }

    .status{
        display: flex;
    }

    .created{
        display: flex;
        background-color: #FAF9F9; 

    }

    .info2{
        display: flex;
        background-color: #FAF9F9; 
    }

    .report-table{
    width: 100%;    
    }

    
    .table-header{
        display: flex;
        border-bottom: 3px solid #EDEDED;
        /* background-color: #a50000; */
        align-items: center;
        /* margin-bottom: 3px; */
    }

    .case-id{
        display: flex;
    }

    .report-table th{
        border-bottom: 3px solid #EDEDED;
        text-align: center;
    }

    .report-table td{
        border-bottom: 1px solid #EDEDED;
        text-align: center;
    }

    .actions {
        display: flex;
        justify-content: space-between; /* Distributes space evenly */
        align-items: center; /* Center vertically */
        width: 100%;
        height: 100%;
    }
    

    .button-header{
        display: flex;
        justify-content: start;
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
                <div class="button-header col-12 col-md-11">
                    <a href="{{ route('user.index') }}">
                        <button class="button-add">
                            Kembali
                        </button>
                    </a>
                </div>
            </div>
            <div class="row mb-3">
                <div class="reportbox col-12 col-md-11 ">
                    <div class="report border-0">
                        <div class="report-body py-2">
                            <div class="table-header py-2 px-3">
                                <div class="table-title col-12 col-md-12">
                                    {{-- <h5>Detail Kasus</h5> --}}
                                    <div class="case-id col-12 col-md-12">
                                        <div class="id col-md-4">
                                            <h7>ID : {{ $data->id }}  </h7>
                                        </div>
                                        <div class="id col-md-4">
                                            <h7>Aktif: {{ $data->is_active }} </h7>
                                        </div>
                                        <div class="case col-md-4">
                                            <h7>Remember Token: {{ $data->remember_token }} </h7>
                                        </div>

                                    </div>
                                </div>
        
                            </div>
                            <div class="row-detail col-12 col-md-12 py-4">
                                <div class="detail-content px-3 py-1 col-md-4">
                                    <h3>Name</h3>
                                    <h7>{{ $data->name }} </h7>
                                </div>      
                                <div class="detail-content px-3 py-1 col-md-4">
                                    <h3>Username</h3>
                                    <h7>{{ $data->username }} </h7>

                                </div>
                                <div class="detail-content px-3 py-1 col-md-4">
                                    <h3>Email</h3>
                                    <h7>{{ $data->email }} </h7>
                                 </div>
                            </div>
                           
                            <div class="info2  col-12 col-md-12 py-4">
                                <div class="detail-content col-md-4 px-3 py-2">
                                    <h3>Profile Picture</h3>
                                    <h7>{{ $data->profile_pic }} </h7>
                                </div>
                                <div class="detail-content  col-md-4 px-3 py-2">
                                    <h3>Role</h3>
                                    <h7>{{ $data->role }} </h7>
                                </div>
                                <div class="detail-content  col-md-4 px-3 py-2">
                                    <h3>Tanggal lahir</h3>
                                    <h7>{{ $data->date_of_birth }} </h7>
                                </div>
                            </div>
                           
                            <div class="status col-12 col-md-12 py-4">
                                <div class="detail-content col-md-4 px-3 py-2">
                                    <h3>Password</h3>
                                    <h7>{{ $data->password }} </h7>

                                </div>
                            
                            </div>
                            
                            <div class="created col-12 col-md-12 py-4">
                                <div class="detail-content col-md-4 px-3 py-2">
                                    <h3>Email Verified at</h3>
                                    <h7>{{ $data->email_verified_at }} </h7>
                                </div>
                                <div class="detail-content col-md-4 px-3 py-2">
                                    <h3>Created at</h3>
                                    <h7>{{ $data->created_at }} </h7>
                                </div>
                                <div class="detail-content col-md-4 px-3 py-2">
                                    <h3>Updated at</h3>
                                    <h7>{{ $data->updated_at }} </h7>
                                </div>
                            </div>
                          
                        </div>

                        
                    </div>
                </div>
            </div>

           
        </div>
    
    
</body>
</html>
@endsection