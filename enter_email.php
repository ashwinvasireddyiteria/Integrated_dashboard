<?php 
include("header_login.php");
include("config.php");
include('fontstyle.php');
session_start();

if(isset($_POST['email'])) {
	
	$username = $_POST['email'];
	 
	if(!empty($username)){
		
	$check_query = " SELECT * FROM Integrated_dashboard_users WHERE email = '". $username ."' ";
	$check_result = mysqli_query($conn, $check_query);
	
	if(mysqli_num_rows($check_result) > 0){
		
		$success = "success";
	}
		if(isset($success)){
	echo "<script type='text/javascript'>
	window.location.href='mailer.php?mailer=$username';
	</script>";
       }
		if(mysqli_num_rows($check_result) == 0) {
			$display_error1 ="$username not found. Enter a valid Username";
		}
		if(isset($display_error1)){
	?>
	   <div id="box" class="font">
	      <a href="enter_email.php" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 20px;">Username not found. Enter a valid Username</h6>
       </div>
    <?php
    }
		
	}
	
	}
	if(empty($username)) {
		$message = " Please enter Username";
	}if(isset($message)){
	?>
	   <div id="box" class="font">
	      <a href="enter_email.php" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 20px;">Please enter Username</h6>
       </div>
    <?php
    }

?>

<style>
.page-title{
  left: 43%;
  position: absolute;
}

</style>	
	
<!DOCTYPE html>
<body>
<br><br>
<form action="" method="POST" enctype = "multipart/form-data">

<div class="container-fluid">
           
                <div class="font page-title">
                      <h3> Forgot Password</h3>
                </div>
            
</div>

 <div class="container-fluid" style="margin-top: 30px;"> 
<br><br>
<div class="form-group row justify-content-center">	   	
<p class="font">Enter your username and we'll send you an email that will allow you to reset your password. </p>
</div>    	
		<div class="form-group row justify-content-center">    
		<input type="text" style="height: 38px; width: 350px; " placeholder="Enter Email" class="form-control border-dark" name="email" id="email" >
		</div>
		
		<br>
		<div class="form-group row justify-content-center">
		<a href="login.php" style="width: 160px; margin-right: 10px;"  id="back" name="back" class="btn font-weight-bold text-center"><b> Return to sign in </b></a>
		
		 <button type="submit" style="width: 120px;" name="submit" id="submit" href="#" class="btn font-weight-bold text-center"><b> Send Email </b></button>
		 
		</div>
</div>	
	
</form>

<script>

var c = 0;
function pop(){
	if(c == 0){
		document.getElementById("box").style.display = "block";
		c = 1;
	}else{
		document.getElementById("box").style.display = "none";
		c = 0;
	}
}

</script>

</body>
