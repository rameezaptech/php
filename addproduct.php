<?php
include('admin/includes/header.php');
include('admin/includes/sidebar.php');
include('admin/includes/topbar.php');
include('config.php');


if(isset($_POST['addproduct'])){
    $pro_title = $_POST['title'];
    $pro_cat = $_POST['category'];
    $pro_des = $_POST['des'];
    $img_name = $_FILES["image"]['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $img_size = $_FILES['image']['size'];
    move_uploaded_file($tmp_name, 'images/' . $img_name);
    $insert_file = "INSERT INTO `products` (`title`, `category`, `description`, `image`) VALUES ('$pro_title', '$pro_cat', '$pro_des','$img_name')";
    $conn_pro = mysqli_query($connection, $insert_file);
}
?>


    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <h2>Add users</h2>
                <hr>
        <form class="user" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype ="multipart/form-data">
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control "
                        placeholder=" product title" name="title" required>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control " 
                        placeholder="product category" name="category" required>
                 </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control "
                    placeholder="Product description" name="des" required>
            </div>
          
</div>
<div class="form-group">
<input type="file" class="form-control "
                    placeholder="insert image" name="image" required>
            </div>
            
                </div>
            <input type="submit" class="btn btn-primary btn-user btn-block" name="addproduct" >
            <hr>
                                
        </form>

            </div>

        </div>

    </div>


</body>

</html>










<?php
include('admin/includes/footer.php');


?>