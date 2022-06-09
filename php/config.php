<?php
  $hostname = "localhost";
  $username = "root";
  $password = "8WrXeMbg8tUppBsd";
  $dbname = "chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
