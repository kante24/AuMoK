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
        $req = $this->_db->prepare("SELECT * FROM Users WHERE Username= :Username AND isAlive = 1");
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
        $req = $this->_db->prepare("SELECT * FROM Users WHERE eMail= :eMail AND isAlive = 1");
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
        $req = $this->_db->prepare("SELECT * FROM Users WHERE Phone= :Phone AND isAlive = 1");
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
        $req = $this->_db->prepare("SELECT * FROM Users WHERE CodeUser= :CodeUser AND isAlive = 1");
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

    ////////////////////////////////////////////////////////////////////////////
    //////////////////////// Delete Account/////////////////////////////////////
    ////////////////////////////////////////////////////////////////////////////
    public function deleteUser(Users $user)
    {
        try {
            // Connection
            $pdo = $this->_db;
            // SQL Query
            $query = $pdo->prepare("UPDATE Users SET isAlive = false WHERE CodeUser = :CodeUser");
            $result = $query->execute([
                ":CodeUser" => $user->CodeUser()
            ]);
            // If execution is successfull, return true, else return false
            if ($result) {
                return true;
            } else return false;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }


    ////////////////////////////////////////////////////////////////////////////
    //////////////// Update Account's Name, Birthdate///////////////////////////
    ////////////////////////////////////////////////////////////////////////////
    public function updateUserName(Users $user)
    {
        try {
            // Connection
            $pdo = $this->_db;
            // SQL Query
            $query = $pdo->prepare("UPDATE Users SET Name = :Name, Firstname = :Firstname, BirthDate = :BirthDate WHERE CodeUser = :CodeUser");
            $result = $query->execute([
                ":CodeUser" => $user->CodeUser(),
                ":Name" => $user->Name(),
                ":Firstname" => $user->Firstname(),
                ":BirthDate" => $user->BirthDate(),
            ]);
            // If execution is successfull, return true, else return false
            if ($result) {
                return true;
            } else return false;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }


    ////////////////////////////////////////////////////////////////////////////
    /////////////////// Update Account's Phone, eMail //////////////////////////
    ////////////////////////////////////////////////////////////////////////////
    public function updateUserEMailPhone(Users $user)
    {
        try {
            // Connection
            $pdo = $this->_db;
            // SQL Query
            $query = $pdo->prepare("UPDATE Users SET Phone = :Phone, eMail = :eMail WHERE CodeUser = :CodeUser");
            $result = $query->execute([
                ":CodeUser" => $user->CodeUser(),
                ":Phone" => $user->Phone(),
                ":eMail" => $user->eMail(),
            ]);
            // If execution is successfull, return true, else return false
            if ($result) {
                return true;
            } else return false;
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
}
