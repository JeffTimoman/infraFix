<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 rounded p-5" style="background-color: white; height: 40rem; width: 82vw;"
                id="form-data-container">
                <div class="row text-center mb-5">
                    <h3 style="margin-left: 7rem;">Ringkasan Kasus</h3>
                    <hr style="color: #A50000; opacity: 100; width: 25rem; margin-left: 31rem;">
                </div>
                <div class="row mb-4" style="margin-top: 5rem;">
                    <input for="" class="form-control-plaintext title"
                        style="font-weight: bold; font-size: x-large; margin-left: 0.7rem"></input>
                    <input class="form-control-plaintext damage_type" for=""
                        style="font-size: medium; color: #A50000; margin-top: -0.5rem;"></input>
                </div>
                <div class="row mb-4">
                    <div class="col-lg-2">
                        <h5 for="" class="" style="font-size: large; font-weight: 400;">Lokasi &nbsp:</h5>
                    </div>
                    <div class="col-lg-10">
                        <h5 for="" class="" style="font-size: large; font-weight: 400; margin-left: -7.5rem;">Jl.
                            Bintaro Jaya, Pondok Aren, Tangerang Selatan</h5>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <button class="rounded-pill" style="background-color: #D8A4A4; border: none;">Baru
                                Dilaporkan</button>
                        </div>
                        <div class="col-lg-2">
                            <h5 style="color: #A50000; font-size: medium; margin-top: 0.12rem; margin-left: -3rem;">150
                                Laporan</h5>
                        </div>
                    </div>
                </div>
                <div class="row mb-4 text-justify" style="width: 93vw;">
                    <p style="text-align: justify; font-size: larger; font-weight: 450;">Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Totam dolorem, accusamus odit repellendus provident optio. Eaque
                        atque repudiandae ameongggg reprehenderit, labore qui? Eaque officiis laudantium quis excepturi
                        sint porro? Facere? Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor molestias
                        quidem consequuntur odit ducimus temporibus cupiditate adipisci ea fugit at! Expedita inventore
                        esse tempora corrupti vitae repellat dolorem similique eligendi.
                        Eveniet nobis accusantium deserunt porro nemo error, itaque voluptatem quisquam accusamus, ut,
                        rerum voluptates nihil? Officiis illo id tenetur impedit minus ratione ipsum dolores nihil
                        quisquam consequatur! Suscipit, iste debitis.
                        Quasi cum esse et quae ipsa sed vitae assumenda reprehenderit, nisi fuga labore quos ipsum at
                        mollitia laboriosam optio doloremque voluptas exercitationem consequatur! Magni, odio. Pariatur,
                        tenetur. Nisi, eveniet earum!
                        Itaque nihil cum rem, quidem aspernatur laboriosam optio obcaecati maxime omnis architecto fuga
                        minus, ad eum voluptatem error dolores quisquam, qui eius distinctio blanditiis hic ab harum.
                        Quis, earum eos.
                        Dicta quidem accusantium ea, at debitis pariatur consectetur! Cumque iusto laborum illo sequi
                        nemo earum iste et vel. Modi laborum amet distinctio velit sunt ex consequatur iste facilis
                        dolorem dolor.</p>
                </div>
                <div class="row">
                    <!-- gamabar gmn gatau -->
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    function collectReportData() {
        let input_hot_topic = JSON.parse(localStorage.getItem('input_hot_topic'));
        if (input_hot_topic && input_hot_topic['title']) {
            $(".title").val(input_hot_topic['title']);
        }
        if (input_hot_topic && input_hot_topic['status']) {
            $(".status").val(input_hot_topic['status']);
        }
        if (input_hot_topic && input_hot_topic['address']) {
            $(".address").val(input_hot_topic['address']);
        }
        if (input_hot_topic && input_hot_topic['kelurahan']) {
            $(".kelurahan").val(input_hot_topic['kelurahan']);
        }
        if (input_hot_topic && input_hot_topic['description']) {
            $(".description']) {").val(input_hot_topic['description'])
        }
    }

    function fetchNames(damageId, kelurahanId) {
    $.ajax({
        url: '/fetch-names',  //
        type: 'GET',
        data: { damage_id: damageId, kelurahan_id: kelurahanId },
        success: function(response) {
            if (response.damage_name) {
                $(".damage_type").val(response.damage_type_name);
            }
            if (response.kelurahan_name) {
                $("kelurahan").val(response.kelurahan_name);
            }
        },
        error: function() {
            console.log('Error fetching names');
        }
    });
}

    $(document).ready(function() {
        collectReportData();

        let damageId = localStorage.getItem(input_hot_topic['damage_type']);
        let kelurahanId = localStorage.getItem(input_hot_topic['kelurahan']);
        if (damageId && kelurahanId) {
        fetchNames(damageId, kelurahanId);
        }
    });
</script>

</html>
