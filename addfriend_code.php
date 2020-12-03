<?php
session_start();
$user_id = $_SESSION['user_id'];
$user_email = $_SESSION['email'];
$friend_id = $_REQUEST['id'];

include"include/connection.php";

//check freind

$q="select * from myfriend where USER_ID='$user_id' and FRIEND_ID='$friend_id'";
$check = mysqli_query($con,$q);
$data = mysqli_fetch_assoc($check);
$ch_user=$data['USER_ID'];
$ch_friend=$data['FRIEND_ID'];
if($ch_user==$user_id and $ch_friend==$friend_id){
    echo "<script>alert('Already your friend');</script>";
    echo "<script>window.location.href='allfriend.php';</script>";
}
else{
    //Get data from users table
    $select = "select * from users where USER_ID='$user_id'";
    $run = mysqli_query($con,$select);
    $row = mysqli_num_rows($run);
    if($row){
        $data = mysqli_fetch_assoc($run);
        $name = $data['NAME'];
        $pic = $data['UPLOADPIC'];
    }
// Insert data from myfriend
    $insert = "insert into notification(USER_ID,FRIEND_ID,NAME) values('$user_id','$friend_id','$name')";
    $run = mysqli_query($con,$insert);
    if($run){
        echo"<script>alert('Your request is send')</script>";
        echo"<script>window.location.href='allfriend.php'</script>";
    }
}

?>