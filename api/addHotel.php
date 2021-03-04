<?php 
include_once("../Connections/conn.php");

$fname = $_FILES['files']['tmp_name'];

$real_name = $_FILES['files']['name'];

$uploads_dir = "../img";

move_uploaded_file($fname, "$uploads_dir/$real_name");

$db -> insert('hotel',[
    "name" => $_POST['name'],
    "details" => $_POST['details'],
    "price" => $_POST["price"],
    "files" => "$real_name"
]);

header("location:/roombook/admin.php?menu=3");

?>