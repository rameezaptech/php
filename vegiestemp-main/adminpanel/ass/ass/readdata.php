<?php
include('header.php');
require('config.php');
$retrieveData = "select * from  `dbmstable` where status = '1'";

$sqlquery= mysqli_query($connection , $retrieveData);
if(mysqli_num_rows($sqlquery)>0){

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

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PHONE</th>
      <th scope="col">GENDER</th>
      <th scope="col">UPDATE</th>
      <th scope="col">DELETE</th>
   </tr>
  </thead>
  <tbody>
    <?PHP
    
    while($row = mysqli_fetch_assoc($sqlquery)){
    
    ?>
    <tr>
      <th scope="row"><?php echo $row['id'] ?></th>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['phone'] ?></td>
      <td><?php echo $row['gender'] ?></td>
      <td><a href="update.php?id=<?php echo $row['id'] ?>">Update</a></td>
      <td><a href="trash.php?id=<?php echo $row['id'] ?>">Trash</a></td>
      

    </tr>


    <?php
    }
}
    ?>
  </tbody>
</table>
    
</body>
</html>