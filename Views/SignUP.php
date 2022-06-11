<?php
require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Views/header.php");

SignUP();
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SIGN UP PAGE</title>
    </head>

    <body>

        <div class="container">
            <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="row">

                    <div class="col-6 form-floating">
                        <input class="form-control" id="floatingInput" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="text" name="Name" placeholder="Name">
                        <label for="floatingInput" style="text-align:center">Last Name</label>
                    </div>

                    <div class="col-6 form-floating">
                        <input class="form-control" id="floatingInput" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="text" name="Firstname" placeholder="Firstname">
                        <label for="floatingInput" style="text-align:center">First Name</label>
                    </div>

                </div>
            </form>
        </div>
    </body>

    </html>