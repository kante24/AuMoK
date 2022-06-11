<?php
require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Views/header.php");

//SignUP();
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SIGN UP PAGE</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- <script src="/dashboard/AuMoK/Scripts/script.js"></script> -->
    </head>

    <body>
        <p id="p"></p>
        <div class="container">
            <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="col form-floating">
                    <input class="form-control" id="Name" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="text" name="Name" placeholder="Name">
                    <label for="floatingInput" style="text-align:center">Last Name</label>
                </div>

                <div class="col form-floating">
                    <input class="form-control" id="Firstname" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="text" name="Firstname" placeholder="Firstname">
                    <label for="floatingInput" style="text-align:center">First Name</label>
                </div>

                <div class="col">
                    <input type="date" name="birthDate" style="width:200px" />
                </div>

                <div class="col form-floating">
                    <input class="form-control" id="floatingInput" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="text" name="Mail" placeholder="Mail">
                    <label for="floatingInput" style="text-align:center">Adress Mail</label>
                </div>

                <div class="col form-floating">
                    <input class="form-control" id="floatingInput" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="text" name="Phone" placeholder="Phone">
                    <label for="floatingInput" style="text-align:center">Phone Number</label>
                </div>

                <div class="col form-floating">
                    <input class="form-control" id="floatingInput" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="text" name="Username" placeholder="Username">
                    <label for="floatingInput" style="text-align:center">Username</label>
                </div>

                <div class="col form-floating">
                    <input class="form-control" id="floatingInput" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="password" name="Password" placeholder="Password">
                    <label for="floatingInput" style="text-align:center">Password</label>
                </div>

                <div class="col form-floating">
                    <input class="form-control" id="floatingInput" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="password" name="Password2" placeholder="Password2">
                    <label for="floatingInput" style="text-align:center">Your Password Again</label>
                </div>
            </form>
        </div>
    </body>

    </html>