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
    <p><?php echo $msg ?></p>
    <h1>Welcome to Dashboard
      
      <?php
echo $userName;
?>

</h1>
<a href="logout.php">Log Out</a>
  </body>
</html>
