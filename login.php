<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log In</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
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
        <div  style="position:relative">
          <input type="password" name="password" id="password" value="">
          <button onclick="passwordToggle()" type="button" style="position:absolute; background-color:white; border:0; top:8px; right:10px; padding:0px">
            <i class="fa-regular fa-eye"></i>
          </button>
        </div>
      </div>
      <div>
        <button type="" name="login" class="loginbtn">Login</button>
      </div>
      <div>
        <a href="password_reset.php">Forgot Password?</a>
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
<script>
let password=document.getElementById("password");
const passwordToggle=()=>{
if(password.type==="password"){
  password.type="text";
}else{
  password.type="password";
}
  }

</script>