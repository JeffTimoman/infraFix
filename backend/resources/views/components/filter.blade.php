<div class="col-lg-5 d-flex justify-content-end">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="material-symbols-outlined" style="scale: 125%;">tune</span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Filter</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <hr style="color: grey; margin: 0;">
        <div class="offcanvas-body">
            <div class="row px-4">
                <label class="my-1" style="margin-left: -0.5rem; font-size:large;" for="">Provinsi</label>
                <select class="form-select" style="background-color: #F2F2F2;" id="">
                    <option selected>Choose...</option>
                    @foreach ($datas['provinsi'] as $item)
                    <option value="1" style="color: black">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="row px-4">
                <label class="my-1" style="margin-left: -0.5rem; font-size:large;" for="">Kabupaten/Kota</label>
                <select class="form-select" style="background-color: #F2F2F2;" id="">
                    <option selected>Choose...</option>
                    @foreach ($datas['kota'] as $item)
                    <option value="1" style="color: black">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="row px-4">
                <label class="my-1" style="margin-left: -0.5rem; font-size:large;" for="">Kecamatan</label>
                <select class="form-select" style="background-color: #F2F2F2;" id="">
                    <option selected>Choose...</option>
                    @foreach ($datas['kecamatan'] as $item)
                    <option value="1" style="color: black">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="row px-4">
                <label class="my-1" style="margin-left: -0.5rem; font-size:large;" for="">Kelurahan</label>
                <select class="form-select" style="background-color: #F2F2F2;" id="">
                    <option selected>Choose...</option>
                    @foreach ($datas['kelurahan'] as $item)
                    <option value="1" style="color: black">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="row px-4">
                <label class="my-1" style="margin-left: -0.5rem; font-size:large;" for="">Tipe Kerusakan</label>
                <select class="form-select" style="background-color: #F2F2F2;" id="">
                    <option selected>Choose...</option>
                    @foreach ($datas['damage_type'] as $item)
                    <option value="1" style="color: black">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="row text-end p-4">
                <form class="" role="">
                    <button type="submit" class="btn rounded"
                        style="background-color: #A50000; color: white;">Cari</button>
                </form>
            </div>
        </div>
    </div>
</div>
