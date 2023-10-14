<?php
include('admin/includes/header.php');
include('admin/includes/sidebar.php');
include('admin/includes/topbar.php');
include('../config.php');


$pro_id = $_GET['pid'];

$fetch_pro_details = "SELECT * from `products` where`pid` = '$pro_id'";
$con_pro = mysqli_query($connection, $fetch_pro_details);
    if(mysqli_num_rows($con_pro) > 0){

?>
 <div class="container">  
         <?php 
            while($products = mysqli_fetch_assoc($con_pro)){

         ?>
         <!-- Product Form -->
         <form class="user" action="update.php" method="POST" enctype="multipart/form-data">
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                <select class="form-select" name="category" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <?php 
                    $fetch_cat = "SELECT * from `category` where cstatus = '1'";
                    $con = mysqli_query($connection, $fetch_cat);
                    if(mysqli_num_rows($con) > 0){
                        
                        while($data = mysqli_fetch_assoc($con)){
                        echo '<option value="'.$data['id'].'">'.$data['cname'].'</option>'; 
                        }
                    }

                    ?>
                                       
                </select>
                    
                </div>
                <div class="col-sm-6">
                <input type="text" class="form-control form-control-user" id="exampleFirstName"
                        placeholder="product Title" name="title" value="<?php echo $products ['title']?>" required>
                <input type="hidden" class="form-control form-control-user" id="exampleFirstName"
                        placeholder="product Title" name="id" value="<?php echo $products['id']?>" required>
                 </div>
            </div>
            <div class="form-group">
            <div class="form-floating">
                    <textarea class="form-control" name="des" placeholder="Product description"  id="floatingTextarea"><?php echo $products ['description']?></textarea>
            </div>
            </div>
            <div class="form-group row">
                
                <div class="col-sm-12">
                    <input type="file" class="form-control"
                        id="exampleRepeatPassword" placeholder="add image" name="image" required>
                </div>
            </div>
          
            <input type="submit" class="btn btn-primary btn-user btn-block" value="Update" name="update" >
            <hr>
            
                                
        </form>
        <?php 
        }
    
    }
        ?>

            </div>

        </div>

    </div>


</body>

</html>










<?php
include('admin/includes/footer.php');


?>