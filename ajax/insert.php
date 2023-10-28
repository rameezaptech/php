<?php 
include('config.php');

$name = $_POST['name'];

$email = $_POST['email'];
 $password = $_POST['password'];

$result = mysqli_query($connection, "INSERT INTO `user1` 
( `name`, `email`, `pass`) VALUES ('$name', '$email', '$password')");

if($result){

echo "registration successful";

}else{

    echo "query failed";

}
?>