<?php

namespace App;

class Db
{
    protected $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=localhost;dbname=test', 'root', '');
    }

    public function query($sql, $class, array $data = null)
    {
            $sth = $this->dbh->prepare($sql);
            $sth->execute($data);
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
    }

    public function getData($sql, array $data = null)
    {
            $sth = $this->dbh->prepare($sql);
            $sth->execute($data);
            return $sth->fetchAll();
    }

    public function getId()
    {
        return $this->dbh->lastInsertId();
    }

    public function execute($query, $params=[])
    {
        $sth = $this->dbh->prepare($query);
        return $sth->execute($params);
    }


}