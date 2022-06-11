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
    $results=$UserManager->Users();
    foreach ($results as $key =>$value) {
        echo $value->Name() . " jiiudf" . $value->firstname();
    }
}
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "aumok";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// } 

// $sql = "SELECT * FROM Users";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
//     echo "name: " . $row["Name"]. " - FirstName: " . $row["FirstName"] . "<br>";
//   }
// } else {
//   echo "0 results";
// }
// $conn->close();
