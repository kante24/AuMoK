<?php


// ************************************************************* //
// ************************************************************* //
// ************************************************************* //
//                     Functions Users                          // 
// ************************************************************* //
// ************************************************************* //
// ************************************************************* //




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





//Sign UP Function
function SignUP(Users $User)
{
    // Database
    $db = connection();
    $UserManager = new UsersManager($db);
    
    // Before sign up, must check if address eMail, phone number or username already exists in DB
    // If already exists display error messages

    // Existence of address eMail
    if ($UserManager->existanceEMailDB($User) == true) {
        echo
        '<script>
            document.getElementById("errorEMail").innerHTML = "Existant eMail address </br> Choose another one"
            document.getElementById("errorSignUP").innerHTML = "Existant eMail address </br> Choose another one"
         </script>';
    }

    // Existence username
    if ($UserManager->existanceUsernameDB($User) == true) {
        echo
        '<script>
            document.getElementById("errorUsername").innerHTML = "Existant Username </br> Choose another one"
            document.getElementById("errorSignUP").innerHTML = "Existant Username </br> Choose another one"
        </script>';
    }

    // Existence phone number
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
            // Create a session for user
            // Session user will contains user's informations
            $_SESSION["User"] = $UserManager->logIN($User);
            // Return true as success
            return true;
        } else return false;
    }
}




//Log IN Function
// Takes as parameters an User and will use Username, eMail, Password
function LogIN(Users $User)
{
    // Datebase
    $db = connection();
    // UserManager
    $UserManager = new UsersManager($db);

    // Before log in, must check if address eMail or username already exists in DB
    // If neither address eMail or username exists display error messages
    if ($UserManager->existanceUsernameDB($User) == false && $UserManager->existanceEMailDB($User) == false) {
        echo 
        '<script>
            document.getElementById("errorLogin").innerHTML = "Inexistant Username/Address eMail"
        </script>';
    }
    // If Username or address eMail exists in DB
    if ($UserManager->existanceUsernameDB($User) == true || $UserManager->existanceEMailDB($User) == true) {
        // If log IN == successfull
        if ($UserManager->logIN($User) == true) {
            // Create a session for user
            // Session user will contains user's informations
            $_SESSION["User"] = $UserManager->logIN($User);
            // Return true as success
            return true;
        } 
        // If log IN not successfull 
        else {
            // Display error message
            echo
            '<script>
                document.getElementById("errorLogin").innerHTML = "Username or Password Incorrect"
            </script>';
        }
    }

}



// 
function DeleteUser(Users $User)
{
    // Database
    $db = connection();
    $UserManager = new UsersManager($db);

    if($UserManager->deleteUser($User) == true)
    {
        return true;
    }
    else return false;
}





?>