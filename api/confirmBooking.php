<?php 
error_reporting(-1);
ini_set('display_errors', 'On');
require("../Connections/conn.php");
session_start();

function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

    $check_in = $_POST['checkIn'];
    $check_out = $_POST['checkOut'];
    $user_id = $_SESSION['user_id'];
    $room_type = $_POST['roomType'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $room_no = $_POST['room_no'];
    $fname = $_FILES['file']['tmp_name'];
    $real_name = $user_id . generateRandomString() . ".jpg";
    $uploads_dir = "../payment_document";
    move_uploaded_file($fname, "$uploads_dir/$real_name");

    $sql_update = "insert into booking_log (user_id,check_in_date,check_out_date,room_type,name,surname,tel,email,payment_file,status,room_no) values('$user_id','$check_in','$check_out','$room_type','$name','$surname','$tel','$email','$real_name',0,'$room_no')";
    $result = $mysqli -> query($sql_update);
    echo $sql_update;
?>