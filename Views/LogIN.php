<style>
    #linkSignUp {
        color: red;
    }

    #linkSignUp:hover {
        color: green;
    }

    #linkSignUp:active {
        color: blue;
    }

    #closeLogin:hover {
        cursor: pointer;
        background-color: red;
    }


    /* The Login (background) */
    .Login {
        /* Hidden by default */
        display: none;
        /* Stay in place */
        position: fixed;
        /* Sit on top */
        z-index: 1;
        /* Location of the box */
        padding-top: 100px;
        /* Full width */
        width: 100%;
        /* Full height */
        height: 100%;
        /* Enable scroll if needed */
        overflow: auto;
        /* Fallback color */
        background-color: rgb(0, 0, 0);
        /* Black w/ opacity */
        background-color: rgba(0, 0, 0, 0.4);
    }


    /* Login Content */
    .loginContent {
        width: 0px;
        height: 0px;
        margin: auto;
        margin-top: 200px;
        margin-left: 650px;
    }
    
</style>

<!-- The Login -->
<div id="myLogin" class="Login">

    <!-- Login content -->
    <div class="modal-content loginContent justify-content-center" style="text-align: center;">

        <div class="container justify-content-center shadow-lg" style="width: 300px;margin-top: 150px;background-color:white">

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                <!-- First row -->
                <div class="row mt-5 justify-content-center">

                    <!-- Text : Sign IN -->
                    <div class="col-9 mt-2">
                        <h1 style="text-shadow: 2px 2px black; text-align: center;">LOG IN</h1>
                    </div>

                    <!-- Button to close Login popup -->
                    <div class="mt-1 col-3 justify-content-center close closeLogin" id="closeLogin" style="width: 60px;height: 50px" onclick="Login()">
                        <img class="mt-1" src="/dashboard/AuMoK/Images/iconClose.png" style="width: 40px; height: 40px;" />
                    </div>

                </div>

                <!-- Second row -->
                <div class="row mt-5 justify-content-center">

                    <!-- Input Username -->
                    <div class="col-12 form-floating">
                        <input class="form-control" id="Login" style="width: 250px;height:60px;" type="text" name="Login" placeholder="Login" required>
                        <label for="floatingInput">Username or eMail</label>
                    </div>

                </div>

                <!-- Thirth row -->
                <div class="row mt-5 justify-content-center">

                    <!-- Input Password -->
                    <div class="col-12 form-floating">
                        <input class="form-control" style="width: 250px;height:60px;" type="password" name="Password" placeholder="Password" required>
                        <label for="floatingInput">Password</label>
                    </div>

                </div>

                <!-- Fourth row -->
                <div class="row mt-3 justify-content-center">

                    <!-- Error text -->
                    <div class="col-12 form-floating">
                        <p id="errorLogin" style="color: red;text-align:center"></p>
                    </div>

                </div>

                <!-- Fith row -->
                <div class="row mt-3 justify-content-center">

                    <!-- Button Login -->
                    <button class="btn btn-success" type="submit" style="margin: 0 auto;width: 150px;" name="btnLogin">
                        LOG IN </br> <img class="m-2" src="/dashboard/AuMoK/Images/iconAccount.png" style="width: 20px; height: 20px;" ; />
                    </button>

                </div>

                <!-- Sixth row -->
                <div class="row mt-5 justify-content-center">

                    <!-- Link Sign UP -->
                    <p>No account? <a id="linkSignUp" href="#" onclick="popupSignUP()">Sign UP</a></p>

                </div>

            </form>

        </div>

    </div>


</div>


<script>
    function popupLogin() {
        // Get the modal
        var modal = document.getElementById("myLogin");
        modal.style.display = "block";

        // Get the button that opens the modal
        var btnLogin = document.getElementById("btnLogin");

        // Get the button that closes the modal
        var btnClose = document.getElementsByClassName("closeLogin")[0];

        // When the user clicks the button, open the modal 
        btnLogin.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on the button (x), close the modal
        btnClose.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        
    }
</script>

<?

//If click on button login and Login = white space
if (isset($_POST["btnLogin"]) && ctype_space($_POST["Login"]) == false) {
    $User = new Users(array("Username" => $_POST["Login"], "Password" => $_POST["Password"]));
    if (LogIN($User) == true) {
        echo
        "<script>
            Relocation('Views/Home.php')
        </script>";
    } 
}

?>