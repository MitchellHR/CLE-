<?php
//Connect to Database
$con = mysqli_connect("localhost","root","HRcle2site","register");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>