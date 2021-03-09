<?php 
require("../Connections/conn.php");
$id = $_POST['id'];
$status = $_POST['status'];
$sql = "update booking_log set status = $status";

$mysqli -> query($sql);
?>