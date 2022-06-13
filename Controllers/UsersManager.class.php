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
        $req = $this->_db->query("SELECT * FROM Users");
        $Users = array();
        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
            $Users[] = new Users($data);
        }
        return $Users;
    }

    //Sign UP
    //Get an user as param and add it in DB
    //E.G:  SignUP(new Users(array("Name"=>"Name", "Firstname"=>"Firstname", ... )) )
    ////Get informations from $user and insert them in db
    public function signUP(Users $user)
    {
        try {
            $pdo = $this->_db;
            $query = $pdo->prepare("INSERT into Users (CodeUser, Name, Firstname, BirthDate, eMail, Phone, Username, Password, isAlive) VALUES (:CodeUser, :Namee, :Firstname, :BirthDate, :eMail, :Phone, :Username, :Passwordd, :isAlive)");
            $result = $query->execute([
                ":CodeUser" => $user->CodeUser(),
                ":Namee" => $user->Name(),
                ":Firstname" => $user->Firstname(),
                ":BirthDate" => $user->BirthDate(),
                ":eMail" => $user->eMail(),
                ":Phone" => $user->Phone(),
                ":Username" => $user->Username(),
                ":Passwordd" => $user->Password(),
                ":isAlive" => $user->isAlive()
            ]);
            if ($result) {
                return true;
            } else return false;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    //Checks if the username, email address, phone or username already exists
    public function existanceUsernameDB(Users $user)
    {
        $Username = $user->Username();
        $req = $this->_db->query("SELECT * FROM Users WHERE Username= '$Username' ");
        $data = $req->fetchAll(PDO::FETCH_ASSOC);
        if ($data != null) {
            return true;
        } else {
            return false;
        }
    }

    public function existanceEMailDB(Users $user)
    {
        $eMail = $user->eMail();
        $req = $this->_db->query("SELECT * FROM Users WHERE eMail= '$eMail' ");
        $data = $req->fetchAll(PDO::FETCH_ASSOC);
        if ($data != null) {
            return true;
        } else {
            return false;
        }
    }

    public function existancePhoneDB(Users $user)
    {
        $Phone = $user->Phone();
        $req = $this->_db->query("SELECT * FROM Users WHERE Phone= '$Phone' ");
        $data = $req->fetchAll(PDO::FETCH_ASSOC);
        if ($data != null) {
            return true;
        } else {
            return false;
        }
    }

    public function existanceCodeUserDB(Users $user)
    {
        $codeUser = $user->CodeUser();
        $req = $this->_db->query("SELECT * FROM Users WHERE Username= '$codeUser' ");
        $data = $req->fetchAll(PDO::FETCH_ASSOC);
        if ($data != null) {
            return true;
        } else {
            return false;
        }
    }




}
