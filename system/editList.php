<?php 
session_start();
if(!isset($_SESSION['loggedIn'])){  
  header("location:login.php");
  exit;
}
$userName=$_SESSION['userName'];
$msg=$_SESSION['msg'];

?>
<?php 

@include("header.php");
?>
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
            <td><a class="edit_btn" href="edit.php?id= <?php echo $row['id']?>">Edit</a>
        
        </tr>
  <?php }
   ?>
    </tbody>
</table>

</div>
  </div>
</div>
<?php 

@include("footer.php");
?>