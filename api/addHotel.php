<?php 
include_once("../Connections/conn.php");

echo $_POST["files"];

$file_name = "img/";

$file = fopen($file_name , 'w') or die("X_x");

fwrite($file, $_POST['files']);

// $db -> insert("hotel", [
// 	"files" => $_POST["files"],
// 	"name" => $_POST["name"],
// 	"details" => $_POST["details"],
//   "price" => $_POST["price"]
// ]);


// header("location:/roombook/admin.php");

?>