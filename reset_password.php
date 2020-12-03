<?php
include("include/connection.php");
$email = $_POST['email'];
$pass = $_POST['pass'];
$btn = $_POST['btn'];
// $output="$email $pass";
// echo "$output";
if(isset($btn)){
    $sql ="select * from users where EMAIL ='$email'";
    $res = mysqli_query($con,$sql);
    if($res){
        $sql = "UPDATE users SET PASSWORD='$pass' WHERE EMAIL='$email'";
        mysqli_query($con,$sql);
        $data="Success";
    }
    else{
        $data="Email is not valid.";
    }
    echo $data;
}
?>