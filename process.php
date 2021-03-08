<?php
include "class.db.php";

if ($_GET['signup'] == "signup") {
    $username = $_GET['username'];
    $password = $_GET['password'];
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    
    echo $obj->insert_user($username, $password_hash);
    echo 'working';
}
