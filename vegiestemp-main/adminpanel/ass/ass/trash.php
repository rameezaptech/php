<?php
require('config.php');

$userid = $_GET ['id'];
$update = "update `dbmstable` SET `status` = '0' where id = '$userid'";
$update_run = mysqli_query($connection, $update);
 if($update_run){
echo "<script>alert('data added to trash')</script>";
header('location:trashdata.php');
 }else{
    echo "query failed";

 }




?>