<?php
session_start();
// Setting internal encoding for string functions
mb_internal_encoding("UTF-8");

//connection pdo to database
function connection()
{
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=aumok", "root", "");
        return $pdo;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

// Chargement automatique des fonctions controlleurs et modèles
function autoChargeFonction($class)
{
    $filename = '/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Controllers/' . $class . '.class.php';
    if (file_exists($filename)) {
        require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Controllers/" . $class . ".class.php");
    } else {
        require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Models/" . $class . ".class.php");
    }
}
spl_autoload_register('autoChargeFonction');



//Validate eMail format
function validateEmail($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}


//Validate phone format
function validatePhone($phone)
{
    if (preg_match('/^[0-9]{10}+$/', $phone)) {
        return true;
    } else {
        return false;
    }
}


//Validate phone format
function validateName($name)
{
    if (preg_match("/^[a-zA-z]*$/", $name)) {
        return true;
    } else {
        return false;
    }
}


//Validate passwords
function validatePasswords($pwd1, $pwd2)
{
    if ($pwd1 == $pwd2) {
        return true;
    } else {
        return false;
    }
}


//Return a random colour
function color()
{
    $color = ["green", "yellow", "blue", "black", "red", "blue", "darkmagenta", "purple", "orange", "pink", "Gainsboro", "gray", "khaki", "lime", "tomato", "purple", "thistle", "Salmon"];
    $rand = rand(0, (count($color) - 1));
    return $color[$rand];
}







// ************************************************************* //
// ************************************************************* //
// ************************************************************* //
//                     Functions Users                          // 
// ************************************************************* //
// ************************************************************* //
// ************************************************************* //

//Sign UP Function
function SignUP(Users $User)
{
    $db = connection();
    $UserManager = new UsersManager($db);
    // var_dump($UserManager->existanceEMailDB($User));

    if ($UserManager->existanceEMailDB($User) == true) {
        echo
        '<script>
            document.getElementById("errorEMail").innerHTML = "Existant eMail address </br> Choose another one"
         </script>';
    }

    if ($UserManager->existanceUsernameDB($User) == true) {
        echo
        '<script>
            document.getElementById("errorUsername").innerHTML = "Existant Username </br> Choose another one"
        </script>';
    }

    if ($UserManager->existancePhoneDB($User) == true) {
        echo
        '<script>
            document.getElementById("errorPhone").innerHTML = "Existant phone number </br> Choose another one"
        </script>';
    }

    if ($UserManager->existanceEMailDB($User) == false && $UserManager->existanceUsernameDB($User) == false && $UserManager->existancePhoneDB($User) == false) {
        if ($UserManager->signUP($User) == true) {
            return true;
        } else return false;
    }
}


//Log IN Function
function LogIN(Users $User)
{
    $db = connection();
    $UserManager = new UsersManager($db);

    if ($UserManager->existanceUsernameDB($User) == false && $UserManager->existanceEMailDB($User) == false) {
        echo
        '<script>
            document.getElementById("errorLogin").innerHTML = "Inexistant Username/eMail"
        </script>';
    }
    if ($UserManager->existanceUsernameDB($User) == true || $UserManager->existanceEMailDB($User) == true) {
        if ($UserManager->logIN($User) != false) {
            $_SESSION["User"] = $UserManager->logIN($User);
            return true;
        } else {
            echo
            '<script>
                document.getElementById("errorLogin").innerHTML = "Username or Password Incorrect"
            </script>';
        };
    }
}
