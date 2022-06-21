<?php
require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Views/Header.php");
?>

<!DOCTYPE html>
<html lang="en">

<style>
</style>




<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>

</head>

<body>
    <div id="load"></div>
    <div id="content">
        Manger nene
    </div>
    <script>
        //Load Page Gif
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
    </script>

</body>

</html>


<?

?>