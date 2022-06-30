<?php
require("/Applications/XAMPP/xamppfiles/htdocs/dashboard/AuMoK/Views/Header.php");

//Data from database with all car models
$data = CarModelsList();
// var_dump($data);
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
// initialize Car brand model
$CarBrandModel = "";


// echo $data[0]["BrandName"]  . "<br/>";
// for ($i = 0; $i < count($data); $i++) {
//     $model = new CarModels($data[$i]);
//     echo "----------------" . $model->ModelName() . "<br/>";

//     if ($model->BrandName() != $data[$i + 1]["BrandName"]) {
//         echo "<br/>" . $data[$i + 1]["BrandName"] . "<br/>";
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">





<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>

</head>

<body>


    <!-- Search Div -->
    <div class="container-fluid">

        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

            <div class="row ms-5 mt-3">

                <div class="col form-floating ms-5">
                    <!-- Model name Input -->
                    <input class="form-control" type="text" list="CarModelName" name="CarModelName" placeholder="Auto Models" required>
                    <label for="floatingInput">Car Model Name</label>


                    <!-- Data list for car models name -->
                    <datalist id="CarModelName">
                        <?
                        for ($i = 0; $i < count($data); $i++) {
                            echo '<option value="' . $data[$i]["ModelName"] . '">';
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





    <?
    ?>


</body>

</html>