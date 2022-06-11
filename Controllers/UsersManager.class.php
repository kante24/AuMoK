<?php

class UsersManager
{
    private $_db;

    public function __construct($db)
    {
        $this->setDb($db);
    }

    public function db()
    {
        $this->_db;
    }

    public function setDb($db)
    {
        return $this->_db = $db;
    }

    public function Users()
    {
        $req=$this->_db->query("SELECT * FROM Users");
        $Users= array();
        while ($data=$req->fetch(PDO::FETCH_ASSOC)) {
            $Users[] = new Users($data);
        }
        return $Users;
    }

    //Sign UP
    //Get an user as param and add it in DB
    //E.G:  SignUP(new Users(array("Name"=>"Name", "Firstname"=>"Firstname", ... )) )
    public function signUP(Users $user)
    {
        //Get informations from $user
        $codeUser = $user->codeUser();
        $name = $user->name();
        $firstname =$user->firstname() ;
        $birthdate = $user->birthdate();
        $mail =$user->mail() ;
        $phone = $user->phone();
        $username = $user->username();
        $password = $user->password();
        $isAlive = $user->isAlive();

        $ins=$this->_db;
        $query = $ins->prepare("INSERT into Users (CodeUser, Name, FirstName, BirthDate, Mail, Phone, Username, Password, isAlive) VALUES (:codeUser, :name, :firstname, :birthdate, :mail, :phone, :username, :password, :isAlive )");
        $query->execute($user) or die("<center>Erreur dans la requête</center>");
    }

}

?>