<?php

require_once("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Controllers/Fonctions.class.php");
// require_once("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Views/Footer.php");
require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Views/Footer.php");

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

        /* .dropstart:hover .dropdown-menu {
            display: block;
        } */
    </style>


    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript" src="/dashboard/AuMoK/Scripts/script.js"></script>


    <!-- <link id="icon" rel="icon" href="/dashboard/AuMoK/Images/Infinity.gif" /> -->
    <link rel="icon" type="image/png" href="/dashboard/AuMoK/Images/K.png" />


    <link rel="stylesheet" type="text/css" href="/dashboard/AuMoK/Styles/styles.css" />

</head>

<body>

    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="container-fluid">

            <!-- Logo -->
            <a class="navbar-brand" href="/dashboard/AuMoK/">
                <img src="/dashboard/AuMoK/Images/K.png" style="width: 50;height: 50px;" />
            </a>

            <!-- Links & Actions -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <!-- Home -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/dashboard/AuMoK/"> HOME </a>
                    </li>

                    <!-- Search -->
                    <li class="nav-item dropdown">

                        <!-- icon Reserach -->
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="/dashboard/AuMoK/Images/iconReserachAuto.png" style="width: 30;height: 30px;" />
                        </a>
                        <!-- Drop search form -->
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <!-- <form class="d-flex" action="/dashboard/KAMW/Views/Recherche.php"> -->
                                <form class="d-flex" action="#">
                                    <input style="width: 700px;text-align:center;" class="form-control me-1 ms-1" type="search" placeholder="SEARCH BY ..." aria-label="Search" name="keyword">
                                    <button class="btn btn-outline-dark me-1" type="submit">Search</button>
                                </form>
                            </li>
                        </ul>
                    </li>

                </ul>

                <!-- dropdown list for actions = Sign UP & Log IN -->
                <div class="nav-item dropstart">

                    <!-- Text to display -->
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="/dashboard/AuMoK/Images/iconAccount.png" style="width: 30;height: 30px;" />
                    </a>
                    <!-- Dropdown list -->
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li class="dropdown-item pointer" id="btnLogin" onclick="popupLogin()">
                            LOG IN
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-item pointer" id="btnSignup" onclick="popupSignin()">
                            SIGN UP
                        </li>
                    </ul>

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