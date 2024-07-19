@extends('layouts.app')
@section('title')
@endsection
@section('style')
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>hot topic</title>
    <style>
        div.hover_konten {
            transition: background-color 0.2s ease-in;
        }

        div.hover_konten:hover {
            transition: .3s ease-out;
            /* background-color: rgba(164, 163, 163, 0.174); */
        }

        .like_button i,
        .like_button:hover span {
            transition: 0.15s ease;
            /* ; */
        }

        .like_button:hover i,
        .like_button:hover span {
            transition: .3s ease-out;
            color: red;
        }

        ::-webkit-scrollbar {
            width: 5px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 20px;
        }

        .warna_button {
            color: #6A040F;
            ;
            background-color: #fff;
            font-weight: 500;
        }

        input[type=radio]:checked {
            background-color: #6a040f;
            border-color: black
        }

        input[type=radio] {
            border-color: black
        }

        .slider {
            height: 5px;
            border-radius: 5px;
            background-color: #D9D9D9;
            position: relative;
        }

        .slider .progres {
            height: 5px;
            border-radius: 5px;
            background-color: #6a040f;
            position: absolute;
            left: 25%;
            right: 25%;
        }

        .range-input {
            position: relative;
        }

        .range-input input {
            position: absolute;
            /* top: -2px; */
            top: -5px;
            height: 5px;
            width: 100%;
            -webkit-appearance: none;
            pointer-events: none;
            background: none;
        }

        input[type="range"]::-webkit-slider-thumb {
            height: 12px;
            width: 12px;
            border-radius: 50%;
            pointer-events: auto;
            -webkit-appearance: none;
            background-color: #6A040F;
        }

        input[type="range"]::-moz-range-thumb {
            height: 12px;
            width: 12px;
            border: none;
            border-radius: 50%;
            pointer-events: auto;
            -moz-appearance: none;
            background-color: #6A040F;
        }

        .year-input {
            display: flex;
            justify-content: space-between;
            align-items: center;
            /* gap: 5px; */
            margin-top: 5px;
            width: 100%;
        }

        .year-input .field {
            width: 20%;
            height: 30px;
            display: flex;
            align-items: center;
        }

        .field input {
            width: 100%;
            height: 100%;
            outline: none;
            text-align: center;
            border-radius: 5px;
            border: 1px solid #D9D9D9;
            font-size: 12px;
            justify-content: center;
            -moz-appearance: none;
        }

        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .slider-month {
            height: 5px;
            border-radius: 5px;
            background-color: #D9D9D9;
            position: relative;
        }

        .slider-month .progres-month {
            height: 5px;
            border-radius: 5px;
            background-color: #6a040f;
            position: absolute;
            left: 25%;
            right: 25%;
        }

        .range-input-month {
            position: relative;
        }

        .range-input-month input {
            position: absolute;
            /* top: -2px; */
            top: -5px;
            height: 5px;
            width: 100%;
            -webkit-appearance: none;
            pointer-events: none;
            background: none;
        }

        .month-input {
            display: flex;
            justify-content: space-between;
            align-items: center;
            /* gap: 5px; */
            margin-top: 5px;
            width: 100%;
        }

        .month-input .field {
            width: 20%;
            height: 30px;
            display: flex;
            align-items: center;
        }
    </style>
    <style>
        .unprocessed::after {
            content: '';
            width: 10px;
            height: 10px;
            left: 0;
            border-radius: 50%;
            top: 50%;
            background: red;
            transform: translate(0%, -50%);
            position: absolute;
        }

        .processed::after {
            content: '';
            width: 10px;
            height: 10px;
            left: 0;
            border-radius: 50%;
            top: 50%;
            background: green;
            transform: translate(0%, -50%);
            position: absolute;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid px-4">
        <div class="row mt-4 d-flex justify-content-between">
            <div class="row col-md-2 gap-3">
                <div class="d-flex justify-content-center align-items-center rounded border border-secondary"
                    style="background-color: #fff; height: 25vh">
                    <div class="col-md-12 my-auto d-flex justify-content-center">
                        <ul class="row" style=" list-style: none; padding: 0; ">
                            <li class="py-2 ps-3"><a href="" class="text-decoration-none text-dark link-secondary"><i
                                        class="bi bi-bookmark d-flex" style=" font-size: 25px; font-style:normal;"><span
                                            class="ms-2 fw-bold" style="font-size: 16px">Tersimpan</span></i></a></li>
                            <li class="py-3 ps-3 "><a href=""
                                    class=" text-dark text-decoration-none link-secondary"><i class="bi bi-bell d-flex"
                                        style="font-size: 25px ;font-style:normal;"><span class="ms-2 fw-bold"
                                            style="font-size: 16px">Pemberitahuan</span></i></a></li>
                            <li class="py-2 ps-3"><a href=""
                                    class="text-decoration-none  text-dark link-secondary"><i class="bi bi-gear d-flex"
                                        style="font-size: 25px; font-style:normal;"><span class="ms-2 fw-bold"
                                            style="font-size: 16px">Pengaturan</span></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 rounded border border-secondary p-0 overflow-auto"
                    style="background-color: #fff;  height: 58vh; max-height:58vh;">
                    <div class=" row w-100 m-0  ">
                        <div class="accordion border-0 mt-1" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item border-0 pb-3" style=" width: 100%">
                                {{-- <h2 class="accordion-header "></h2> --}}
                                <button class="accordion-button p-1" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                    aria-controls="panelsStayOpen-collapseOne"
                                    style=" color: #6A040F;background-color: #fff; font-weight: 500;">
                                    Terbitan Tahun
                                </button>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                    <div class="accordion-body p-0 m-0">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioTahun"
                                                id="flexRadioDefault1" checked>
                                            <label class="form-check-label" for="flexRadioTahun">
                                                Rentang Tahun
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioTahun"
                                                id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioTahun">
                                                Tahun Tunggal
                                            </label>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <div class="slider">
                                                <div class="progres"></div>
                                            </div>
                                            <div class="range-input">
                                                <input type="range" class="range_minimal" min="2000" max="2024"
                                                    value="2000">
                                                <input type="range" class="range_maksimal" min="2000" max="2024"
                                                    value="2024">
                                            </div>
                                            <div class="year-input mt-2">
                                                <div class="field mb-1">
                                                    <input type="number" class="input-min" value="2000">
                                                </div>
                                                <div class="field mb-1">
                                                    <input type="number" class="input-max" value="2024">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion border-0 mt-1" style=" width: 100%; ">
                                <button class="accordion-button p-1 " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseTwo"
                                    style="color: #6A040F;background-color: #fff;font-weight: 500">
                                    Terbitan Bulan
                                </button>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show">
                                    <div class="accordion-body p-0 " style="">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioBulan"
                                                id="flexRadioDefault1" checked>
                                            <label class="form-check-label" for="flexRadioBulan">
                                                Rentang Bulan
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioBulan"
                                                id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioBulan">
                                                Bulan Tunggal
                                            </label>
                                        </div>
                                        <div class="col-md-12 mt-3">
                                            <div class="slider-month">
                                                <div class="progres-month"></div>
                                            </div>
                                            <div class="range-input-month">
                                                <input type="range" class="range_minimal_month" min="1"
                                                    max="12" value="1">
                                                <input type="range" class="range_maksimal_month" min="1"
                                                    max="12" value="12">
                                            </div>
                                            <div class="month-input mt-2">
                                                <div class="field mb-1">
                                                    <input type="number" class="input-min-month" value="1">
                                                </div>
                                                <div class="field mb-1">
                                                    <input type="number" class="input-max-month" value="12">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0" style=" width: 100%">
                                <button class="accordion-button p-1" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                    aria-controls="panelsStayOpen-collapseThree"
                                    style=" color: #6A040F;background-color: #fff; font-weight: 500;">
                                    Kategori
                                </button>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show">
                                    <div class="accordion-body p-0 " style="">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioProses"
                                                id="flexRadioDefault1" checked>
                                            <label class="form-check-label" for="flexRadioProses">
                                                Belum diproses
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioProses"
                                                id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioProses">
                                                Sedang diproses
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioProses"
                                                id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioProses">
                                                Selesai diproses
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="col-md-10 rounded border border-secondary " style="background-color: #fff">
                <div class="row mt-3 d-flex justify-content-center align-items-center" style="height: 9vh;">
                    <div class="col-md-5 ">
                        <form class="search " method="GET" style=" ;border-radius: 20px; !important">
                            <div class="input-group">
                                <span class="input-group-text border-2 border-secondary " id="basic-addon1"
                                    style=" background-color: #fff;border-right: 0; "><i class="bi bi-search"></i></span>
                                <input type="text"
                                    class="form-control border-secondary border-2"style="border-left:0; " name="query"
                                    placeholder="Search...">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row overflow-auto d-flex justify-content-center" style="height: 74vh;">
                    <div class="col-md-12 p-0" style="">
                        {{-- awal konten --}}
                        @foreach ($cases as $item)
                            <div class="container-fluid border-secondary border-1 border-bottom mb-2 hover_konten">
                                <a href="{{route('hottopic.detail', ['case_number' => $item->case_number])}}" class="text-decoration-none border-0">
                                    <div class="container col-md-9 overflow-hidden">
                                        <div
                                            class="text-capitalize text-dark d-flex justify-content-between align-items-center">
                                            <div class="text-wrap " style="width: 90;">
                                                <h6 style=" font-size: 12px">{{$item->title}}</h6>
                                            </div>
                                            <div class="d-flex justify-content-end" style="width: 10%; height: 6vh">

                                                <span class="text-secondary" style="font-size: 14px">{{ \App\Helpers\TimeFormatter::formatTimeDifference($item->created_at) }}</span>

                                            </div>
                                        </div>

                                        <div class="text-danger text-capitalize" style=" font-size: 10px">
                                            <span>{{$item->reports->count()}} Laporan</span>
                                        </div>

                                        <div class="mt-1 mb-2 text-dark text-capitalize" style=" font-size: 12px">
                                            <div class="span">
                                                Alamat: {{$item->address}}
                                                <br>
                                                Lokasi:  {{ $item->kelurahan->name}}, {{ $item->kelurahan->kecamatan->name}}, {{ $item->kelurahan->kecamatan->kota->name}}.
                                                <br>
                                                Status: @if($item->milestone_details->count() == 0) Belum diproses @else {{$item->milestone_details->last()->milestone->name}} @endif
                                            </div>
                                        </div>

                                        <div class="mb-1 text-dark overflow-hidden" style=" font-size: 12px; height: 8vh">
                                            @if(strlen($item->description) > 100)
                                                <p>{{$item->description->substr(0, 100)}} <span class="text-primary">show more...</span></p>
                                            @else
                                                <p>{{$item->description}}</p>
                                            @endif
                                        </div>
                                        {{-- untuk show gambar --}}
                                        <div class="col-md-12 d-flex justify-content-center">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVFP4xX1TI_zRZvvXXpJk0CbcholYv90pUYw&usqp=CAU"
                                                alt="" width="900" height="288">
                                        </div>
                                        <div class="row" style=" height:5.5vh ;">
                                            <div class=" col-md-3 gap-1 d-flex justify-content-center align-items-center">
                                                <button onclick="ToggleLike()" class="btn text-dark like_button border-0"
                                                    id="btn_like">
                                                    <i class="bi bi-heart"></i>
                                                    <span class="mb-1">{{$item->likes->count()}}</span>
                                                </button>
                                            </div>
                                            <div class="col-md-3 gap-1 d-flex justify-content-center align-items-center ">
                                                <button onclick="" class="btn text-dark" id="btn_komen">
                                                    <i class="bi bi-chat-left"></i>
                                                    <span class="mb-1">{{$item->comments->count()}}</span>
                                                </button>
                                            </div>
                                            <div class="col-md-3 gap-1 d-flex justify-content-center align-items-center ">
                                                <button onclick="" class="btn text-dark" id="btn_bookmark">
                                                    <i class="bi bi-bookmark"></i>
                                                    <span class="mb-1">{{$item->bookmarks->count()}}</span>
                                                </button>
                                            </div>
                                            <div class="col-md-3 gap-1 d-flex justify-content-center align-items-center  ">
                                                <button onclick="" class="btn text-dark" id="btn_share">
                                                    <i class="bi bi-share"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                        <div class="container-fluid border-secondary border-1 border-bottom mb-2 hover_konten">
                            <a href="" class="text-decoration-none border-0">
                                <div class="container col-md-9 overflow-hidden">

                                    <div
                                        class="text-capitalize text-dark d-flex justify-content-between align-items-center">
                                        <div class="text-wrap " style="width: 90%;height: 6vh">
                                            <h6 style=" font-size: 12px">Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit. Nihil qui cupiditate voluptatibus quam officiis.
                                                Doloribus et enim nemo, dicta odit, vel officiis porro repudiandae
                                                asperiores quam cupiditate fuga iusto nisi.lkds</h6>
                                        </div>
                                        <div class="d-flex justify-content-end" style="width: 10%; height: 6vh">

                                            <span class="text-secondary" style="font-size: 14px">2h</span>
                                        </div>
                                    </div>

                                    <div class="text-danger text-capitalize" style=" font-size: 10px">
                                        <span>4073 Laporan</span>
                                    </div>

                                    <div class="mt-1 mb-2 text-dark text-capitalize" style=" font-size: 12px">
                                        <div class="span">
                                            Lokasi: (nama lokasi)
                                            <br>
                                            Status: (judul status)
                                        </div>
                                    </div>

                                    <div class="mb-1 text-dark overflow-hidden" style=" font-size: 12px; height: 8vh">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti unde,
                                            assumenda
                                            perspiciatis odio aut et, quasi illum quae omnis tempora labore. Nobis
                                            exercitationem iure adipisci sed id commodi assumenda laboriosam! Lorem
                                            ipsum dolor sit amet consectetur, adipisicing elit. Assumenda aperiam,
                                            impedit quibusdam ut nemo veritatis expedita recusandae, quo ab blanditiis
                                            minus debitis consequatur commodi molestias ipsam ex perferendis,
                                            repellendus quos. <span class="text-primary">show more...</span></p>
                                    </div>
                                    {{-- untuk show gambar --}}
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVFP4xX1TI_zRZvvXXpJk0CbcholYv90pUYw&usqp=CAU"
                                            alt="" width="900" height="288">
                                    </div>
                                    <div class="row" style=" height:5.5vh ;">
                                        <div class=" col-md-3 gap-1 d-flex justify-content-center align-items-center">
                                            <button onclick="ToggleLike()" class="btn text-dark like_button border-0"
                                                id="btn_like">
                                                <i class="bi bi-heart"></i>
                                                <span class="mb-1">23k</span>
                                            </button>
                                        </div>
                                        <div class="col-md-3 gap-1 d-flex justify-content-center align-items-center ">
                                            <button onclick="" class="btn text-dark" id="btn_komen">
                                                <i class="bi bi-chat-left"></i>
                                                <span class="mb-1">17k</span>
                                            </button>
                                        </div>
                                        <div class="col-md-3 gap-1 d-flex justify-content-center align-items-center ">
                                            <button onclick="" class="btn text-dark" id="btn_bookmark">
                                                <i class="bi bi-bookmark"></i>
                                                <span class="mb-1">9k</span>
                                            </button>
                                        </div>
                                        <div class="col-md-3 gap-1 d-flex justify-content-center align-items-center  ">
                                            <button onclick="" class="btn text-dark" id="btn_share">
                                                <i class="bi bi-share"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        {{-- akhir konten --}}

                        {{-- awal konten --}}
                        <div class="container-fluid border-secondary border-1 border-bottom mb-2 hover_konten">
                            <a href="" class="text-decoration-none border-0">
                                <div class="container col-md-9 overflow-hidden">

                                    <div
                                        class="text-capitalize text-dark d-flex justify-content-between align-items-center">
                                        <div class="text-wrap " style="width: 90%;height: 6vh">
                                            <h6 style=" font-size: 12px">Lorem ipsum dolor sit amet consectetur
                                                adipisicing elit. Nihil qui cupiditate voluptatibus quam officiis.
                                                Doloribus et enim nemo, dicta odit, vel officiis porro repudiandae
                                                asperiores quam cupiditate fuga iusto nisi.lkds</h6>
                                        </div>
                                        <div class="d-flex justify-content-end" style="width: 10%; height: 6vh">

                                            <span class="text-secondary" style="font-size: 14px">2h</span>
                                        </div>
                                    </div>

                                    <div class="text-danger text-capitalize" style=" font-size: 10px">
                                        <span>4073 Laporan</span>
                                    </div>

                                    <div class="mt-1 mb-2 text-dark text-capitalize" style=" font-size: 12px">
                                        <div class="span">
                                            Lokasi: (nama lokasi)
                                            <br>
                                            Status: (judul status)
                                        </div>
                                    </div>

                                    <div class="mb-1 text-dark overflow-hidden" style=" font-size: 12px; height: 8vh">
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti unde,
                                            assumenda
                                            perspiciatis odio aut et, quasi illum quae omnis tempora labore. Nobis
                                            exercitationem iure adipisci sed id commodi assumenda laboriosam! Lorem
                                            ipsum dolor sit amet consectetur, adipisicing elit. Assumenda aperiam,
                                            impedit quibusdam ut nemo veritatis expedita recusandae, quo ab blanditiis
                                            minus debitis consequatur commodi molestias ipsam ex perferendis,
                                            repellendus quos. <span class="text-primary">show more...</span></p>
                                    </div>
                                    {{-- untuk show gambar --}}
                                    <div class="col-md-12 d-flex justify-content-center">
                                        <img src="{{ asset('components/img/konten/foto_konten1.png') }}" alt=""
                                            width="900" height="288">
                                    </div>
                                    <div class="row" style=" height:5.5vh ;">
                                        <div class=" col-md-3 gap-1 d-flex justify-content-center align-items-center">
                                            <button onclick="ToggleLike()" class="btn text-dark like_button border-0"
                                                id="btn_like">
                                                <i class="bi bi-heart"></i>
                                                <span class="mb-1">23k</span>
                                            </button>
                                        </div>
                                        <div class="col-md-3 gap-1 d-flex justify-content-center align-items-center ">
                                            <button onclick="" class="btn text-dark" id="btn_komen">
                                                <i class="bi bi-chat-left"></i>
                                                <span class="mb-1">17k</span>
                                            </button>
                                        </div>
                                        <div class="col-md-3 gap-1 d-flex justify-content-center align-items-center ">
                                            <button onclick="" class="btn text-dark" id="btn_bookmark">
                                                <i class="bi bi-bookmark"></i>
                                                <span class="mb-1">9k</span>
                                            </button>
                                        </div>
                                        <div class="col-md-3 gap-1 d-flex justify-content-center align-items-center  ">
                                            <button onclick="" class="btn text-dark" id="btn_share">
                                                <i class="bi bi-share"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        {{-- akhir konten --}}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        var btn_like = document.getElementById('btn_like');
        var btn_komen = document.getElementById('btn_komen');
        var btn_bookmark = document.getElementById('btn_bookmark');
        var btn_share = document.getElementById('btn_share');

        function ToggleLike() {
            if (btn_like.style.color == 'red') {
                btn_like.style.color = 'black';
            } else {
                btn_like.style.color = 'red';
            }
        }
    </script>


    {{-- jquery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    {{-- month slider --}}
    <script>
        $(document).ready(function() {
            let val = $('.range_minimal').val();
            let min = $('.range_minimal').attr('min');
            let max = $('.range_minimal').attr('max');
            let percent = ((val - min) / (max - min)) * 100;
            $('.progres').css('left', percent + '%');
            $('.input-min').val(val);

            val = $('.range_maksimal').val();
            percent = ((val - min) / (max - min)) * 100;
            $('.progres').css('right', (100 - percent) + '%');
            $('.input-max').val(val);

            val = $('.range_minimal_month').val();
            min = $('.range_minimal_month').attr('min');
            max = $('.range_minimal_month').attr('max');
            percent = ((val - min) / (max - min)) * 100;
            $('.progres-month').css('left', percent + '%');
            $('.input-min-month').val(val);

            val = $('.range_maksimal_month').val();
            percent = ((val - min) / (max - min)) * 100;
            $('.progres-month').css('right', (100 - percent) + '%');
            $('.input-max-month').val(val);
        });
        $(document).ready(function() {

            $('.range_minimal').on('input', function() {
                var val = $(this).val();
                var min = $(this).attr('min');
                var max = $(this).attr('max');
                var percent = ((val - min) / (max - min)) * 100;
                $('.progres').css('left', percent + '%');
                $('.input-min').val(val);
            });

            $('.range_maksimal').on('input', function() {
                var val = $(this).val();
                var min = $(this).attr('min');
                var max = $(this).attr('max');
                var percent = ((val - min) / (max - min)) * 100;
                $('.progres').css('right', (100 - percent) + '%');
                $('.input-max').val(val);
            });

            $('.range_minimal_month').on('input', function() {
                var val = $(this).val();
                var min = $(this).attr('min');
                var max = $(this).attr('max');
                var percent = ((val - min) / (max - min)) * 100;
                $('.progres-month').css('left', percent + '%');
                $('.input-min-month').val(val);
            });


            $('.range_maksimal_month').on('input', function() {
                var val = $(this).val();
                var min = $(this).attr('min');
                var max = $(this).attr('max');
                var percent = ((val - min) / (max - min)) * 100;
                $('.progres-month').css('right', (100 - percent) + '%');
                $('.input-max-month').val(val);
            });

            // detect range_minimal change on value and adjust the progress bar
            $('.input-min').on('input', function() {
                var val = $(this).val();
                var min = $('.range_minimal').attr('min');
                var max = $('.range_minimal').attr('max');
                var percent = ((val - min) / (max - min)) * 100;
                $('.progres').css('left', percent + '%');
                $('.range_minimal').val(val);
            });
            $('.input-max').on('input', function() {
                var val = $(this).val();
                var min = $('.range_minimal').attr('min');
                var max = $('.range_minimal').attr('max');
                var percent = ((val - min) / (max - min)) * 100;
                $('.progres').css('right', (100 - percent) + '%');
                $('.range_maksimal').val(val);
            });

            $('.input-min-month').on('input', function() {
                var val = $(this).val();
                var min = $('.range_minimal_month').attr('min');
                var max = $('.range_minimal_month').attr('max');
                var percent = ((val - min) / (max - min)) * 100;
                $('.progres-month').css('left', percent + '%');
                $('.range_minimal_month').val(val);
            });

            $('.input-max-month').on('input', function() {
                var val = $(this).val();
                var min = $('.range_minimal_month').attr('min');
                var max = $('.range_minimal_month').attr('max');
                var percent = ((val - min) / (max - min)) * 100;
                $('.progres-month').css('right', (100 - percent) + '%');
                $('.range_maksimal_month').val(val);
            });







            $('.range_minimal').on('input', function() {
                var val = parseInt($(this).val());
                var val2 = parseInt($('.range_maksimal').val());
                if (val > val2) {
                    $('.range_maksimal').val(val);
                    var min = $('.range_minimal').attr('min');
                    var max = $('.range_minimal').attr('max');
                    var percent = ((val - min) / (max - min)) * 100;
                    $('.progres').css('left', percent + '%');
                    $('.progres').css('right', (100 - percent) + '%');
                    $('.input-min').val(val);
                    $('.input-max').val(val);
                }
            });

            $('.range_maksimal').on('input', function() {
                var val = parseInt($(this).val());
                var val2 = parseInt($('.range_minimal').val());
                if (val < val2) {
                    $('.range_minimal').val(val);
                    var min = $('.range_minimal').attr('min');
                    var max = $('.range_minimal').attr('max');
                    var percent = ((val - min) / (max - min)) * 100;
                    $('.progres').css('left', percent + '%');
                    $('.progres').css('right', (100 - percent) + '%');
                    $('.input-min').val(val);
                    $('.input-max').val(val);
                }
            });

            // i want to make so when the range_minimal_month value after scroll is over the range_maksimal_month value, the range_maksimal_month value will be the same as the range_minimal_month value
            $('.range_minimal_month').on('input', function() {
                let val = parseInt($(this).val());
                let val2 = parseInt($('.range_maksimal_month').val());
                console.log(val, val2);
                if (val > val2) {
                    console.log('surpass');
                    $('.range_maksimal_month').val(val);
                    var min = $('.range_minimal_month').attr('min');
                    var max = $('.range_minimal_month').attr('max');
                    var percent = ((val - min) / (max - min)) * 100;
                    $('.progres-month').css('left', percent + '%');
                    $('.progres-month').css('right', (100 - percent) + '%');
                    $('.input-min-month').val(val);
                    $('.input-max-month').val(val);
                }
            });

            $('.range_maksimal_month').on('input', function() {
                let val = parseInt($(this).val());
                let val2 = parseInt($('.range_minimal_month').val());
                console.log(val, val2);
                if (val < val2) {
                    console.log('surpass');
                    $('.range_minimal_month').val(val);
                    var min = $('.range_minimal_month').attr('min');
                    var max = $('.range_minimal_month').attr('max');
                    var percent = ((val - min) / (max - min)) * 100;
                    $('.progres-month').css('left', percent + '%');
                    $('.progres-month').css('right', (100 - percent) + '%');
                    $('.input-min-month').val(val);
                    $('.input-max-month').val(val);
                }
            });

        });
    </script>
@endsection
