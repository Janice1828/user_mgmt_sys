<?php
$user="root";
$server="localhost";
$database="user_mgmt";
$password="";
$table_name="user";
$conn=new mysqli($server, $user ,$password, $database );
if(!$conn){
    echo "connection failed";
}
?>