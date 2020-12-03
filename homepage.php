<?php 
session_start();
include("include/header.php");
include("include/connection.php");
$email =$_SESSION['email'];
//recieve data from users table
$select="select * from users where EMAIL='$email'";
$run =mysqli_query($con,$select);
$data=mysqli_fetch_assoc($run);

$fileAdd="fileupload/".$data['UPLOADPIC'];
$user_id = $data['USER_ID'];
$_SESSION['user_id']=$user_id;
$user_name = $data['NAME'];
//echo $fileAdd;

?>
<!--body content start here-->

<div class="container h-100">
    <div class=" card my-2" style="height:120px;">
       <span class="text-center text-white" style="font-size:30px;">
           <b> Online Chat System</b>
        </span>
        <div class="d-flex bd-highlight">
            <div class="img_cont">
                <a href="changeprofile.php"><img src="<?php echo $fileAdd ?>" class="rounded-circle user_img"></a>
            </div>
            <div class="user_info">
                <span style="font-size:25px;"><b><?php echo $user_name; ?></b></span>
            </div>
        </div>
    <!--Toggle menu-->   
       
       <span id="action_menu_btn"><i class="fas fa-align-justify"></i></span>
	    <div class="action_menu">
	    	<ul>
	    		<a href="changeProfile.php"><li><i class="fas fa-user-edit"></i> View profile</li></a>
	    		<a href="allfriend.php"><li><i class="fas fa-user-plus"></i> Add New friends</li></a>
                <a href="notification.php"><li><i class="fas fa-info-circle"></i>Notification</li></a>
                <a href="removefriend.php"><li><i class="fas fa-user-minus"></i>Remove Friend</li></a>
	    		<a href="logout.php"><li><i class="fas fa-sign-out-alt"></i>Logout</li></a>
	    	</ul>
	    </div>
    </div>
    <div class="row justify-content-center mb-5">
        <div class="col-md-4 col-xl-4 chat">
            <div class="card mb-sm-3 mb-md-0 contacts_card">
                <div class="card-header">
                    <div class="input-group">
                        <input type="text" placeholder="Search..." name="" class="form-control search">
                        <div class="input-group-prepend">
                            <span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
                        </div>
                    </div>
                </div>

<!-- friend list -->
            <div class="card-body contacts_body">
                <ul class="contacts">
<?php
    
	$select ="select * from myfriend where USER_ID='$user_id'";
	$run =mysqli_query($con,$select);
	$row = mysqli_num_rows($run);
	if($row>0)
	{
		for($i=1;$i<=$row;$i++)
		{
			$data = mysqli_fetch_assoc($run);
            // echo $data['NAME'];
?>
            <li class="active" onclick="show_header(<?php echo $data['FRIEND_ID'] ?>)">
                <div class="d-flex bd-highlight">
                    <div class="img_cont">
                        <img src="fileupload/<?php echo $data['UPLOADPIC'] ?>" class="rounded-circle user_img">
                        <!-- <span class="online_icon"></span> -->
                    </div>
                    <div class="user_info">
                        <span><?php echo $data['NAME'] ?></span>
                        <!-- <p><?php echo $data['NAME'] ?> is online</p> -->
                    </div>
                </div>
            </li>           
<?php
        }
	}
?>       
                </ul>
            </div>

            <div class="card-footer">
            </div>
        </div>
    </div>

 <!-- chat list -->

        <div class="col-md-8 col-xl-8 chat" id="chatbox">
            <div class="card">
            <!--Chat list header start-->
                <div class="card-header msg_head" id="msg_head">
                    
                </div>
            <!--//chat list header close -->    
                <div class="card-body msg_card_body">
                   <!-- this div connected with messages.php page -->
                </div>
                <div class="card-footer" id="card-footer">
                    <div class="input-group">
                        <div class="input-group-append">
                            <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
                        </div>
                        <textarea name="" id="type_msg" class="form-control type_msg" placeholder="Type your message..."></textarea>
                        <div class="input-group-append">
                            <span class="input-group-text send_btn" onclick="send_msg()"><i class="fas fa-location-arrow"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="h-25 mx-auto container" id="right_msg">

</div>
</div>
<?php include"include/footer.php" ?>
