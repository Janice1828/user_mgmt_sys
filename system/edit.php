<?php
include("connection.php");
$id=$_GET['id'];
$selectQuery="SELECT * FROM $table_name WHERE id=$id";
$select=mysqli_query($conn, $selectQuery);
$data=mysqli_fetch_assoc($select);

?>

<?php 

@include("header.php");
?>
<div class="row">
  <div class="col-2">
    <div class="p-3">
      <h3 style="padding-bottom:22px">User Management System</h3>
      <ul>
        <li>
          <a href="dashboard.php">Dashboard</a>
        </li>
        <li>
          <a href="dashboardList.php">View User List</a>
        </li>
        <li>
          <a href=""></a>
        </li>
      </ul>
    </div>
  </div>
  <div class="col-10">
 

  <form method="post">
    <h3 class="text-center">Edit</h3>
      <div>
        <label for="">Full Name</label>
        <input type="" name="fullName" value="<?php echo $data['fullName']?>" />
      </div>

      <div>
        <label for="">User Name</label>
        <input type="" name="userName" value="<?php echo $data['userName']?>" />
      </div>
      <!-- <div>
        <label for="">Photo</label>
        <input type="file" name="photo" value="" />
      </div> -->
      <div>
        <button type="submit" name="update" class="loginbtn">Update</button>
      </div>
    
    </form>
  </div>
  </div>
  <?php 

@include("footer.php");
?>
<?php
include("connection.php");

if(isset($_POST['update'])){
    $name_u=$_POST['fullName'];
    $userName_u=$_POST['userName'];
    $updateQuery="UPDATE `$table_name` SET `fullName`='$name_u', `userName`='$userName_u' WHERE id='$id'";
    $update=mysqli_query($conn, $updateQuery);
    if($update){
      header("location:editList.php");
    }else{
        echo "failed update";
    }
}

?>