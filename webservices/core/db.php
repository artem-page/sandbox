<?php

namespace App;

class DB {

    private $host = "192.168.33.10";
    private $dbname = "sandbox";
    private $username = "user";
    private $password = "password";
    public $conn;

    public function connect($db)
    {
        $this->conn = null;

        try {
            
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname . ";charset=utf8", $this->username, $this->password);

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;

        } catch (PDOException $exception) {

            exit($exception->getMessage());
            
        }
    }
}