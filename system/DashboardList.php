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
include("list.php")

?>

</div>
  </div>
</div>
<?php 
@include("footer.php");

?>