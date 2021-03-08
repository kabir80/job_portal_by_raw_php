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
      $this->dbname = "jobportal";
      $conn = new mysqli($this->host,$this->user,$this->pass,$this->dbname);
      return $conn;
    }
}


class work extends conn {
    
    function insert_user($username,$password_hash){
        $sql = "INSERT INTO user (username,password) VALUES ('$username','$password_hash')";
       if( $this->connect()->query($sql)==TRUE){
                return 'Data Inserted';
       }else{
          return  $this->connect()->error;
       }
        
    }

}

$obj = new work;
