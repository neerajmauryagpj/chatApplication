<?php
session_start();
include("include/connection.php");
$user_id = $_SESSION['user_id'];

extract($_POST);
$delete = "delete from messages where USER_ID='$user_id' and FRIEND_ID='$friend_id'";
$run = mysqli_query($con,$delete);
$data ='<h1>code working</h1>';
echo $data;
?>