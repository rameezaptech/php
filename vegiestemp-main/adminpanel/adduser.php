<?php
include('admin/includes/header.php');
include('admin/includes/sidebar.php');
include('admin/includes/topbar.php');
include('config.php');



if(isset($_POST['register'])){
    $fname = $_POST['FirstName'];
    $lname = $_POST['LastName'];
    $email = $_POST['email'];
    $Password = $_POST['password'];
    $RPassword = $_POST['repeatPassword'];

    if($Password == $RPassword){
    $hashPass = password_hash($Password, PASSWORD_BCRYPT);

        $check_email = "SELECT * from user where email = '$email' ";
        $run_email = mysqli_query($connection, $check_email);
        if(mysqli_num_rows($run_email) > 0){
            echo "Email already exist";
        }else{
            $insert = "INSERT INTO `user` (`fname`, `lname`, `email`, `pass`) VALUES ('$fname', '$lname', '$email','$hashPass')";
        $connect_insert = mysqli_query($connection, $insert);
        if($connect_insert){
            echo "registration successful";
        }else{
            echo "registration failed";
        }
        
        }
    }else{
        echo "Password not matched";
    }

}

?>


    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <h2>Add users</h2>
                <hr>
        <form class="user" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName"
                        placeholder="First Name" name="FirstName" required>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLastName"
                        placeholder="Last Name" name="LastName" required>
                 </div>
            </div>
            <div class="form-group">
                <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                    placeholder="Email Address" name="email" required>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user"
                        id="exampleInputPassword" placeholder="Password" name="password" required>
                </div>
                <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user"
                        id="exampleRepeatPassword" placeholder="Repeat Password" name="repeatPassword" required>
                </div>
            </div>
            <!-- <a class="btn btn-primary btn-user btn-block" name="register">
                Register Account
            </a> -->
            <input type="submit" class="btn btn-primary btn-user btn-block" name="register" >
            <hr>
            <a href="login.php" class="btn btn-google btn-user btn-block">
               </i>Already have an Acount?Login Here
            </a>
                                
        </form>

            </div>

        </div>

    </div>


</body>

</html>










<?php
include('admin/includes/footer.php');


?>