<?php 
include("header_login.php");
include("config.php");
include('fontstyle.php');
session_start();
$user_id = $_GET['id'];

if(isset($_POST['submit'])){

	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	if(!empty($password)){
		
	$update_query = " UPDATE Integrated_dashboard_users SET password = '". $password ."' 
	                 WHERE user_id = '". $user_id ."' ";
	
	$result = mysqli_query($conn, $update_query);
		If($result){
			$Success = "Password Set Successfully ";
		}
		if(isset($Success)){
	     ?>
	   <div id="box" class="font">
	   <a href='login.php' onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
       <h6 class="justify-content-center" style="margin-top: 20px;">Password Set Successfully </h6>
       </div>
		<?php
       }
		else {
			$display_error1 =" Connection error";
		}
		if(isset($display_error1)){
		?>
	   <div id="box" class="font">
	     <a href="set_password.php" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
         <h6 class="justify-content-center" style="margin-top: 20px;">Connection error</h6>
       </div>
		<?php
    }
	
}if(empty($password)) {
		$message = " Please enter Passsword";
	}if(isset($message)){
	?>
	   <div id="box" class="font">
	     <a href="set_password.php" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
         <h6 class="justify-content-center" style="margin-top: 20px;">Please enter Passsword</h6>
       </div>
		<?php
    }
}
?>

<style>
.title{
  left: 45%;
  position: absolute; 
}
</style>	
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!DOCTYPE html>
<body>
<br>
<form action="" method="POST" enctype = "multipart/form-data">

<div class="container-fluid">
          
                <div class="title">
                      <h3> Set Password</h3>
                </div>
           
</div>
<br><br>
  <div class="container-fluid"> 
           
	   	<div class="form-group row justify-content-center" style=" margin-top: 30px;">	
		<label for="password" style="width: 160px; height: auto; font-size: 17px;"><b>Password<span style="color: #f44336">*</span></b></label> <br>   
		<input type="password" style="height: 35px; width: 200px; " class="form-control border-dark" name="password" id="password">
		</div>
		<div class="col-sm-8 float-right">
		<span class="error_form float-center" id="password_error_message" style="color: #f44336; margin-left: 200px;"></span>
		</div>
		<br>
		<div class="col-sm-8 float-right">
		<label style="color: #f44336; font-size: 11px;">**Password must contain at-least 1 uppercase,1 lowercase,1 special character and minimum length of 8 characters</label>
		</div>
		
		
		
		<br>
		<div class="form-group row justify-content-center" style="margin-top: 20px;">
		<label for="password" style="width: 160px; height: auto; font-size: 17px; "><b>Confirm Password<span style="color: #f44336">*</span></b></label>  <br>  
		<input type="password" style="height: 35px; width: 200px; " class="form-control border-dark" name="conpwd" id="conpwd">
		</div>
		<div class="col-sm-8 float-right">
		<span class="error_form" id="rpassword_error_message" style="color: #f44336; margin-left: 200px; "></span>
		</div>
		
		
		<br><br>
		
		<div class="form-group row justify-content-center">
		 <button type="submit" style="height: 41px; width: 120px; font-size: 19px" name="submit" id="submit" class="btn font-weight-bold text-center" onclick="return validate()"> Submit </button>
		</div>
		
	
</div>	
</form>

<script type="text/javascript"> 

function checkPassword(str)
    {
        var re = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
        return re.test(str);
    }
	
function validate() {
        var password = $('#password').val();
        var repeatpassword = $('#conpwd').val();

        $("#password_error_message").hide();
		$("#rpassword_error_message").hide();

        var error_password = false;
        var error_rpassword = false; 
		
		if(password==null)
        {   
		    $("#password_error_message").html("Enter Password");
		    $("#password_error_message").show();
		    $("#password").css("border-bottom", "2px solid #f44336");
            error_password = true;
			return false;
			
        }
        else if(!checkPassword(password))
        {   
	        $("#password_error_message").html("Invalid Password");
		    $("#password_error_message").show();
		    $("#password").css("border-bottom", "2px solid #f44336");
            error_password = true;
            return false;
        }else if(password!==repeatpassword)
        {
            $("#rpassword_error_message").html("Password Does not Match");
		    $("#rpassword_error_message").show();
		    $("#repeatpassword").css("border-bottom", "2px solid #f44336");
            error_rpassword = true;
            return false;
        }
        else{
            return true;
        }
    }
	
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
