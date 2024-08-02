<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 rounded p-5" style="background-color: white; height: 40rem; width: 82vw;">
                {{-- <input type="text" class="report-data-collected" name="reports" id="reports"> --}}
                <form action="{{route('manager.unggah_2')}}" method="post">
                    @csrf
                    @method('post')
                    <div class="row mb-4">
                        <div class="col-lg-12">
                            <label for="" class="form-label"
                                style="margin-left: -1rem; font-size: large; font-weight: 400;">Judul Kasus</label>
                            <input type="text" id="title" class="form-control" name="title"
                                style="background-color: #F2F2F2; width: 93vw; margin-left: -0.7rem;">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-3">
                            <label for="" class="form-label"
                                style="margin-left: -1rem; font-size: large; font-weight: 400;">Tipe Kerusakan</label>
                            <select class="form-select" style="background-color: #F2F2F2; margin-left: -0.7rem;" id=""
                                name="damage_type">
                                <option selected>Pilih...</option>
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
                            <input type="text" id="status" readonly class="form-control" name="status"
                                style="background-color: #cdcaca; width: 17vw; margin-left: -0.7rem;"
                                value="Baru Dilaporkan">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-3">
                            <label for="" class="form-label"
                                style="margin-left: -1rem; font-size: large; font-weight: 400;">Penanggung Jawab</label>
                            <select class="form-select" style="background-color: #F2F2F2; margin-left: -0.7rem;" id=""
                                name="government">
                                <option selected>Pilih...</option>
                                @foreach ($datas['government'] as $item)
                                <option value="{{ $item->name }}" style="color: black;">
                                    {{$item->name}}</option>
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
                                    style="background-color: #F2F2F2; width: 66rem; margin-left: -0.7rem;">
                            </div>
                            <div class="col-lg-3">
                                <label for="" class="form-label"
                                    style="margin-left: 16.5rem; font-size: medium; font-weight: 100;">Kelurahan</label>
                                <select class="form-select" style="background-color: #F2F2F2; margin-left: 16.5rem;"
                                    id="" name="kelurahan">
                                    <option selected>Pilih...</option>
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
                                style="background-color: #F2F2F2; margin-left: -0.5rem; width: 93vw;"></textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        function removeLocalStorage(){
            // check param page url
            const expected_url = 'http://127.0.0.1:8000/manager/unggah/scroll/isi'
            // const expected_url = 'http://127.0.0.1:8000/manager/unggah/2'

            const current_url = window.location.href;

            if(current_url === expected_url) {
                collectReportData();
            }
            else{
                localStorage.removeItem('input_hot_topic');
            }
        }
            function checkData() {
                let input_hot_topic = JSON.parse(localStorage.getItem('input_hot_topic')) || {};
                const formValues = $(".form-control, .form-select");

                // set default value for status
                $('#status').val('Baru Dilaporkan');
                input_hot_topic['status'] = $('#status').val();
                localStorage.setItem('input_hot_topic', JSON.stringify(input_hot_topic));

                // load saved data into input fields
                formValues.each(function() {
                    let name = $(this).attr('name');
                    if (input_hot_topic[name]) {
                        $(this).val(input_hot_topic[name]);
                    }
                });

                // save data to localStorage on change
                formValues.on("input", function() {
                    let name = $(this).attr('name');
                    let value = $(this).val();
                    input_hot_topic[name] = value;
                    localStorage.setItem('input_hot_topic', JSON.stringify(input_hot_topic));
                    collectReportData();
                });

                collectReportData();
            }

            function collectReportData() {
                let input_hot_topic = localStorage.getItem('input_hot_topic');
                $(".report-data-collected").val(input_hot_topic);
            }

        $(document).ready(function() {
            // localStorage.removeItem('input_hot_topic');
            removeLocalStorage();
            checkData();
        });
    </script>
</body>

</html>