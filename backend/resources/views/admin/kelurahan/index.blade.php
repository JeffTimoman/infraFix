@extends('layouts.admin')
@section('title')
    Kelurahan
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


    .dataTables_filter{
        display: flex;
        justify-content: end;
    }
    
    .paginate_button.active a {
            background-color: #A50000 !important;
            color: white !important;
            border: 0;
        }

    .paginate_button a {
        color: black !important;
    }
    </style>
@endsection
@section('content')
    <div class="content">
        <div class="mb-3">
            <div class="row mb-3">
                <div class="row mb-3">
                    <div class="row mb-3 col-12 col-md-11 ">
                        <div class="add col-md-12">
                            <a href="{{ route('kelurahan.create') }}">
                                <div class="button-header ">
                                    <button class="button-add">
                                        Tambah +
                                    </button>
                                </div>
                            </a>
                        </div>
                    </div>
            </div>
            <div class="row mb-3">
                <div class="reportbox col-12 col-md-11 ">
                    <div class="report border-0">
                        <div class="report-body py-2">
                            <div class="table-header py-2 px-3">
                                <div class="table-title">
                                    <h5>Kelurahan</h5>
                                </div>
                            </div>
                            <table class="report-table " id="myTable">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Kecamatan ID</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                @foreach($data as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->kecamatan_id }}</td>
                                    <td>
                                        <div class="actions">
                                            <div class="edit">
                                                <a href="{{ route('kelurahan.edit', $id = $item->id) }}">
                                                    <span class="material-symbols-outlined">
                                                        edit
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="delete">
                                                <a href="{{ route('kelurahan.destroy', $id = $item->id) }}">
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

        </div>


</body>
</html>
@endsection
@section('script')


<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include Bootstrap 5.3 JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<!-- Include DataTables JS -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

<!-- Include DataTables Buttons JS -->
<script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            "pagingType": "full_numbers", // Choose the pagination type
            "language": {
                "paginate": {
                    "first": "<<",
                    "last": ">>",
                    "next": ">",
                    "previous": "<"
                }
            }
        });
    });

</script>
@endsection
