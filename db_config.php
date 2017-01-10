<?php
// Create connection
$con=mysqli_connect("127.0.0.1","root","root","loginsqli");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "<font style=\"color:#FF0000\">Could not connect:". mysqli_connect_error()."</font\>";
  }
?>