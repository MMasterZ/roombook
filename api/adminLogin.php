<?php 
session_start();
require("../Connections/conn.php");

$checkLogin = $db -> select("user","*",
[
    "username" => $_POST['username'],
    "password" => $_POST['password'],
    "role" => '1'
]);


if(count($checkLogin)){
    header("location:../admin.php");
}else{
    header("location:../admin_login.php");
}
?>