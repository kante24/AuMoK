<?php
require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Views/Header.php");
?>

<!DOCTYPE html>
<html lang="en">

<style>
    #load {
        width: 100%;
        height: 100%;
        position: fixed;
        z-index: 9999;
        background: url("/dashboard/AuMoK/Images/Infinity.gif") no-repeat center center
    }
</style>



<script>
    document.onreadystatechange = function() {
        var state = document.readyState
        if (state == 'complete') {
            setTimeout(function() {
                document.getElementById('interactive');
                document.getElementById('load').style.visibility = "hidden";
                document.getElementById('content').style.visibility = "visible";
            }, 1000);
        } else {
            document.getElementById('content').style.visibility = "hidden";
        }
    }

    $("#btn").click(function() {
        var text = $("#p").text()
        alert(text);
    });
</script>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>

</head>

<body>

    <div id="load">
    </div>

    <div id="content">
        <p id="p">Manger nene</p>
        <input type="button" id="btn" />
        <p id="popup"></p>
        <p id="errorLogin"></p>
        

        <?php
        ?>

    </div>

</body>

</html>


<?



?>