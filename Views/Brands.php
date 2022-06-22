<?php
require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Views/Header.php");

$data = BrandsList();
?>

<!DOCTYPE html>
<html lang="en">

<style>
    div {
        border: solid;
    }
</style>




<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>

</head>

<body>

    <div class="container-fluid">
        <!-- <div class="row"> -->
            <?
            echo '<div class="row">';
            $_col = 1;
            for ($i = 0; $i < count($data); $i++) {
                echo '
                <div class="col shadow-lg p-3 m-2 bg-body rounded"><img src="' .
                    $data[$i]["BrandLogo"]
                    . '"/></div>
                ';
                if($_col % 4 == 0){
                    echo '</div><div class="row">';
                }
                $_col++;
            }
            ?>
        <!-- </div> -->
    </div>



</body>

</html>


<?
// if (isset($_POST["brands"])) {
// echo $_POST["browser"];
// }
?>