<?php
  require('../config.php');
  
    $user_id = $_GET['id'];
    
    $delete = "DELETE from `products` where pid = '$user_id'";
    
    $result = mysqli_query($connection, $delete);
    
    if ($result) {
        echo '<script>alert("data deleted")
     window.location.href = "viewproducts.php";
     </script>';
    }





?>