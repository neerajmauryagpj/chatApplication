<?php
session_start();
$user_id = $_SESSION['user_id'];
$name= $_POST['name'];
$email= $_POST['email'];
include("include/connection.php");
if(isset($name)){
$run =mysqli_query($con,"update myfriend set NAME='$name',USER_EMAIL='$email' where FRIEND_ID='$user_id'");
$run =mysqli_query($con,"update users set NAME='$name',EMAIL='$email' where USER_ID='$user_id'");
}

if(isset($_POST['newpass'])){
    $newpass = $_POST['newpass'];
    $run =mysqli_query($con,"update users set PASSWORD='$newpass' where    USER_ID='$user_id'");
    }
}
?>