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

    <!-- Temporary log station for admin

    <form action="<?php // echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="text" name="username" />
        <input type="password" name="pwd" />
        <input type="submit" name="log" value="Log Admin" />
    </form> -->




</body>



</html>


<?
if (isset($_POST["log"])) {
    // echo "nene";
    $ad = new Admins(array("Username" => $_POST["username"], "Password" => $_POST["pwd"]));
    // var_dump(LogInAdmin($ad));
    if (LogInAdmin($ad) == true) {
        echo
        "<script>
            window.location.href = '/dashboard/AuMoK/Views/AdminHome.php'
        </script>";
    }
}
?>