<?php
@include("header.php");

?>
 
 <?php

 session_start();
 $id=$_SESSION['id'];
  if(!isset($_SESSION['tokenactivated'])){  
  header("location:login.php");
  exit;
  }
include("connection.php");
if(isset($_POST['changepassword'])){
 $password=$_POST['password'];
 $confirm_password=$_POST['confirmpassword'];
 $hash_pw=sha1($confirm_password);
if($password===$confirm_password){
 $update_query="UPDATE user SET password='$confirm_password' WHERE id='$id' ";
 $sql=mysqli_query($conn, $update_query);
 header("location:login.php");
}
else
{
  $errMessage="Password & confirm password did not matched";
}
}?>
  <form method="post">
    <?php

    ?>
    <h3 class="text-center">Reset Password</h3>
      
      <div>
        <label for="">New Password</label>
        <input type="password" name="password" value="" required />
      </div>
      
      
      <div>
        <label for="">Re-type New Password</label>
        <input type="password" name="confirmpassword" value="" required />
      <span style="display:block; color:red; font-weight:bold"><?php
       if (isset($errMessage)) {
        echo $errMessage;
    }
       ?></span>
      </div>
      
      <div>
        <button type="" name="changepassword" class="loginbtn">Change Password</button>
      </div>
  
    </form>

    <?php
    
    @include("footer.php")
    ?>
 
