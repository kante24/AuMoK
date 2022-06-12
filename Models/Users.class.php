<?php

class Users
{

//Params
    private $_codeUser;
    private $_name;
    private $_firstname;
    private $_birthdate;
    private $_email;
    private $_phone;
    private $_username;
    private $_password;
    private $_isAlive;
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

    public function Name()
    {
        return $this->_name;
    }

    public function Firstname()
    {
        return $this->_firstname;
    }

    public function BirthDate()
    {
        return $this->_birthdate;
    }

    public function eMail()
    {
        return $this->_email;
    }

    public function Phone()
    {
        return $this->_phone;
    }

    public function Username()
    {
        return $this->_username;
    }

    public function Password()
    {
        return $this->_password;
    }

    public function isAlive()
    {
        return $this->_isAlive;
    }
// 


//Setters

    public function setCodeUser($codeUser)
    {
        $this->_codeUser = $codeUser;
    }
    
    public function setName($name)
    {
        $this->_name = $name;
    }
    
    public function setFirstname($firstname)
    {
        $this->_firstname = $firstname;
    }
    
    public function setBirthDate($birthdate)
    {
        $this->_birthdate = $birthdate;
    }
    
    public function setEMail($email)
    {
        $this->_email = $email;
    }
    
    public function setPhone($phone)
    {
        $this->_phone = $phone;
    }
    
    public function setUsername($username)
    {
        $this->_username = $username;
    }
    
    public function setPassword($password)
    {
        $this->_password = $password;
    }
    
    public function setIsAlive($isAlive)
    {
        $this->_isAlive = $isAlive;
    }


    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value) {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
//

}
