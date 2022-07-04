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
            <div class="col-4 shadow-lg p-3 mb-5 bg-body rounded nav flex-column nav-pills" style="border-right: solid; height: min(100%, 250px);" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                <!-- Option to Display Profil Infos -->
                <button class="btn btn-outline-success active mt-3" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="true">
                    PROFILE
                </button>

                <button class="btn btn-outline-primary mt-3" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>

                <button class="btn btn-outline-dark mt-3" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>

                <button class="btn btn-outline-danger mt-3" id="v-pills-delete-tab" data-bs-toggle="pill" data-bs-target="#v-pills-delete" type="button" role="tab" aria-controls="v-pills-delete" aria-selected="false">
                    DELETE ACCOUNT <span><img class="mb-1" src="/dashboard/AuMoK/Images/iconTrash.png" style="width:20px ;height:20px" /></span>
                </button>

                <!-- <button class="btn btn-outline-dark mt-3" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button> -->
            </div>


            <!-- Right Row => Results -->
            <div class="ColorChange col-7 shadow-lg p-3 mb-5 ms-3 bg-body rounded tab-content" id="v-pills-tabContent" style="height: min(250px);">

                <!-- Profile Informaions -->
                <div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <!-- Title -->
                    <h1 style="text-align: center;">
                        <? echo $User->Firstname() . "  " . $User->Name() ?>
                    </h1>
                    <!-- Current User Informations -->
                    <div class="container-fluid">
                        <div class="row">
                        </div>
                    </div>
                    <!-- Container div for Updates -->
                </div>

                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">C</div>
                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">D</div>

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
            left.offsetHeight = right.style.height
        }
    </script>

</body>

</html>