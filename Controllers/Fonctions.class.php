<?php

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


function afficher()
{
    $db = connection();
    $UserManager = new UsersManager($db);
    $results = $UserManager->Users();
    foreach ($results as $key => $value) {
        echo $value->name() . " jiiudf" . $value->firstname();
    }
}

//Sign UP Function
function SignUP(Users $User)
{
    $db = connection();
    // $User = new Users(array("CodeUser" => "code1", "Name" => "name1", "Firstname" => "first",  "BirthDate" => "0000-00-00",  "eMail" => "email",  "Phone" => "phone",  "Username" => "user1",  "Password" => "pass",  "isAlive" => 0));
    $UserManager = new UsersManager($db);
    if ($UserManager->signUP($User) == true) {
        echo "Success";
    }else echo "Fail";
}


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
    if (preg_match ("/^[a-zA-z]*$/", $name) ) {  
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
    $color = ["green","yellow","blue","black","red","blue","darkmagenta","purple","orange","pink","Gainsboro","gray","khaki","lime","tomato","purple","thistle","Salmon" ];
    $rand = rand(0, (count($color)-1));
    return $color[$rand];
}
