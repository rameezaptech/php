<?php
$servername = "localhost";
$username = "root";
$password = "";
$DB = "project";

$connection = mysqli_connect($servername, $username, $password,$DB);
if(!$connection){
   die( mysqli_connect_errno());
}


?>
