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
