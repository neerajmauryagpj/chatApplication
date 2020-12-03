<?php
session_start();
include("include/connection.php");
$user_id = $_SESSION['user_id'];
if(isset($_POST['image'])){
	$data = $_POST['image'];

	$image_array_1 = explode(';', $data);

	$image_array_2 = explode(',', $image_array_1[1]);

	$data = base64_decode($image_array_2[1]);
	$image_name = 'fileupload/profile-img'.$user_id.'.png';
    $upload_pic = 'profile-img'.$user_id.'.png';
    
//    update profile picture
	$run =mysqli_query($con,"update myfriend set UPLOADPIC='$upload_pic' where 	FRIEND_ID='$user_id'");
    $run =mysqli_query($con,"update users set UPLOADPIC='$upload_pic' where USER_ID='$user_id'");
    
	file_put_contents($image_name, $data);
//	echo '<img src =fileupload/"'.$image_name.'" class="img-thumbnail"/>';
} 
?>