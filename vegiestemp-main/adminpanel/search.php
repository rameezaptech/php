<?php

include('../config.php');
//print_r($_POST);

$input = $_POST['input'];
$result = mysqli_query($connection,"SELECT * from  products where `title` like '%$input%'");
if($result)
{

    if(mysqli_num_rows($result) > 0 ) {
        while($pro_data = mysqli_fetch_assoc($result)){
// console.log($prodata);
        //     echo '
        //     <tr>
        //     <th scope="row">'.$data['id'].'</th>
        //     <td>'.$data['name'].'</td>
        //     <td>'.$data['email'].'</td>
        //     <td>'.$data['pass'].'</td>
        // </tr>
        //     ' ;
        echo '
        
        <tr>
        <th scope="row">'.$pro_data['pid'].'</th>
        <td> '.$pro_data['title'].'</td>

        <td> '.$pro_data['description'].'</td>
        <td><img src = '. 'images/'.$pro_data['image'].' alt= "" width = "100px" height = "100px"></td>
     
        ';
        }
    }

}



?>