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

</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    function collectReportData() {
        let input_hot_topic = JSON.parse(localStorage.getItem('input_hot_topic'));
        if (input_hot_topic && input_hot_topic['title']) {
            $(".title").val(input_hot_topic['title']);
        }
        if (input_hot_topic && input_hot_topic['damage_type']) {
            $(".damage_type").val(input_hot_topic['damage_type']);
        }
        if (input_hot_topic && input_hot_topic['address']) {
            $(".address").val(input_hot_topic['address']);
        }
        if (input_hot_topic && input_hot_topic['kelurahan']) {
            $(".kelurahan").val(input_hot_topic['kelurahan']);
        }
        if (input_hot_topic && input_hot_topic['description']) {
            $(".description").val(input_hot_topic['description'])
        }
    }


    $(document).ready(function() {
        collectReportData();



    });
</script>

</html>