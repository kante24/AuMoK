<?php

require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Views/HeaderIN.php");

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
// if(isset())

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
                    <div class="row mt-3 bg-light">
                        <!-- Col for Username as a Title -->
                        <div class="col-10">
                            <h1 style="text-align: center;">
                                <? echo $User->Username() ?>'s General Informations
                            </h1>
                        </div>
                        <!-- Col for button to edit informations -->
                        <div class="col-2 mt-1 mb-1">
                            <img id="editButton" onclick="" class="float-end pointer" src="/dashboard/AuMoK/Images/iconEdit2.jpg" style="width: 50px;height:50px" />
                            <img id="CloseButton" onclick="" class="float-end pointer" src="/dashboard/AuMoK/Images/iconClose.png" style="width: 50px;height:50px" />
                        </div>
                    </div>

                    <!-- Current User Informations -->
                    <div class="row" id="ProfileInformations">
                        <!-- Row for firstname, name, birthdate -->
                        <div class="row mt-3">
                            <div class="col-12" style="text-align: center;">
                                <!-- Firstname and Name -->
                                <h5 style="display:inline;"> <? echo $User->Firstname() ?> &#160; <? echo $User->Name() ?> &#160; </h5>
                                <p style="display:inline;"> &#160; born on </p>
                                <!-- Birthdate -->
                                <h5 style="display: inline;"> &#160; <? echo $User->BirthDate() ?></h5>
                            </div>
                        </div>
                        <!-- Horizontale bar -->
                        <div class="row mt-3 justify-content-center">
                            <hr style="width: 50%;" class="ColorChange" />
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12" style="text-align: center;">
                                <p style="display:inline;"> Phone Number = </p>
                                <h5 style="display:inline;"> &#160;  <? echo $User->Phone() ?> </h5>
                                &#160;&#160;/&#160;&#160;
                                <p style="display:inline;"> Address eMail = </p>
                                <h5 style="display:inline;"> &#160;  <? echo $User->eMail() ?> </h5>
                            </div>
                        </div>
                    </div>
                    <!-- Container div for Edits -->
                    <div class="row m-5" id="ProfileEditer">
                        Edition mode
                    </div>
                </div>

                <!-- <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">C</div> -->
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">Settings<br/><br/><br/><br/><br/><br/><br/><br/>j</div>

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
        if (left.offsetHeight > right.offsetHeight) {
            right.style.height = left.offsetHeight
        } else if (left.offsetHeight < right.offsetHeight) {
            left.style.height = right.offsetHeight
        }

        function ajustRows() {
            if (left.offsetHeight > right.offsetHeight) {
                right.style.height = left.offsetHeight
            } else if (left.offsetHeight < right.offsetHeight) {
                left.style.height = right.offsetHeight
            }
        }
        // ajustRows()

        /////////////////////////////////////////////////////////////////////////////
        /////////////////////////// Part for profile edition ///////////////////////
        ////////////////////////////////////////////////////////////////////////////
        // Row for profile informations
        var ProfileInformations = document.getElementById("ProfileInformations");
        // Row for profile edtion
        var ProfileEditer = document.getElementById("ProfileEditer");
        // Button to edit profile
        var EditButton = document.getElementById("editButton");
        // Button to close edition mode
        var CloseButton = document.getElementById("CloseButton");
        // When click on edit button
        EditButton.onclick = function() {
            // Hide profile current informations
            ProfileInformations.style.display = "none"
            // Hide edit button
            EditButton.style.display = "none"
            // Display row for mode edition
            ProfileEditer.style.display = "block"
            // Display close button
            CloseButton.style.display = "block"
            ajustRows()
        }

        // When close on close button
        CloseButton.onclick = function() {
            // Display profile informations
            ProfileInformations.style.display = "block"
            // Display Edit button
            EditButton.style.display = "block"
            // Hide row for edition mode
            ProfileEditer.style.display = "none"
            // Hide close button
            CloseButton.style.display = "none"
            ajustRows()
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