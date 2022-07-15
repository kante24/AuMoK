<?php

class UsersInformations
{

    //Params
    private $_codeUser;
    private $_codeInformation;
    private $_contactPreference;
    private $_timePreference;
    private $_isFilled;
    private $_address;
    // $CompleteAddress = explode("/", $userInformations->Address());
    //         $address = $CompleteAddress[0];
    //         $city = $CompleteAddress[1];
    //         $country = $CompleteAddress[2];
    private $_signUpDate;
    //

    //Constructors
    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }
    //


    //Getters

    public function CodeUser()
    {
        return $this->_codeUser;
    }

    public function CodeInformation()
    {
        return $this->_codeInformation;
    }

    public function ContactPreference()
    {
        return $this->_contactPreference;
    }

    public function TimePreference()
    {
        return $this->_timePreference;
    }

    public function IsFilled()
    {
        return $this->_isFilled;
    }

    public function Address()
    {
        return $this->_address;
    }

    public function SignUpDate()
    {
        return $this->_signUpDate;
    }

    // 


    //Setters

    public function setCodeUser($CodeUser)
    {
        $this->_codeUser = $CodeUser;
    }

    public function setCodeInformation($CodeInformation)
    {
        $this->_codeInformation = $CodeInformation;
    }

    public function setContactPreference($ContactPreference)
    {
        $this->_contactPreference = $ContactPreference;
    }

    public function setTimePreference($TimePreference)
    {
        $this->_timePreference = $TimePreference;
    }

    public function setIsFilled($IsFilled)
    {
        $this->_isFilled = $IsFilled;
    }

    public function setAddress($Address)
    {
        $this->_address = $Address;
    }

    public function setSignUpDate($SignUpDate)
    {
        $this->_signUpDate = $SignUpDate;
    }


    //



    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
}
