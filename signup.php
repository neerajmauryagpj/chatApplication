<?php
include"include/connection.php";
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$dob = $_POST['dob'];
$gender=$_POST['gender'];
$country=$_POST['country'];
$email = $_POST['email'];
$password = $_POST['pass'];
$file = $_FILES['file'];
$filename=$file['name'];
move_uploaded_file($file['tmp_name'],"fileupload/".$file['name']);

	$check_mobile = "select * from users where MOBILE = '$mobile'";
    $query = mysqli_query($con,$check_mobile);
    $check = mysqli_num_rows($query);
    if($check==1)
    {
        echo "<script>alert('This Mobile Number is already used,Try another mobile number')</script>";
        echo "<script>window.location.href=' signup.php'</script>";
        exit();
    }
    
    //insert data into database
	$insert = "insert into users(NAME,MOBILE,DOB,GENDER,COUNTRY,EMAIL,PASSWORD,UPLOADPIC) values('$name','$mobile','$dob','$gender','$country','$email','$password','$filename')";
	$run_query= mysqli_query($con,$insert);
	if($run_query)
	{
		echo"<script>alert('Congratulation $name , Your account successpully created')</script>";
		echo "<script>window.location.href='index.php'</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>

    <!-- Bootstrap -->
   	<link href="css/form-signup.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    body{
    	/* background-image: url('img/bg.png'); */
    	/* background-size: cover; */
		}
    </style>
  </head>
  <body>
   <div class="container-flude">
   		<h3 class="text-center text-white mt-4">Welcome to My chat</h3>
   		<div class="welcome">
			<p>SIGNUP</p>
		</div>
   		<div class="container my-5">
		   <form action="signup.php" method="POST" enctype="multipart/form-data">
   			<div class="row form-section mt-5">
   			<!-- left container -->
   				<div class="col-sm-6 form-logo-section">
   					<div class="mt-4">
   						<div class="form-group">
							<label>Name</label><br>
							<input type="text" name="name" id="name" class="form-input" required placeholder="Enter Name">
						</div>
						<div class="form-group">
							<label>Mobile</label><br>
							<input type="text" name="mobile" id="mobile" class="form-input" required placeholder="Mobile Number">
						</div>
						<div class="form-group">
							<label>Date of birth</label><br>
							<input type="date" name="dob" id="dob" class="form-input" required>
						</div>
						<div class="form-group">
							<label>Gender</label><br>
							<select class="form-input" name="gender">
								<option value="">--Select--</option>
								<option>Male</option>
								<option>Female</option>
							</select>
						</div>
   					</div>
   				</div>
   			<!-- right container -->
   				<div class="col-sm-6 form-input-section">
   					<div class="mt-4">
						<div class="form-group">
							<label>Country</label><br>
							<select class="form-input" name="country">
								<option value="">--Select--</option>
								<option>India</option>
								<option>US</option>
								<option>UK</option>
							</select>
						</div>
						<div class="form-group">
							<label>Email</label><br>
							<input type="email" name="email" id="email" class="form-input" required placeholder="example2020@gmail.com">
							<small class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<div class="form-group">
							<label>Password</label><br>
							<input type="Password" name="pass" id="pass" class="form-input" required placeholder="Password">
						</div>
						<div class="form-group">
							<label>Profile Picture</label><br>
							<input type="file" name="file" id="file" class="form-input" placeholder="Password">
						</div>
						<div class="submit-div">
							<input type="submit" value="SIGNUP" name="submit" class="form-submit">
						</div>
   					</div>
   				</div>
			  </form>
				   <div class="create-account">
							<span>If you have an account then</span> <a href="index.php">Login</a>. 
						</div>
   			</div>
   		</div>
   </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>