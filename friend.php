<?php 
session_start();
include"include/connection.php";
$email=$_SESSION['email'];

//recieve data from users table
$select="select * from users where EMAIL='$email'";
$run =mysqli_query($con,$select);
$data=mysqli_fetch_assoc($run);

$fileAdd="fileupload/".$data['UPLOADPIC'];
$user_id = $data['USER_ID'];
$_SESSION['user_id']=$user_id;
//echo $fileAdd;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friend List</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/friend.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <script src="js/jquery-3.2.1.min.js"></script>
</head>
<body>
<div class="container">
    <div class="container card my-2" style="height:150px;">
       <span class="text-center text-white" style="font-size:30px;">
           <b> Online Chat System</b>
        </span>
        <div class="d-flex bd-highlight">
            <div class="img_cont pb-2">
                <img src="<?php echo $fileAdd ?>" class="rounded-circle user_img">
            </div>
            <div class="user_info">
                <span style="font-size:25px;"><b><?php echo $_SESSION['username']; ?></b></span>
            </div>
        </div>
    </div>
</div> 

<!-- Optional JavaScript -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>