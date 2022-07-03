<?php
require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Views/Header.php");


//Data from database with all car brands
$data = CarBrandsList();
// Test data value
if ($data == false) {
    // Empty data
    $data = (array());
    // Display error message
    echo '
        <script>
            document.getElementById("searchError").innerHTML = "No Brand Found"
        </script>
    ';
}
// initialize Car brand name
$CarBrandName = "";
// initialize Car brand logo
$CarBrandLogo = "";

//If exists request for search by car brand name
if (isset($_POST["CarbrandName"])) {
    for ($i = 0; $i < count($data); $i++) {
        if ($data[$i]["BrandName"] == $_POST["CarbrandName"]) {
            // Set CarBrandName = Brand name found in data
            $CarBrandName = $data[$i]["BrandName"];
            // Set CarBrandLogo = Brand logo found in data
            $CarBrandLogo = $data[$i]["BrandLogo"];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<style>
    /* div {
        border: solid;
    } */

    .ColorChange {
        border: bold;
        animation: colorAnimation 5s infinite;
    }

    @keyframes colorAnimation {
        0% {
            color: <? echo color() ?>;
        }

        25% {
            color: <? echo color() ?>;
        }

        50% {
            color: <? echo color() ?>;
        }

        75% {
            color: <? echo color() ?>;
        }

        100% {
            color: <? echo color() ?>;
        }
    }
</style>




<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Brands PAGE</title>

</head>

<body>

    <!-- Search Div -->
    <div class="container-fluid">

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

            <div class="row ms-5 mt-3">

                <div class="col form-floating ms-5">
                    <!-- Brand name Input -->
                    <input class="form-control" type="text" list="CarbrandName" name="CarbrandName" placeholder="Auto Brands" style="height: 60px;" required>
                    <label for="floatingInput">Car Brand Name</label>


                    <!-- Data list for cars brand name -->
                    <datalist id="CarbrandName">
                        <?
                        for ($i = 0; $i < count($data); $i++) {
                            echo '<option value="' . $data[$i]["BrandName"] . '">';
                        }
                        ?>
                    </datalist>
                </div>



                <!-- Button to submit search -->
                <div class="col float-start">
                    <button type="submit" class="btn btn-light" style="height: 60px;">
                        <img src="/dashboard/AuMoK/Images/iconReserachAuto.png" style="width: 50;height: 50px;" />
                    </button>
                    <p id="searchError" style="color: red;"></p>
                </div>

            </div>

        </form>

    </div>


    <!-- Result Of Brand Search Div -->
    <div class="container-fluid mt-5 mb-5" id="searchResult">

        <!-- Horizontal bar -->
        <hr class="mt-3 ColorChange" />

        <!-- Result Div -->
        <a class="row justify-content-center" href="?BrandName=<? echo $CarBrandName ?>" style="text-decoration: none; color:black">

            <div class="col-2 shadow-lg p-3 m-2 bg-body rounded">

                <div class="row">
                    <!-- Brand Logo Div -->
                    <div class="col-3 p-2">
                        <img style="width: 100%; height: 100%;" src="<? echo $CarBrandLogo ?>" />
                    </div>
                    <!-- Brand Name Div -->
                    <div class="col-9 p-2" style="text-align: center;" translate="no">
                        <b><? echo $CarBrandName ?></b>
                    </div>
                </div>

            </div>

        </a>

        <!-- Horizontal bar -->
        <hr class="mb-3 ColorChange" />

    </div>



    <!-- Result Of Models Search Div -->
    <div class="container-fluid mt-5 mb-5 justify-content-center" id="Models">

        <!-- Horizontal bar -->
        <hr class="mt-3 ColorChange" />

        <!-- Result Div -->
        <div class="row justify-content-center mt-3">
            <?
            if (isset($_GET["BrandName"])) {
                $CarBrandName = new CarModels(array("BrandName" => $_GET["BrandName"]));
                $SearchedModels = CarBrandModels($CarBrandName);
                if ($SearchedModels != false) {
                    // Initialize number of columns in one row
                    $col = 1;
                    for ($i = 0; $i < count($SearchedModels); $i++) { 
                        ?>
                        <div class="col justify-content-center shadow-lg  p-3 m-2 bg-body rounded">
                            <? echo $SearchedModels[$i]; ?>
                        </div>
                        <? 
                        if ($col % 10 == 0) { ?>
                            <!-- Colsing current row at number of 10 columns -->
                            </div>
                            <!-- Opening new row -->
                            <div class="row">
                        <? }
                        $col++;
                    }
                }
            }
            ?>
        </div>

        <!-- Horizontal bar -->
        <hr class="mb-3 ColorChange" />

    </div>


    <!-- All Car Brands List -->
    <div class="container-fluid">

        <div class="row mt-3">
            <?
            // Initialize _col as number of columns in one row
            $_col = 1;
            // For every brand in data
            for ($i = 0; $i < count($data); $i++) {
            ?>
                <!-- Brand Column -->
                <div class="col shadow-lg p-3 m-2 bg-body rounded">
                    <!-- Link to display Models -->
                    <a href="?BrandName=<? echo $data[$i]["BrandName"] ?>" style="text-decoration: none; color:black">
                        <!-- In each Column -->
                        <div class="row">
                            <!-- Band Logo Div -->
                            <div class="col-3 p-2">
                                <img style="width: 100%; height: 100%;" src="<? echo $data[$i]["BrandLogo"] ?>" />

                            </div>
                            <!-- Brand Name Div -->
                            <div class="col-9 p-2" style="text-align: center;" translate="no">
                                <b><? echo $data[$i]["BrandName"] ?></b>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- If number of columns = 6 in one row, close row and open new row -->
                <? if ($_col % 6 == 0) { ?>
                        <!-- Closing current row -->
                        </div>
                        <!-- Opening new row -->
                        <div class="row">
                    <? }
                    // Increments number of columns 
                    $_col++;
            }
            ?>
        </div>

    </div>



    <?
    // If no search request hide div for search result
    // OR
    // If so but invalide car brand name
    if (!isset($_POST["CarbrandName"])) {
        // Hide search Div
        echo '
            <script>
                var modal = document.getElementById("searchResult");
                modal.style.display = "none";
            </script>
        ';
    } else {
        // If $CarBrandName stills empty (means no result found)
        if ($CarBrandName == "") {
            // Hide search Div
            echo '
                <script>
                    document.getElementById("searchError").innerHTML = "No Brand Found"
                    var modal = document.getElementById("searchResult");
                    modal.style.display = "none";
                </script>
            ';
        }
    }
    // If search but no model found for brand
    if (isset($_GET["BrandName"]) && $SearchedModels == false) {
        // Hide models div and display error msg
        echo '
                <script>
                    document.getElementById("searchError").innerHTML = "No Model Found"
                    var modal = document.getElementById("Models");
                    modal.style.display = "none";
                </script>
            ';
    }
    // Else if no search, Hide models div
    else if (!isset($_GET["BrandName"]))
    {
        echo '
                <script>
                    var modal = document.getElementById("Models");
                    modal.style.display = "none";
                </script>
            ';
    }
    ?>


</body>

</html>