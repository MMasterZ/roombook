<?php 
require("../Connections/conn.php");
session_start();
    $check_in = $_POST['checkIn'];
    $check_out = $_POST['checkOut'];
    $user_id = $_SESSION['user_id'];
    $sql_update = "insert into booking_log (user_id,check_in_date,check_out_date) values('$user_id','$check_in','$check_out')";
    $result = $mysqli -> query($sql_update);
    echo "success";
?>