<?php
require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Views/Header.php");

$data = CarBrandsList();
?>

<!DOCTYPE html>
<html lang="en">

<style>
    /* div{
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


    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

        <div class="col form-floating">
            <input class="form-control" type="text" list="brands" name="brands" placeholder="Auto Brands" style="width: 200px;" required>
            <label for="floatingInput">Auto Brands</label>
        </div>

        <datalist id="brands">
            <?
            for ($i = 0; $i < count($data); $i++) {
                echo '<option value="' . $data[$i]["BrandName"] . '">';
            }
            ?>
        </datalist>
        <input type="submit">
    </form>

<input type="button" value="SignUP" id="btnSignup" onclick="popupSignin()"/>
<input type="button" value="LogIN" id="btnLogin" onclick="popupLogin()"/>

</body>

</html>


<?
if (isset($_POST["brands"])) {
    // echo $_POST["browser"];
}
?>