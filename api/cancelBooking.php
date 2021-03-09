<?php
require("../Connections/conn.php");
$id = $_POST['id'];

$sql = "delete from booking_log where id =$id";
$mysqli -> query($sql);

echo "success";

 ?>