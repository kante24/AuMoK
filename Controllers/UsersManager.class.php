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
            // Connection
            $pdo = $this->_db;
            // SQL Query
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
            // If execution is successfull, return true, else return false
            if ($result) {
                return true;
            } else return false;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    //Log IN
    public function logIN(Users $user)
    {
        try {
            // Conection
            $pdo = $this->_db;
            //SLQ Query
            $query = $pdo->prepare("SELECT * FROM Users WHERE (Username = :Username or eMail = :eMail) AND Password = :Password AND isAlive = 1");
            // Fetch query results
            $query->setFetchMode(PDO::FETCH_ASSOC);
            $query->execute(array(
                "Username" => $user->Username(),
                "eMail" => $user->eMail(),
                "Password" => $user->Password(),
            ));
            
            $data = $query->fetchAll();
            // If query result is not null, return result 'array', else return false
            if ($data != null) {
                return $data;
            } else {
                return false;
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }

    //Checks if the username exists
    public function existanceUsernameDB(Users $user)
    {
        // $Username = $user->Username();

        // $req = $this->_db->query("SELECT * FROM Users WHERE Username= '$Username' ");

        // $data = $req->fetchAll(PDO::FETCH_ASSOC);
        // if ($data != null) {
        //     return true;
        // } else {
        //     return false;
        // }

        $req = $this->_db->prepare("SELECT * FROM Users WHERE Username= :Username");
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $req->execute(array(
            "Username" => $user->Username()
        ));

        $data = $req->fetchAll();
        if ($data != null) {
            return true;
        } else {
            return false;
        }
    }

    //Checks if the  email address already exists
    public function existanceEMailDB(Users $user)
    {
        // $eMail = $user->eMail();
        // $req = $this->_db->query("SELECT * FROM Users WHERE eMail= '$eMail' ");
        // $data = $req->fetchAll(PDO::FETCH_ASSOC);
        // if ($data != null) {
        //     return true;
        // } else {
        //     return false;
        // }

        $req = $this->_db->prepare("SELECT * FROM Users WHERE eMail= :eMail");
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $req->execute(array(
            "eMail" => $user->eMail()
        ));

        $data = $req->fetchAll();
        if ($data != null) {
            return true;
        } else {
            return false;
        }
    }

    //Checks if the phone number already exists
    public function existancePhoneDB(Users $user)
    {
        // $Phone = $user->Phone();
        // $req = $this->_db->query("SELECT * FROM Users WHERE Phone= '$Phone' ");
        // $data = $req->fetchAll(PDO::FETCH_ASSOC);
        // if ($data != null) {
        //     return true;
        // } else {
        //     return false;
        // }

        $req = $this->_db->prepare("SELECT * FROM Users WHERE Phone= :Phone");
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $req->execute(array(
            "Phone" => $user->Phone()
        ));

        $data = $req->fetchAll();
        if ($data != null) {
            return true;
        } else {
            return false;
        }
    }

    public function existanceCodeUserDB(Users $user)
    {
        // $codeUser = $user->CodeUser();
        // $req = $this->_db->query("SELECT * FROM Users WHERE Username= '$codeUser' ");
        // $data = $req->fetchAll(PDO::FETCH_ASSOC);
        // if ($data != null) {
        //     return true;
        // } else {
        //     return false;
        // }

        $req = $this->_db->prepare("SELECT * FROM Users WHERE CodeUser= :CodeUser");
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $req->execute(array(
            "CodeUser" => $user->CodeUser()
        ));

        $data = $req->fetchAll();
        if ($data != null) {
            return true;
        } else {
            return false;
        }
    }
}
