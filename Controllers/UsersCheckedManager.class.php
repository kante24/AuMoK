<?php


class UsersCheckedManager
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

    public function UserChecked(Users $user)
    {
        // Conection
        $pdo = $this->_db;
        //SLQ Query
        $query = $pdo->prepare("SELECT * FROM UsersChecked WHERE CodeUser = :CodeUser AND isAlive = 1");
        // Fetch query results
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $query->execute(array(
            "CodeUser" => $user->CodeUser()
        ));

        $data = $query->fetchAll();
        // If query result is not null, return result 'array', else return false
        if ($data != null) {
            return $data;
        } else {
            return false;
        }
    }
}
