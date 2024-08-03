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
Unggah Kasus
@endsection

@section('content')
<div class="container-fluid">
    <div class="row" style="background-color: #EDEDED;">
        <!-- 1 -->
        <div class="row pt-3 px-5">
            <div class="col-lg-2">
                <a href="{{route('manager.laporan_belum_unggah')}}">
                    <span class="back-icon" onclick="goBack()">
                        <span class="material-symbols-outlined"
                            style="scale: 120%; color: #A50000 !important">arrow_back</span>
                    </span>
                </a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="container">
                    <div class="step-progress">
                        <div class="step done"></div>
                        <div class="step done"></div>
                        <div class="step"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 2 -->
        <form action="{{route('manager.unggah_3')}}" method="">
            @csrf
            {{-- @method(`post`) --}}
            <div class="row justify-content-center mt-4">
                <div class="col-lg-10 rounded p-1 justify-content-center"
                    style="background-color: white; height: 35rem; width: 82vw;">
                    <iframe class="" style="height: 34.5rem; width: 79vw;" src="{{ route('manager.scroll_isi_kasus')}}"
                        frameborder="0" id="form-iframe"></iframe>
                </div>
            </div>
            <div class="row justify-content-end mt-4" style="margin-left: 5rem">
                <div class="col-lg-2">
                    <div class="button">
                        <button type="submit" id="submitButton"
                            class="btn btn-lg rounded bottom-button">Selanjutnya</button>
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
    document.getElementById('submit-next').onclick = function() {
            var iframe = document.getElementById('form-iframe');
            var iframeDocument = iframe.contentDocument || iframe.contentWindow.document;
            var inputField = iframeDocument.getElementById('inputField').value;
            localStorage.setItem('latestInput', inputField);
            alert("Input saved to local storage");
        };

        document.getElementById('submit-next').onclick = function() {
            window.location.href = "{{ route('manager.unggah_3') }}";
        };


</script>
@endsection