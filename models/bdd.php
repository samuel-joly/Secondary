<?php


class Bdd {
    protected $pdo;

    public function __construct(){
        $pdo = new PDO("mysql:dbname=blog;host=localhost", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo = $pdo;
    }

}
