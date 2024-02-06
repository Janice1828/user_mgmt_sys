<?php 
session_start();
if(!isset($_SESSION['loggedIn'])){  
  header("location:login.php");
  exit;
}
$userName=$_SESSION['userName'];
$msg=$_SESSION['msg'];

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
<div class="row">
  <div class="col-2">
   <?php
   
   include("sidebar.php");
   ?>
  </div>
  <div class="col-10">
    <div>
      
    <?php 
    include("navbar.php")
    ?>
    </div>
<div class="p-3">
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
           <td>
            <a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>
  <?php }
   ?>
    </tbody>
</table>

</div>
  </div>
</div>


    
   
      
     

  </body>
</html>
