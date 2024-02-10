<?php
@include("header.php");

?>
  <form method="post">
    <h3 class="text-center">Login</h3>
      
      <div>
        <label for="">Email</label>
        <input type="" name="email" value="" />
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

    <?php
    
    @include("footer.php")
    ?>
<?php
include("connection.php");
if(isset($_POST['login'])){
  session_start();
  $username=$_POST['userName'];
  $em=$_POST['email'];
  $pass=$_POST['password'];
  $selectQuery="SELECT * FROM $table_name WHERE email='$em' && password='$pass'";
  $sql=mysqli_query($conn, $selectQuery);
  while($row=mysqli_fetch_array($sql)){
    $user_id=$row['id'];
    $userName=$row['userName'];
    $email=$row['email'];
    $password=$row['password'];
  }
  if(isset($email)){
  if( $password===$pass && $em===$email ){
    $_SESSION['id']=$user_id;
    $_SESSION['email']=$email;
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