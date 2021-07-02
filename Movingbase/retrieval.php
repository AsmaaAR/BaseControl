<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$con = mysqli_connect("localhost","root","","baseinterface") or die("Error: Can't Connect to Server");
$db = mysqli_select_db($con,"baseinterface") or die("Error: Can't Connect to DB");
 
$sql= mysqli_query($con, "SELECT * FROM directions");

$print= mysqli_fetch_row($sql);
echo $print[0];
?>