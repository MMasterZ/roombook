<?php 
include_once("../Connections/conn.php");

$room_id = $_POST['id'];

$sql = "delete from hotel where id = '$room_id'";
$mysqli -> query($sql);

header("location:/roombook/admin.php?menu=3");
?>