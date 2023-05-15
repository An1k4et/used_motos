<?php
  $conn = mysqli_connect("localhost", "root", "", "usedmotos");
  if(!$conn){
    echo "Database connection".mysqli_connect_error();
  }
?>