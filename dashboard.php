<?php 
session_start();
if(!isset($_SESSION['loggedIn'])){  
  header("location:login.php");
  exit;
}
$userName=$_SESSION['userName'];
$msg=$_SESSION['msg'];

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
<div class="row">
  <div class="col-2">
    <div class="p-3">
      <h3 style="padding-bottom:22px">User Management System</h3>
      <ul>
        <li>
          <a href="dashboard.php">Dashboard</a>
        </li>
        <li>
          <a href="list.php">View User List</a>
        </li>
        <li>
          <a href=""></a>
        </li>
      </ul>
    </div>
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


    
   
      
     

  </body>
</html>
