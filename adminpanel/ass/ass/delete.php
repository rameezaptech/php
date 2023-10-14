<?php

include('config.php');
include('header.php');


$user_id = $_GET ['id'];

$delete = "DELETE from `dbmstable` where id = '$user_id'";
$delrun = mysqli_query($connection,$delete);
if($delrun){
    echo "DATA DELETED";
}

?>