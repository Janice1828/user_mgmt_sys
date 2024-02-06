<?php
include("connection.php");
$id=$_GET['id'];
$selectQuery="SELECT * FROM $table_name WHERE id=$id";
$select=mysqli_query($conn, $selectQuery);
$data=mysqli_fetch_assoc($select);

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
  
  <form method="post">
    <h3 class="text-center">Edit</h3>
      <div>
        <label for="">Full Name</label>
        <input type="" name="fullName" value="<?php echo $data['fullName']?>" />
      </div>

      <div>
        <label for="">User Name</label>
        <input type="" name="userName" value="<?php echo $data['fullName']?>" />
      </div>
      <div>
        <label for="">Photo</label>
        <input type="file" name="photo" value="" />
      </div>
      <div>
        <button type="submit" name="update" class="loginbtn">Update</button>
      </div>
    
    </form>
  </body>
</html>
<?php
include("connection.php");

if(isset($_POST['update'])){
    $name_u=$_POST['fullName'];
    $userName_u=$_POST['userName'];
    $updateQuery="UPDATE `$table_name` SET `fullName`='$name_u', `userName`='$userName_u' WHERE id='$id'";
    $update=mysqli_query($conn, $updateQuery);
    if($update){
       header("location:list.php");
    }else{
        echo "failed update";
    }
}

?>