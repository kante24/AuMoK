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
        //Get informations from $user to insert
        $codeUser = $user->CodeUser();
        $name = $user->Name();
        $firstname =$user->Firstname() ;
        $birthdate = $user->BirthDate();
        $mail =$user->Mail() ;
        $phone = $user->Phone();
        $Username = $user->Username();
        $password = $user->Password();
        $isAlive = $user->isAlive();
        

        $pdo=$this->_db;
        $query = $pdo->prepare("INSERT into Users (CodeUser, Name, Firstname, BirthDate, Mail, Phone, Username, Password, isAlive)  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ? )");
        $query->bindValue(1, $codeUser);
        $query->bindValue(2, $name);
        $query->bindValue(3, $firstname);
        $query->bindValue(4, $birthdate);
        $query->bindValue(5, $mail);
        $query->bindValue(6, $phone);
        $query->bindValue(7, $Username);
        $query->bindValue(8, $password);
        $query->bindValue(9, $isAlive);
        $query->execute();
        // $publisher_id = $ins->lastInsertId();
        // echo 'The publisher id ' . $publisher_id . ' was inserted';

    }

}

?>