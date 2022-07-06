<?php

require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Views/HeaderIN.php");


// Account Deletion
// If request for delete account
if (isset($_POST["deleteAccount"])) {
    // If deletion not successfull
    if (DeleteUser($User) == false) {
        echo
        '<script>
            document.getElementById("errorDeleteAccount").innerHTML = "Something Went Wrong <br/> Retry Please"
        </script>';
    }
    // Else If deletion successfull
    else if (DeleteUser($User) == true) {
        echo
        "<script>
            Relocation('')
        </script>";
    }
}

// Edition name, firstname, birthdate
// If request for edition
if (isset($_POST["editName"])) {
    // Current Infos
    $Name = $User->Name();
    $Firstname = $User->Firstname();
    $Birthdate = $User->BirthDate();

    // Edited Infos
    $editedName = $_POST["editedName"];
    $editedFirstname = $_POST["editedFirstname"];
    $editedBirthdate = $_POST["editedBirthDate"];



    // If any of the current information differs from that submitted
    if ($Name != $editedName || $Firstname != $editedFirstname || $Birthdate != $editedBirthdate) {
        // Check empty fields
        if (ctype_space($editedName) == false && ctype_space($editedName) == false && ctype_space($editedName) == false) {
            $editedUser = new Users(array("CodeUser" => $User->CodeUser(), "Name" => $editedName, "Firstname" => $editedFirstname, "BirthDate" => $editedBirthdate));
            if (UpdateUserName($editedUser) == true) {
                // Update current session user
                $_SESSION["User"][0]["Firstname"] = $editedFirstname;
                $_SESSION["User"][0]["Name"] = $editedName;
                $_SESSION["User"][0]["BirthDate"] = $editedBirthdate;
                $User = $_SESSION["User"][0];
                echo "
                    <script>
                        Relocation('Views/Account.php')
                    </script>
                ";
            };
        } else {
            echo "Empty Field | Retry";
        }
    } else {
    }
}


if (isset($_POST["editEMailPhone"])) {
    // echo "Phone = " . $_POST["editedPhone"] . " eMail = " . $_POST["editedEMail"] ;
    // Current Infos
    $Phone = $User->Phone();
    $eMail = $User->eMail();

    // Edited Infos
    $editedPhone = $_POST["editedPhone"];
    $editedEMail = $_POST["editedEMail"];

    // If any of the current information differs from that submitted
    if ($Phone != $editedPhone || $eMail != $editedEMail) {
        // Check empty fields
        if (ctype_space($editedPhone) == false && ctype_space($editedEMail) == false) {
            $editedUser = new Users(array("CodeUser" => $User->CodeUser(), "Phone" => $editedPhone, "eMail" => $editedEMail));
            if (UpdateUserEMailPhone($editedUser) == true) {
                // Update current session user
                $_SESSION["User"][0]["Phone"] = $editedPhone;
                $_SESSION["User"][0]["eMail"] = $editedEMail;
                $User = $_SESSION["User"][0];
                echo "
                    <script>
                        Relocation('Views/Account.php')
                    </script>
                ";
            };
        } else {
            echo "Empty Field(s) | Retry";
        }
    } else {
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCOUNT PAGE</title>
</head>

<style>
    /* div {
        border: solid;
    } */

    #ProfileEditer {
        display: none;
    }

    #CloseButton {
        display: none;
    }

    .ColorChange {
        border: solid;
        animation: colorAnimation 5s infinite;
    }

    @keyframes colorAnimation {
        0% {
            border-color: <? echo color() ?>;
        }

        25% {
            border-color: <? echo color() ?>;
        }

        50% {
            border-color: <? echo color() ?>;
        }

        75% {
            border-color: <? echo color() ?>;
        }

        100% {
            border-color: <? echo color() ?>;
        }
    }
</style>

<body>

    <div class="container-fluid mt-2">
        <!-- Title -->
        <div class="row">
            <marquee scrollamount="20">
                <h1 style="text-align: center;">
                    <? echo $User->Username() ?>'Account
                </h1>
            </marquee>
        </div>

        <!-- General Row -->
        <div class="row mt-5 ms-5 me-5 d-flex align-items-start">

            <!-- Left Row => Options -->
            <!-- <div class="col-4 shadow-lg p-3 mb-5 bg-body rounded nav flex-column nav-pills" style="border-right: solid; height: min(100%, 250px);" id="v-pills-tab" role="tablist" aria-orientation="vertical"> -->
            <div class="col-4 shadow-lg p-3 mb-5 bg-body rounded nav flex-column nav-pills" style="border-right: solid;" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <!-- Option to Display Profil Infos -->
                <button class="btn btn-outline-success active mt-3" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="true">
                    PROFILE
                </button>

                <!-- <button class="btn btn-outline-primary mt-3" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button> -->

                <button class="btn btn-outline-dark mt-3" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>

                <!-- Button to delete account -->
                <button class="btn btn-outline-danger mt-3" id="v-pills-delete-tab" data-bs-toggle="pill" data-bs-target="#v-pills-delete" type="button" role="tab" aria-controls="v-pills-delete" aria-selected="false">
                    DELETE ACCOUNT <span><img class="mb-1" src="/dashboard/AuMoK/Images/iconTrash.png" style="width:20px ;height:20px" /></span>
                </button>

                <!-- <button class="btn btn-outline-dark mt-3" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button> -->
            </div>


            <!-- Right Row => Results -->
            <!-- <div class="ColorChange col-7 shadow-lg p-3 mb-5 ms-3 bg-body rounded tab-content" id="v-pills-tabContent" style="height: min(100%,250px);"> -->
            <div class="ColorChange col-7 shadow-lg p-3 mb-5 ms-3 bg-body rounded tab-content" id="v-pills-tabContent">

                <!-- Profile Informaions -->
                <div class="container-fluid tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <!-- Title Row -->
                    <div class="row mt-3 bg-light">
                        <!-- Col for Username as a Title -->
                        <div class="col-10">
                            <h1 style="text-align: center;">
                                <? echo $User->Username() ?>'s General Informations
                            </h1>
                        </div>
                        <!-- Col for image icon edit informations -->
                        <div class="col-2 mt-1 mb-1">
                            <img class="float-end" src="/dashboard/AuMoK/Images/iconEdit2.jpg" style="width: 50px;height:50px" />
                        </div>
                    </div>

                    <!-- Current User Informations And Edit Modes -->
                    <div class="row" id="ProfileInformations">
                        <!-- Row for Name, BirthDay -->
                        <div class="row mt-3">
                            <!-- Col for current information (firstname, name, birthdate) -->
                            <div class="col-11" id="CurrentName" style="text-align: center;display:block">
                                <!-- Firstname and Name -->
                                <h5 style="display:inline;"> <? echo $User->Firstname() ?> &#160; <? echo $User->Name() ?> &#160; </h5>
                                <!-- Birthdate -->
                                <p style="display:inline;"> &#160; born on </p>
                                <h5 style="display: inline;"> &#160; <? echo $User->BirthDate() ?></h5>
                            </div>
                            <!-- Col for edition mode (for firstname, name, birthdate) -->
                            <div class="col-11" id="NameEdition" style="text-align: center;display:none">
                                <!-- Form to edit Name, Firstname, BirthDate -->
                                <form class="row justify-content-center" action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                                    <!--  Name -->
                                    <div class="col-3 center m-2">
                                        <div class="row center form-floating" style="height:50px;">
                                            <input class="form-control" id="editedName" style="text-align: center;" type="text" name="editedName" placeholder="editedName" value="<? echo $User->Name() ?>" required>
                                            <label for="floatingInput" style="text-align:center">Name</label>
                                        </div>
                                    </div>

                                    <!--  Firstname -->
                                    <div class="col-3 m-2">
                                        <div class="row form-floating" style="height:50px;">
                                            <input class="form-control" id="editedFirstname" style="text-align: center;" type="text" name="editedFirstname" placeholder="editedFirstname" value="<? echo $User->Firstname() ?>" required />
                                            <label for="floatingInput" style="text-align:center">Firstname</label>
                                        </div>
                                    </div>

                                    <!-- BirthDate -->
                                    <div class="col-3 m-2">
                                        <div class="row form-floating" style="height:50px;">
                                            <input class="form-control" id="editedBirthDate" type="date" name="editedBirthDate" style="text-align: center;" value="<? echo $User->BirthDate() ?>" required />
                                            <label for="floatingInput" style="text-align:center">Birthdate</label>
                                        </div>
                                    </div>

                                    <!-- Button to Submit edition -->
                                    <div class="col-2 mt-2">
                                        <button class="btn btn-success" type="submit" name="editName">
                                            <img class="m-2" src="/dashboard/AuMoK/Images/iconSubmit.png" style="width: 25px; height: 25px;" ; />
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!-- Buttons to edit or close edit option -->
                            <div class="col-1">
                                <!-- Button edit mode -->
                                <img class="float-start pointer" id="editNameButton" onclick="editName()" class="float-end pointer" src="/dashboard/AuMoK/Images/iconEdit.png" style="width: 20px;height:20px" />
                                <!-- Button to close edit mode -->
                                <img class="float-start mt-4 pointer" id="closeName" onclick="editName()" class="float-end pointer" src="/dashboard/AuMoK/Images/iconClose.png" style="width: 20px;height:20px;display:none" />
                            </div>
                        </div>

                        <!-- Horizontale bar -->
                        <div class="row mt-3 justify-content-center">
                            <hr class="ColorChange" />
                        </div>

                        <!-- Row for phone number and address eMial -->
                        <div class="row">
                            <!-- Current Phone Number and Address eMail  -->
                            <div class="col-11" id="currentEMailPhone" style="text-align: center;">
                                <!-- Current Phone Number  -->
                                <p style="display:inline;"> Phone Number = </p>
                                <h5 style="display:inline;"> &#160; <? echo $User->Phone() ?> </h5>
                                &#160;&#160;/&#160;&#160;
                                <!-- Current Address eMail -->
                                <p style="display:inline;"> Address eMail = </p>
                                <h5 style="display:inline;"> &#160; <? echo $User->eMail() ?> </h5>
                            </div>
                            <!-- Row for edition mode -->
                            <div class="col-11" id="EMailPhoneEdition" style="display: none;">
                                <!-- Edition form for phone and eMail -->
                                <form class="row justify-content-center" action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                                    <!-- eMail -->
                                    <div class="col-4 m-2">
                                        <div class="row form-floating" style="height:50px;">
                                            <input class="form-control" style="text-align: center;" type="text" name="editedEMail" placeholder="editedEMail" value="<? echo $User->eMail() ?>" required>
                                            <label for="floatingInput" style="text-align:center">Address eMail</label>
                                        </div>
                                    </div>

                                    <!-- Phone -->
                                    <div class="col-4 m-2" style="height:50px;">
                                        <div class="row form-floating">
                                            <input class="form-control" style="text-align: center;" type="text" name="editedPhone" placeholder="editedPhone" value="<? echo $User->Phone() ?>" required>
                                            <label for="floatingInput" style="text-align:center">Phone Number</label>
                                        </div>
                                    </div>

                                    <!-- Button to Submit edition -->
                                    <div class="col-2 mt-2">
                                        <button class="btn btn-success" type="submit" name="editEMailPhone">
                                            <img class="m-2" src="/dashboard/AuMoK/Images/iconSubmit.png" style="width: 25px; height: 25px;" ; />
                                        </button>
                                    </div>

                                </form>
                            </div>
                            <!-- Buttons to edit or close Phone & eMail edit option -->
                            <div class="col-1">
                                <!-- Button edit mode -->
                                <img class="float-start pointer" id="editEMailPhoneButton" onclick="editEMailPhone()" class="float-end pointer" src="/dashboard/AuMoK/Images/iconEdit.png" style="width: 20px;height:20px" />
                                <!-- Button to close edit mode -->
                                <img class="float-start pointer mt-4" id="closeEMailPhone" onclick="editEMailPhone()" class="float-end pointer" src="/dashboard/AuMoK/Images/iconClose.png" style="width: 20px;height:20px;display:none" />
                            </div>
                        </div>

                        <!-- Horizontale bar -->
                        <div class="row mt-3 justify-content-center">
                            <hr class="ColorChange" />
                        </div>

                        <div class="row">
                            <div class="col-11" id="currentEMailPhone" style="text-align: center;">
                                <!-- Current Phone Number  -->
                                <p style="display:inline;"> Phone Number is <? echo checkedBool($checked->PhoneChecked()) ?> </p>
                                &#160;/&#160;
                                <!-- Current Address eMail -->
                                <p style="display:inline;"> Address eMail is <? echo checkedBool($checked->eMailChecked()) ?> </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">C</div> -->
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">Settings</div>

                <!-- Delete Accout -->
                <div class="tab-pane fade" id="v-pills-delete" role="tabpanel" aria-labelledby="v-pills-delete-tab">
                    <h1 style="text-align: center;">
                        Account Deletion
                    </h1>

                    <div class="container-fluid mt-5">
                        <div class="row justify-content-center">
                            <div class="col-5 me-2 ms-2" style="text-align: center;color:red;height:50px;width:200px">Do you want to delete your account?</div>
                            <div class="col-5 ms-2 me-2">
                                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                    <button class="btn btn-danger" style="height:50px;" name="deleteAccount">
                                        YES
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <p style="text-align: center;color:red" id="errorDeleteAccount"></p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


    <script>
        var left = document.getElementById('v-pills-tab');
        var right = document.getElementById('v-pills-tabContent');
        // if (left.offsetHeight > right.offsetHeight) {
        //     right.style.height = left.offsetHeight
        // } else if (left.offsetHeight < right.offsetHeight) {
        //     left.style.height = right.offsetHeight
        // }

        function ajustRows() {
            if (left.offsetHeight > right.offsetHeight) {
                right.style.height = left.offsetHeight
            } else if (left.offsetHeight < right.offsetHeight) {
                left.style.height = right.offsetHeight
            }
        }

        ajustRows()

        /////////////////////////////////////////////////////////////////////////////
        /////////////////////////// Part for profile edition ///////////////////////
        ////////////////////////////////////////////////////////////////////////////
        // Function to edit name, firstname, birthday
        function editName() {
            // Div current name
            var divName = document.getElementById("CurrentName");
            // Div for edition mode
            var divNameEdition = document.getElementById("NameEdition")
            // Button close edition mode
            var btnClose = document.getElementById("closeName")
            // Button edit 
            var btnEdit = document.getElementById("editNameButton")

            // When function called
            // Hide div information and edit button
            divName.style.display = "none"
            btnEdit.style.display = "none"

            // Display div edition mode and button to close edition mode
            divNameEdition.style.display = "block"
            btnClose.style.display = "block"

            // When click on close button
            btnClose.onclick = function() {
                // Hide div edition mode and button to close edition mode
                divNameEdition.style.display = "none"
                btnClose.style.display = "none"

                // Display div information and edit button
                divName.style.display = "block"
                btnEdit.style.display = "block"
                // ajustRows()
            }
            // ajustRows()
        }

        // Function to edit name, firstname, birthday
        function editEMailPhone() {
            // Div current eMail and phone
            var divEmailPhone = document.getElementById("currentEMailPhone");
            // Div for edition mode
            var divEmailPhoneEdition = document.getElementById("EMailPhoneEdition")
            // Button close edition mode
            var btnClose = document.getElementById("closeEMailPhone")
            // Button edit 
            var btnEdit = document.getElementById("editEMailPhoneButton")

            // When function called
            // Hide div information and edit button
            divEmailPhone.style.display = "none"
            btnEdit.style.display = "none"

            // Display div edition mode and button to close edition mode
            divEmailPhoneEdition.style.display = "block"
            btnClose.style.display = "block"

            // When click on close button
            btnClose.onclick = function() {
                // Hide div edition mode and button to close edition mode
                divEmailPhoneEdition.style.display = "none"
                btnClose.style.display = "none"

                // Display div information and edit button
                divEmailPhone.style.display = "block"
                btnEdit.style.display = "block"
                // ajustRows()
            }
            // ajustRows()
        }
        /////////////////////////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////
    </script>

</body>

</html>

<!-- <form method="POST" action="<? //echo $_SERVER['PHP_SELF']
                                    ?>" >
                                <input type="image" name="editProfile" class="float-end" src="/dashboard/AuMoK/Images/iconEdit2.jpg" style="width: 50px;height:50px" />
                            </form> -->