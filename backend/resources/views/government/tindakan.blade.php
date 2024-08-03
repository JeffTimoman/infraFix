@extends('layouts.government')

@section('style')
@endsection
<style>
    .main {
        background-color: #EDEDED;
    }

    .tablebox {
        background-color: white;
        margin-left: 4.25%;
        /* margin-bottom: 10%; */
        height: 80vh;
    }

    .dataTables_wrapper {
        height: 100%;
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

    .paginate_button.active a {
            background-color: #A50000 !important;
            color: white !important;
            border: 0;
        }

        .paginate_button a {
            color: black !important;
        }

</style>

@section('content')
    <div class="container-fluid mt-5">
        <div class="Isian">
            <div class="row">
                <div class="tablebox col-12 col-md-11 shadow p-1 mb-5 bg-body rounded">
                    <div class="table border-0">
                        <div class="table-body py-1">
                            <div class="table-header mt-3 px-3 d-flex justify-content-between">
                                <h5 class="fw-bold">Penindakan Laporan</h5>

                                <div id="externalSearchContainer">
                                    <label for="externalSearchInput">Search: </label>
                                    <input type="text" id="externalSearchInput">
                                </div>
                            </div>

                            <div class="costum-divider"></div>
                            <div class="table-lower justify-content-center" >
                                <table class="table align-middle p-0 m-0" id="myTable" >
                                    <thead class="">
                                        <tr>
                                            <th>Judul Laporan</th>
                                            <th>Daerah</th>
                                            <th>Jumlah Laporan</th>
                                            <th>Tanggal Unggah</th>
                                            <th>Terima Laporan</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($data as $item)
                                            <tr>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->address }}</td>
                                                <td>{{ $item->reports->count() }}</td>
                                                <td>{{ $item->created_at }}</td>
                                                <td>
                                                    <button class="btn btn-outline-success m-0" type="button"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#uploadModal{{ $item->id }}"
                                                        style="background-color: #A50000; border: none; color:#EDEDED;">Kutindak</button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="uploadModal{{ $item->id }}"
                                                        tabindex="-1" role="dialog"
                                                        aria-labelledby="uploadModalLabel{{ $item->id }}"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-lg modal-dialog-centered"
                                                            role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <p class="modal-title"
                                                                        id="uploadModalLabel{{ $item->id }}"
                                                                        style="font-weight: bold;">Perkembangan Milestone
                                                                        Laporan Diproses</p>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{ route('government.store') }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        <div class="form-group">
                                                                            <p class="m-0 p-0" style="font-weight: bold;">
                                                                                Judul Laporan</p>
                                                                            <label
                                                                                for="description{{ $item->id }}">{{ $item->title }}</label>

                                                                            <p class="m-0 p-0 pt-3"
                                                                                style="font-weight: bold;">Berikan
                                                                                Penjelasan Detail Pada Description Box
                                                                                Dibawah Ini</p>
                                                                            <textarea class="form-control" placeholder="Isi Disini" id="description{{ $item->id }}" name="description"
                                                                                rows="3"></textarea>
                                                                        </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <input type="hidden" name="case_id"
                                                                        value="{{ $item->id }}">
                                                                    <button type="submit" class="btn btn-primary"
                                                                        style="background-color: #A50000; border: none; color:#EDEDED;">Upload</button>
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
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
                "scrollY": '65vh', // Set the scroll height
                "scrollCollapse": false, // Allow the table to reduce in height if less data
                "paging": true // Enable paging
            });
            $('#externalSearchInput').on('keyup', function() {
                table.search(this.value).draw();
            });
        });
    </script>
@endsection
