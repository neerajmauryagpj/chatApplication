<?php
include("include/header.php");
include("include/connection.php");
session_start();
$user_id = $_SESSION['user_id'];
$select = "select * from notification where FRIEND_ID='$user_id' ORDER BY REQ_ID DESC";
$run = mysqli_query($con,$select);
?>
<div class="container mt-2">
    <div class="list-group">
      <div class="list-group-item">
        <div class="d-flex w-100 breadcrub breadcrumb">
          <li class="breadcrumb-item"><a href="homepage.php">Home</a></li>
          <li class="breadcrumb-item " aria-current="page">Notification</li>
        </div>
        <div class="d-flex w-100 justify-content-between">
          <strong class="ml-2 mt-4"><span >Name</span></strong>
          <img src="img/bg.jpg" alt="" height="100" width="100" class="mt-1 rounded-circle">
        </div>
      </div>
    </div>
</div>
<!-- notification list -->
<?php
if(mysqli_num_rows($run)>0){
  // echo($data['NAME']);
  while($data = mysqli_fetch_assoc($run)){
  if($data['STATUS']==0){
?>
    <div class="container">
      <div class="list-group">
        <div class="list-group-item d-flex nf-">
          <p><strong><?php echo($data['NAME'])?></strong> send request</p>
          <div class="btn ml-auto">
              <button class="btn btn-success" onclick="Accept_request(<?php echo($data['USER_ID']) ?>)">Add</button>
              <button class="btn btn-success" onclick="Cancel_request(<?php echo($data['USER_ID']) ?>)">Cancel</button>
          </div>
        </div>
      </div>
    </div> 
<?php
    }
    else{
    ?>
    <div class="container">
      <div class="list-group bg-white">
        <h3 class="text-center">You have not any Notification</h3>
      </div>
    </div> 
    <?php
    break;
    }
  }
}
?>

<?php
include("include/footer.php")
?>