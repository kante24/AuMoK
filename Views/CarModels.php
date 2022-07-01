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

// $nextCar = 1;
// echo $data[0]["BrandName"]  . "<br/>";
// for ($i = 0; $i < count($data); $i++) {
//     $currentCar = new CarModels($data[$i]);
//     echo "----------------" . $currentCar->ModelName() . "<br/>";

//     if($i+1 == count($data))
//     {
//         break;
//     }
//     else if ($currentCar->BrandName() != $data[$nextCar]["BrandName"]) {
//         echo "<br/>" . $data[$nextCar]["BrandName"] . "<br/>";
//     }
//     $nextCar ++;
// }


// $brandName = "Mercedes AMG";
// $brandName = "Abarth";
// $c = new CarModels(array("BrandName"=>$brandName));
// var_dump(CarBrandModels($c));


$brandName = "Mercedes AMG";
for ($i = 0; $i < count($data); $i++) {
    $currentCar = new CarModels($data[$i]);
    if ($currentCar->BrandName() == $brandName) {
        echo $currentCar->ModelName() . "<br/>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">





<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Models PAGE</title>
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

    <!-- All Car Models -->
    <!-- <div class="container-fluid">
        <div class="row mt-3">
            <? //for ($col = 0; $col < 6; $col++) { 
            ?>
                <div class="col col shadow-lg p-3 m-2 bg-body rounded">
                    <div class="row justify-content-center">
                        <? //echo $data[0]["BrandName"] 
                        ?>
                    </div>
                    <div class="row">
                        <? //for ($i = 0; $i < 20; $i++) {
                        //$currentCar = new CarModels($data[$i])
                        ?>
                            <div class="col">
                                <? //echo $currentCar->ModelName() 
                                ?>
                            </div>
                        <? //} 
                        ?>
                    </div>
                </div>
            <? //} 
            ?>

        </div>
    </div> -->





    <?
    ?>


</body>

</html>