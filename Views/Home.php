<?php
require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Views/HeaderIN.php");
var_dump($User);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <style>
        /* div {
            border: solid;
        } */

        #btn{ width: 100px;}

        @media all and (max-width : 300px)
        {
            #btn{ width: 50px;}
        }
    </style>
</head>

<body>

<br /><br /><br />

<button id="btn">
Manger nene
</button>

<br /><br /><br />



    

    <?
        $admin = new Admins(array("Name"=>"Kante", "Firstname"=>"David", "Access"=>1));
        var_dump($admin->Access());
    ?>





</body>

</html>