@extends('layouts.government')

@section('style')
    <style>
        .main {
            background-color: #EDEDED;
        }

        .line-custom {
            width: 100%;
            height: 5px;
            background-color: #6A040F;
            border-radius: 20px;
            margin-top: 8px;
            /* margin-top: 2%;
                                                    margin-right: 2%; */
        }

        .icons-custom {
            border: red;
            /* background: red; */
            opacity: 20%;
        }

        .icons-customHighLight {
            border: red;
            /* background: red; */
            /* margin-right: 35%;
                                                    margin-left: 35%; */
        }

        .middle-custom {
            opacity: 20%;
        }

        .texts-custom {
            opacity: 20%;
        }

        .card {
            height: 60vh;
        }

        .card-header {
            background-color: white;
        }

        .texting {
            color: #A50000;
        }

        .line-custom{
            background-color: #A50000;
        }

        .middle-custom span {
            color: #A50000;
        }

        .middle-customHighLight span {
            color: #A50000;
        }

        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 60
        }

        .dataTables_wrapper {
        height: 100%;
    }

    .dataTables_scrollBody {
        height: 70%;
    }

    .dataTables_filter {
        display: none;
        justify-content: flex-end;
        align-items: center;
        padding-bottom: 20px;

    }

    .dataTables_filter label {
        display: flex;
        justify-content: flex-end;
        font-weight: bold;
    }

    .dataTables_length {
        display: none;
    }

    </style>
@endsection

@section('content')
    @php
        //get the id from the route government/perkembangan/{id}
        $current_id = request()->route('id');
    @endphp
    <div class="container-fluid p-0 pt-4 pe-5 ps-5">
        <div class="mb-0 pt-2">
            <div class="row">

                <div class="LeftArrow col-md-1 d-flex align-items-center p-0 pb-2">
                    <a
                        href="@if ($current_id <= 1) #
                @else
                    {{ $current_id - 1 }} @endif">
                        <i class="bi bi-chevron-left" style="color: #A50000; font-size: 70px;"></i>
                    </a>
                </div>
                <div class="Milestone col-md-10 p-0">
                    <div class="row p-0">
                        <div class="col-md-2 d-flex flex-column justify-content-center align-center-items">
                            {{-- <div class="left-arrow">
                            <img src="public/img/government/leftArrow.png" alt="">
                        </div> --}}

                            {{-- <div class="icons-customHighLight rounded-circle border d-flex justify-content-center p-2">
                                <span class="material-symbols-outlined">
                                    report
                                </span>
                            </div> --}}


                            <div
                                class="@if ($current_id == 1) icons-customHighLight
                            @else
                                icons-custom @endif d-flex justify-content-center p-2">
                                <span class="material-symbols-outlined" style="color: #A50000; font-size: 35px;">
                                    person_check
                                </span>
                            </div>

                            <div
                                class="@if ($current_id == 1) middle-customHighLight
                            @else
                                middle-custom @endif d-flex">
                                <div class="line-custom col-md-7 p-1" ></div>
                                <span class="material-symbols-outlined">
                                    arrow_right
                                </span>
                            </div>

                            <div
                                class="@if ($current_id == 1) texts-customHighLight
                            @else
                                texts-custom @endif d-flex justify-content-center text-center ">
                                <p class="texting fw-bold">
                                    Laporan <br>
                                    Diproses
                                </p>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex flex-column justify-content-center align-center-items">
                            <div
                                class="@if ($current_id == 2) icons-customHighLight
                            @else
                                icons-custom @endif rounded-circle d-flex justify-content-center p-2">
                                <span class="material-symbols-outlined" style="color: #A50000; font-size: 35px;">
                                    quick_reference_all
                                </span>
                            </div>
                            <div
                                class="@if ($current_id == 2) middle-customHighLight
                            @else
                                middle-custom @endif d-flex">
                                <div class="line-custom col-md-7 p-1"></div>
                                <span class="material-symbols-outlined">
                                    arrow_right
                                </span>
                            </div>
                            <div
                                class="@if ($current_id == 2) texts-customHighLight
                            @else
                                texts-custom @endif d-flex justify-content-center text-center">
                                <p class="texting fw-bold" >
                                    Survei <br>
                                    Lokasi
                                </p>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex flex-column justify-content-center align-center-items">
                            <div
                                class="@if ($current_id == 3) icons-customHighLight
                            @else
                                icons-custom @endif rounded-circle d-flex justify-content-center p-2">
                                <span class="material-symbols-outlined" style="color: #A50000; font-size: 35px;">
                                    export_notes
                                </span>
                            </div>
                            <div
                                class="@if ($current_id == 3) middle-customHighLight
                            @else
                                middle-custom @endif d-flex">
                                <div class="line-custom col-md-7 p-1"></div>
                                <span class="material-symbols-outlined">
                                    arrow_right
                                </span>
                            </div>
                            <div
                                class="@if ($current_id == 3) texts-customHighLight
                            @else
                                texts-custom @endif d-flex justify-content-center text-center">
                                <p class="texting fw-bold">
                                    Memberikan <br>
                                    Laporan
                                </p>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex flex-column justify-content-center align-center-items">
                            <div
                                class="@if ($current_id == 4) icons-customHighLight
                            @else
                                icons-custom @endif rounded-circle d-flex justify-content-center p-2">
                                <span class="material-symbols-outlined" style="color: #A50000; font-size: 35px;">
                                    groups
                                </span>
                            </div>
                            <div
                                class="@if ($current_id == 4) middle-customHighLight
                            @else
                                middle-custom @endif d-flex">
                                <div class="line-custom col-md-7 p-1"></div>
                                <span class="material-symbols-outlined">
                                    arrow_right
                                </span>
                            </div>
                            <div
                                class="@if ($current_id == 4) texts-customHighLight
                            @else
                                texts-custom @endif d-flex justify-content-center text-center">
                                <p class="texting fw-bold">
                                    Mengirim <br>
                                    Tim Terkait
                                </p>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex flex-column justify-content-center align-center-items">
                            <div
                                class="@if ($current_id == 5) icons-customHighLight
                            @else
                                icons-custom @endif rounded-circle d-flex justify-content-center p-2">
                                <span class="material-symbols-outlined" style="color: #A50000; font-size: 35px;">
                                    monitoring
                                </span>
                            </div>
                            <div
                                class="@if ($current_id == 5) middle-customHighLight
                            @else
                                middle-custom @endif d-flex">
                                <div class="line-custom col-md-7 p-1"></div>
                                <span class="material-symbols-outlined">
                                    arrow_right
                                </span>
                            </div>
                            <div
                                class="@if ($current_id == 5) texts-customHighLight
                            @else
                                texts-custom @endif d-flex justify-content-center text-center">
                                <p class="texting fw-bold">
                                    Bukti <br>
                                    Perkembangan
                                </p>
                            </div>
                        </div>
                        <div class="col-md-2 d-flex flex-column justify-content-center align-center-items">
                            <div
                                class="@if ($current_id == 6) icons-customHighLight
                            @else
                                icons-custom @endif rounded-circle d-flex justify-content-center p-2 mb-1.5">
                                <span class="material-symbols-outlined" style="color: #A50000; font-size: 35px;">
                                    task
                                </span>
                            </div>
                            <div
                                class="@if ($current_id == 6) middle-customHighLight
                            @else
                                middle-custom @endif d-flex">
                                <div class="line-custom col-md-7 p-1"></div>
                            </div>
                            <div
                                class="@if ($current_id == 6) texts-customHighLight
                            @else
                                texts-custom @endif d-flex justify-content-center text-center mt-2">
                                <p class="texting fw-bold">
                                    Status <br>
                                    Perbaikan
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="LeftArrow col-md-1 d-flex align-items-center justify-content-end p-0 pb-2">
                    <a href="@if ($current_id >= 6) #
                @else
                    {{ $current_id + 1 }} @endif">
                        <i class="bi bi-chevron-right" style="color: #A50000; font-size: 70px;"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header d-flex justify-content-between px-3">
                <h5 class="fw-bold mt-3">Laporan Perkembangan</h5>
                <div class="searchBar mt-2">
                    <div id="externalSearchContainer">
                        <label for="externalSearchInput">Search: </label>
                        <input type="text" id="externalSearchInput">
                    </div>
                </div>
            </div>


            <div class="card-body m-0 p-0" >
                <table class="table align-middle table-striped table-hover table-sm display p-0 m-0" style="width: 100%" id="myTable">
                    <thead>
                        <tr>
                            <th>Judul Laporan</th>
                            <th>Daerah</th>
                            <th>Jumlah Laporan</th>
                            <th>Tanggal Unggah</th>
                            <th>Eksekusi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($data as $item)
                            @php
                                $case_id = $item->case_id;
                                $milestone_id = $item->milestone_id;
                                $nextMilestone = $milestone_id + 1;
                                $check = \App\Models\MilestoneDetail::where('case_id', $case_id)
                                    ->where('milestone_id', $nextMilestone)
                                    ->first();
                            @endphp

                            @if ($check)
                                @continue
                            @else
                                <tr>
                                    <td>{{ $item->case->title }}</td>
                                    <td>{{ $item->case->address }}</td>
                                    <td>{{ $item->case->reports->count() }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td class="d-flex" style="gap: 2px;">
                                        <form action="{{route('government.destroy')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="case_id" id="" value="{{$item->case->id}}">
                                            <button class="btn btn-outline-success " type="submit" style="background-color: #A50000; border: none; color:#EDEDED;">Cancel</button>
                                        </form>

                                        {{-- <form action="{{route('government.store')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="case_id" id="" value="{{$item->case->id}}">
                                            <button class="btn btn-outline-success " type="submit">Next</button>
                                        </form> --}}

                                        <button class="btn btn-outline-success m-0" type="button" data-bs-toggle="modal" data-bs-target="#uploadModal{{$item->id}}" style="background-color: #A50000; border: none; color:#EDEDED;">Next</button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="uploadModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel{{$item->id}}" aria-hidden="true">
                                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <p class="modal-title" id="uploadModalLabel{{$item->id}}" style="font-weight: bold;">Berikan Deskripsi Perkembangan</p>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{route('government.store')}}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="case_id" value="{{$item->case->id}}">
                                                                <div class="form-group">
                                                                    <p class="m-0 p-0" style="font-weight: bold;">Judul Laporan</p>
                                                                    <label for="description{{$item->id}}">Description {{$item->case->title}}</label>

                                                                    <p class="m-0 p-0 pt-3" style="font-weight: bold;">Berikan Penjelasan Detail Pada Description Box Dibawah Ini</p>
                                                                    <textarea class="form-control" id="description{{$item->id}}" placeholder="Isi Disini" name="description" rows="3"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary" style="background-color: #A50000; border: none; color:#EDEDED;">Upload</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
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
    <style>
        .paginate_button.active a {
            background-color: #A50000 !important;
            color: white !important;
            border: 0;
        }

        .paginate_button a {
            color: black !important;
        }
    </style>
    <script>
        $(document).ready(function() {
            var table= $('#myTable').DataTable({
                "pagingType": "full_numbers", // Choose the pagination type
                "language": {
                    "paginate": {
                        "first": "<<",
                        "last": ">>",
                        "next": ">",
                        "previous": "<",
                        "dom": 'rt<"bottom"ip><"clear">' // Remove default search box
                    }
                },
                "scrollY": '48vh', // Set the scroll height
                "scrollCollapse": false, // Allow the table to reduce in height if less data
                "paging": true // Enable paging
            });
            $('#externalSearchInput').on('keyup', function() {
                table.search(this.value).draw();
            });
        });
    </script>
@endsection
