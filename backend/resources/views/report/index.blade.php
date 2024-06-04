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
    </style>
@endsection

@section('content')
    <div class="container">
        <form action="#">
            <div class="col-md-12 mx-auto">
                <div class="card p-5">
                    <div class="col-md-12 d-none">
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
                        <div class="col-md-12 d-flex justify-content-end align-items-center gap-3">
                            <button class="btn btn-danger btn-modified float-end btn-back"
                                style="background-color: #A50000;">Lanjut</button>
                        </div>
                    </div>

                    <div class="col-md-12 row d-none">
                        <div class="col-md-5">
                            <div class="col-md-11 mb-3">
                                <label for="provinsi" class="form-label">Provinsi</label>
                                <select name="provinsi" id="" class="form-select form-input-modified"
                                    style="" aria-placeholder="Pilih provinsi">
                                    <option value="" disabled selected>Pilih Provinsi</option>
                                    @foreach ($data['provinsis'] as $item)
                                        <option value="{{ $item->id }}" class="omg">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-11 mb-3">
                                <label for="kota" class="form-label">Kota/Kabupaten</label>
                                <select name="kota" id="" class="form-select form-input-modified"
                                    style="">
                                    <option value="" disabled selected>Pilih Kota/Kabupaten </option>
                                    @foreach ($data['kotas'] as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-11 mb-3">
                                <label for="kecamatan" class="form-label">Kecamatan</label>
                                <select name="kecamatan" id="" class="form-select form-input-modified"
                                    style="">
                                    <option value="" disabled selected>Pilih Kecamatan</option>
                                    @foreach ($data['kecamatans'] as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-11 mb-3">
                                <label for="kelurahan" class="form-label">Kelurahan</label>
                                <select name="kelurahan" id="" class="form-select form-input-modified"
                                    style="">
                                    <option value="" disabled selected>Pilih Kelurahan</option>
                                    @foreach ($data['kelurahans'] as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
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
                                style="background-color: #A50000;">Kembali</button>
                            <button class="btn btn-danger btn-modified float-end btn-nexts"
                                style="background-color: #A50000;">Lanjut</button>
                        </div>
                    </div>

                    <div class="col-md-12 row d-flex justify-content-between">
                        <div class="col-md-5">
                            <label for="input-image" id="drop-area" class="">
                                <input type="file" accept="image/*" id="input-image" class="d-none" multiple>
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
                                    <div
                                        class="uploaded-image col-md-12 d-flex justify-content-start align-items-center gap-1 mb-2">
                                        <div class="uploaded-image-icon mr-2 px-2" style="">
                                            <i class="fa-solid fa-image" style="color: white;"></i>
                                        </div>
                                        <div class="uploaded-image-label text-light px-2">inigambar001.png</div>
                                        <div class="uploaded-image-delete px-2" style="">
                                            <i class="fa-solid fa-trash-can" style="color:white;"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                $(this).parent().remove();
                var file_name = $(this).parent().find('.uploaded-image-label').text();
                var file_input = $('#input-image')[0];
                var files = file_input.files;

                for (var i = 0; i < files.length; i++) {
                    if (files[i].name == file_name) {
                        files = Array.from(files);
                        files.splice(i, 1);
                        file_input.files = new FileList(files);
                        break;
                    }
                }
            });
        });
    </script>
@endsection
