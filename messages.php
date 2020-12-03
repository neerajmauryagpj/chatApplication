<?php
session_start();
include("include/connection.php");
$user_id = $_SESSION['user_id'];

extract($_POST);

//Insert messages
if(isset($_POST['msg'])){
        $insert = "insert into messages(USER_ID,FRIEND_ID,MSG) values('$user_id','$friend_id','$msg')";
        $result = mysqli_query($con,$insert);
        
        $data='<script>show_msg();</script>';
        echo $data;
}


// Show all Message 
if(isset($_POST['check'])){
        //user profile picture
        $select ="select UPLOADPIC from users where USER_ID='$user_id'";
        $run =mysqli_query($con,$select);
        $pic = mysqli_fetch_assoc($run);
        $pic = $pic['UPLOADPIC'];
        
        //friend profile picture
        $select ="select UPLOADPIC from users where USER_ID='$friend_id'";
        $run =mysqli_query($con,$select);
        $f_pic = mysqli_fetch_assoc($run);
        $f_pic = $f_pic['UPLOADPIC'];
        //all msg
        $select="select * from messages where USER_ID='$user_id' and FRIEND_ID='$friend_id' or FRIEND_ID='$user_id' and USER_ID='$friend_id' order by MSG_ID";
        $run =mysqli_query($con,$select);
        $total_msg=mysqli_num_rows($run);
        if(mysqli_num_rows($run)>0){
                while($row=mysqli_fetch_assoc($run)){
                        if($user_id==$row['USER_ID'] && $friend_id==$row['FRIEND_ID']){
                                $msg_data='<div class="d-flex justify-content-start mb-4">
                                                <div class="img_cont_msg">
                                                        <img src="fileupload/'.$pic.'" class="rounded-circle user_img_msg">
                                                </div>
                                                <div class="msg_cotainer"  id="allmsg">'.
                                                        $row['MSG'] .'
                                                </div>
                                            </div>';
                                echo $msg_data;
                        }
                        else{
                                $msg_data ='<div class="d-flex justify-content-end mb-4">
                                                <div class="msg_cotainer_send">
                                                        '.$row['MSG'].'
                                                <span class="msg_time_send"></span>
                                                </div>
                                                <div class="img_cont_msg">
                                                        <img src="fileupload/'.$f_pic.'" class="rounded-circle user_img_msg">
                                                </div>
                                             </div>';
                                echo $msg_data;
                        }                                
                        
                }
        }

        
}

//show header Name
if(isset($_POST['headername'])) {
        $select="select * from messages where USER_ID='$user_id' and FRIEND_ID='$friend_id' or FRIEND_ID='$user_id' and USER_ID='$friend_id' order by MSG_ID";
        $run =mysqli_query($con,$select);
        $total_msg=mysqli_num_rows($run);

        $select = "select * from myfriend where FRIEND_ID='$friend_id'";
        $run = mysqli_query($con,$select);
        $row =mysqli_num_rows($run);
        if($run){
                $d = mysqli_fetch_assoc($run);
        $data='<div class="d-flex bd-highlight" id="header">
                    <div class="img_cont">
                        <img src="fileupload/'.$d['UPLOADPIC'].'" class="rounded-circle user_img">
                        <input type="hidden" id="friend_id" value='.$friend_id.'>
                        <input type="hidden" id="friend_name" value='.$d['NAME'].'>
                    </div>
                    <div class="user_info">
                        <span>Chat with '. $d['NAME'].'</span>
                        <p>'.$total_msg.' Messages</p>
                    </div>
                    <span class="dlt_btn " onclick="toggle_btn()">
                    <i class="fas fa-ellipsis-v px-3"></i>
                    </span>
                    <div class="toggle_menu">
                       <ul>
                                <li onclick="delete_msg('.$friend_id.')"> delete </li>
                        </ul>
                    </div>
                </div>
                <script>show_msg();</script>';
        echo $data;   
        }      
}

// Accept request
if(isset($_POST['f_id'])){
        $update="update notification set STATUS=1 where USER_ID='$f_id' and FRIEND_ID='$user_id'";
        $result = mysqli_query($con,$update);

        $res =mysqli_query($con,"select * from users where USER_ID = '$f_id'");
        if(mysqli_num_rows($res)>0){
                $data = mysqli_fetch_assoc($res);
                $name = $data['NAME'];
                $pic = $data['UPLOADPIC'];
                $insert =mysqli_query($con,"insert into myfriend(USER_ID,FRIEND_ID,NAME,UPLOADPIC) values('$user_id','$f_id','$name','$pic')");
                $res =mysqli_query($con,"select * from users where USER_ID = '$user_id'");
                if(mysqli_num_rows($res)>0){
                        $data = mysqli_fetch_assoc($res);
                        $name = $data['NAME'];
                        $pic = $data['UPLOADPIC'];
                        $insert =mysqli_query($con,"insert into myfriend(USER_ID,FRIEND_ID,NAME,UPLOADPIC) values('$f_id','$user_id','$name','$pic')");
                }
        }
        $ta="Request Accepted";
        echo $ta;
}
?>