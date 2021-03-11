<?php
include "class.db.php";

if ($_GET['signup'] == "signup") {
    $email = $_GET['email'];
    $password = $_GET['password'];
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    
    try {
  
        $obj->insert_user('user@example.com', 'asdfasdf');
        echo "inserted";
      } catch (Exception $e) {
        echo $e->getMessage();
      }
    
}
