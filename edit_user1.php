<?php

  include('config.php');
  include("header.php");
session_start();
$email = $_GET['email'];
$get_status_sql = mysqli_query($conn,"SELECT * FROM salesorder_dashboard_users where email ='". $email ."' ");
 
 if (isset($_GET['submit'])) { 
    $email = $_GET['email'];
    $user_name  = $_GET['email'];
	$first_name  = $_GET['first_name'];
	$middle_name  = $_GET['middle_name'];
	$last_name  = $_GET['last_name'];
	$phone  = $_GET['phone'];
    $sql2 = "SELECT * FROM salesorder_dashboard_users WHERE user_name ='".$user_name."' AND first_name = '".$first_name."' AND middle_name = '".$middle_name."' AND last_name = '".$last_name."' AND contact_number1 = '".$phone."' ";
    $result2 = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result2) > 0) {
		$display_error = 'Duplicate';
        
    } 
	if(isset($display_error)){
	echo "<script type='text/javascript'>
	window.alert('$display_error');
	</script>";
    }
	else {
        
        // Define variables
		//$email = $_GET['email'];
        //$uname = $_GET['email'];
		//$fname = 'sonali';
		//$mname = $_GET['middle_name'];
		//$lname = $_GET['last_name'];
		//$contact = $_GET['phone'];
		
        
		$sql3 = "UPDATE salesorder_dashboard_users SET first_name = '". $first_name ."' ,
		             middle_name = '". $middle_name ."', last_name = '". $last_name ."' 
                      WHERE email = '". $email ."' ";

       $result3= mysqli_query($conn, $sql3);
		If($result3){
		$success = "Successfully Updated";	
		//exit();
		}
		if(isset($Success)){
	echo "<script type='text/javascript'>
	window.alert('$Success');
	window.location.href='edit_user.php';
	</script>";
       }
		else{
			$display_error1 =" Connection error";
		}
		if(isset($display_error1)){
	echo "<script type='text/javascript'>
	window.alert('$display_error1');
	</script>";
    }
	}
}
?>
<style>
    
	/* Set a style for the submit/register button */
  .registerbtn {
            
            border: none;
            
            }
  .hide{
	  display: none;
      } 
	
   body {   
       margin:0; padding:0; overflow-y:hidden; }
    .container{ width:50%; }
	
/* Rounded sliders */
.slider.round {
  border-radius: 25px;
}

.slider.round:before {
  border-radius: 50%;
}
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}
	
	
</style>
<!DOCTYPE html>

<body>

<div class="col-sm col-md col-lg">
           <div class="page-header text-center">
                <div class="page-title">
                      <h4> Edit User Details</h4>
                </div>
            </div>
</div>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET" enctype = "multipart/form-data">
<br>
 
 <div class="container-fluid"> 
      	<div class="col-sm col-md col-lg"> 
		<table class="table">
		<?php
                                      
      while($get_status_row = mysqli_fetch_assoc($get_status_sql)){
    
	  ?>
	
	<div class="form-group row justify-content-center">
	   	    	
		<div class="col-xs-2 px-4">
		<label for="email"  style="width: 250px;height: auto;"><b>Email<span style="color: #f44336">*</span></b></label>    
		<input type="text" class="form-control border-dark" placeholder="Enter email" readonly name="email" id="email" value="<?php echo $get_status_row['email'];  ?>">
        </div>
			
		<div class="col-xs-4 px-4">
		</div>
		<div class="col-xs-4 px-4">
		</div>	
		<div class="col-xs-4 px-4">
		</div>	
		<div class="col-xs-4 px-4">
		</div>	
		<div class="col-xs-4 px-4">
		</div>
		<div class="col-xs-4 px-4">
		</div>
		<div class="col-xs-4 px-4">
		</div>
		<div class="col-xs-4 px-4">
		</div>
		<div class="col-xs-4 px-4">
		</div>
			
		<div class="col-xs-2 px-4">
		<label for="email" style="width: 250px;height: auto;"><b>Job Title</b></label>    
		<input type="text" class="form-control border-dark" placeholder="Enter job_title" readonly name="job_title" id="job_title" value="<?php echo $get_status_row['job_title'];  ?>">
		</div>				
	</div>	
	
	<div class="form-group row justify-content-center">
	  		
		<div class="col-xs-2 px-4">
		<label for="first_name" style="width: 250px;height: auto;"><b>First Name<span style="color: #f44336">*</span></b></label>   
		<input type="text" class="form-control border-dark" placeholder="Enter first_name" name="first_name" id="first_name" value="<?php echo $get_status_row['first_name'];  ?>">
		</div>
				
		<div class="col-xs-4 px-4">
		</div>			
		<div class="col-xs-4 px-4">
		</div>		
		<div class="col-xs-4 px-4">
		</div>		
		<div class="col-xs-4 px-4">
		</div>		
		<div class="col-xs-4 px-4">
		</div>		
		<div class="col-xs-4 px-4">
		</div>
		<div class="col-xs-4 px-4">
		</div>
		<div class="col-xs-4 px-4">
		</div>
		<div class="col-xs-4 px-4">
		</div>
				
		<div class="col-xs-2 px-4">
		<label for="middle_name" style="width: 250px;height: auto;"><b>Middle Name</b></label>    
		<input type="text" class="form-control border-dark" placeholder="Enter middle_name" name="middle_name" id="middle_name" value="<?php echo $get_status_row['middle_name'];  ?>">
		</div>	
		
	</div>	
	
	<div class="form-group row justify-content-center">
	   			
		<div class="col-xs-2 px-4">
		<label for="last_name" style="width: 250px;height: auto"><b>Last Name<span style="color: #f44336">*</span></b></label>    
		<input type="text" class="form-control border-dark" placeholder="Enter last_name" name="last_name" id="last_name" value="<?php echo $get_status_row['last_name'];  ?>">
		</div>		
			
		<div class="col-xs-4 px-4">
		</div>		
		<div class="col-xs-4 px-4">
		</div>		
		<div class="col-xs-4 px-4">
		</div>			
		<div class="col-xs-4 px-4">
		</div>	
		<div class="col-xs-4 px-4">
		</div>
		<div class="col-xs-4 px-4">
		</div>
		<div class="col-xs-4 px-4">
		</div>
		<div class="col-xs-4 px-4">
		</div>
		<div class="col-xs-4 px-4">
		</div>
				
		<div class="col-xs-2 px-4">
		<label for="phone" style="width: 250px;height: auto;"><b>Contact Number</b></label>    
		<input type="text" class="form-control border-dark" placeholder="Enter phone_number" onkeypress="return isNumber(event)" pattern="[0-9]*" name="phone" id="phone" value="<?php echo $get_status_row['contact_number1'];  ?>">
		</div>	
		
	</div>
	   	    	
	<div class="form-group row justify-content-center">
	   	    	
		<div class="col-xs-2 px-4">
		<label for="email" style="width: 250px;height: auto;"><b>Username</b></label>    
		<input type="text" class="form-control border-dark" placeholder="Enter email" readonly id="email" value="<?php echo $get_status_row['email'];  ?>">
		</div>
				
		<div class="col-xs-4 px-4">
		</div>
		<div class="col-xs-4 px-4">
		</div>
		<div class="col-xs-4 px-4">
		</div>	
		<div class="col-xs-4 px-4">
		</div>		
		<div class="col-xs-4 px-4">
		</div>		
		<div class="col-xs-4 px-4">
		</div>
		<div class="col-xs-4 px-4">
		</div>
		<div class="col-xs-4 px-4">
		</div>
		<div class="col-xs-4 px-4">
		</div>
			
		<div class="col-xs-2 px-4">
		<label for="password" style="width: 250px;height: auto"><b>Password Reset</b></label>   
		<input type="text" class="form-control border-dark" placeholder="Enter password" name="password" id="password" value="<?php echo $get_status_row['password'];  ?>">
		</div>
		
	</div>		
	<br>
	<div class="form-group row justify-content-center">
	
	     <div class="col-xs-2 px-4">
		 <label for="status" style="margin-right: 30px;"><h4> Status</h4></label>   
		 <label class="switch">
         <input type="checkbox" checked>
         <span class="slider round"></span>
         </label>
        </div>	
		
		<div class="col-xs-4 px-4">
		</div>
		
	     <div class="col-xs-2 px-2">
		  <a href="edit_usernew.php" class="btn btn-lg font-weight-bold" style="background-color:#ADD8E6;" name="cancel" id="cancel" role="button" type="submit" ><i class="fa fa-times"><b> Cancel</b></i></a>
		 </div>
		
		 
		 <div class="col-xs-2 px-2">
		 <button type="submit" style="background-color:#ADD8E6;margin-left: 40px;" name="submit" id="submit"  class="registerbtn btn-lg font-weight-bold"><i class="fa fa-save"><b> Save</b></i></button> 
        </div>
		</div>
		 
	</div>	

</table>
</div>
</div>	

<?php
     } 
 ?>
</form>
</html>
</body>

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.slimscroll.js"></script>
<script type="text/javascript" src="js/select2.min.js"></script>
<script type="text/javascript" src="js/moment.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css" type="text/css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.js"></script>



    
	
		
		