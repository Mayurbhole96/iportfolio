<?php 
$db = mysqli_connect("localhost", "root", "", "portfolio"); 
  
if(mysqli_connect_error()) 
    echo "Connection Error."; 
else
    echo "Database Connection Successfully."; 

?>