<?php
require('config.php');

$userid = $_GET ['id'];
$update = "update `dbmstable` SET `status` = '1' where id = '$userid'";
$update_run = mysqli_query($connection, $update);
 if($update_run){
echo "<script>alert('data restored')</script>";
header('location:readdata.php');
 }else{
    echo "query failed";

 }




?>