<?php
session_start();
// Setting internal encoding for string functions
mb_internal_encoding("UTF-8");

//connection pdo to database
function connection()
{
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=AuMoK", "root", "");
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
    // Return true if format correct, else return false
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}


//Validate phone format
function validatePhone($phone)
{
    // Return true if format correct, else return false
    if (preg_match('/^[0-9]{10}+$/', $phone)) {
        return true;
    } else {
        return false;
    }
}


//Validate phone format
function validateName($name)
{
    // Return true if format correct, else return false
    if (preg_match("/^[a-zA-z]*$/", $name)) {
        return true;
    } else {
        return false;
    }
}


//Validate passwords
function validatePasswords($pwd1, $pwd2)
{
    // Return true if both passwords match, else return false
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
    // Database
    $db = connection();
    $UserManager = new UsersManager($db);
    
    // Before sign up, must check if address eMail, phone number or username already exist in DB
    // If so display error messages

    // Existance address eMail
    if ($UserManager->existanceEMailDB($User) == true) {
        echo
        '<script>
            document.getElementById("errorEMail").innerHTML = "Existant eMail address </br> Choose another one"
            document.getElementById("errorSignUP").innerHTML = "Existant eMail address </br> Choose another one"
         </script>';
    }

    // Existance username
    if ($UserManager->existanceUsernameDB($User) == true) {
        echo
        '<script>
            document.getElementById("errorUsername").innerHTML = "Existant Username </br> Choose another one"
            document.getElementById("errorSignUP").innerHTML = "Existant Username </br> Choose another one"
        </script>';
    }

    // Existance phone number
    if ($UserManager->existancePhoneDB($User) == true) {
        echo
        '<script>
            document.getElementById("errorPhone").innerHTML = "Existant phone number </br> Choose another one"
            document.getElementById("errorSignUP").innerHTML = "Existant phone number </br> Choose another one"
        </script>';
    }

    // If address eMail, username and phone number does not exist already
    if ($UserManager->existanceEMailDB($User) == false && $UserManager->existanceUsernameDB($User) == false && $UserManager->existancePhoneDB($User) == false) {
        // If sign up of user successfull
        if ($UserManager->signUP($User) == true) {
            // Create new session User
            $_SESSION["User"] = $UserManager->logIN($User);
            // Return true as success
            return true;
        } else return false;
    }
}


//Log IN Function
function LogIN(Users $User)
{
    // Datebase
    $db = connection();
    $UserManager = new UsersManager($db);

    // Before log in, must check if address eMail or username already exist in DB
    // If no display error messages
    if ($UserManager->existanceUsernameDB($User) == false && $UserManager->existanceEMailDB($User) == false) {
        echo
        '<script>
            document.getElementById("errorLogin").innerHTML = "Inexistant Username/eMail"
        </script>';
    }
    // If Username or address eMail exist in DB
    if ($UserManager->existanceUsernameDB($User) == true || $UserManager->existanceEMailDB($User) == true) {
        // If log IN == successfull
        if ($UserManager->logIN($User) != false) {
            // Create new session User
            $_SESSION["User"] = $UserManager->logIN($User);
            // Return true as success
            return true;
        } 
        // If log IN != successfull 
        else {
            // Display error message
            echo
            '<script>
                document.getElementById("errorLogin").innerHTML = "Username or Password Incorrect"
            </script>';
        }
    }
}


function CarBrandsList()
{
    // Datebase
    $db = connection();
    $CarBrandManager = new CarBrandsManager($db);
    // var_dump($BrandManager->Brands());
    return $CarBrandManager->CarBrands();
}
