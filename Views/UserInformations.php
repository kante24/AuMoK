<?
// require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Views/HeaderIN.php");
// Display popup for Informations every 5 minutes if unFilled
if (UserAddress($User) == false) {
    //display every 5 minutes while Infos unFilled
    UserInformations($User);
};
?>
<style>
    /* div {
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
<!-- <input type="button" value="Display" onclick="popupInformations()" />
<br /> -->
<!-- The Informations Body -->
<div id="myInfos" class="Informations">

    <!-- Informations content -->
    <div class="modal-content infosContent justify-content-center" style="text-align: center;">

        <div class="container justify-content-center shadow-lg" style="width: 600px;margin-top: 150px;background-color:white">

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

                <!-- First row -->
                <div class="row mt-5 justify-content-center">

                    <!-- Text - Title -->
                    <div class="col-9 mt-2">
                        <h1 style="text-shadow: 1px 1px black; text-align: center;">Tell us about <? echo $User->Username() ?></h1>
                    </div>

                    <!-- Button to close Login popup -->
                    <div class="mt-2 col-3 justify-content-center closeInfos" id="closeInfos" style="width: 60px;height: 50px" onclick="popupInformations()">
                        <img class="mt-1" src="/dashboard/AuMoK/Images/iconClose.png" style="width: 40px; height: 40px;" />
                    </div>

                </div>

                <!-- Error Informations -->
                <p class="row mt-1 justify-content-center error" id="errorInfos">
                </p>

                <!-- Second Row -->
                <div class="row mt-3">

                    <!-- Complete Address -->
                    <div class="col-8">

                        <!-- Address -->
                        <div class="row mt-4 justify-content-center">
                            <div class="col-12 form-floating">
                                <input class="form-control" style="height:50px;" name="Address" placeholder="Address" required>
                                <label for="floatingInput">ADDRESS</label>
                            </div>
                        </div>

                        <div class="row mt-4 justify-content-center">
                            <!-- City -->
                            <div class="col-5 me-1 form-floating">
                                <input class="form-control" style="height:50px;" name="City" placeholder="City" required>
                                <label for="floatingInput">CITY</label>
                            </div>
                            <!-- Country -->
                            <div class="col-5 form-floating">
                                <input class="form-control" style="height:50px;" name="Country" placeholder="Country" required>
                                <label for="floatingInput">COUNTRY</label>
                            </div>
                        </div>

                    </div>

                    <!-- Contact and time preference -->
                    <div class="col-4">
                        <div class="row justify-content-center m-1">
                            <select class="form-select" multiple aria-label="multiple select example" style="text-align: center;height: 85px;" name="ContactPreference">
                                <option disabled>Contact Preference</option>
                                <option selected value="Phone">Phone</option>
                                <option value="eMail">eMail</option>
                            </select>
                        </div>
                        <div class="row justify-content-center m-1 mt-2">
                            <select class="form-select" multiple aria-label="multiple select example" style="text-align: center;height: 85px;" name="TimePreference">
                                <option disabled>Time Preference</option>
                                <option selected value="Morning">Morning</option>
                                <option value="Evening">Evening</option>
                            </select>
                        </div>
                    </div>

                </div>

                <!-- Third Row -->
                <div class="row mt-4 justify-content-center">
                    <div class="col-8">
                        <button class="btn btn-success" name="submitInfos">
                            Submit Informations <img class="m-1" src="/dashboard/AuMoK/Images/iconSubmit.png" style="width: 20px; height: 20px;" ; />
                        </button>
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
        // When the user clicks the button, open the modal 
        modal.style.display = "block";


        // Get the button that opens the modal
        var btnInfos = document.getElementById("btnInfos");

        // Get the button that closes the modal
        // var btnClose = document.getElementsByClassName("closeInfos")[0];
        var btnClose = document.getElementById("closeInfos");

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
if (isset($_POST["submitInfos"])) {
    $ContactPreference = $_POST["ContactPreference"];
    $TimePreference = $_POST["TimePreference"];
    $Address = $_POST["Address"] . "/" . $_POST["City"] . "/" . $_POST["Country"];

    $UserInformations = new UsersInformations(array("CodeUser" => $User->CodeUser(), "ContactPreference" => $ContactPreference, "TimePreference" => $TimePreference, "Address" => $Address));
    UpdateUserInformations($UserInformations);
    // if(UpdateUserInformations($UserInformations) == true )
    // {
    //     UpdateUserInformations($UserInformations);
    // }
}
?>