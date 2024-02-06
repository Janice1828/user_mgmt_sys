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
    <h3 class="text-center">Registration</h3>
      <div>
        <label for="">Full Name</label>
        <input type="" name="fullName" value="" />
      </div>

      <div>
        <label for="">User Name</label>
        <input type="" name="userName" value="" />
      </div>
      <div>
        <label for="">Password</label>
        <input type="password" name="password" value="" />
      </div>
      <div>
        <label for="">Photo</label>
        <input type="file" name="photo" value="" />
      </div>
      <div>
        <button type="submit" name="register" class="loginbtn">Register</button>
      </div>
      <div>
        Already have an account? <a href="login.php">Login</a>
      </div>
    </form>
  </body>
</html>
<?php
include("connection.php");
if(isset($_POST['register'])){
    $name=$_POST['fullName'];
    $userName=$_POST['userName'];
    $password=$_POST['password'];
    $insertQuery="INSERT INTO `$table_name` (fullName, userName, password) VALUES ('$name', '$userName', '$password')";
    $insert=mysqli_query($conn, $insertQuery);
    if($insert){
       header("location:login.php");
    }
}

?>