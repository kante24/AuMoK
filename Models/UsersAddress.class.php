<?php

class UsersAddress
{

//Params
    private $_address;
    private $_city;
    private $_country;
//

//Constructors
    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }
//


//Getters

    public function Address()
    {
        return $this->_address;
    }

    public function City()
    {
        return $this->_city;
    }

    public function Country()
    {
        return $this->_country;
    }

// 


//Setters

    public function setAddress($Address)
    {
        $this->_address = $Address;
    }
    
    public function setCity($City)
    {
        $this->_city = $City;
    }
    
    public function setCountry($Country)
    {
        $this->_country = $Country;
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