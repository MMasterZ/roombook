<?php
require("../Connections/conn.php");
$user_id = $_POST['user_id'];
$sql = "delete from user where id = '$user_id'";
$mysqli -> query($sql);

echo "success";
 ?>