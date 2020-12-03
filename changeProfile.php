<?php
include("include/header.php");
?>
<style>
.top{
   min-height:200px;
   min-width:200px;
}
.bottom{
   margin:0px auto;
   text-align:center;
   background:red;
   margin-top:20px;
   margin:0px auto;
}
.profileImage{
    height:200px;
    width:200px;
    border-radius:50%;
    margin:5px;
    border:1px solid white;
}
.change_profile{
    background:rgb(1, 161, 1);
    cursor:pointer;
    padding:10px;
    color:white;
    border-radius:5px;
    box-shadow:2px 2px 10px grey;
    /* border: 1px solid rgb(36, 226, 118); */
    transition: 0.2s ease-in-out;
}
.change_profile:hover{
    box-shadow:1px 1px 5px green;
    background:green;
}
.input_file{
    display:none;
}
p{
    color:blue;
    cursor:pointer;
    text-decoration: underline;
}
.profile-container{
    min-height :100vh;
    background-color: rgba(0, 0, 0, 0.4) !important;
    border-radius:15px;
    padding-bottom:50px;
}
#msg{
    color: limegreen;
}
</style>
<?php
session_start();
include("include/connection.php");
$user_id = $_SESSION['user_id'];

    $select ="select * from users where USER_ID='$user_id'";
    $run =mysqli_query($con,$select);
    $info = mysqli_fetch_assoc($run);
    $pic = $info['UPLOADPIC'];
    $name= $info['NAME'];
    $email= $info['EMAIL'];
    $pass = $info['PASSWORD'];
?>
<div class="container profile-container"><br>
    <h2 class="text-center text-white">Profile</h2>
    <div class="d-flex w-100 breadcrumb bg-transparent">
          <li class="breadcrumb-item"><a href="homepage.php">Home</a></li>
          <li class="breadcrumb-item current-color" aria-current="page">View Profile</li>
    </div>
    <hr>
    <div class="d-flex justify-content-around mt-3">
        <div>
            <img src="fileupload/<?php echo $pic?>" alt="no found" class="profileImage"/>
            <label for="upload_image" class="change_profile">Change Photo</label>
            <input type="file" name="upload_image" id="upload_image" class="input_file" accept="image/*"><br>
    
        </div>
        <div class="user_info pl-4">
            <span id="alert" style="color:lightgreen;"></span>
                <label for="name">Name :</label>
                <input type="text" name="name" id="name" class="form-control" value="<?php echo $name ?>"/>
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" class="form-control" value="<?php echo $email ?>" readonly>
                <button type="submit" class="btn btn-success mt-2" id="submit" onclick="change_name()">Change</button>
        </div>
    </div>
<!-- change password  -->
<hr>
    <div class="mt-2 t">
        <h2 class='text-white text-center'>Change Password</h2>
        <div class="col-md-8 col-8 mx-auto">
                <span id="old_pass_span" style="color:red"></span><br>
                <label for="old_pass">Old Password </label>
                <input type="password" name="password" id="old_pass" class="form-control"/>
                <label for="new_pass">New Password </label>
                <input type="password" name="password" id="new_pass" class="form-control"/>
                <label for="confirm_pass">Confirm Password </label>
                <input type="password" name="password" id="confirm_pass" class="form-control" onkeyup="validate_pass()"/>
                <small>Change button will be show after fill all inputs.</small>
                <button type="submit" class="btn btn-success mt-2" id="change_pass_btn" onclick="change_password()" style="display:none;">Change Password</button>
        </div>
    </div>
</div>
<script>
// change password
    function change_password(){
        var oldpass =$('#old_pass').val();
        var newpass =$('#new_pass').val();
        var confrimpass =$('#confirm_pass').val();
        if(oldpass=="<?php echo $pass ?>"){
            $.ajax({
                url:"change_password.php",
                type:"post",
                data:{oldpass:oldpass,newpass:newpass,confrimpass:confrimpass},
                success:function(data,status){
                    swal("Password successfully Changed","","success");
                    $('#old_pass_span').text('');
                    $('#old_pass').val()="";
                }
            });
        }
        else{
            $('#old_pass_span').text('Password incorrect');
            $('#old_pass').val()="";
        }
    }
// validate password
    function validate_pass(){
        var oldpass =$('#old_pass').val();
        var newpass =$('#new_pass').val();
        var confrimpass =$('#confirm_pass').val();
        if(oldpass!=""){
            if(newpass==confrimpass){
            $('#change_pass_btn').show();
            }
            else{
                $('#change_pass_btn').hide();
            }
        }
        else{
            $('#old_pass_span').text('* Fill the Old password');
        }
    }
// Change Profile Name
    function change_name(){
        var name =$('#name').val();
        var email =$('#email').val();
        $.ajax({
            url:"chat_profile.php",
            type:"post",
            data:{name:name,email:email},
            success:function(d,status){
                swal("Profile Name changed","","success");
            }
        });
    }
</script>
<?php
include("include/footer.php");
?>
<!--croppie model-->
<div id="uploadimageModal" class="modal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content"style="width:650px;">
			<div class="modal-header">
				<h4 class="modal-title"> Upload & crop Image</h4>
				<button type="button" class="button" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-8 text-center">
						<div id="image_demo" style="margin-top: 10px;"></div>
					</div>
					<div class="col-md-4" style="padding-top:15px;">
						<br><br><br>
						<button class="btn btn-success crop_image">crop & upload image</button>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default crop_image">Save</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	 $(document).ready(function(){
	 	$image_crop = $("#image_demo").croppie({
	 		enableExif:true,
	 		viewport:{ width: 200, height: 200, type: 'squre' },
	 		boundary:{height:300,width:300}
	 	});
	 	$("#upload_image").on('change',function(){
	 		var reader = new FileReader();
	 		reader.onload = function(event){
	 			$image_crop.croppie('bind',{
	 				url:event.target.result
	 			}).then(function(){
	 				console.log('bind complete');
	 			});
	 		}
	 		reader.readAsDataURL(this.files[0]);
	 		$('#uploadimageModal').modal('show');
	 	});
	 	$('.crop_image').click(function(event){
	 		$image_crop.croppie('result',{
	 			type:'canvas',
	 			size:'viewport'
	 		}).then(function(response){
	 			$.ajax({
	 				url:'cropimage.php',
	 				type:'POST',
	 				data:{'image':response},
	 				success:function(data){
	 					$('#uploadimageModal').modal('hide'); 
                    },
                    complete: function() {
                        window.location.reload();    
                    }
	 			})
	 		})
        });

	 });
</script>
