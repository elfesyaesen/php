<?php

class BaseModel
{
    protected $pdo = null;

    public function __construct()
    {
        try {
            $this->pdo = new pdo('mysql:host=localhost;dbname=php;charset=utf8', 'root', '');
        } catch (PDOException $error) {
            die($error->getMessage());
        }
    }
}
