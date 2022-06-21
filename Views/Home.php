<?php
require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Views/Header.php");
// require("../Controllers/Fonctions.class.php");
// session_start();
if (!isset($_SESSION['User'])) {
    // Header to index.php
    echo
        "<script>
            Relocation('')
        </script>";
    exit;
}
else if (isset($_SESSION['User'])) {
    $User = new Users($_SESSION['User'][0]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>
<body>
    
    <?
    echo "Nom = " . $User->Name()
    ?>

</body>
</html>