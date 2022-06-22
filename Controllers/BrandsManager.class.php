<?php


class BrandsManager
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

    public function Brands()
    {
        // Conection
        $pdo = $this->_db;
        $query = $pdo->query("SELECT * FROM CarBrands");
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        if ($data != null) {
            return $data;
        } else {
            return false;
        }
    }
}