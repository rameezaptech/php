<?php
require "../config.php";

if(isset($_POST['submit'])){

    $log_email = $_POST['login_email'];

    $log_pass = $_POST['login_pass'];

    $fetch_db_info = "SELECT * from userdetails where email = '$log_email'";

    $run_query = mysqli_query($connection, $fetch_db_info);

    if($run_query) {

        if(mysqli_num_rows($run_query) > 0) {

            $data = mysqli_fetch_assoc($run_query);

            $db_pass = $data['password'];

            $pass_decrypt = password_verify($log_pass, $db_pass);

            if($pass_decrypt){

                echo "<script> alert ('login successful')</script>";

            }
        
            else{ echo "<script> alert ('login failed')</script>";

            }else{

                echo "<script> alert ('Invalid email/password')</script>"; }

            }else{ echo "query failed". mysqli_connect_error();

            }

        }

?>
