<?php
//Require files for header & footer
// require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Views/Header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .center {
            text-align: center;
            vertical-align: top;
        }

        .error {
            color: red;
        }

        .backColorChange {
            width: 100%;
            height: 100%;
            font-weight: bold;
            animation: colorAnimation 15s infinite;
        }

        @keyframes colorAnimation {
            0% {
                background-color: <? echo color() ?>;
            }

            25% {
                background-color: <? echo color() ?>;
            }

            50% {
                background-color: <? echo color() ?>;
            }

            75% {
                background-color: <? echo color() ?>;
            }

            100% {
                background-color: <? echo color() ?>;
            }
        }


        /* The Login (background) */
        .Signup {
            /* Hidden by default */
            display: none;
            /* Stay in place */
            position: fixed;
            /* Sit on top */
            z-index: 1;
            /* Location of the box */
            padding-top: 100px;
            /* Full width */
            width: 100%;
            /* Full height */
            height: 100%;
            /* Enable scroll if needed */
            overflow: auto;
            /* Fallback color */
            background-color: rgb(0, 0, 0);
            /* Black w/ opacity */
            background-color: rgba(0, 0, 0, 0.4);
        }

        /* Login Content */
        .signupContent {
            background-color: #fefefe;
            border: 1px solid #888;
            width: 0px;
            height: 0px;
            margin: auto;
            margin-left: 350px;
            margin-top: 250px;
        }


        #closeSignup:hover {
            cursor: pointer;
            background-color: red;
        }
    </style>

</head>

<body>

    <!-- <div id="load"></div> -->

    <div id="mySignup" class="Signup">

        <div class="modal-content justify-content-center signupContent" style="text-align: center;">

            <!-- <div class="container backColorChange" style="border-radius: 50%;margin-top: 30px; text-align: center; width: 800px ; background-color: antiquewhite;"> -->
            <div class="container shadow-lg" style="width: 800px;background-color:white">

                <p id="errorSignUP" style="visibility: hidden;"></p>

                <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                    <div class="row">
                        <div class="col-11">
                            <h1 style="text-shadow: 2px 2px black">SIGN UP</h1>
                        </div>

                        <!-- Button to close SignIN popup -->
                        <div class="col-1 center float-end">
                            <div class="mt-1 col-3 float-end justify-content-center closeSignup" id="closeSignup" style="width: 60px;height: 50px;float:right" onclick="Login()">
                                <img class="mt-1" src="/dashboard/AuMoK/Images/iconClose.png" style="width: 40px; height: 40px;" ; />
                            </div>
                        </div>
                    </div>

                    <!-- First row -->
                    <div class="row center justify-content-center">

                        <!--  Name -->
                        <div class="col-3 center m-2">

                            <div class="row center form-floating">
                                <input class="form-control" id="Name" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="text" name="Name" placeholder="Name" required>
                                <label for="floatingInput" style="text-align:center">Last Name</label>
                            </div>

                            <div class="row justify-content-center error">
                                <p id="errorName"></p>
                            </div>
                        </div>

                        <!--  Firstname -->
                        <div class="col-3 m-2">
                            <div class="row form-floating">
                                <input class="form-control" id="Firstname" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="text" name="Firstname" placeholder="Firstname" required>
                                <label for="floatingInput" style="text-align:center">Firstname</label>
                            </div>
                            <div class="row error justify-content-center">
                                <p id="errorFirstname"></p>
                            </div>
                        </div>

                        <!-- BirthDate -->
                        <div class="col-3 m-2">
                            <div class="row justify-content-center">
                                <input id="birthDate" type="date" name="birthDate" style="vertical-align:top; width: 200px;height:50px;text-align: center;" required />
                            </div>
                            <div class="row error justify-content-center">
                                <p id="errorBirthDate"></p>
                            </div>
                        </div>

                    </div>

                    <!-- Thirth row -->
                    <div class="row mt-5 justify-content-center">

                        <!-- Mail -->
                        <div class="col-3 m-2">
                            <div class="row form-floating">
                                <input required class="form-control" id="eMail" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="text" name="eMail" placeholder="eMail">
                                <label for="floatingInput" style="text-align:center">@_Adress eMail_@</label>
                            </div>
                            <div class="row error justify-content-center">
                                <p id="errorEMail"></p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="col-3 m-2">
                            <div class="row form-floating">
                                <input class="form-control" id="Phone" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="text" name="Phone" placeholder="Phone" required>
                                <label for="floatingInput" style="text-align:center">Phone Number</label>
                            </div>
                            <div class="row error justify-content-center">
                                <p id="errorPhone"></p>
                            </div>
                        </div>

                        <!-- Username -->
                        <div class="col-3 m-2">
                            <div class="row form-floating  justify-content-center">
                                <input class="form-control" id="Username" style="width: 200px;height:50px;text-align:center" type="text" name="Username" placeholder="Username" required>
                                <label for="floatingInput">Username</label>
                            </div>
                            <div class="row error  justify-content-center">
                                <p id="errorUsername"></p>
                            </div>
                        </div>

                    </div>


                    <!-- Fith row -->
                    <div class="row mt-5 justify-content-center">

                        <!-- Pwd -->
                        <div class="col-3 m-2">
                            <div class="row form-floating">
                                <input required class="form-control" id="Password" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="password" name="Password" placeholder="Password" required>
                                <label for="floatingInput" style="text-align:center">Password</label>
                            </div>
                        </div>

                        <!-- Pwd2 -->
                        <div class="col-3 m-2">
                            <div class="row form-floating">
                                <input required class="form-control" id="Password2" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="password" name="Password2" placeholder="Password2">
                                <label for="floatingInput" style="text-align:center">Your Password Again</label>
                            </div>
                        </div>

                    </div>


                    <!-- Sixth row -->
                    <div class="row mt-2 justify-content-center">

                        <!-- Erreur Pwd -->
                        <div class="col-6 error">
                            <p id="errorPassword"></p>
                        </div>

                    </div>

                    <!-- Seventh row -->
                    <div class="row mt-3 justify-content-center">

                        <!-- Erreur Pwd -->
                        <div class="col-6">
                            <!--  Hidden to match up pwds -->
                            <!-- <input id="isSame" /> -->
                            <input type="hidden" id="isSame" />
                        </div>

                    </div>

                    <!-- Eigth row -->
                    <!-- Button Add to confirm informations -->
                    <div class="row mt-3 justify-content-center">

                        <!-- Add -->
                        <div class="col-6 mb-4">
                            <button class="btn btn-success" type="submit" style="margin: 0 auto;width: 150px;" name="addUser">
                                Add <img class="m-1" src="/dashboard/AuMoK/Images/iconPlus.png" style="width: 20px; height: 20px;" ; />
                            </button>
                        </div>

                    </div>

                </form>

            </div>

        </div>

    </div>





    <script>
        function popupSignin() {
            // Get the modal
            var modal = document.getElementById("mySignup");
            modal.style.display = "block";


            // Get the button that opens the modal
            var btnSignup = document.getElementById("btnSignup");

            // Get the <span> element that closes the modal
            var btnClose = document.getElementsByClassName("closeSignup")[0];
            // var btnClose = document.getElementById("closeSignup");

            // When the user clicks the button, open the modal 
            btnSignup.onclick = function() {
                modal.style.display = "block";
                modal.scrollTop = modal.scrollHeight;
            }

            // When the user clicks on <span> (x), close the modal
            btnClose.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                // alert(event.target)
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        }
    </script>

</body>

</html>


<?php

if (isset($_POST["addUser"])) {
    $rand = rand(0, 99999999999);
    $codeUser = substr($_POST["Name"], 0, 3) .  substr($_POST["Firstname"], 0, 3) . $rand;

    //Create user with informations
    $User = new Users(array("CodeUser" => $codeUser, "Name" => $_POST["Name"], "Firstname" => $_POST["Firstname"], "BirthDate" => $_POST["birthDate"], "eMail" => $_POST["eMail"], "Phone" => $_POST["Phone"], "Username" => $_POST["Username"], "Password" => $_POST["Password"], "isAlive" => true));

    //Tests for some formats
    //If any attribute is white spaced
    // if (!empty($User->Username()) && !empty($User->Name()) && !empty($User->Firstname()) && !empty($User->BirthDate()) && !empty($User->eMail()) && !empty($User->Phone()) && !empty($User->Username()) && !empty($User->Password()) && !empty($User->isAlive()) && !empty($_POST["Password2"])) {
    if (ctype_space($User->Username()) == false && ctype_space($User->Name()) == false && ctype_space($User->Firstname()) == false && ctype_space($User->BirthDate()) == false && ctype_space($User->eMail()) == false && ctype_space($User->Phone()) == false && ctype_space($User->Username()) == false) {

        if (validateName($User->Name()) == false) {
            echo
            '<script>
                document.getElementById("errorName").innerHTML = "Only Letters"
                document.getElementById("errorSignUP").innerHTML = "Only Letters"
             </script>';
        }

        // if (validateName($User->Firstname()) == false) {
        //     echo
        //     '<script>
        //         document.getElementById("errorFirstname").innerHTML = "Only Letters"
        //         document.getElementById("errorSignUP").innerHTML = "Only Letters"
        //      </script>';
        // }

        if (validateEmail($User->eMail()) == false) {
            echo
            '<script>
                document.getElementById("errorEMail").innerHTML = "Invalid Address eMail Format"
                document.getElementById("errorSignUP").innerHTML = "Invalid Address eMail Format"
             </script>';
        }

        if (validatePhone($User->Phone()) == false) {
            echo
            '<script>
                document.getElementById("errorPhone").innerHTML = "Invalid Phone Number Format"
                document.getElementById("errorSignUP").innerHTML = "Invalid Phone Number Format"
             </script>';
        }

        if (validatePasswords($User->Password(), $_POST["Password2"]) == false) {
            echo
            '<script>
                document.getElementById("errorPassword").innerHTML = "Passwords Differ"
                document.getElementById("errorSignUP").innerHTML = "Passwords Differ"
             </script>';
        }

        if (validateName($User->Name()) == true && validateName($User->Firstname()) == true && validateEmail($User->eMail()) == true && validatePhone($User->Phone()) == true && validatePasswords($User->Password(), $_POST["Password2"]) == true) {

            if (SignUP($User) == true) {
                echo
                "<script>
                    Relocation('Views/Home.php')
                </script>";
            } else {
                echo
                '<script>
                    document.getElementById("errorPassword").innerHTML = "Something went wrong </br> Retry please"
                </script>';
            }
        }
    }
    //Else if fields contain white space only
    else {

        if (ctype_space($User->Name()) == true) {
            echo
            '<script>
                document.getElementById("errorName").innerHTML = "Field empty"
                document.getElementById("errorSignUP").innerHTML = "Field empty"
             </script>';
        }

        if (ctype_space($User->Firstname()) == true) {
            echo
            '<script>
                document.getElementById("errorFirstname").innerHTML = "Field empty"
                document.getElementById("errorSignUP").innerHTML = "Field empty"
             </script>';
        }

        if (ctype_space($User->Username()) == true) {
            echo
            '<script>
                document.getElementById("errorUsername").innerHTML = "Field empty"
                document.getElementById("errorSignUP").innerHTML = "Field empty"
             </script>';
        }
        if (ctype_space($User->eMail()) == true) {
            echo
            '<script>
                document.getElementById("errorEMail").innerHTML = "Field empty"
                document.getElementById("errorSignUP").innerHTML = "Field empty"
             </script>';
        }
        if (ctype_space($User->Phone()) == true) {
            echo
            '<script>
                document.getElementById("errorPhone").innerHTML = "Field empty"
                document.getElementById("errorSignUP").innerHTML = "Field empty"
             </script>';
        }
    }
}

?>