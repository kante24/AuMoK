<?php

class CarModels
{

//Params
    private $_idModel;
    private $_brandName;
    private $_modelName;
//

//Constructors
    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }
//


//Getters

    public function IdModel()
    {
        return $this->_idModel;
    }

    public function BrandName()
    {
        return $this->_brandName;
    }

    public function ModelName()
    {
        return $this->_modelName;
    }

// 


//Setters

    public function setIdModel($IdModel)
    {
        $this->_idModel = $IdModel;
    }
    
    public function setBrandName($BrandName)
    {
        $this->_brandName = $BrandName;
    }
    
    public function setModelName($ModelName)
    {
        $this->_modelName = $ModelName;
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