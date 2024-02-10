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
  
<p><?php 
    echo $msg 
    
    ?></p>
 <h1 class="text-center mt-3">Welcome to Dashboard  <?php
echo $userName;
?> 

</h1>

</div>
  </div>
</div>


    
   
   <?php 
   @include("footer.php");
   ?>