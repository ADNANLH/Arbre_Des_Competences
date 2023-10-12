<?php

class Db {
    private $host = "localhost";
    private $user = "root";
    private $dbname = "projet2-prototype";
    private $password = "";

    protected function connect(){
        try{
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;
            $conn = new PDO($dsn, $this->user , $this->password);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE , PDO::FETCH_ASSOC);
            return $conn;
         }catch(PDOException $e){
            echo'connection failed' . $e->getMessage();
         }
    }
    }
?>