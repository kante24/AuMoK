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
            }, 50);
        }
    }
</script>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>

</head>

<body>
    <div id="load"></div>

</body>

</html>


<?

$User = new Users(array("eMail"=>"aa@gmail.com"));
// $User = new Users(array("Phone"=>"4382336332"));
// $User = new Users(array("Username"=>"David"));

// SignUP($User);



?>