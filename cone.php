<?php
$con = mysqli_connect("localhost","root", "", "ulk");

if(!$con){
  die("connection failed: " .mysqli_connect_error());
 }

echo"connected succ";

?>


