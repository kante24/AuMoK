<?php
require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Views/Header.php");
?>

<!DOCTYPE html>
<html lang="en">

<style>
    /* .popupLogIn {
        visibility: hidden;
    } */
</style>



<script>

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

    <input type="button" value="Button" onclick="nene()" />

    <div class="container justify-content-center shadow-lg popupLogIn" style="width: 300px;margin-top: 150px;" id="popupLogIn">

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">


            <div class="row mt-5 justify-content-center">
                <div class="col-9">
                    <h1 style="text-shadow: 2px 2px black; text-align: center;">SIGN IN</h1>
                </div>
                <div class="col-3" style="background-color:yellow">
                    X
                </div>

            </div>

            <div class="row mt-5 justify-content-center">
                <div class="col-12 form-floating">
                    <input class="form-control" id="Login" style="width: 250px;height:60px;" type="text" name="Login" placeholder="Login" required>
                    <label for="floatingInput">Username or eMail</label>
                </div>
            </div>

            <div class="row mt-5 justify-content-center">
                <div class="col-12 form-floating">
                    <input class="form-control" style="width: 250px;height:60px;" type="password" name="Password" placeholder="Password" required>
                    <label for="floatingInput">Password</label>
                </div>
            </div>

            <div class="row mt-3 justify-content-center">
                <div class="col-12 form-floating">
                    <p id="errorLogin" style="color: red;text-align:center"></p>
                </div>
            </div>

            <div class="row mt-3 justify-content-center">
                <button class="btn btn-success" type="submit" style="margin: 0 auto;width: 150px;" name="btnLogin">
                    LOG IN </br> <img class="m-2" src="http://cdn.onlinewebfonts.com/svg/img_311846.png " style="width: 20px; height: 20px;" ; />
                </button>
            </div>

            <div class="row mt-5 justify-content-center">
                <p>No account? <a id="linkSignUp" href="#">Sign UP</a></p>
            </div>


        </form>

    </div>



    <?php
    ?>

</body>

</html>


<?

if (isset($_POST["btn"])) {
    echo "manger nene";
}

?>