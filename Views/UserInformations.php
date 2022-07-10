<?
    require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Views/HeaderIN.php");
    UserInformations($User);
?>
<style>

    /* div{
        border: solid;
    } */

    #closeInfos:hover {
        cursor: pointer;
        background-color: red;
    }


    /* The Information modal (background) */
    .Informations {
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


    /* Info Content */
    .infosContent {
        width: 0px;
        height: 0px;
        margin: auto;
        margin-top: 100px;
        margin-left: 400px;
    }
    
</style>
<input type="button" id="btnInfos" onclick="popupInformations()" value="Display" />

<!-- The Informations Body -->
<div id="myInfos" class="Informations">

    <!-- Informations content -->
    <div class="modal-content infosContent justify-content-center" style="text-align: center;">

        <div class="container justify-content-center shadow-lg" style="width: 600px;margin-top: 150px;background-color:white">

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                <!-- First row -->
                <div class="row mt-5 justify-content-center">

                    <!-- Text : Sign IN -->
                    <div class="col-9 mt-2">
                        <h1 style="text-shadow: 1px 1px black; text-align: center;">Tell us about <?echo $User->Username()?></h1>
                    </div>

                    <!-- Button to close Login popup -->
                    <div class="mt-1col-3 justify-content-center closeInfos" id="closeInfos" style="width: 60px;height: 50px" onclick="Informations()">
                        <img class="mt-1" src="/dashboard/AuMoK/Images/iconClose.png" style="width: 40px; height: 40px;" />
                    </div>

                </div>

            </form>

        </div>

    </div>


</div>


<script>
    function popupInformations() {
        // Get the modal
        var modal = document.getElementById("myInfos");
        modal.style.display = "block";

        // Get the button that opens the modal
        var btnInfos = document.getElementById("btnInfos");

        // Get the button that closes the modal
        // var btnClose = document.getElementsByClassName("closeInfos")[0];
        var btnClose = document.getElementById("closeInfos");

        // When the user clicks the button, open the modal 
        btnInfos.onclick = function() {
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