<?php 
include('../Connections/conn.php');

$checkUsernameExists = $db -> select("user","*",
[
    "username" => $_POST['username'],
    "password" => $_POST['password']
]);
if(count($checkUsernameExists)){
    echo "user name is exists";
    header("location:/roombook/register.php?error=1");
}else{
    $db -> insert("user",
    [
        "username" => $_POST['username'],
        "password" => $_POST['password'],
        "name" => $_POST['name'],
        "email" => $_POST['email'],
        "tel" => $_POST['tel'],
        "address" => $_POST['address'],
        "role" => $_POST['role']
    ]);
     header("location:/roombook/register.php?success=1");
}
?>