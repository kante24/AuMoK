<?php

class CarBrands
{

//Params
    private $_idBrand;
    private $_brandName;
    private $_brandLogo;
//

//Constructors
    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }
//


//Getters

    public function IdBrand()
    {
        return $this->_idBrand;
    }

    public function BrandName()
    {
        return $this->_brandName;
    }

    public function BrandLogo()
    {
        return $this->_brandLogo;
    }

// 


//Setters

    public function setIdBrand($IdBrand)
    {
        $this->_idBrand = $IdBrand;
    }
    
    public function setBrandName($BrandName)
    {
        $this->_brandName = $BrandName;
    }
    
    public function setBrandLogo($BrandLogo)
    {
        $this->_brandLogo = $BrandLogo;
    }
    
//



    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

}