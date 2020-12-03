<?php
include("include/connection.php");
// include("include/header.php");
session_start();
$user_id =$_SESSION['user_id'];
$f_id=$_GET['id'];
// echo("user id is $user_id and friend id is $f_id");
$query = "delete from myfriend where USER_ID ='$user_id' and FRIEND_ID ='$f_id'";
$res = mysqli_query($con,$query);
$query = "delete from myfriend where USER_ID ='$f_id' and FRIEND_ID ='$user_id'";
$res = mysqli_query($con,$query);
print_r($res);
if($res){
    header("Location:removefriend.php");
}
?>