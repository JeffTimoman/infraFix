@extends('layouts.app')

@section('title')
    Lapor
@endsection

@section('style')
    {{-- import fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .form-input-modified {
            border-color: rgb(49, 44, 44);
        }

        .form-input-modified:focus {
            border: 1px solid #A50000;
            box-shadow: 1px 1px 5px #A50000;
        }

        .btn-modified:hover {
            background-color: #FFF !important;
            color: #A50000 !important;
        }

        .btn-modified2 {
            background-color: #FFF !important;
            color: #A50000 !important;
        }

        .btn-modified2:hover {
            background-color: #A50000 !important;
            color: #FFF !important;
        }

        select.decorated option:hover {
            box-shadow: 0 0 10px 100px #1882A8 inset;
        }

        #drop-area {
            border: 3px dashed #A50000;
            border-radius: 15px;
            width: 100%;
            height: 50vh;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }

        .uploaded-image {
            display: flex;
            flex-direction: row;
            background-color: #D8A4A4;
            position: relative;
            border-radius: 6px;
        }

        .uploaded-image-icon {
            background-color: #A50000;
            border-radius: 6px;
        }

        .uploaded-image-label {}

        .uploaded-image-delete {
            cursor: pointer;
            position: absolute;
            right: 0;
            background-color: #A50000;
            border-radius: 4px;
        }

        .form-check-modified:checked {
            background-color: #A50000;
            border: 1px solid #A50000;
        }

        /* Define the initial state and transitions */
        .form-section {
            transition: transform 0.5s ease-in-out;
            position: absolute;
            width: 100%;
        }

        /* Hide elements */
        .d-none {
            display: none;
        }

        /* Swipe left animation */
        .swipe-left-enter {
            transform: translateX(100%);
        }

        .swipe-left-enter-active {
            transform: translateX(0);
        }

        .swipe-left-exit {
            transform: translateX(0);
        }

        .swipe-left-exit-active {
            transform: translateX(-100%);
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <form action="{{ route('report.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12 mx-auto">
                <div class="card p-5">
                    <div class="col-md-12" id="form-1">
                        <div class="col-md-12 mb-3">
                            <label for="damage" class="form-label">Tipe Kerusakan</label>
                            <select name="damage" id="" class="form-select form-input-modified" style="">
                                <option value="" class="d-none" disabled selected>Pilih Tipe Kerusakan</option>
                                @foreach ($data['damage_types'] as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="description" class="form-label">Deskripsi</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control form-input-modified"
                                style="resize: none;" name="description"></textarea>
                        </div>
                        <div class="col-md-12 d-flex justify-content-between align-items-center gap-3">
                            <span>Ingin Melihat Laporan? <a href="" class="text-danger">Klik Ini</a></span>
                            <button class="btn btn-danger btn-modified float-end btn-next"
                                style="background-color: #A50000;" type="button">Lanjut</button>
                        </div>
                    </div>

                    <div class="col-md-12 row d-none" id='form-2'>
                        <div class="col-md-5">
                            <div class="col-md-11 mb-3">
                                <label for="provinsi" class="form-label">Provinsi</label>
                                <select name="provinsi" id="provinsi" class="form-select form-input-modified"
                                    style="" aria-placeholder="Pilih provinsi">
                                    <option value="" disabled selected>Pilih Provinsi</option>
                                    @foreach ($data['provinsis'] as $item)
                                        <option value="{{ $item->id }}" class="omg">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-11 mb-3">
                                <label for="kota" class="form-label">Kota/Kabupaten</label>
                                <select name="kota" id="kota" class="form-select form-input-modified"
                                    style="">
                                    <option value="" disabled selected>Pilih Kota/Kabupaten </option>
                                </select>
                            </div>

                            <div class="col-md-11 mb-3">
                                <label for="kecamatan" class="form-label">Kecamatan</label>
                                <select name="kecamatan" id="kecamatan" class="form-select form-input-modified"
                                    style="">
                                    <option value="" disabled selected>Pilih Kecamatan</option>
                                </select>
                            </div>
                            <div class="col-md-11 mb-3">
                                <label for="kelurahan" class="form-label">Kelurahan</label>
                                <select name="kelurahan" id="kelurahan" class="form-select form-input-modified"
                                    style="">
                                    <option value="" disabled selected>Pilih Kelurahan</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-md-1">

                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12 mb-3">
                                <label for="address" class="form-label">Alamat</label>
                                <textarea name="address" id="" cols="30" rows="5" class="form-control form-input-modified"
                                    style="resize: none;"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex justify-content-end align-items-center gap-3">
                            <button class="btn btn-danger btn-modified float-end btn-back"
                                style="background-color: #A50000;" type="button">Kembali</button>
                            <button class="btn btn-danger btn-modified float-end btn-next"
                                style="background-color: #A50000;" type="button">Lanjut</button>
                        </div>
                    </div>

                    <div class="col-md-12 row d-flex justify-content-between d-none" id=form-3>
                        <div class="col-md-5">
                            <label for="input-image" id="drop-area" class="">
                                <input type="file" accept="image/*" id="input-image" class="d-none" name="images[]" multiple>
                                <div id="img-view" class=" d-flex flex-column justify-content-center align-items-center">
                                    <i class="fa-solid fa-cloud-arrow-up" style="font-size: 5rem; color: #A50000;"></i>
                                    <p style="margin: 0;">Seret dan Lepaskan Gambar</p>
                                    <p style="margin:0;">atau</p>
                                    <button class="btn btn-danger btn-modified2 mt-3 btn-upload"
                                        type="button">Upload</button>
                                </div>
                            </label>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12 row">
                                <h4 style="border-bottom: solid 2.3px #A50000;">Gambar Diupload</h4>
                                <div class="col-md-12" id="uploadedName">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 d-flex justify-content-end align-items-center gap-3 border-top mt-3 pt-2">
                            <button class="btn btn-danger btn-modified float-end btn-back"
                                style="background-color: #A50000;" type="button">Kembali</button>
                            <button class="btn btn-danger btn-modified float-end btn-next"
                                style="background-color: #A50000;" type="button">Lanjut</button>
                        </div>
                    </div>

                    <div class="col-md-12 row d-none" id="form-4">
                        <div class="col-md-12" style="margin: 0; padding: 0;">
                            <h3 class="text-center border-bottom pb-2">Laporan</h3>
                        </div>
                        <div class="col-md-8 row">
                            <div class="col-md-6">
                                <h5>Tipe Kerusakan</h5>
                                <p class="summary-damage">Infrastruktur</p>
                            </div>
                            <div class="col-md-6">
                                <h5>Provinsi, Kota, Kecamatan, Kelurahan</h5>
                                <p class="summary-lokasi">Jawa Barat, Kabupaten Bogor, Babakan Madang, Babakan Madang</p>
                            </div>
                            <div class="col-md-6">
                                <h5>Detail Kerusakan</h5>
                                <p class="summary-detail">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure
                                    nisi veritatis iusto
                                    eveniet dolorem, at dignissimos dolores animi magnam quasi obcaecati explicabo tempora.
                                    Officia itaque dicta doloremque, non iusto cupiditate!</p>
                            </div>
                            <div class="col-md-6">
                                <h5>Alamat</h5>
                                <p class="summary-alamat">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <h5>Gambar Terlampir</h5>
                                <div class="summary-image">
                                    <img src="https://images.unsplash.com/photo-1493612276216-ee3925520721?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cmFuZG9tfGVufDB8fDB8fHww"
                                        alt="" height="100px" width="auto">
                                    <img src="https://images.unsplash.com/photo-1493612276216-ee3925520721?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cmFuZG9tfGVufDB8fDB8fHww"
                                        alt="" height="100px" width="auto">
                                    <img src="https://images.unsplash.com/photo-1493612276216-ee3925520721?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cmFuZG9tfGVufDB8fDB8fHww"
                                        alt="" height="100px" width="auto">
                                    <img src="https://images.unsplash.com/photo-1493612276216-ee3925520721?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cmFuZG9tfGVufDB8fDB8fHww"
                                        alt="" height="100px" width="auto">
                                    <img src="https://images.unsplash.com/photo-1493612276216-ee3925520721?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cmFuZG9tfGVufDB8fDB8fHww"
                                        alt="" height="100px" width="auto">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="email" class="form-label" style="font-size: 1.2rem;">E-mail</label>
                            <input type="email" name="email" id="email"
                                style="background-color: rgb(214, 212, 212);" class="form-control form-input-modified">
                        </div>
                        <div class="col-md-12 d-flex align-items-center gap-2 mt-2">
                            <input type="hidden" value="0" id="hiddenAnonymous" name="anonymous">
                            <input class="form-check-input form-check-modified" type="checkbox"
                                id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label" for="flexCheckDefault" style="font-size: 1.2rem;">
                                Melapor secara anonim? Dengan melapor secara anonim, alamat email tidak akan disimpan.
                            </label>
                        </div>
                        <div class="col-md-12 d-flex justify-content-end align-items-center gap-3 mt-3 pt-2">
                            <button class="btn btn-danger btn-modified float-end btn-back"
                                style="background-color: #A50000;" type="button">Kembali</button>
                            <button class="btn btn-danger btn-modified float-end" style="background-color: #A50000;"
                                type="submit">Submit</button>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            let counter = 1;

            function transitionForms(currentForm, nextForm) {
                currentForm.addClass('swipe-left-exit');
                nextForm.addClass('d-none swipe-left-enter');

                setTimeout(() => {
                    currentForm.removeClass('swipe-left-exit').addClass('d-none');
                    nextForm.removeClass('d-none swipe-left-enter').addClass('swipe-left-enter-active');

                    setTimeout(() => {
                        nextForm.removeClass('swipe-left-enter-active');
                    }, 500); // Duration of the animation
                }, 0);
            }

            $('.btn-next').on('click', function() {
                if (counter < 4) {
                    let currentForm = $(`#form-${counter}`);
                    counter++;
                    let nextForm = $(`#form-${counter}`);
                    transitionForms(currentForm, nextForm);
                }
            });

            $('.btn-back').on('click', function() {
                if (counter > 1) {
                    let currentForm = $(`#form-${counter}`);
                    counter--;
                    let nextForm = $(`#form-${counter}`);
                    transitionForms(currentForm, nextForm);
                }
            });
        });

        $(document).ready(function() {
            let counter = 1;
            $('.btn-next').on('click', function() {
                counter++;
                if (counter == 2) {
                    $('#form-1').addClass('d-none');
                    $('#form-2').removeClass('d-none');
                    $('#form-3').addClass('d-none');
                    $('#form-4').addClass('d-none');
                } else if (counter == 3) {
                    $('#form-1').addClass('d-none');
                    $('#form-2').addClass('d-none');
                    $('#form-3').removeClass('d-none');
                    $('#form-4').addClass('d-none');
                } else if (counter == 4) {
                    $('#form-1').addClass('d-none');
                    $('#form-2').addClass('d-none');
                    $('#form-3').addClass('d-none');
                    $('#form-4').removeClass('d-none');

                    $('.summary-damage').text($('select[name="damage"] option:selected').text());
                    $('.summary-lokasi').text($('select[name="provinsi"] option:selected').text() + ', ' +
                        $('select[name="kota"] option:selected').text() + ', ' +
                        $('select[name="kecamatan"] option:selected').text() + ', ' +
                        $('select[name="kelurahan"] option:selected').text());

                    $('.summary-detail').text($('textarea[name="description"]').val());
                    $('.summary-alamat').text($('textarea[name="address"]').val());

                    $('.summary-image').empty();
                    let images = $('#input-image')[0].files;
                    // console.log(images)
                    for (let i = 0; i < images.length; i++) {
                        let reader = new FileReader();
                        reader.onload = function(e) {
                            $('.summary-image').append(
                                `<img src="${e.target.result}" alt="" height="100px" width="auto">`);
                        }
                        reader.readAsDataURL(images[i]);
                    }
                }
            });

            $('.btn-back').on('click', function() {
                counter--;
                if (counter == 1) {
                    $('#form-1').removeClass('d-none');
                    $('#form-2').addClass('d-none');
                    $('#form-3').addClass('d-none');
                    $('#form-4').addClass('d-none');
                } else if (counter == 2) {
                    $('#form-1').addClass('d-none');
                    $('#form-2').removeClass('d-none');
                    $('#form-3').addClass('d-none');
                    $('#form-4').addClass('d-none');
                } else if (counter == 3) {
                    $('#form-1').addClass('d-none');
                    $('#form-2').addClass('d-none');
                    $('#form-3').removeClass('d-none');
                    $('#form-4').addClass('d-none');
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            // Prevent default drag behaviors
            $(document).on('dragenter dragover drop', function(e) {
                e.preventDefault();
            });

            // Highlight the drop area when an item is dragged over it
            $('#drop-area').on('dragenter dragover', function() {
                $(this).addClass('highlight');
            }).on('dragleave', function() {
                $(this).removeClass('highlight');
            });

            $('#drop-area').on('drop', function(e) {
                e.preventDefault();
                $(this).removeClass('highlight');

                var files = e.originalEvent.dataTransfer.files;
                $('#input-image')[0].files = files;

                // Display the uploaded image names
                var uploadedNameDiv = $('#uploadedName');

                $.each(files, function(index, file) {
                    var fileName = `<div class="uploaded-image col-md-12 d-flex justify-content-start align-items-center gap-1 mb-2">
                                        <div class="uploaded-image-icon mr-2 px-2" style="">
                                            <i class="fa-solid fa-image" style="color: white;"></i>
                                        </div>
                                        <div class="uploaded-image-label text-light px-2">${file.name}</div>
                                        <div class="uploaded-image-delete px-2" style="">
                                            <i class="fa-solid fa-trash-can" style="color:white;"></i>
                                        </div>
                                    </div>`;
                    uploadedNameDiv.append(fileName);
                });
            });

            // Handle the upload button click
            $('.btn-upload').on('click', function() {
                $('#input-image').click();
            });

            // Handle file input change
            $('#input-image').on('change', function() {
                var files = this.files;

                // Display the uploaded image names
                var uploadedNameDiv = $('#uploadedName');

                $.each(files, function(index, file) {
                    var fileName = `<div class="uploaded-image col-md-12 d-flex justify-content-start align-items-center gap-1 mb-2">
                                        <div class="uploaded-image-icon mr-2 px-2" style="">
                                            <i class="fa-solid fa-image" style="color: white;"></i>
                                        </div>
                                        <div class="uploaded-image-label text-light px-2">${file.name}</div>
                                        <div class="uploaded-image-delete px-2" style="">
                                            <i class="fa-solid fa-trash-can" style="color:white;"></i>
                                        </div>
                                    </div>`;
                    uploadedNameDiv.append(fileName);
                });
            });

            $(document).on('click', '.uploaded-image-delete', function() {
                let file_name = $(this).parent().find('.uploaded-image-label').text();
                let file_input = $('#input-image')[0];
                let files = file_input.files;

                // Create a new DataTransfer object
                let dt = new DataTransfer();

                // Loop through the files and add them to the DataTransfer object
                for (let i = 0; i < files.length; i++) {
                    if (files[i].name !== file_name) {
                        dt.items.add(files[i]);
                    }
                }

                // Assign the new FileList to the input element
                file_input.files = dt.files;

                // Remove the parent element
                $(this).parent().remove();
            });

            $('.form-check-input').on('click', function(){
                $('#hiddenAnonymous').val($('#hiddenAnonymous').val() == 0 ? 1 : 0);
                // console.log($('#hiddenAnonymous').val());
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#provinsi').on('change', function() {
                var provinsi_id = $(this).val();
                if (provinsi_id) {
                    $.ajax({
                        url: '{{ route('report.show_kota') }}',
                        type: 'GET',
                        data: {
                            id: provinsi_id
                        },
                        success: function(data) {
                            // console.log(data);
                            $('#kota').empty();
                            $('#kota').append(
                                '<option value="" disabled selected>Pilih Kota/Kabupaten</option>'
                            );
                            $.each(data['data'], function(key, value) {
                                $('#kota').append(
                                    '<option value="' + key + '">' + value +
                                    '</option>'
                                );
                            });
                        }
                    });
                } else {
                    $('#kota').empty();
                    $('#kecamatan').empty();
                    $('#kelurahan').empty();
                }
            });

            $('#kota').on('change', function() {
                var kota_id = $(this).val();
                if (kota_id) {
                    $.ajax({
                        url: '{{ route('report.show_kecamatan') }}',
                        type: 'GET',
                        data: {
                            id: kota_id
                        },
                        success: function(data) {
                            console.log(data);
                            $('#kecamatan').empty();
                            $('#kecamatan').append(
                                '<option value="" disabled selected>Pilih Kecamatan</option>'
                            );
                            $.each(data['data'], function(key, value) {
                                $('#kecamatan').append(
                                    '<option value="' + key + '">' + value +
                                    '</option>'
                                );
                            });
                        }
                    });
                } else {
                    $('#kecamatan').empty();
                    $('#kelurahan').empty();
                }
            });

            $('#kecamatan').on('change', function() {
                var kecamatan_id = $(this).val();
                if (kecamatan_id) {
                    $.ajax({
                        url: '{{ route('report.show_kelurahan') }}',
                        type: 'GET',
                        data: {
                            id: kecamatan_id
                        },
                        success: function(data) {
                            // console.log(data);
                            $('#kelurahan').empty();
                            $('#kelurahan').append(
                                '<option value="" disabled selected>Pilih Kelurahan</option>'
                            );
                            $.each(data['data'], function(key, value) {
                                $('#kelurahan').append(
                                    '<option value="' + key + '">' + value +
                                    '</option>'
                                );
                            });
                        }
                    });
                } else {
                    $('#kelurahan').empty();
                }
            });


        });
    </script>
@endsection
