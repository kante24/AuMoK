<?php
require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Views/Header.php");
require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Views/Footer.php");

//SignUP();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP PAGE</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>


    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <div class="container">

        <form action=" <?php echo $_SERVER['PHP_SELF']; ?>" method="post">

            <!--  Name -->
            <div class="col form-floating">
                <input class="form-control" id="Name" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="text" name="Name" placeholder="Name" required>
                <label for="floatingInput" style="text-align:center">Last Name</label>
            </div>

            <!--  Firstname -->
            <div class="col form-floating">
                <input class="form-control" id="Firstname" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="text" name="Firstname" placeholder="Firstname" required>
                <label for="floatingInput" style="text-align:center">Firstname</label>
            </div>

            <!-- BirthDate -->
            <div class="col">
                <input id="birthDate" type="date" name="birthDate" value="" style="width:200px" required />
            </div>

            <!--  Mail -->
            <div class="col form-floating">
                <input required class="form-control" id="eMail" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="text" name="eMail" placeholder="eMail">
                <label for="floatingInput" style="text-align:center">@_Adress eMail_@</label>
            </div>

            <!--  Phone -->
            <div class="col form-floating">
                <input class="form-control" id="Phone" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="text" name="Phone" placeholder="Phone" required>
                <label for="floatingInput" style="text-align:center">Phone Number</label>
            </div>

            <!--  Username -->
            <div class="col form-floating">
                <input class="form-control" id="Username" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="text" name="Username" placeholder="Username" required>
                <label for="floatingInput" style="text-align:center">Username</label>
            </div>

            <!--  Pwd -->
            <div class="col form-floating">
                <input required class="form-control" id="Password" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="password" name="Password" placeholder="Password" required>
                <label for="floatingInput" style="text-align:center">Password</label>
            </div>

            <!--  Pwd2 -->
            <div class="col form-floating">
                <input required class="form-control" id="Password2" style="vertical-align:top; width: 200px;height:50px;text-align: center;" type="password" name="Password2" placeholder="Password2">
                <label for="floatingInput" style="text-align:center">Your Password Again</label>
            </div>

            <!--  Msg -->
            <div class="col">
                <p id="msg"></p>
            </div>

            <!--  Hidden to match up pwds -->
            <div class="col">
                <input id="isSame" />
                <!-- <input type="hidden" id="isSame"/> -->
            </div>

            <!-- Button group to confirm or reset informations -->
            <!-- <div class="row"> -->
            <!-- Add -->
            <div class="col">
                <button class="btn btn-success" type="submit" style="margin: 0 auto;width: 200px;" name="addUser">
                    Ajouter <img src="https://www.pngmart.com/files/21/Add-Button-PNG-Isolated-File.png" style="width: 20px; height: 20px;" ; />
                </button>
            </div>

            <!-- Reset -->
            <div class="col">
                <button class="btn btn-danger" style="margin: 0 auto;width: 200px;" value="Reset" name="reset" onclick="Relocation('Views/SignUP.php')">
                    Reset <img src="https://cdn-icons-png.flaticon.com/512/70/70287.png" style="width: 20px; height: 20px;" ; />
                </button>
            </div>

        </form>
    </div>
</body>

</html>


<?php

if (isset($_POST["addUser"])) {
    $rand = rand(0, 99999999999);
    $codeUser = substr($_POST["Name"] , 0, 3) .  substr($_POST["Firstname"], 0, 3) . $rand;
    $User = new Users(array( "CodeUser"=>$codeUser, "Name"=>$_POST["Name"] , "Firstname"=>$_POST["Firstname"] , "BirthDate"=>$_POST["birthDate"] , "eMail"=>$_POST["eMail"] , "Phone"=>$_POST["Phone"] , "Username"=>$_POST["Username"] , "Password"=>$_POST["Password"] , "isAlive"=> true ));
    
}

?>