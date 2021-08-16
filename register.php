<?php
  $username = $_GET["username"];
  $password = $_GET["password"];
  //开始连接数据库//
  $db_username = "s8884346";
  $db_password = "Whl071218";
  $host = "localhost";
  $link = mysqli_connect($host,$db_username,$db_password);
  if($link){
    echo "success";
  }else{
    echo "fail";
  }
?>
