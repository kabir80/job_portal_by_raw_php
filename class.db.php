<?php 
class db {
 private $host;
 private $user;
 private $pass;
 private $dbname;
}
class conn extends db {
    public function connect(){
      $this->host = "localhost";
      $this->user = "root";
      $this->pass = "";
      $this->dbname = "config";
      $conn = new mysqli($this->host,$this->user,$this->pass);
      return $conn;
    }
}


class work extends conn {
    function create_db(){
        $sql = "CREATE DATABASE JobPortal "; // no need 
        return $this->connect()->query($sql);
    }
}

$obj = new work;
$obj->create_db();