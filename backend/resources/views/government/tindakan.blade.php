@extends('layouts.admin')

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

</style>

@section('content')

<div class="container-fluid">
    <div class="Isian">
        <div class="row">
            <div class="tablebox col-12 col-md-11 rounded">
                <div class="table border-0">
                    <div class="table-body py-1">
                        <div class="table-header mt-3 px-3">
                            <div class="table-title d-flex justify-content-end">
                                <a href="">

                                    <span class="material-symbols-outlined">
                                        tune
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="costum-divider"></div>
                        <div class="table-lower justify-content-center">
                            <table class="table">
                                <thead>
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
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->address}}</td>
                                        <td>{{$item->reports->count()}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>
                                            <button class="btn btn-outline-success m-0" type="button" data-bs-toggle="modal" data-bs-target="#uploadModal{{$item->id}}">Kutindak</button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel{{$item->id}}" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="uploadModalLabel">Berikan Deskripsi Perkembangan</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{route('government.store')}}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="case_id" value="{{$item->case->id}}">
                                                                <div class="form-group">
                                                                    <label for="description}">Description</label>
                                                                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">Upload</button>
                                                            </div>
                                                        </form>
                                                    </div>
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
