<?php

require_once("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Controllers/Functions.class.php");
require_once("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Controllers/CarFunctions.class.php");
require_once("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Controllers/UsersFunctions.class.php");
require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Views/Footer.php");

// If session User does not exist, page relocation to index.php
if (!isset($_SESSION['User'])) {
    // Header to index.php
    echo
        "<script>
            window.location.href = '/dashboard/AuMoK/';
        </script>"
    ;
    exit;
}
// Else If session User exists create new Users by with that session
else if (isset($_SESSION['User'])) {
    $User = new Users($_SESSION['User'][0]);
    $checked = new UsersChecked(UserChecked($User)[0]);
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
            <a class="navbar-brand" href="/dashboard/AuMoK/Views/Home.php">
                <img src="/dashboard/AuMoK/Images/K.png" style="width:50; height:50px;"/>
            </a>

            <!-- Links & Actions -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <!-- Link for Home Page -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/dashboard/AuMoK/Views/Home.php"> HOME </a>
                    </li>

                    <!-- Link for Brands Page & Direct Search -->
                    <li class="nav-item">

                        <div class="btn-group">

                            <!-- Link for Brands Page -->
                            <a class="nav-link btn" type="button" href="/dashboard/AuMoK/Views/CarBrands.php" id="navbarDropdown" role="button" aria-expanded="false">
                                <img src="/dashboard/AuMoK/Images/iconReserachAuto.png" style="width: 30;height: 30px;" />
                            </a>
    
                            <!-- Dropdown for Search -->
                            <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <form class="d-flex" action="/dashboard/AuMoK/Views/CarBrands.php" method="POST">
                                        <input style="width: 700px;text-align:center;" class="form-control me-1 ms-1" list="CarbrandName" type="search" placeholder="SEARCH BY BRAND NAME" aria-label="Search" name="CarbrandName">
                                        <button class="btn btn-outline-dark me-1" type="submit">Search</button>
                                        <!-- Data list for cars brand name -->
                                        <datalist id="CarbrandName">
                                        <?
                                            $Brands = CarBrandsList();
                                            for ($i = 0; $i < count($Brands); $i++) {
                                                echo '<option value="' . $Brands[$i]["BrandName"] . '">';
                                            }
                                        ?>
                                        </datalist>
                                    </form>
                                </li>
                            </ul>

                        </div>

                    </li>

                </ul>

                <!-- dropdown list for actions = Sign UP & Log IN -->
                <div class="btn-group dropstart">

                    <!-- Dropdown for LOG OUT -->
                    <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item pointer" href="/dashboard/AuMoK/Views/Account.php">
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
                    <a class="nav-link btn" type="button" href="/dashboard/AuMoK/Views/Account.php" id="navbarDropdown" role="button" aria-expanded="false">
                        <img src="/dashboard/AuMoK/Images/iconAccount.png" style="width: 30;height: 30px;" />
                    </a>

                </div>

            </div>

        </div>

    </nav>

    <?
    require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Views/LogIN.php");
    require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Views/SignUP.php");
    ?>

    <script>
        // For cases where error in login popup 
        if (document.getElementById("errorLogin").innerHTML != "") {
            var modal = document.getElementById("myLogin");
            modal.style.display = "block";
        }

        // For cases where error in signup popup 
        if (document.getElementById("errorSignUP").innerHTML != "") {
            var modal = document.getElementById("mySignup");
            modal.style.display = "block";
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/dashboard/AuMoK/Scripts/script.js"></script>

</body>

</html>