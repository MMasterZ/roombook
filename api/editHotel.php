<?php 
include_once("../Connections/conn.php");

if(empty($_FILES['files']['tmp_name'])){
  $files = $_POST['old_files'];
}else{
  $files = $_FILES['files']['name'];
}

$db -> update("hotel",[
  "name" => $_POST["name"],
  "details" => $_POST['details'],
  "files" => $files,
  "price" => $_POST["price"]
],[
  "id" => $_POST["id"]
]);

header("location:/roombook/admin.php?menu=3");

?>