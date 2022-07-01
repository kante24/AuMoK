<?php

// ************************************************************* //
// ************************************************************* //
// ************************************************************* //
//               All Functions For Cars Managing                  // 
// ************************************************************* //
// ************************************************************* //
// ************************************************************* //



// List of all car brands
function CarBrandsList()
{
    // Datebase
    $db = connection();
    $CarsManager = new CarsManager($db);
    // var_dump($BrandManager->Brands());
    if ($CarsManager->CarBrands() != false) {
        return $CarsManager->CarBrands();
    } else {
        return false;
    }
}


// List of all car models
function CarModelsList()
{
    // Datebase
    $db = connection();
    $CarsManager = new CarsManager($db);
    // var_dump($BrandManager->Brands());
    if ($CarsManager->CarModels() != false) {
        return $CarsManager->CarModels();
    } else {
        return false;
    }
}


// 
function CarBrandModels(CarModels $Car)
{
    // Input TEST
    // $brandName = "Abarth";
    // $c = new CarModels(array("BrandName" => $brandName));
    // var_dump(CarBrandModels($c));


    $ModelsList = CarModelsList();
    $BrandModels = array();
    for ($i = 0; $i < count($ModelsList); $i++) {
        $currentCar = new CarModels($ModelsList[$i]);
        if ($currentCar->BrandName() == $Car->BrandName()) {
            // $currentCar->ModelName();
            array_push($BrandModels, $currentCar->ModelName());
        }
    }
    if($BrandModels != null)
    {
    return $BrandModels;
    }
    else return false;
}

function allModels()
{
    $data = CarBrandsList();
    $nextCar = 1;
    echo $data[0]["BrandName"]  . "<br/>";
    for ($i = 0; $i < count($data); $i++) {
        $currentCar = new CarModels($data[$i]);
        echo "----------------" . $currentCar->ModelName() . "<br/>";

        if ($i + 1 == count($data)) {
            break;
        } else if ($currentCar->BrandName() != $data[$nextCar]["BrandName"]) {
            echo "<br/>" . $data[$nextCar]["BrandName"] . "<br/>";
        }
        $nextCar++;
    }
}
