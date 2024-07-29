@extends('layouts.app')
@section('title')
@endsection
@section('style')
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    {{-- google font for icon --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?famiiy=Material+Symbols/+Rounded:opzs,wght,FILL,GRAD@48,400,0,0" />
    <title>hot topic post</title>
    <style>
        div.hover_konten {
            transition: background-color 0.2s ease-in;
        }

        div.hover_konten:hover {
            transition: .3s ease-out;
            background-color: rgba(164, 163, 163, 0.174);
        }

        .like_button i,
        .like_button span {
            transition: 0.15s ease;
        }

        .like_button:hover i,
        .like_button:hover span {
            transition: .3s ease-out;
            color: red;
        }

        .komen_button i,
        .komen_button span {
            transition: 0.15s ease;

        }

        .komen_button:hover i,
        .komen_button:hover span {
            transition: 0.3s ease;
            color: #007c7c;
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
        .container-outter_carousell {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container-inner_carousell {
            max-width: 1200px;
            width: 95%;
        }

        .slider-wrapper_carousell {
            position: relative;
        }

        .slider-wrapper_carousell .slide-button {
            position: absolute;
            top: 50%;
            height: 30px;
            width: 30px;
            color: #fff;
            background: #000;
            font-size: 1rem;
            cursor: pointer;
            border-radius: 50%;
            border: none;
            outline: none;
            transform: translateY(30%);
        }

        .slider-wrapper_carousell .slide-button#prev-slide {
            left: -20px;
            display: none;
        }

        .slider-wrapper_carousell .slide-button#next-slide {
            right: -20px;
        }

        .slider-wrapper_carousell .slide-button:hover {
            background: #3e3e3e;
            transition: background 0.3s ease-in-out;
        }

        .slider-wrapper_carousell .image-list_carousell {
            display: grid;
            grid-template-columns: repeat(10, 1fr);
            font-size: 0;
            overflow-x: auto;
            gap: 18px;
            margin-bottom: 30px;
            scrollbar-width: none;
        }

        .slider-wrapper_carousell .image-list_carousell::-webkit-scrollbar {
            display: none;
        }

        .slider-wrapper_carousell .image-list_carousell .image-item_carousell {
            width: 325px;
            height: 288px;
            object-fit: contain;
            /* object-fit: cover; */
        }

        .container-inner_carousell .slider-scrollbar_carousell {
            height: 24px;
            width: 100%;
            display: flex;
            align-items: center;
        }

        .slider-scrollbar_carousell .scrollbar-track_carousell {
            height: 2px;
            width: 100%;
            background: #f2f2f2;
            position: relative;
            border-radius: 4px;
        }

        .slider-scrollbar_carousell:hover .scrollbar-track_carousell {
            height: 4px;
        }

        .slider-scrollbar_carousell .scrollbar-thumb_carousell {
            height: 100%;
            width: 50%;
            background: #000;
            position: absolute;
            border-radius: inherit;
            cursor: grab;
        }

        .slider-scrollbar_carousell .scrollbar-thumb_carousell:active {
            cursor: grabbing;
            height: 8px;
            top: -2px;
        }

        .slider-scrollbar_carousell .scrollbar-thumb_carousell::after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            top: -10px;
            bottom: -10px;

        }

        /* .image-list_carousell img {
                                                                                            border: solid black 1px;
                                                                                        } */
    </style>
@endsection

@section('content')
    @php
        $color = 'black';
    @endphp
    <div class="container-fluid">
        <div class="row mt-4 d-flex justify-content-between">
            @include('components.hot_topic_sidemenu')
        </div>
        <div class="col-md-10 rounded border border-secondary " style="background-color: #fff">
            <div class="row mt-3 ms-1 mb-2">
                <a href="{{ route('hottopic.index') }}" class="text-decoration-none text-dark link-secondary"><i
                        class="bi bi-arrow-left d-flex" style="font-size: 25px; font-style:normal;"><span
                            class="ms-2 fw-bold" style="font-size: 16px">Post</span></i>
                </a>
            </div>
            <div class="row d-flex justify-content-center" style="height: 78vh; ">
                <div class="col-md-12 overflow-auto" style=" height:78vh; ">
                    <div class="text-decoration-none container col-md-9  border-0 mt-3">
                        <div class="text-capitalize text-dark d-flex justify-content-between align-items-center">
                            <div class="text-wrap " style="width: 90%;height: 6vh;">
                                <h2 style=" font-size: 25px">{{ $case->title }}</h2>
                            </div>
                            <div class="d-flex justify-content-end align-items-center" style="width: 10%; height: 6vh">

                                <span class="text-secondary"
                                    style="font-size: 14px">{{ \App\Helpers\TimeFormatter::formatTimeDifference($case->created_at) }}</span>
                            </div>
                        </div>

                        <div class="text-danger text-capitalize" style=" font-size: 18px">
                            <span>{{ $case->reports->count() }} Laporan</span>
                        </div>

                        <div class="mt-1 mb-2 text-dark text-capitalize" style=" font-size: 20px">
                            <div class="span">
                                Alamat: {{ $case->address }}
                                <br>
                                Lokasi: {{ $case->kelurahan->name }}, {{ $case->kelurahan->kecamatan->name }},
                                {{ $case->kelurahan->kecamatan->kota->name }}.
                                <br>
                                Status: @if ($case->milestone_details->count() == 0)
                                    Belum diproses
                                @else
                                    {{ $case->milestone_details->last()->milestone->name }}
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-1 text-dark" style=" font-size: 18px; ">
                                <p>{{ $case->description }}</p>
                            </div>
                        </div>
                        {{-- untuk show gambar --}}

                        <div class="container-outter_carousell">
                            <div class="container-inner_carousell">
                                <div class="slider-wrapper_carousell">
                                    <button id="prev-slide" class="slide-button material-symbols-rounded">
                                        <i class="bi bi-arrow-left"></i>
                                    </button>
                                    @php
                                        $images = \App\Models\ReportImage::where('case_id', $case->id)->get();
                                        // dump($images);
                                    @endphp
                                    <div class="image-list_carousell">
                                        @foreach ($images as $image)
                                            <a href="#">
                                                <img src="{{ asset('upload/reportimage/' . $image->name) }}" height="288"
                                                    class="image-item_carousell">
                                            </a>
                                        @endforeach
                                        <a href="#">
                                            <img src="https://akcdn.detik.net.id/community/media/visual/2024/07/08/pembangunan-jalan-tol-serbaraja-seksi-1b_169.jpeg?w=700&q=90"
                                                height="288" class="image-item_carousell">
                                        </a>
                                        <a href="#">
                                            <img src="https://akcdn.detik.net.id/community/media/visual/2024/07/08/pembangunan-jalan-tol-serbaraja-seksi-1b-2_169.jpeg?w=700&q=90"
                                                height="288" class="image-item_carousell">
                                        </a>
                                        <a href="#">
                                            <img src="https://akcdn.detik.net.id/community/media/visual/2024/07/08/pembangunan-jalan-tol-serbaraja-seksi-1b-2_169.jpeg?w=700&q=90"
                                                height="288" class="image-item_carousell">
                                        </a>
                                        <a href="#">
                                            <img src="https://akcdn.detik.net.id/community/media/visual/2024/07/01/infografis-jumlah-penduduk-miskin-di-indonesia.jpeg?w=700&q=90"
                                                height="288" class="image-item_carousell">
                                        </a>
                                    </div>
                                    <button id="next-slide" class="slide-button material-symbols-rounded">
                                        <i class="bi bi-arrow-right"></i>
                                    </button>
                                </div>
                                <div class="slider-scrollbar_carousell">
                                    <div class="scrollbar-track_carousell">
                                        <div class="scrollbar-thumb_carousell"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="height: 5.5vh;">
                            <div class=" col-md-3 gap-1 d-flex justify-content-center align-items-center">
                                <button onclick="ToggleLike()" class="btn text-dark like_button border-0" id="btn_like">
                                    <form action="{{ route('hottopic.click_like') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="case_number" value="{{ $case->case_number }}">
                                        <button type="submit" style="background: none; border:none;">
                                            @if (auth()->check())
                                                @php
                                                    $isLiked = $case->likes->contains('user_id', Auth::id());
                                                    $color = $isLiked ? 'red' : 'black';
                                                @endphp
                                            @endif
                                            {{-- <i class="bi bi-heart"></i> --}}
                                            <i class="bi bi-heart" style="color: {{ $color }}"></i>
                                        </button>
                                    </form>
                                    <span class="mb-1">{{ $case->likes->count() }}</span>
                                </button>
                            </div>
                            <div class="col-md-3 gap-1 d-flex justify-content-center align-items-center ">
                                <button onclick="" class="btn text-dark komen_button border-0" id="btn_komen">
                                    @if (auth()->check())
                                        @php
                                            $isCommented = $case->comments->contains('user_id', Auth::id());
                                            $color = $isCommented ? 'red' : 'black';
                                        @endphp
                                    @endif

                                    <i class="bi bi-chat-left" style="color: {{ $color }}"></i>
                                    <span class="mb-1">{{ $case->comments->count() }}</span>
                                </button>
                            </div>
                            <div class="col-md-3 gap-1 d-flex justify-content-center align-items-center ">
                                <form action="{{ route('hottopic.click_bookmark') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="case_number" value="{{ $case->case_number }}">
                                    <button onclick="" class="btn text-dark" id="btn_bookmark" type="submit">
                                        @if (auth()->user())
                                            @php
                                                $isBookmarked = $case->bookmarks->contains('user_id', Auth::id());
                                                $color = $isBookmarked ? 'red' : 'black';
                                            @endphp
                                        @endif
                                        <i class="bi bi-bookmark" style="color: {{ $color }}"></i>
                                        <span class="mb-1">{{ $case->bookmarks->count() }}</span>
                                    </button>
                                </form>
                            </div>
                            <div class="col-md-3 gap-1 d-flex justify-content-center align-items-center  ">
                                <button onclick="" class="btn text-dark" id="btn_share">
                                    <i class="bi bi-share"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2 mr-0 ">
                        @foreach ($case->comments as $item)
                            <div class="d-flex border-secondary" style="border-top:solid 1px;">
                                <div class="col-md-12 p-0 d-flex justify-content-center">
                                    <div class="col-md-9 d-flex flex-row justify-content-center align-items-start">
                                        <div class="col-md-1 pt-2 justify-content-center d-flex">
                                            <img src="{{ asset('components/img/icon/infrafix.png') }}" alt=""
                                                width="50" height="50" class="rounded-circle border">
                                        </div>
                                        <div class="col-md-10 rounded justify-content-center d-flex flex-column py-1 px-3">
                                            <h6>{{ $item->user->name }}</h6>
                                            <p>
                                                {{ $item->content }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-1 d-flex justify-content-center align-items-center">
                                        <button class="btn text-dark border-0 btn-report" style="background-color: #fff"
                                            data-bs-toggle="modal" data-bs-target="#popupReporting" value="{{$item->id}}">
                                            <i class="bi bi-exclamation-circle">
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row d-flex border-secondary" style="border-top:solid 1px;">
                        <div class="col-md-12 p-0 d-flex justify-content-center my-1">
                            <div class="col-md-10 d-flex flex-row justify-content-center align-items-start mt-2">
                                <div class="col-md-1  justify-content-center d-flex">
                                    <img src="{{ asset('components/img/konten/foto_konten1.png') }}" alt=""
                                        width="50" height="50" class="rounded-circle border">
                                </div>
                                <div class="col-md-10 rounded justify-content-center d-flex flex-column py-1">
                                    <form action="{{ route('hottopic.add_comment') }}" method="POST">
                                        <div class="input-group text-justify ">
                                            <textarea class="form-control " placeholder="Tuliskan apa yang sedang kamu pikirkan..." rows="5"
                                                style="height: 7vh; resize: none; background-color: #f2f2f2; border-radius: 15px 0 0 15px; border:1px solid black"
                                                name="content"></textarea>
                                            @csrf
                                            <input type="hidden" name="case_number" value="{{ $case->case_number }}">
                                            <button class="btn btn-primary" type="submit"
                                                style="background-color: #f2f2f2;  border-top: 1px solid black;
                                                border-right: 1px solid black;
                                                border-bottom: 1px solid black;
                                                border-left: none; border-radius: 0 15px 15px 0;">
                                                <i class="bi bi-arrow-right" style="color: black;"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <script>
                                    const textarea = document.querySelector('.form-control');
                                    textarea.addEventListener('input', function() {
                                        if (textarea.scrollHeight > textarea.clientHeight) {
                                            textarea.style.height = '8vh';
                                        } else if (textarea.value.split('\n').length >= 5) {
                                            textarea.style.height = '10vh';
                                        } else if (textarea.value.split('\n').length === 1) {
                                            textarea.style.height = '7vh';
                                        }
                                    });
                                </script>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="popupReporting" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Laporkan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>apakah anda yakin akan melaporkan komentar ini?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <form action="{{ route('hottopic.report') }}" method="POST">
                            @csrf
                            <input type="hidden" name="comment_id" value="">
                            <button type="submit" class="btn btn-primary"
                                style="background-color: red; border-color: black" onclick=""
                                type="submit">Laporkan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
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
        $(document).ready(function(){
            $('.btn-report').click(function(){
                var value = $(this).val();
                console.log(value);
                $('input[name="comment_id"]').val(value);
            });
        });
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
    <script>
        const initSlider = () => {
            const imageList = document.querySelector(".slider-wrapper_carousell .image-list_carousell");
            const slideButtons = document.querySelectorAll(".slider-wrapper_carousell .slide-button");
            const sliderScrollbar = document.querySelector(".container-inner_carousell .slider-scrollbar_carousell");
            const scrollbarThumb = sliderScrollbar.querySelector(".scrollbar-thumb_carousell");
            const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;

            scrollbarThumb.addEventListener("mousedown", (e) => {
                const startX = e.clientX;
                const thumbPosition = scrollbarThumb.offsetLeft;
                const handleMouseMove = (e) => {
                    const deltaX = e.clientX - startX;
                    const newThumbPosition = thumbPosition + deltaX;
                    const maxThumbPosition = sliderScrollbar.getBoundingClientRect().width - scrollbarThumb
                        .offsetWidth;
                    const boundedPosition = Math.max(0, Math.min(maxThumbPosition, newThumbPosition));
                    const scrollPosition = (boundedPosition / maxThumbPosition) * maxScrollLeft;

                    scrollbarThumb.style.transform = `translateX(${boundedPosition}px)`;
                    imageList.scrollLeft = scrollPosition;


                };
                const handleMouseUp = () => {
                    document.removeEventListener("mousemove", handleMouseMove);
                    document.removeEventListener("mouseup", handleMouseUp);
                };

                document.addEventListener("mousemove", handleMouseMove);
                document.addEventListener("mouseup", handleMouseUp);
            });
            slideButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const direction = button.id === "prev-slide" ? -1 : 1;
                    const scrollAmount = imageList.clientWidth * direction;
                    imageList.scrollBy({
                        left: scrollAmount,
                        behavior: "smooth"
                    });
                });
            });
            const handleSlideButton = () => {
                slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "block";
                slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "block";

            };
            const updateScrollThumbPosition = () => {
                const scrollPosition = imageList.scrollLeft;
                const thumbPosition = (scrollPosition / maxScrollLeft) * (sliderScrollbar.clientWidth -
                    scrollbarThumb.offsetWidth);
                scrollbarThumb.style.transform = `translateX(${thumbPosition}px)`;
            };
            imageList.addEventListener("scroll", () => {
                handleSlideButton();
                updateScrollThumbPosition();
            });
        }
        window.addEventListener("load", initSlider);
    </script>
@endsection
