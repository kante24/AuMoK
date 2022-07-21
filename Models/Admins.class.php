<?php


class Admins extends Users
{


    private $_access;


    public function __construct(array $donnees)
    {
        parent::hydrate($donnees);
    }

    public function Access()
    {
        return $this->_access;
    }

    public function setAccess($Access)
    {
        $this->_access = $Access;
    }
}

?>