<?php
require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Views/Header.php");
require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Views/Footer.php");

//SignUP();
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SIGN UP PAGE</title>

        <style>
            .center {
                text-align: center;
                vertical-align: top;
            }
            .error {
                color: red;
            }
        </style>

    </head>

    <body>



        <div class="container" style="border-radius: 50%;margin-top: 30px; text-align: center; width: 800px ; background-color: antiquewhite;">
            <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                <!-- First row -->
                <div class="row center">
                    <div class="col-3"></div>

                    <!--  Name -->
                    <div class="col-3 center">
                        <div class="row center form-floating">
                            <input class="form-control" id="Name" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="text" name="Name" placeholder="Name" required>
                            <label for="floatingInput" style="text-align:center">Last Name</label>
                        </div>
                        <div class="row center error">Erreur</div>
                    </div>

                    <!--  Firstname -->
                    <div class="col-3">
                        <div class="row form-floating">
                            <input class="form-control" id="Firstname" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="text" name="Firstname" placeholder="Firstname" required>
                            <label for="floatingInput" style="text-align:center">Firstname</label>
                        </div>
                        <div class="row error">Erreur</div>
                    </div>

                    <div class="col-3"></div>
                </div>

                <!-- Second row -->
                <div class="row mt-5">
                    <div class="col-3"></div>

                    <!-- BirthDate -->
                    <div class="col-6">
                        <div class="row">
                            <input id="birthDate" type="date" name="birthDate" value="" style="width:200px" required />
                        </div>
                        <div class="row error">Erreur</div>
                    </div>

                    <div class="col-3"></div>
                </div>

                <!-- Thirth row -->
                <div class="row mt-5" style="text-align:center">
                    <div class="col-3"></div>

                    <!-- Mail -->
                    <div class="col-3">
                        <div class="row form-floating">
                            <input required class="form-control" id="eMail" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="text" name="eMail" placeholder="eMail">
                            <label for="floatingInput" style="text-align:center">@_Adress eMail_@</label>
                        </div>
                        <div class="row error">Erreur</div>
                    </div>

                    <!-- Phone -->
                    <div class="col-3">
                        <div class="row form-floating">
                            <input class="form-control" id="Phone" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="text" name="Phone" placeholder="Phone" required>
                            <label for="floatingInput" style="text-align:center">Phone Number</label>
                        </div>
                        <div class="row error">Erreur</div>
                    </div>

                    <div class="col-3"></div>
                </div>

                <!-- Fourth row -->
                <div class="row mt-5">
                    <div class="col-3"></div>

                    <!-- Username -->
                    <div class="col-6">
                        <div class="row form-floating">
                            <input class="form-control" id="Username" style="width: 200px;height:50px;" type="text" name="Username" placeholder="Username" required>
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="row error">Erreur</div>
                    </div>

                    <div class="col-3"></div>
                </div>


                <!-- Fith row -->
                <div class="row mt-5" style="text-align:center">
                    <div class="col-3"></div>

                    <!-- Pwd -->
                    <div class="col-3">
                        <div class="row form-floating">
                            <input required class="form-control" id="Password" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="password" name="Password" placeholder="Password" required>
                            <label for="floatingInput" style="text-align:center">Password</label>
                        </div>
                    </div>

                    <!-- Pwd2 -->
                    <div class="col-3">
                        <div class="row form-floating">
                            <input required class="form-control" id="Password2" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="password" name="Password2" placeholder="Password2">
                            <label for="floatingInput" style="text-align:center">Your Password Again</label>
                        </div>
                    </div>

                    <div class="col-3"></div>
                </div>


                <!-- Sixth row -->
                <div class="row mt-5">
                    <div class="col-3"></div>

                    <!-- Erreur Pwd -->
                    <div class="col-6 error">
                        Erreur
                    </div>

                    <div class="col-3"></div>
                </div>

                <!-- Seventh row -->
                <div class="row mt-5">
                    <div class="col-3"></div>

                    <!-- Erreur Pwd -->
                    <div class="col-6">
                        <!--  Hidden to match up pwds -->
                        <input id="isSame" />
                        <!-- <input type="hidden" id="isSame"/> -->
                    </div>

                    <div class="col-3"></div>
                </div>

                <!-- Eigth row -->
                <!-- Button group to confirm or reset informations -->
                <div class="row mt-5" style="text-align:center">
                    <div class="col-3"></div>

                    <!-- Add -->
                    <div class="col-3">
                        <button class="btn btn-success" type="submit" style="margin: 0 auto;" name="addUser">
                            Add <img class="m-1" src="https://www.pngmart.com/files/21/Add-Button-PNG-Isolated-File.png" style="width: 20px; height: 20px;" ; />
                        </button>
                    </div>

                    <!-- Reset -->
                    <div class="col-3">
                        <button class="btn btn-danger" style="margin: 0 auto;" value="Reset" name="reset" onclick="Relocation('Views/SignUP.php')">
                            Reset <img  class="m-1" src="https://cdn-icons-png.flaticon.com/512/70/70287.png" style="width: 20px; height: 20px;" ; />
                        </button>
                    </div>

                    <div class="col-3"></div>
                </div>

            </form>
        </div>
    </body>

    </html>


    <?php

if (isset($_POST["addUser"])) {
    $rand = rand(0, 99999999999);
    $codeUser = substr($_POST["Name"], 0, 3) .  substr($_POST["Firstname"], 0, 3) . $rand;
    $User = new Users(array("CodeUser" => $codeUser, "Name" => $_POST["Name"], "Firstname" => $_POST["Firstname"], "BirthDate" => $_POST["birthDate"], "eMail" => $_POST["eMail"], "Phone" => $_POST["Phone"], "Username" => $_POST["Username"], "Password" => $_POST["Password"], "isAlive" => true));

    //Tests for some formats
    //If any attribute is empty
    if (!empty($User->Username()) && !empty($User->Name()) && !empty($User->Firstname()) && !empty($User->BirthDate()) && !empty($User->eMail()) && !empty($User->Phone()) && !empty($User->Username()) && !empty($User->Password()) && !empty($User->isAlive())) {
        echo "Manger nene";
        if (validateName($User->Name() == false)) {
            echo
            '<script>
                    
             </script>';
        }
    }
}

?>