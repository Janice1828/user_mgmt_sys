<?php 
include("connection.php");
$selectQuery="SELECT * from $table_name";
$select=mysqli_query($conn, $selectQuery);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
<table border="1" cellspacing="0">
    <thead>
<tr>    
    <th>ID</th>
    <th>Full Name</th>
    <th>User Name</th>
    <th>Action</th></tr>
    </thead>
    <tbody>
    <?php
    $i=1;
   while($row=mysqli_fetch_assoc($select)){
?>
    <tr>
        <td><?php echo $i++;?></td>
            <td><?php echo $row['fullName'] ?></td>
            <td><?php echo $row['userName'] ?></td>
            <td><a href="edit.php?id= <?php echo $row['id']?>">Edit</a>
            <a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
       
            
            
        </tr>
  <?php }
   ?>
    </tbody>
</table>



  </body>
</html>
