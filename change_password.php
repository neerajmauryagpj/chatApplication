<?php
session_start();
include("include/connection.php");
$user_id = $_SESSION['user_id'];
$newpass= $_POST['newpass'];
$run =mysqli_query($con,"update users set PASSWORD='$newpass' where   USER_ID='$user_id'");
?>