@extends('layouts.manager')

@section('link_style')
<link href="{{ asset('css/unggah/progress_bar.css') }}" rel="stylesheet">
@endsection

@section('style')
<style>
    .main {
        background-color: #F1F1F1;
    }

    .cardbox:nth-child(3) .card {
        background-color: #a50000;
    }

    .cardbox:nth-child(3) .material-symbols-outlined {
        color: white;
    }

    .cardbox h5 {
        font-size: 30px;
    }

    .cardbox p {
        font-size: 20px;
        color: #D4D4D4;
    }

    .cardbox:nth-child(3) h5 {
        color: white;
    }

    .cardbox:nth-child(3) p {
        color: #D8A4A4;
    }


    .card-body {
        display: flex;
        align-items: center;
        /* Align items vertically in the center */
        justify-content: space-between;
        /* Distribute space between items */
    }

    .card-text {
        margin-right: 10px;
        /* Adjust spacing between text and icon as needed */
    }

    .card-text {
        margin-right: 10px;
        /* Adjust spacing between text and icon as needed */
    }

    .card-icon {
        /* Optional: styles for the card icon */
    }

    .reportBox {
        display: flex;
        align-items: center;
        /* Align items vertically in the center */
        justify-content: space-between;
    }

    .report {
        background-color: white;
    }

    .table-header {
        display: flex;
        border-bottom: 3px solid #EDEDED;
        /* background-color: #a50000; */
        align-items: center;
        /* margin-bottom: 3px; */
    }

    .table-title {
        width: 50%;
    }


    .table-button {
        width: 50%;
        display: flex;
        justify-content: end;
    }

    .table-title h5 {
        font-weight: bold;
        font-size: 24px;
    }

    .button-seeAll {
        border-radius: 20px;
        border-width: 0px;
        background-color: #a50000;
        width: 92px;
        height: 43px;
        color: white;
        font-size: 16px;
        font-weight: bold;
    }

    .report-table {
        width: 100%;
    }

    .report-table th {
        border-bottom: 3px solid #EDEDED;
        text-align: center;
    }

    .report-table td {
        border-bottom: 1px solid #EDEDED;
        text-align: center;
    }
</style>

<style>
    .semua:hover a {
        border-color: white;
        border-width: 0.5px;
        border-style: ridge;
        transition: .2s;
    }

    .bottom-button {
        background-color: #A50000;
        color: white;
    }

    .bottom-button:hover {
        border-color: #A50000;
        background-color: white;
        border-width: 1.5px;
        border-style: ridge;
        transition: .2s;
    }
</style>

@endsection

@section('title')
Edit Kasus
@endsection

@section('content')
<div class="container-fluid">
    <div class="row" style="background-color: #EDEDED;">
        <!-- 1 -->
        <div class="row pt-3 px-5">
            <div class="col-lg-2">
                <a href="{{route('manager.hot_topic')}}">
                    <span class="back-icon" onclick="goBack()">
                        <span class="material-symbols-outlined" style="scale: 120%;">arrow_back</span>
                    </span>
                </a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="container">
                    <div class="step-progress">
                        <div class="step done"></div>
                        <div class="step"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 2 -->
        <form action="{{route('manager.edit_2', ['case' => $case])}}" method="post" id="submit">
            @csrf
            <div class="row justify-content-center mt-4">
                <div class="col-lg-10 rounded p-5" style="background-color: white; height: 40rem; width: 82vw;">
                    {{-- <input type="text" class="report-data-collected" name="reports" id="reports"> --}}
                    <div class="row mb-4">
                        <div class="col-lg-12">
                            <label for="" class="form-label"
                                style="margin-left: -1rem; font-size: large; font-weight: 400;">Judul Kasus</label>
                            <input type="text" id="title" class="form-control" name="title" value="{{$case->title}}"
                                style="background-color: #F2F2F2; margin-left: -0.7rem;">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-3">
                            <label for="" class="form-label"
                                style="margin-left: -1rem; font-size: large; font-weight: 400;">Tipe
                                Kerusakan</label>
                            <select class="form-select" style="background-color: #F2F2F2; margin-left: -0.7rem;" id=""
                                name="damage_type">
                                <option selected>{{$case->damage_type_title}}</option>
                                @foreach ($datas['damage_type'] as $item)
                                <option value="{{ $item->name }}" style="color: black;">
                                    {{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-3">
                            <label for="" class="form-label"
                                style="margin-left: -1rem; font-size: large; font-weight: 400;">Status</label>
                            <select class="form-select" style="background-color: #F2F2F2; margin-left: -0.7rem;"
                                id="status" name="status">
                                <option selected>{{$case->status_title}}</option>
                                @foreach ($datas['milestone'] as $item)
                                <option value="{{ $item->title }}" style="color: black;">
                                    {{$item->title}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="row">
                            <label for="" class="form-label"
                                style="margin-left: -1rem; font-size: large; font-weight: 400;">Lokasi</label>
                        </div>
                        <div class="row">
                            <div class="col-lg-9">
                                <label for="" class="form-label"
                                    style="margin-left: -0.7rem; font-size: medium; font-weight: 100;">Alamat</label>
                                <input type="text" id="address" class="form-control" name="address"
                                    value="{{$case->address}}"
                                    style="background-color: #F2F2F2; width: 66rem; margin-left: -0.7rem;">
                            </div>
                            <div class="col-lg-3">
                                <label for="" class="form-label"
                                    style=" font-size: medium; font-weight: 100;">Kelurahan</label>
                                <select class="form-select" style="background-color: #F2F2F2; " id="" name="kelurahan">
                                    <option selected>{{$case->kelurahan_title}}</option>
                                    @foreach ($datas['kelurahan'] as $item)
                                    <option value="{{ $item->name }}" style="color: black;">
                                        {{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-2">
                            <label for="" class="form-label"
                                style="margin-left: -1rem; font-size: large; font-weight: 400;">Deskripsi</label>
                            <textarea class="form-control" id="description" rows="3" name="description"
                                style="background-color: #F2F2F2; margin-left: -0.5rem; width: 76vw;">{{$case->description}}</textarea>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row justify-content-end mt-4" style="margin-right: -2.5rem">
                <div class="col-lg-2">
                    <div class="button">
                        <button type="submit" id="submit" class="btn btn-lg rounded bottom-button">Selanjutnya</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    // function goBack() {
    //     window.history.back();
    // }
    // document.getElementById('submit-next').onclick = function() {
    //         var iframe = document.getElementById('form-iframe');
    //         var iframeDocument = iframe.contentDocument || iframe.contentWindow.document;
    //         var inputField = iframeDocument.getElementById('inputField').value;
    //         localStorage.setItem('latestInput', inputField);
    //         alert("Input saved to local storage");
    //     };

    //     document.getElementById('submit-next').onclick = function() {
    //         window.location.href = "{{ route('manager.unggah_3') }}";
    //     };


</script>
@endsection