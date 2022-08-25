<?php

// If no session, start one
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Setting internal encoding for string functions
mb_internal_encoding("UTF-8");

// Connection pdo to database
function connection()
{
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=AuMoK", "root", "");
        return $pdo;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

// Automatic loading of controller and model functions
function autoChargeFonction($class)
{
    // Path of file
    $filename = '/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Controllers/' . $class . '.class.php';
    // If file exists in controllers folder
    if (file_exists($filename)) {
        require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Controllers/" . $class . ".class.php");
    } 
    // Else if file exists in models folder
    else {
        require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Models/" . $class . ".class.php");
    }
}
spl_autoload_register('autoChargeFonction');



//Return a random colour
function color()
{
    $color = ["green", "yellow", "blue", "black", "red", "blue", "darkmagenta", "purple", "orange", "pink", "Gainsboro", "gray", "khaki", "lime", "tomato", "purple", "thistle", "Salmon"];
    $rand = rand(0, (count($color) - 1));
    return $color[$rand];
}



function nene()
{
    echo "nene";
}




