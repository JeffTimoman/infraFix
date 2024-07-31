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