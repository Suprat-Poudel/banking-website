<?php
  
  $server="localhost";
  $username="root";
  $password="";
  $dbname = "bank_db";
  $conn=mysqli_connect($server, $username, $password,$dbname);
  if(!$conn){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
    
    ?>