<?php
require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Views/Header.php");
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LOG IN PAGE</title>
    </head>

    <body>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

            <div class="container mt-5" style="width:40%;background-color:yellow;">

                <!-- First Row -->
                <div class=" row mt-5">

                    <!-- Username or Mail -->
                    <div class="col-6 form-floating">
                        <input class="form-control " id="Login " style="width: 200px;height:50px; " type="text " name="Login " placeholder="Login " required>
                        <label for="floatingInput ">Username or eMail</label>
                    </div>

                    <!-- Password -->
                    <div class="col-6 form-floating ">
                        <input required class="form-control " id="Password " style="vertical-align:top; width: 200px;height:50px;text-align: center; " type="password" name="Password " placeholder="Password " required>
                        <label for="floatingInput " style="text-align:center ">Password</label>
                    </div>

                </div>

                <!-- Second row -->
                <div class="row mt-5 justify-content-center ">

                    <!-- Login button -->
                    <div class="col-6 ">

                        <button class="btn btn-success " type="submit " style="margin: 0 auto;width: 150px; " name="btnLogin ">
                            LOG IN <img class="m-1 " src="https://www.pngmart.com/files/21/Add-Button-PNG-Isolated-File.png " style="width: 20px; height: 20px; " ; />
                        </button>

                    </div>

                </div>

            </div>

        </form>

    </body>

    </html>