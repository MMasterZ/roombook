<?php 
session_start();

include('../Connections/conn.php');

$result = $db -> select('user','*',[
  'username' => $_POST['username'],
  'password' => $_POST['password'], 
]);

if(count($result)){
  for($i = 0;$i < count($result);$i++){
      $_SESSION['user_data'] = $result[$i]["name"];
      $_SESSION['user_id'] = $result[$i]['id'];
    }

  header("location:/roombook/index.php");
}else{
  header("location:/roombook/login.php");
}
?>