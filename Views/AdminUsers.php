<?php
require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Views/AdminHeader.php");

// If request to search user
// if(isset($_POST["submitUser"])){
//     $submitedUser =  $_POST["eUser"];
//     if(ctype_space($submitedUser) == true){
//         // echo "nene";
//         echo'
//             <script>
//                 document.getElementById("sUserError").innerHTML = "Empty Field"
//             </script>
//         ';
//     }
//     else{
//         // echo $submitedUser;
//         echo'
//             <script>
//                 document.getElementById("sUserError").innerHTML ='. $submitedUser .'
//             </script>
//         ';
//     }
// }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN USERS PAGE</title>
    <style>
        /* div {
            border: solid;
        } */

        #closeAddUser:hover {
            cursor: pointer;
            background-color: red;
        }

        /* The Login (background) */
        .addUserModal {
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
        .addUserContent {
            background-color: #fefefe;
            border: 1px solid #888;
            width: 0px;
            height: 0px;
            margin: auto;
            margin-left: 350px;
            margin-top: 250px;
        }
    </style>
</head>

<body>

<p id="error">p Error : </p>
    <p id="mode">p Mode : </p>


    <!-- Container to add new user -->
    <div id="addUserModal" class="addUserModal">

        <div class="modal-content justify-content-center addUserContent" style="text-align: center;">

            <div class="container shadow-lg" style="width: 800px;background-color:white">

                <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                    <div class="row">
                        <div class="col-11">
                            <h1 style="text-shadow: 2px 2px black;text-align:center">&nbsp;&nbsp; ADD &nbsp;&nbsp;&nbsp; NEW &nbsp;&nbsp;&nbsp; USER</h1>
                        </div>

                        <!-- Button to close popup -->
                        <div class="col-1 center float-end">
                            <div class="mt-1 col-3 float-end justify-content-center closeSignup" id="closeAddUser" style="width: 60px;height: 50px;float:right" onclick="addNewUser()">
                                <img class="mt-1" src="/dashboard/AuMoK/Images/iconClose.png" style="width: 40px; height: 40px;" ; />
                            </div>
                        </div>
                    </div>

                    <!-- First row -->
                    <div class="row center justify-content-center mt-4">

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
                    <!-- <div class="row mt-5 justify-content-center"> -->

                    <!-- Pwd -->
                    <!-- <div class="col-3 m-2">
                            <div class="row form-floating">
                                <input required class="form-control" id="Password" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="password" name="Password" placeholder="Password" required>
                                <label for="floatingInput" style="text-align:center">Password</label>
                            </div>
                        </div> -->

                    <!-- Pwd2 -->
                    <!-- <div class="col-3 m-2">
                            <div class="row form-floating">
                                <input required class="form-control" id="Password2" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="password" name="Password2" placeholder="Password2">
                                <label for="floatingInput" style="text-align:center">Your Password Again</label>
                            </div>
                        </div> -->

                    <!-- </div> -->


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


    <!-- Container general -->
    <div class="container">
        <div class="row mt-5">
            <!-- Left Col -->
            <div class="col-3" style="height:800px;border-right: solid 02px;">
                <!-- Container for Options -->
                <div class="container-fluid">
                    <div class="row m-1 justify-content-center">

                        <!-- Option to Add new User -->
                        <!-- <button class="btn btn-outline-success mt-3" id="addUser" onclick="addNewUser()">
                            ADD NEW USER
                        </button> -->

                        <!-- Edit an existant user -->
                        <button class="btn btn-outline-primary mt-3" onclick="editUser()">
                            EDIT AN USER
                        </button>

                        <!-- Option to Add new User -->
                        <button class="btn btn-outline-danger mt-3" onclick="deleteUser()">
                            DELETE AN USER
                        </button>

                        <button class="btn btn-outline-warning mt-3" onclick="disableUser()">
                            DISABLE AN USER
                        </button>

                    </div>
                </div>
            </div>

            <!-- Right Col -->
            <div class="col-7">

                <!-- Search User -->
                <div class="container-fluid">

                    <!-- Form to get user -->
                    <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="row justify-content-center">
                            <div class="col-8 center form-floating mt-3 ms-2">
                                <input class="form-control" id="eUser" style="width:500px;height:60px;text-align: center;" type="text" name="eUser" placeholder="eUser" required>
                                <label for="floatingInput" style="text-align:center">&nbsp;&nbsp; CodeUser &nbsp;&nbsp; || &nbsp;&nbsp; Username &nbsp;&nbsp; || &nbsp;&nbsp; Phone &nbsp;&nbsp; || &nbsp;&nbsp; eMail</label>

                            </div>
                            <div class="col-1">
                                <button class="btn btn-outline-light btn-light ms-4 mt-4" type="submit" name="submitUser" style="height: 45px;">
                                    <img class="m-2" src="/dashboard/AuMoK/Images/iconReserach.png" style="width: 15px; height: 15px;" ; />
                                </button>
                            </div>

                        </div>

                        <p class="row mt-2 justify-content-center error" id="sUserError">__: </p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Error -->
    <!-- <p id="error" style="visibility:hidden"></p> -->
    <p id="nene"></p>
    <p id="error">p Error : </p>
    <p id="mode">p Mode : </p>


    <h4 class="mt-4" style="text-align: center;" id="result"></h4>





    <?php
    // If request to search an user 
    if (isset($_POST["submitUser"])) {
        $submitedUser =  $_POST["eUser"];

        if (ctype_space($submitedUser) == true) {
            echo '
            <script>
                document.getElementById("sUserError").innerHTML = "Empty Field"
            </script>
        ';
        }
        if (ctype_space($submitedUser) == false) {
            $sUser = new Users(array("CodeUser"=>$submitedUser, "eMail"=>$submitedUser,  "Phone"=>$submitedUser,  "Username"=>$submitedUser ));
            // var_dump(userSearch($sUser));
            echo '
                <script>
                    document.getElementById("sUserError").innerHTML = "'. userSearch($sUser) .'"
                </script>
            ';
        }
    }
    ?>

    <script>
        // On page load, if an error displayed
        // window.onload = function() {
        //     // document.getElementById("sUserError").innerHTML = "Empty Field"
        //     if (document.getElementById("error").innerHTML != "") {
        //         if (document.getElementById("error").innerHTML == "add") {
        //             addNewUser()
        //         }
        //     }
        // }
        // funtion to display popup for adding user
        // function addNewUser() {
        //     // Set mode
        //     document.getElementById("mode").innerHTML = "add"
        //     // Get the modal
        //     var modal = document.getElementById("addUserModal");
        //     modal.style.display = "block";

        //     var btnClose = document.getElementById("closeAddUser");

        //     // // When the user clicks on <span> (x), close the modal
        //     btnClose.onclick = function() {
        //         modal.style.display = "none";
        //     }

        //     // // When the user clicks anywhere outside of the modal, close it
        //     window.onclick = function(event) {
        //         if (event.target == modal) {
        //             modal.style.display = "none";
        //         }
        //     }
        // }

        function editUser(){
            document.getElementById("mode").innerHTML = "edit"
        }

        function deleteUser(){
            document.getElementById("mode").innerHTML = "delete"
        }

        function disableUser(){
            document.getElementById("mode").innerHTML = "disable"
        }
    </script>


    <?php
    // If request for add an user
    if (isset($_POST["addUser"])) {
        $rand = rand(0, 99999999999);
        $codeUser = substr($_POST["Name"], 0, 3) .  substr($_POST["Firstname"], 0, 3) . $rand;

        //Create user with informations
        $User = new Users(array("CodeUser" => $codeUser, "Name" => $_POST["Name"], "Firstname" => $_POST["Firstname"], "BirthDate" => $_POST["birthDate"], "eMail" => $_POST["eMail"], "Phone" => $_POST["Phone"], "Username" => $_POST["Username"], "Password" => 123, "isAlive" => true));

        //Tests for some formats
        //If any attribute is white spaced
        // if (!empty($User->Username()) && !empty($User->Name()) && !empty($User->Firstname()) && !empty($User->BirthDate()) && !empty($User->eMail()) && !empty($User->Phone()) && !empty($User->Username()) && !empty($User->Password()) && !empty($User->isAlive()) && !empty($_POST["Password2"])) {
        if (ctype_space($User->Username()) == false && ctype_space($User->Name()) == false && ctype_space($User->Firstname()) == false && ctype_space($User->BirthDate()) == false && ctype_space($User->eMail()) == false && ctype_space($User->Phone()) == false && ctype_space($User->Username()) == false) {

            if (validateName($User->Name()) == false) {
                echo
                '<script>
                    document.getElementById("errorName").innerHTML = "Only Letters"
                    document.getElementById("error").innerHTML = "add"
                </script>';
            }

            if (validateEmail($User->eMail()) == false) {
                echo
                '<script>
                    document.getElementById("errorEMail").innerHTML = "Invalid Address eMail Format"
                    document.getElementById("error").innerHTML = "add"
                </script>';
            }

            if (validatePhone($User->Phone()) == false) {
                echo
                '<script>
                    document.getElementById("errorPhone").innerHTML = "Invalid Phone Number Format"
                    document.getElementById("error").innerHTML = "add"
                </script>';
            }

            if (validateName($User->Name()) == true && validateEmail($User->eMail()) == true && validatePhone($User->Phone()) == true) {

                if (SignUP($User) == true) {
                    echo
                    '<script>
                        document.getElementById("error").innerHTML = ""
                        document.getElementById("result").innerHTML = "User added successfully"
                    </script>';
                        // echo
                        //     "<script>
                        //         window.location.href = '/dashboard/AuMoK/Views/Home.php';
                        //     </script>"
                    ;
                } else {
                    echo
                    '<script>
                        document.getElementById("errorPassword").innerHTML = "Something went wrong </br> Retry please"
                        document.getElementById("error").innerHTML = "add"
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
                    document.getElementById("error").innerHTML = "add"
                </script>';
            }

            if (ctype_space($User->Firstname()) == true) {
                echo
                '<script>
                    document.getElementById("errorFirstname").innerHTML = "Field empty"
                    document.getElementById("error").innerHTML = "add"
                </script>';
            }

            if (ctype_space($User->Username()) == true) {
                echo
                '<script>
                    document.getElementById("errorUsername").innerHTML = "Field empty"
                    document.getElementById("error").innerHTML = "add"
                </script>';
            }
            if (ctype_space($User->eMail()) == true) {
                echo
                '<script>
                    document.getElementById("errorEMail").innerHTML = "Field empty"
                    document.getElementById("error").innerHTML = "add"
                </script>';
            }
            if (ctype_space($User->Phone()) == true) {
                echo
                '<script>
                    document.getElementById("errorPhone").innerHTML = "Field empty"
                    document.getElementById("error").innerHTML = "add"
                </script>';
            }
        }
    }

    ?>




</body>

</html>