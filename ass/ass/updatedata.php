<?php
include('config.php');
include('header.php');


if(isset($_POST['update'])){
    $user_id = $_POST['id'];
    $user_name = $_POST['name'];
    $user_email = $_POST['email'];
    $user_phone = $_POST['phone'];
 



    $update = "UPDATE `products` SET name = '$user_name' , email = '$user_email' where id = '$user_id'";
$result = mysqli_query($connection,$update);
if($result){
    echo "UPDATED";
}
}





?>