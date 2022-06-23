<?php
require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Views/Header.php");

$data = CarBrandsList();
?>

<!DOCTYPE html>
<html lang="en">

<style>
    /* div {
        border: solid;
    } */
</style>




<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>

</head>

<body>

    <div class="container-fluid">
        <div class="row">
        <?
        $_col = 1;
        for ($i = 0; $i < count($data); $i++) {
            ?>
            <!-- One col for every Brand -->
            <div class="col shadow-lg p-3 m-2 bg-body rounded">
                <div class="row">
                    <div class="col-3 p-2">
                        <img style="width: 100%; heigth: 100%;" src="<? echo $data[$i]["BrandLogo"] ?>" />
                    </div>
                    <div class="col-9 p-2" style="text-align: center;">
                        <b><? echo $data[$i]["BrandName"] ?></b>
                    </div>
                </div>
            </div>
            <? if ($_col % 6 == 0) { ?>
                    </div>
                    <div class="row">
            <? }
            $_col++;
        }
        ?>



</body>

</html>


<?
// if (isset($_POST["brands"])) {
// echo $_POST["browser"];
// }
?>