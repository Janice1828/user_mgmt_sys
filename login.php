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
    <h3 class="text-center">Login</h3>
      
      <div>
        <label for="">User Name</label>
        <input type="" name="userName" value="" />
      </div>
      <div>
        <label for="">Password</label>
        <input type="password" name="password" value="" />
      </div>
      <div>
        <button type="" name="login" class="loginbtn">Login</button>
      </div>
      <div>
        don't have an account? <a href="registration.php">Register</a>
      </div>
    </form>
  </body>
</html>
<?php
include("connection.php");
if(isset($_POST['login'])){
  session_start();
  $username=$_POST['userName'];
  $pass=$_POST['password'];
  $selectQuery="SELECT * FROM $table_name WHERE userName='$username' && password='$pass'";
  $sql=mysqli_query($conn, $selectQuery);
  while($row=mysqli_fetch_array($sql)){
    $user_id=$row['id'];
    $userName=$row['userName'];
    $password=$row['password'];
  }
  if(isset($userName)){
  if( $password===$pass && $username===$userName ){
    $_SESSION['id']=$user_id;
    $_SESSION['userName']=$userName;
    $_SESSION['loggedIn']=TRUE;
    $_SESSION['msg']="Logged In Successfully!";

    header("location:dashboard.php");
  }}
}

?>