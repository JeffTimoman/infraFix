@extends('layouts.app')
@section('title')
    Index
@endsection
@section('style')
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        div.hover_konten {
            transition: background-color 0.2s ease-in;
        }

        div.hover_konten:hover {
            transition: .2s ease-out;
            background-color: rgba(164, 163, 163, 0.174);
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
    <style>
        .randomized-image {
            transition: opacity 1s ease-in-out;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid px-4">
        <div class="row mt-4 d-flex justify-content-between">
            @include('components.hot_topic_sidemenu')
        </div>
        @php
            $color = 'black';
        @endphp

        <div class="col-md-10 rounded border border-secondary " style="background-color: #fff;">
            <div class="row mt-3 d-flex justify-content-center align-items-center" style="height: 9vh;">
                <div class="col-md-5 ">
                    <form class="search " method="GET" style=" ;border-radius: 20px; !important">
                        <div class="input-group">
                            <span class="input-group-text border-2 border-secondary " id="basic-addon1"
                                style=" background-color: #fff;border-right: 0; "><i class="bi bi-search"></i></span>
                            <input type="text" class="form-control border-secondary border-2" style="border-left:0;"
                                name="query" placeholder="Pencarian..." value="{{ request('query') }}">

                        </div>
                    </form>
                </div>
            </div>
            <div class="row overflow-auto d-flex justify-content-center" style="height: 74vh;">
                <div class="col-md-12 p-0" style="">
                    {{-- @dump($cases) --}}
                    @if ($cases->count() == 0)
                        <div class="container-fluid text-center">
                            <h3>Tidak Terdapat Kasus Yang Tampil!</h3>
                        </div>
                    @else
                        @foreach ($cases as $item)
                            <div class="container-fluid border-secondary border-1 border-bottom mb-0 hover_konten">
                                <a href="{{ route('hottopic.detail', ['case_number' => $item->case_number]) }} "
                                    class="text-decoration-none border-0">
                                    <div class="container col-md-9 overflow-hidden">
                                        <div
                                            class="text-capitalize text-dark d-flex justify-content-between align-items-center mt-2">
                                            <div class="text-wrap align-items-center d-flex"
                                                style="width: 90%; height: 6vh;">
                                                <h2 style=" font-size: 25px;">{{ $item->title }}</h2>
                                            </div>
                                            <div class="d-flex justify-content-end align-items-center"
                                                style="width: 10%; height: 6vh;">

                                                <span class="text-secondary"
                                                    style="font-size: 14px">{{ \App\Helpers\TimeFormatter::formatTimeDifference($item->created_at) }}</span>

                                            </div>
                                        </div>

                                        <div class="text-danger text-capitalize" style=" font-size: 18px">
                                            <span>{{ $item->reports->count() }} Laporan</span>
                                        </div>

                                        <div class="mt-1 mb-2 text-dark text-capitalize" style=" font-size: 18px">
                                            <div class="span">
                                                Alamat: {{ $item->address }}
                                                <br>
                                                Lokasi: {{ $item->kelurahan->name }},
                                                {{ $item->kelurahan->kecamatan->name }},
                                                {{ $item->kelurahan->kecamatan->kota->name }}.
                                                <br>
                                                Status: @if ($item->milestone_details->count() == 0)
                                                    Belum diproses
                                                @else
                                                    {{ $item->milestone_details->last()->milestone->title }} |
                                                    <span class="text-danger">
                                                        {{ $item->milestone_details->last()->milestone->description }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="mb-1 text-dark overflow-hidden" style=" font-size: 18px; height: 8vh;">
                                            @if (strlen($item->description) > 100)
                                                <p>{{ substr($item->description, 0, 100) }} <span class="text-primary">show
                                                        more...</span></p>
                                            @else
                                                <p>{{ $item->description }}</p>
                                            @endif
                                        </div>
                                        {{-- untuk show gambar --}}
                                </a>
                                <div class="col-md-12 d-flex justify-content-center">
                                    @if ($item->images->count() > 0)
                                        <img class="randomized-image"
                                            src="{{ asset('upload/reportimage/' . $item->images->random()->name) }}"
                                            alt="" width="900" height="288"
                                            data-case-number="{{ $item->case_number }}" width="900" height="288">
                                    @else
                                        <img class="randomized-image" src="{{ asset('upload/reportimage/default.png') }}"
                                            alt="" width="900" height="288"
                                            data-case-number="{{ $item->case_number }}" width="900" height="288">
                                    @endif
                                </div>
                                <div class="row" style=" height:5.5vh ;">
                                    <div class=" col-md-3 gap-1 d-flex justify-content-center align-items-center">
                                        <button onclick="ToggleLike()" class="btn text-dark like_button border-0"
                                            id="btn_like">
                                            <form action="{{ route('hottopic.click_like') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="case_number" value="{{ $item->case_number }}">
                                                <button type="submit" style="background: none; border:none; ">
                                                    @if (auth()->check())
                                                        @php
                                                            $isLiked = $item->likes->contains('user_id', Auth::id());
                                                            $color = $isLiked ? 'red' : 'black';
                                                        @endphp
                                                    @endif
                                                    {{-- <i class="bi bi-heart"></i> --}}
                                                    <i class="bi bi-heart" style="color: {{ $color }}"></i>
                                                </button>
                                            </form>
                                            <span class="mb-1" style="color: black;">{{ $item->likes->count() }}</span>
                                        </button>
                                    </div>
                                    <div class="col-md-3 gap-1 d-flex justify-content-center align-items-center ">
                                        <button onclick="" class="btn text-dark komen_button border-0" id="btn_komen">
                                            @if (auth()->check())
                                                @php
                                                    $isCommented = $item->comments->contains('user_id', Auth::id());
                                                    $color = $isCommented ? 'red' : 'black';
                                                @endphp
                                            @endif

                                            <i class="bi bi-chat-left" style="color: {{ $color }}"></i>
                                            <span class="mb-1">{{ $item->comments->count() }}</span>
                                        </button>
                                    </div>
                                    <div class="col-md-3 gap-1 d-flex justify-content-center align-items-center ">
                                        <form action="{{ route('hottopic.click_bookmark') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="case_number" value="{{ $item->case_number }}">
                                            <button onclick="" class="btn text-dark" id="btn_bookmark"
                                                type="submit">
                                                @if (auth()->user())
                                                    @php
                                                        $isBookmarked = $item->bookmarks->contains(
                                                            'user_id',
                                                            Auth::id(),
                                                        );
                                                        $color = $isBookmarked ? 'red' : 'black';
                                                    @endphp
                                                @endif
                                                <i class="bi bi-bookmark" style="color: {{ $color }}"></i>
                                                <span class="mb-1">{{ $item->bookmarks->count() }}</span>
                                            </button>
                                        </form>
                                    </div>
                                    <div class="col-md-3 gap-1 d-flex justify-content-center align-items-center  ">
                                        <button class="btn text-dark share-btn"
                                            data-link-share="{{ route('hottopic.detail', ['case_number' => $item->case_number]) }}">
                                            <i class="bi bi-share"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                </div>
                @endforeach
                @endif

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
    <script>
        $(document).ready(function() {
            $('.share-btn').on('click', function() {
                var linkToShare = $(this).data('link-share');
                navigator.clipboard.writeText(linkToShare).then(function() {
                    alert('Link copied to clipboard: ' + linkToShare);
                }, function(err) {
                    console.error('Could not copy text: ', err);
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            function updateRandomImage($img) {
                let caseNumber = $img.data('case-number');

                $.ajax({
                    url: '/hottopic/get_random_image/' + caseNumber,
                    type: 'GET',
                    success: function(response) {
                        $img.fadeOut(500, function() { // Fade out the image over 500ms
                            if (response.image) {
                                $img.attr('src', '/upload/reportimage/' + response.image);
                            } else {
                                $img.attr('src', '/upload/reportimage/default.png');
                            }
                            $img.fadeIn(500); // Fade in the new image over 500ms
                            console.log(response);
                        });
                    },
                    error: function() {
                        $img.fadeOut(500, function() { // Fade out the image over 500ms
                            $img.attr('src', '/upload/reportimage/default.png');
                            $img.fadeIn(500); // Fade in the new image over 500ms
                        });
                    }
                });
            }

            // Set interval to update each image every 5 seconds (5000 milliseconds)
            $('.randomized-image').each(function() {
                let $img = $(this);
                setInterval(function() {
                    updateRandomImage($img);
                }, 5000);
            });
        });
    </script>

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
