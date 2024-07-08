@extends('layouts.admin')
@section('title')
    Milestone    
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

    .location{
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
        text-align: start;
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
        justify-content: end;
        /* background-color: red; */
    }

    .button-back{
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
                                            <h7>Case ID : {{ $data->case_id }} </h7>
                                        </div>

                                    </div>
                                </div>
        
                            </div>
                            <div class="row mb-3">
                                <div class="reportbox col-12 col-md-12 ">
                                    <div class="report border-0">
                                        <div class="report-body py-2">
                                            <div class="table-header col-12 col-md-12  py-2 px-3">
                                                <div class="table-title col-md-6">
                                                    <h5>Milestone Details</h5>
                                                </div>    
                                                <div class="button-header col-md-6">
                                                    <a href="{{ route('kelurahan.create') }}">
                                                        <button class="button-add">
                                                            Tambah +
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                            <table class="report-table "->              
                                                <thead>
                                                    <tr>
                                                        <th class="px-3">Description</th>
                                                        <th>Created at</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                
                                                @foreach($detail as $item)
                                                <tr>
                                                    <td>{{ $item->description }}</td>
                                                    <td>{{ $item->created_at }}</td>
                                                    <td>
                                                        <div class="actions">
    
                                                            <div class="edit">
                                                                <a href="{{ route('milestone.edit', $id = $item->id) }}">
                                                                    <span class="material-symbols-outlined">
                                                                        edit
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="delete">
                                                                <a href="{{ route('milestone.destroy', $id = $item->id) }}">
                                                                    <span class="material-symbols-outlined">
                                                                        delete
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            
                                                        </div>
                                                     
                                                    </td>
                                                </tr>
                                                @endforeach
                
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="row">
                                    <div class="pagination col-12 col-md-10 ">
                                        {{ $detail->links('vendor.pagination.custom') }}
                                    </div>
                                </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>   
        
        <div class="row mb-3">
            <div class="button-back col-12 col-md-11 px-3">
                <a href="{{ route('milestone.index')}}">
                    <button class="button-add">
                        Kembali
                    </button>
                </a>
            </div>
        </div>
    </div>
    
    
</body>
</html>
@endsection