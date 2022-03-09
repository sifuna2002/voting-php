<?php
  $dbconnect=mysqli_connect('localhost');
  if(!$dbconnect){
    echo "Database Failed to connect" . mysqli_connect_error();
  }else{
    //echo "<p style='color:white;'>database connected sucessfuly</p>";
  }
?>
