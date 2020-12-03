<?php
include("include/header.php");
include("include/connection.php");
session_start();
$user_id =$_SESSION['user_id'];
?>
<div class="container">
    <div class="container" style="background-color: rgba(0, 0, 0, 0.4) !important;">
	<h2 class="text-center text-white">Remove Friend</h2>
	<div class="d-flex w-100 breadcrumb  bg-transparent">
          <li class="breadcrumb-item"><a href="homepage.php">Home</a></li>
          <li class="breadcrumb-item current-color" aria-current="page"> Remove friends</li>
    </div>
	<div class="container pb-3">
			<div class="input-group">
        	    <input type="text" placeholder="Search..." name="" class="form-control search">
        	    <div class="input-group-prepend">
        	        <span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
        	    </div>
        	</div>
	</div>
    </div>
<!-- remove friend list -->
<div class="container" style="background-color: rgba(0, 0, 0, 0.4) !important;">
<?php 
	$select ="select * from myfriend where USER_ID='$user_id'";
	$run =mysqli_query($con,$select);
	$row = mysqli_num_rows($run);
	if($row>0)
	{
		for($i=1;$i<=$row;$i++)
		{
			$data = mysqli_fetch_assoc($run);
			// echo $data['UPLOADPIC'];
?>

    <div class="container pt-2">
        <div class="d-flex justify-content-start bg-info mt-2 rounded">
    		<div class="img_cont p-2">
    			<img src="fileupload/<?php echo $data['UPLOADPIC'] ?>"class="rounded-circle user_img">
    		</div>
    		<div class="user_info pl-4">
    			<span><?php echo $data['NAME'] ?></span>
    		</div>
    		<div class="user_button p-4 ml-auto">
    			<a class="btn btn-primary" role="button" href="removefriend_code.php?id=<?php echo $data['FRIEND_ID'] ?>">
    				Remove
    			</a>
    		</div>
    	</div>
    </div>
<?php
		}
	}
?>
    </div>
</div>


<?php
include("include/footer.php");
?>