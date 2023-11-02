<?php
include('admin/includes/header.php');
include('admin/includes/sidebar.php');
include('admin/includes/topbar.php');
include('../config.php');


//display products
$limit = 3 ;
if(isset($_GET['pgno'])){
    $pgno = $_GET['pgno'];
}else{
    $pgno = 1;
}

$start = ($pgno - 1)* $limit; //select * from products limit 0,3;



$products_query = "SELECT * from `products` as p inner join `category` as c on p.category = c.id order by id
DESC limit {$start},{$limit}";
$conn_query = mysqli_query($connection , $products_query);
if(mysqli_num_rows($conn_query) > 0){








?>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <h2>Registerd users</h2>
                <hr>
            <table class="table table-warning">
                <thead class="bg-warning p-2 text-dark bg-opacity-10" style="opacity: 75%;">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">category</th>
                    <th scope="col">description</th>
                    <th scope="col">Image</th>
                    <th scope="col">ACTION</th>
                   
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>
                    
                    </tr>

        
                </thead>
                <tbody id="tab">
                    <?php
                    while($pro_data = mysqli_fetch_assoc($conn_query)){
                    ?>
                    <tr>
                    <th scope="row"><?php echo $pro_data['id'] ?></th>
                    <td><?php echo $pro_data['title'] ?></td>
                    <td><?php echo $pro_data['cname'] ?></td>
                    <td><?php echo $pro_data['description'] ?></td>
                    <td><img src = "<?php  echo 'images/' . $pro_data['image'] ?>" alt= "" width = "100px" height = "100px"></td>
                 

                    <td> <?php
                  if($pro_data['status']==1){
                    echo "Active";
                 } else{
                 echo  "Deactive";
                }
                    ?>
                    </td>
                    <td ><a href="update.php?id=<?php echo $pro_data['pid'] ?>" class="btn btn-success" >Update</a></td>
                    <td ><a href="delete.php?id=<?php echo $pro_data['pid'] ?>" class="btn btn-danger">Delete</a></td>
                </tr>

<?php

}

}


?>
   </tbody>
            </table>

<!-- Pagination Work -->
<?php
$pagination = "SELECT * FROM `products`";
$res = mysqli_query($connection,$pagination);
if(mysqli_num_rows($res)>0){
    $total_records = mysqli_num_rows($res);  //5records
    $total_pages = ceil($total_records / $limit); //roundip the number
    echo ' <ul class="pagination">';

    if($pgno > 1){
        echo '<li class="page-item "><a class="page-link" href="viewproducts.php?pgno='.($pgno - 1).'">Prev</a></li>';
   
    }

    for($i=1;$i <= $total_pages; $i++){

        $active = $i == $pgno? 'active' : '';

        echo '<li class="page-item '.$active.'"><a class="page-link" href="viewproducts.php?pgno='.$i.'">'.$i.'</a></li>';
    }

    if($pgno < $total_pages){
        echo '<li class="page-item "><a class="page-link" href="viewproducts.php?pgno='.($pgno + 1 ).'">Next</a></li>';
    
    }
    echo '</ul>' ;
}

 ?>            
       
       <!-- </nav> -->

            </div>

        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>

     $(document).ready(function(){
        // for searching value
let query = $('#input')
let tab = $('#tab')
// console.log(query)
query.on ('keyup',function(){

    $.ajax({
        url : 'search.php',
        method : 'POST',
data : {
    input : query.val()
},
success:function(data){
    console.log(data);
    tab.html(data)
}
    })

})
     })

      
        </script>

</body>

</html>










<?php
include('admin/includes/footer.php');


?>















