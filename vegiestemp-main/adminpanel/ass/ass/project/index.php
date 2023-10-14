<?php

include("config.php");

if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($connection,$_POST['name']);
    $email =  mysqli_real_escape_string($connection,$_POST['email']);
    $password =  mysqli_real_escape_string($connection,$_POST['pass']);

$Enc_pass = password_hash($password , PASSWORD_BCRYPT);

$check_email = "SELECT * from `userdetails` where email = '$email'";
$query_run = mysqli_query($connection,$check_email);
if(mysqli_num_rows($query_run) > 0){

    echo "<script> alert('Existed EMAIL')</script>";

}else{
    $insert= "INSERT INTO `userdetails` ( `name`, `email`, `password`) VALUES ( '$username', '$email', '$Enc_pass')";
    $conn_db = mysqli_query ($connection, $insert);
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="form-group">
<label for="name"> Username </label>
<input type="text" name="name" required class="form-control">
<br>
<label for="email"> Email </label>
<input type="email" name="email" required class="form-control">
<br>
<label for="pass"> Password </label>
<input type="password" name="pass" required class="form-control">
<br>
<input type="submit" name="submit" value="Register">
</form>
</body>
</html>