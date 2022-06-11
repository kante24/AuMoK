<?php

class Users
{

//Params
    private $_codeUser;
    private $_name;
    private $_firstname;
    private $_birthdate;
    private $_mail;
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

    public function codeUser()
    {
        return $this->_codeUser;
    }

    public function name()
    {
        return $this->_name;
    }

    public function firstname()
    {
        return $this->_firstname;
    }

    public function birthdate()
    {
        return $this->_birthdate;
    }

    public function mail()
    {
        return $this->_mail;
    }

    public function phone()
    {
        return $this->_phone;
    }

    public function username()
    {
        return $this->_username;
    }

    public function password()
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
    
    public function setNom($name)
    {
        $this->_nom = $name;
    }
    
    public function setFirstname($firstname)
    {
        $this->_firstname = $firstname;
    }
    
    public function setBirthDate($birthdate)
    {
        $this->_birthdate = $birthdate;
    }
    
    public function setMail($mail)
    {
        $this->_mail = $mail;
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
