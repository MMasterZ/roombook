<?php 
include('../Connections/conn.php');

$result = $db -> select('user','*',[
  'username' => $_POST['username'],
  'password' => $_POST['password'], 
],
);

if(count($result)){

  for ($i=0; $i <count($result) ; $i++) { 
      // $result[$i]['id'] = $country_list[$i]['id'];
      // $result[$i]['name'] = $country_list[$i]['name'];
      // $result[$i]['region'] = $country_list[$i]['region'];
      // $result[$i]['iso'] = $country_list[$i]['iso'];
      $_SESSION[$i]["user_data"] = $result[$i];
  }

  echo "Success";
}else{
  header("location:/roombook/login.php");
}

?>