<?php

require_once("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Controllers/Functions.class.php");
require_once("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Controllers/CarFunctions.class.php");
require_once("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Controllers/UsersFunctions.class.php");
require_once("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Controllers/AdminsFunctions.class.php");
require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Views/Footer.php");

// If session User does not exist, page relocation to index.php
if (!isset($_SESSION['Admin'])) {
    // Header to index.php
    echo
        "<script>
            window.location.href = '/dashboard/AuMoK/';
        </script>"
    ;
    exit;
}
// Else If session User exists create new Users by with that session
else if (isset($_SESSION['Admin'])) {
    // Create variable adminIN with admin's infos from session admin
    $AdminIN = new Admins($_SESSION['Admin'][0]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .pointer {
            cursor: pointer;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .center{
            text-align: center;
        }

        .error {
            color: red;
        }
    </style>


    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- jQuery script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- File js -->
    <script type="text/javascript" src="/dashboard/AuMoK/Scripts/script.js"></script>


    <!-- <link id="icon" rel="icon" href="/dashboard/AuMoK/Images/Infinity.gif" /> -->
    <link rel="icon" type="image/png" href="/dashboard/AuMoK/Images/K.png" />


    <link rel="stylesheet" type="text/css" href="/dashboard/AuMoK/Styles/styles.css" />

</head>

<body>

    <!--Nav bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="container-fluid">

            <!-- Logo -->
            <a class="navbar-brand" href="/dashboard/AuMoK/Views/AdminHome.php">
                <img src="/dashboard/AuMoK/Images/K.png" style="width:50; height:50px;"/>
            </a>

            <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links & Actions -->
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <!-- Link for Home Page -->
                    <li class="nav-item">
                        <a class="nav-link active mt-2" aria-current="page" href="/dashboard/AuMoK/Views/AdminHome.php"> HOME </a>
                    </li>

                    <li class="nav-item">
                        <!-- Link for Admin Users Page -->
                        <a class="nav-link" href="/dashboard/AuMoK/Views/AdminUsers.php">
                            <img src="/dashboard/AuMoK/Images/iconAdminUser.png" style="width: 40;height: 40px;" />
                        </a>
                    </li>

                    <!-- Link for Brands Page & Direct Search -->
                    <li class="nav-item">
                        <!-- Link for Admin Cars Page -->
                        <a class="nav-link mt-1" href="/dashboard/AuMoK/Views/AdminCars.php">
                            <img src="/dashboard/AuMoK/Images/iconAdminAuto.png" style="width: 30;height: 30px;" />
                        </a>
                    </li>

                </ul>

                <!-- dropdown list for actions = Sign UP & Log IN -->
                <div class="btn-group dropstart">

                    <!-- Dropdown for LOG OUT -->
                    <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item pointer" href="#">
                            ACCOUNT
                        </a>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <a class="dropdown-item pointer" href="/dashboard/AuMoK/Views/LogOUT.php">
                            LOG OUT
                        </a>
                    </ul>

                    <!-- Link for Account Page -->
                    <a class="nav-link btn" type="button" href="#" id="navbarDropdown" role="button" aria-expanded="false">
                        <img src="/dashboard/AuMoK/Images/iconAccount.png" style="width: 30;height: 30px;" />
                    </a>

                </div>

            </div>

        </div>

    </nav>

    <?
    // require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Views/UserInformations.php");
    ?>

    <script>
        // // For cases where error in login popup 
        // if (document.getElementById("errorLogin").innerHTML != "") {
        //     var modal = document.getElementById("myLogin");
        //     modal.style.display = "block";
        // }

        // // For cases where error in signup popup 
        // if (document.getElementById("errorSignUP").innerHTML != "") {
        //     var modal = document.getElementById("mySignup");
        //     modal.style.display = "block";
        // }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/dashboard/AuMoK/Scripts/script.js"></script>

</body>

</html>