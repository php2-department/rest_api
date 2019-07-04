<?php

include('dbcon1.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>API</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="col-md-6" id = "partner1">
    
    </div>

    <div class="col-md-6" id = "partner2">
        
    </div>
<script>
    $(document).ready(function() {
        readrecord();
    });
    function readrecord() {
        var readrecord = "readrecord";
        $.ajax({
            url:"p1ajax.php",
            type:"post",
            data:{readrecord:readrecord},
            success:function(data,status){
                $('#partner1').html(data);
            }

        });
    }

    $(document).ready(function() {
        addrecord();
    });
    function addrecord() {
        var addrecord = "addrecord";
        $.ajax({
            url:"p2ajax.php",
            type:"post",
            data:{addrecord:addrecord},
            success:function(data,status){
                $('#partner2').html(data);
            }

        });
    }
</script>
</body>
</html>