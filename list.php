<?php 
include("connection.php");
$selectQuery="SELECT * from $table_name";
$select=mysqli_query($conn, $selectQuery);
?>
<table border="1" cellspacing="0">
    <thead>
<tr>    
    <th>ID</th>
    <th>Full Name</th>
    <th>User Name</th>
    </tr>
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
         
        </tr>
  <?php }
   ?>
    </tbody>
</table>