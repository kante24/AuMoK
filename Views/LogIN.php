<?php
// require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Views/Header.php");
?>

<!-- <!DOCTYPE html> -->
<!-- <html lang="en"> -->

<!-- <head> -->
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN PAGE</title> -->

    <style>
        #linkSignUp {
            color: red;
        }

        #linkSignUp:hover {
            color: green;
        }

        #linkSignUp:active {
            color: blue;
        }
/* 
        #popupLogIn{
            position: fixed;
            transition: opacity;
        } */
    </style>
<!-- </head> -->

<!-- <body> -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">


        <div class="container justify-content-center" id="popupLogIn" style="width: 300px;">

            <div class="row mt-5 justify-content-center">
                <h1 style="text-shadow: 2px 2px black; text-align: center;">SIGN IN</h1>
            </div>

            <div class="row mt-5 justify-content-center">
                <div class="col-12 form-floating">
                    <input class="form-control" id="Login" style="width: 250px;height:50px;" type="text" name="Login" placeholder="Login" required>
                    <label for="floatingInput">Username or eMail</label>
                </div>
            </div>

            <div class="row mt-5 justify-content-center">
                <div class="col-12 form-floating">
                    <input class="form-control" style="width: 250px;height:50px;" type="password" name="Password" placeholder="Password" required>
                    <label for="floatingInput">Password</label>
                </div>
            </div>

            <div class="row mt-5 justify-content-center">
                <button class="btn btn-success" type="submit" style="margin: 0 auto;width: 150px;" name="btnLogin" onclick="nene()">
                    LOG IN <img class="mb-1 ml-1" src="http://cdn.onlinewebfonts.com/svg/img_311846.png " style="width: 20px; height: 20px;" ; />
                </button>
            </div>

            <div class="row mt-5 justify-content-center">
                <p>No account? <a id="linkSignUp" href="#">Sign UP</a></p>
            </div>



        </div>

    </form>

<!-- </body> -->

<!-- </html> -->