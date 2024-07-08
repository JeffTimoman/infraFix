@extends('layouts.admin')
@section('title')
    Komentar
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
               <div class="row mb-3 col-12 col-md-11 ">
                    <div class="search col-md-8">
                        <div class="form col-md-11">
                            <form action="{{ route('comment.index')}}" class="d-flex" role="search" method="GET">
                                <div class="input-group">
                                    <input class="form-control" type="search" placeholder="Search" name="query" value="{{ session('query') }}">
                                    <button class="btn btn-outline-secondary search-btn" type="submit">
                                        <i class="lni lni-search-alt"></i>
                                    </button>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="add col-md-4">
                        <a href="{{ route('comment.create') }}">
                            <div class="button-header ">
                                <button class="button-add">
                                    Tambah +
                                </button>
                            </div>
                        </a>
                    </div>
            </div>
            <div class="row mb-3">
                <div class="reportbox col-12 col-md-11 ">
                    <div class="report border-0">
                        <div class="report-body py-2">
                            <div class="table-header py-2 px-3">
                                <div class="table-title">
                                    <h5>Komentar</h5>
                                </div>
                            </div>
                            <table class="report-table ">
                                <thead>
                                    <tr>
                                        <th class="px-3">ID</th>
                                        <th>Content</th>
                                        <th>Anonymous</th>
                                        <th>Banned</th>
                                        <th>User</th>
                                        <th>Case</th>
                                        <th>Created at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                @foreach($data as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>


                                    <td>{{ Str::limit($item->content, 80, '...') }}</td>
                                    <td>{{ $item->anonymous }}</td>
                                    <td>{{ $item->banned }}</td>
                                    <td>{{ $item->user_id }}</td>
                                    <td>{{ $item->case_id }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>
                                        <div class="actions col-12 col-md-12">
                                            <div class="detail ">
                                                <a href="{{ route('comment.details', $id = $item->id) }}">
                                                    <span class="material-symbols-outlined">
                                                        info
                                                     </span>
                                                </a>
                                            </div>
                                            <div class="edit">
                                                <a href="{{ route('comment.edit', $id = $item->id) }}">
                                                    <span class="material-symbols-outlined">
                                                        edit
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="delete">
                                                <a href="{{ route('comment.destroy', $id = $item->id) }}">
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
                        {{ $data->links('vendor.pagination.custom') }}
                    </div>
                </div>

        </div>


</body>
</html>
@endsection
