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
    @if ($errors->any())
    <div class="alert alert-danger" style="">
        Gagal Unggah.
    </div>
    @endif
    <div class="row" style="background-color: #EDEDED;">
        <!-- 1 -->
        <div class="row pt-3 px-5">
            <div class="col-lg-2">
                <span class="back-icon" onclick="goBack()">
                    <span class="material-symbols-outlined"
                        style="scale: 120%; color: #A50000 !important">arrow_back</span>
                </span>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="container">
                    <div class="step-progress">
                        <div class="step done"></div>
                        <div class="step done"></div>
                        <div class="step done"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 2 -->
        <div class="row justify-content-center mt-4">
            <div class="col-lg-10 rounded p-1 justify-content-center"
                style="background-color: white; height: 35rem; width: 82vw;">
                <div class="container-fluid">
                    <form action="{{route('manager.hot_topic_posted')}}" method="POST" id="submit">
                        @csrf
                        <input type="hidden" class="reports" name="reports">
                        <div class=" row">
                            <div class="col-lg-10 rounded p-5" style="background-color: white;  width: 82vw;"
                                id="form-data-container">
                                <div class="row text-center mb-5">
                                    <h3 style="">Ringkasan Kasus</h3>
                                    <hr style="color: #A50000; opacity: 100; width: 25rem; margin-left: 34rem;">
                                </div>
                                <div class="row mb-4">
                                    <h1 id="disabledTextInput" class="form-control-plaintext title" name="title"
                                        style="font-weight: bold; font-size: x-large; margin-left: 0.7rem"></h1>
                                    <h6 class="form-control-plaintext damage_type" name="damage_type"
                                        style="font-size: medium; color: #A50000; margin-top: -0.8rem; margin-left: 0.7rem">
                                    </h6>
                                </div>
                                <div class="row mb-4">
                                    <div class="d-flex flex-row align-items-center mb-2">
                                        <h5 class="m-0" style="font-size: 20px; font-weight: 550; width: 250px;">
                                            Pemerintah Penanggung</h5>
                                        </h5>
                                        <h5 class="m-0" style="font-size: 20px; font-weight: 400;">: &nbsp; &nbsp;
                                        </h5>
                                        <h5 class="m-0 government" style="font-size: 20px; font-weight: 550;">
                                        </h5>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-2">
                                        <h5 class="m-0" style="font-size: 20px; font-weight: 400; width: 250px;">Lokasi
                                        </h5>
                                        <h5 class="m-0" style="font-size: 20px; font-weight: 400;">: &nbsp; &nbsp;
                                        </h5>
                                        <h5 class="m-0 address" style="font-size: 20px; font-weight: 400;">
                                        </h5>
                                    </div>
                                    <div class="d-flex flex-row align-items-center mb-2">
                                        <h5 class="m-0" style="font-size: 20px; font-weight: 400; width: 250px;">
                                            Kelurahan</h5>
                                        <h5 class="m-0" style="font-size: 20px; font-weight: 400;">: &nbsp; &nbsp;
                                        </h5>
                                        <h5 class="m-0 kelurahan" style="font-size: 20px; font-weight: 400;">
                                        </h5>
                                    </div>
                                    <div class=" d-flex flex-row align-items-center">
                                        <h5 class="m-0" style="font-size: 20px; font-weight: 400; width: 250px;">
                                            Status
                                        </h5>
                                        <h5 class="m-0" style="font-size: 20px; font-weight: 400;">: &nbsp; &nbsp;
                                        </h5>
                                        <h5 class="m-0 status" style="font-size: 20px; font-weight: 400;">
                                        </h5>
                                    </div>
                                    <div class=" col-lg-10 d-none">
                                        <div>
                                            <input class="form-control-plaintext title" name="title"
                                                style="font-weight: bold; font-size: x-large; margin-left: 0.7rem"></input>
                                            <input class="form-control-plaintext damage_type" name="damage_type"
                                                style="font-size: medium; color: #A50000; margin-top: -0.8rem; margin-left: 0.7rem">
                                            </input>
                                            <input class="form-control-plaintext government" name="government"
                                                style="font-size: medium; margin-top: -0.8rem; margin-left: 0.7rem">
                                            </input>
                                            <input for="" class="form-control-plaintext address" name="address"
                                                style="font-weight: medium; font-size: large; margin-left: -10rem; margin-top: -0.6rem"></input>
                                            <input for="" class="form-control-plaintext kelurahan" name="kelurahan"
                                                style="font-weight: medium; font-size: large; margin-left: -10rem; margin-top: -0.6rem"></input>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <input class="rounded-pill d-none" name="status"
                                                style="background-color: #D8A4A4; border: none;"></input>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-d-flex text-justify " style="width:85rem; height: 180px;">
                                    <h5 style="font-weight: 700;">Deskripsi</h5>
                                    <p class="description" name="description"
                                        style="font-weight: 400; font-size: large;">

                                    </p>
                                    <textarea name="description" class="d-none" id="" cols="30" rows="10"></textarea>

                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-end mt-4" style="margin-right: -11rem">
                            <div class="col-lg-2">
                                <div class="button">
                                    <button type="submit" class="btn btn-lg rounded bottom-button">Unggah</button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
</div>
</div>
@endsection

@section('script')
<script>
    function goBack() {
        window.history.back();
    }

    function collectReportData() {
    let inputHotTopic = JSON.parse(localStorage.getItem('input_hot_topic'));

    if (inputHotTopic) {
        if (inputHotTopic.title) {
            document.querySelector("input[name='title']").value = inputHotTopic.title;
            document.querySelector(".title").textContent = inputHotTopic.title;
        }
        if (inputHotTopic.damage_type) {
            document.querySelector("input[name='damage_type']").value = inputHotTopic.damage_type;
            document.querySelector(".damage_type").textContent = inputHotTopic.damage_type;
        }
        if (inputHotTopic.government) {
            document.querySelector("input[name='government']").value = inputHotTopic.governmnet;
            document.querySelector(".government").textContent = inputHotTopic.government;
        }
        if (inputHotTopic.address) {
            document.querySelector("input[name='address']").value = inputHotTopic.address;
            document.querySelector(".address").textContent = inputHotTopic.address;
        }
        if (inputHotTopic.kelurahan) {
            document.querySelector("input[name='kelurahan']").value = inputHotTopic.kelurahan;
            document.querySelector(".kelurahan").textContent = inputHotTopic.kelurahan;
        }
        if (inputHotTopic.description) {
            document.querySelector("textarea[name='description']").value = inputHotTopic.description;
            document.querySelector(".description").textContent = inputHotTopic.description;
        }
        if (inputHotTopic.status) {
            document.querySelector("input[name='status']").value = inputHotTopic.status;
            document.querySelector(".status").textContent = inputHotTopic.status;
        }
    }

    const reportselect = localStorage.getItem('report_is_checked');
    if (reportselect) {
        document.querySelector("input[name='reports']").value = reportselect;
    }
}

document.addEventListener('DOMContentLoaded', function() {
    collectReportData();
});




    document.addEventListener('DOMContentLoaded', function() {
        collectReportData();

    });
</script>
@endsection