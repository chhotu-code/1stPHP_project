

<?php

global $con;
 $con = mysqli_connect("localhost","root","","internship","3307");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

session_start();

?>