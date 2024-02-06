<?php
include("connection.php");
$user_id=$_GET['id'];
// print_r($id);
$deleteQuery="DELETE FROM $table_name WHERE id=$user_id";
$delete=mysqli_query($conn, $deleteQuery);
header("location:list.php");
?>