<?php

require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Views/HeaderIN.php");

// var_dump($_SESSION["User"])

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCOUNT PAGE</title>
</head>

<style>
    /* div {
        border: solid;
    } */
</style>

<body>

    <div class="container-fluid mt-2">
        <!-- Title -->
        <div class="row">
            <h1 style="text-align: center;">
                <?echo $User->Username()?>'Account
            </h1>
        </div>

        <div class="row mt-5">

            <div class="col-4" style="border-right: solid;">
                1
            </div>

            <div class="col-8">
                2
            </div>

        </div>

    </div>
    

</body>

</html>