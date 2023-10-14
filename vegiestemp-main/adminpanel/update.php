<?php 

include('config.php');



if(isset($_POST['update'])){
    $pro_cat = $_POST['category'];
    $pro_title = $_POST['title'];
    $pro_pid = $_POST['pid'];
    $pro_des = $_POST['des'];
    $img_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $img_size = $_FILES['image']['size'];
    
    move_uploaded_file($tmp_name , 'images/' . $img_name);
    $Update = "UPDATE `products` SET `category` = '$pro_cat', `title` = '$pro_title', `description` = '$pro_des', `image` = '$img_name' where `id` = '$pro_pid'";
    $conn_pro = mysqli_query($connection, $Update);
    if($conn_pro){
        header('location:showproducts.php');
    }


}
?>