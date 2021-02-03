<?php
$con = mysqli_connect("localhost","newuser","lcauser-LB1","register");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
