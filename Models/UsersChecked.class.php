<?php

class UsersChecked
{

//Params
    private $_codeUser;
    private $_phoneChecked;
    private $_eMailChecked;
    private $_userInformations;
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

    public function PhoneChecked()
    {
        return $this->_phoneChecked;
    }

    public function eMailChecked()
    {
        return $this->_eMailChecked;
    }

    public function UserInformations()
    {
        return $this->_userInformations;
    }

// 


//Setters
    
    public function setCodeUser($CodeUser)
    {
        $this->_codeUser = $CodeUser;
    }
    
    public function setPhoneChecked($PhoneChecked)
    {
        $this->_phoneChecked = $PhoneChecked;
    }
    
    public function setEMailChecked($EMailChecked)
    {
        $this->_eMailChecked = $EMailChecked;
    }
    
    public function setUserInformations($UserInformations)
    {
        $this->_userInformations = $UserInformations;
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