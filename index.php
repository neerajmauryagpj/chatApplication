<?php
session_start();
include("include/connection.php");
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $_SESSION['email']=$email;
    //check user
    $data = "select * from users where EMAIL ='$email'";
    $sql_query =mysqli_query($con,$data);
    $res = mysqli_num_rows($sql_query);
    if($res)
    {
        $check = mysqli_fetch_assoc($sql_query);
       // echo $check['PASSWORD'];
        $_SESSION['username']=$check['NAME'];
        if($check['PASSWORD']===$password)
        {
			header("location:homepage.php?email=$email");
        }
        else
        {
			$_SESSION['alertmsg'] = "Try Again !, Password is incrrect";
        }
    }
    else
    {
		$_SESSION['alertmsg'] = "Try Again !, Email is incrrect";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Bootstrap -->
   	<link href="css/form-design.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/sweetalert.js"></script>
  </head>
  <body>
   <div class="container-flude">
   		<h3 class="text-center text-white mt-4">Welcome to My chat</h3>
   		<div class="container my-5">
   			<div class="row form-section mt-5">
   				<div class="col-sm-6 form-input-section">
   					<div class="form-group">
   						<div class="user-logo mt-4">
							<div class="img">
								<img src="img/user-icon.svg" height='80' width='80' class="user-icon">
							</div>
						</div>
						<div class="welcome">
							<p>WELCOME</p>
						</div>
						<?php
							if(isset($_SESSION['alertmsg'])){
								echo"<small style='color:rgb(248, 67, 67);'>".$_SESSION['alertmsg']."</small>";
							}

						?>
						<form  method="post">
						<div class="input-div">
							<input type="email" name="email" id="email" class="form-input" required placeholder="Email:example@gmail.com">
						</div>
						<div class="input-div">
							<input type="Password" name="pass" id="pass" class="form-input"required placeholder="Password">
						</div>
						<div class="forget-pass">
							<div class="checkbox">
								<input type="checkbox" name="name" class="">Remember me
							</div>
							<div class="forget">
								<a href="#" data-toggle="modal" data-target="#forgetPassword">Forget Password ?</a>
							</div>
						</div>
						
						<div class="submit-div">
							<input type="submit" value="Login" name="submit" class="form-submit bg-primary">
						</div>
						</form>
						<div class="create-account">
							<span>If you have no account then</span> <a href="signup.php">Create Account</a>. 
						</div>
   					</div>
   				</div>
				<div class="col-sm-6 form-logo-section">
   					<div class="mobile">
						<div class="message_img">
							<img src="img/message_icon.svg" height="400" width="400">
						</div>
					</div>
   				</div>
   			</div>
   		</div>
   </div>


<!-- Reset Password Model start -->
<div class="modal fade" id="forgetPassword" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:skyblue;">
        <h5 class="modal-title" id="modalTitle">Reset Your Password</h5>
      </div>
	  <!-- model body -->
      <div class="modal-body">
  		<div class="form-group">
  		  <label for="resetEmail">Email address</label>
  		  <input type="email" class="form-control" id="resetEmail" aria-describedby="emailHelp">
  		  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  		</div>
		<div class="form-group">
  		  <label for="reserPassword">Create Password</label>
  		  <input type="password" class="form-control" id="resetPassword">
  		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" id="changePass">Change Password</button>
      </div>
    </div>
  </div>
</div>
<!-- Reset Password Model End -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
<!-- Reset password script -->
<script>
	$('#changePass').click(function() {
		var em = $("#resetEmail").val();
		var ps = $("#resetPassword").val();
		var btn = $("#changePass").val();
		if(em=="" || ps==""){
			swal("Fill the all Input box");
		}
		else{
			$.ajax({
				url:"reset_password.php",
				type:"post",
				data:{email:em,pass:ps,btn:btn},
				success:function(data){
					swal(data);
				}
			})

			// alert("hii..."+em+" password = "+ps );
			$("#forgetPassword").modal("hide");
		}
    });
</script>
  </body>
</html>



