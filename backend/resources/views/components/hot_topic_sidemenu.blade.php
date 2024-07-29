<div class="row col-md-2 gap-3">
    <div class="d-flex justify-content-center align-items-center rounded border border-secondary"
        style="background-color: #fff; height: 25vh">
        <div class="col-md-12 my-auto d-flex justify-content-center">
            <ul class="row" style=" list-style: none;  ">
                <li class="py-2 ps-3"><a href="" class="text-decoration-none text-dark link-secondary"><i
                            class="bi bi-bookmark d-flex" style=" font-size: 25px; font-style:normal; align-items: center"><span
                                class="ms-2 fw-bold" style="font-size: 20px">Tersimpan</span></i></a></li>
                <li class="py-3 ps-3 "><a href="" class=" text-dark text-decoration-none link-secondary"><i
                            class="bi bi-bell d-flex" style="font-size: 25px ;font-style:normal; align-items: center"><span
                                class="ms-2 fw-bold" style="font-size: 20px">Pemberitahuan</span></i></a></li>
                <li class="py-2 ps-3"><a href="" class="text-decoration-none  text-dark link-secondary" ><i
                            class="bi bi-gear d-flex" style="font-size: 25px; font-style:normal; align-items: center"><span
                                class="ms-2 fw-bold" style="font-size: 20px">Pengaturan</span></i></a></li>
            </ul>
        </div>
    </div>
    <form action="">
        <div class="col-md-12 rounded border border-secondary p-0 overflow-auto"
            style="background-color: #fff;  height: 58vh; max-height:58vh; position: relative; ">
            <div class=" row w-100 m-0  " >
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
                            <div class="accordion-body p-0 mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio"
                                        id="flexRadioDefault1" checked>
                                    <label class="form-check-label" for="flexRadioTahun">
                                        Rentang Tahun
                                    </label>
                                </div>
                                {{-- <div class="form-check">
                                    <input class="form-check-input" type="radio"
                                        id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioTahun">
                                        Tahun Tunggal
                                    </label>
                                </div> --}}
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
                                            <input type="number" class="input-min" value="2000" name="year_start">
                                        </div>
                                        <div class="field mb-1">
                                            <input type="number" class="input-max" value="2024" name="year_end">
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
                            <div class="accordion-body p-0 mt-2" style="">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio"
                                        id="flexRadioDefault1" checked>
                                    <label class="form-check-label" for="flexRadioBulan">
                                        Rentang Bulan
                                    </label>
                                </div>
                                {{-- <div class="form-check">
                                    <input class="form-check-input" type="radio"
                                        id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioBulan">
                                        Bulan Tunggal
                                    </label>
                                </div> --}}
                                <div class="col-md-12 mt-3">
                                    <div class="slider-month">
                                        <div class="progres-month"></div>
                                    </div>
                                    <div class="range-input-month">
                                        <input type="range" class="range_minimal_month" min="1" max="12"
                                            value="1">
                                        <input type="range" class="range_maksimal_month" min="1" max="12"
                                            value="12">
                                    </div>
                                    <div class="month-input mt-2">
                                        <div class="field mb-1">
                                            <input type="number" class="input-min-month" value="{{ request()->input('month_start', 1) }}" name="month_start">
                                        </div>
                                        <div class="field mb-1">
                                            <input type="number" class="input-max-month" value="{{ request()->input('month_end', 12) }}" name="month_end">
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
                            <div class="accordion-body p-0 mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="unprocessed" id="flexCheckboxDefault1" checked>
                                    <label class="form-check-label" for="flexCheckboxDefault1">
                                        Belum diproses
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="processed" id="flexCheckboxDefault2" checked>
                                    <label class="form-check-label" for="flexCheckboxDefault2">
                                        Sedang diproses
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="finished" id="flexCheckboxDefault3" checked>
                                    <label class="form-check-label" for="flexCheckboxDefault3">
                                        Selesai diproses
                                    </label>
                                </div>
                            </div>
                        </div>
                        <style>
                            .form-check input[type="checkbox"]:checked {
                                border: 1px solid #6A040F;
                                background-color: #6A040F;
                            }
                        </style>
                    </div>

                </div>
                <button class="btn btn-sm btn-danger col-md-4" style="position: absolute; right: 2%; bottom: 1%; border-radius: 20px;" type="">Cari</button>
            </div>
        </div>
    </form>
