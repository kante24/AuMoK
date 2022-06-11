<?php
require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Controllers/Fonctions.class.php");
// $a = include("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Styles/styles.css");
// echo "<style type='text/css'>" . $a . "</style>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style type="text/css">
        .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Styles/styles.css" />

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="icon" type="image/png" href="/dashboard/AuMoK/Images/K.png" />

    <title>HOME PAGE</title>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <div class="container-fluid">

            <!-- Logo -->
            <a class="navbar-brand" href="/dashboard/AuMoK/">
                <img src="/dashboard/AuMoK/Images/K.png" style="width: 50;height: 50px;" />
            </a>

            <!-- Links & Actions -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/dashboard/AuMoK/"> HOME </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="/dashboard/AuMoK/Views/LogIN.php">LOG IN</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="/dashboard/AuMoK/Views/SignUP.php">SIGN UP</a>
                    </li>
                </ul>

                <form class="d-flex" action="/dashboard/KAMW/Views/Recherche.php">
                    <input style="width: 500px;text-align:center" class="form-control me-2" type="search" placeholder="SEARCH BY ..." aria-label="Search" name="critere">
                    <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>

            </div>

        </div>
    </nav>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>