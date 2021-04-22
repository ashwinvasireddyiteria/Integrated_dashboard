<?php

  include('config.php');
  include("header.php");
  include("fontstyle.php");
  session_start();

// Menu and Page code validations //

$user_id = $_SESSION['user_id'];
$query_username = mysqli_query($conn, "SELECT * FROM  Integrated_dashboard_users WHERE user_id = '". $user_id ."' "); 
$fetch_username = mysqli_fetch_assoc($query_username);
$user_name = $fetch_username['user_name'];
$query_menu_validation = "SELECT su.user_name, su.role_id, sr.role_name, sp.menu_code, sp.page_code, sp.privilege 
FROM Integrated_dashboard_user_roles su, Integrated_dashboard_roles sr ,Integrated_dashboard_role_permissions sp 
where sr.role_id = su.role_id and su.role_id = sp.role_id and su.status ='Active' and sp.privilege = 'Yes' and su.user_name = '". $user_name ."' ";
$run_menu_validation = mysqli_query($conn,$query_menu_validation);
while($fetch_menu_validation = mysqli_fetch_assoc($run_menu_validation)){
	$i++;
	$menu_validation[$i]['menu_code'] = $fetch_menu_validation['menu_code'];
	$menu_validation[$i]['page_code'] = $fetch_menu_validation['page_code'];
	$menu_validation[$i]['privilege'] = $fetch_menu_validation['privilege'];
};
function search($array, $key, $value) { 
   

    $arrIt = new RecursiveArrayIterator($array); 
   

    $it = new RecursiveIteratorIterator($arrIt); 
   
    foreach ($it as $sub) { 
   
      
        $subArray = $it->getSubIterator(); 
   
        if ($subArray[$key] === $value) { 
            $result[] = iterator_to_array($subArray); 
         } 
    } 
    return $result; 
} 
$edituser_detailscancel_button = search($menu_validation, 'menu_code', 'EDIT_USER_DETAILS_CANCEL'); 
$edituser_detailsave_button = search($menu_validation, 'menu_code', 'EDIT_USER_DETAILS_SAVE');
$edituser_details_status = search($menu_validation, 'menu_code', 'EDIT_USER_DETAILS_STATUS');
// Menu and Page code validations ends here //

$email = $_GET['email'];
$get_status_sql = mysqli_query($conn,"SELECT * FROM Integrated_dashboard_users where email ='". $email ."' ");
 
 if (isset($_GET['submit'])) { 
    
	// Define variables
    $email = $_GET['email'];
    $user_name  = $_GET['email'];
	$first_name  = $_GET['first_name'];
	$middle_name  = $_GET['middle_name'];
	$last_name  = $_GET['last_name'];
	$phone  = $_GET['phone'];
	$status = $_GET['status'];
	$job_title = $_GET['job_title'];
	
    $sql2 = "SELECT * FROM Integrated_dashboard_users WHERE user_name ='".$user_name."' AND first_name = '".$first_name."' AND middle_name = '".$middle_name."' AND last_name = '".$last_name."' AND contact_number1 = '".$phone."' 
	AND status = '". $status ."' AND email = '". $email ."'  AND job_title = '". $job_title ."' ";
    $result2 = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result2) > 0) {
		$display_error = 'User Already Exists';
        
    } 
	if(isset($display_error)){
	?>
	   <div id="box" class="font">
	      <a href="edit_usernew.php" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 30px;">User Already Exists</h6>
       </div>
    <?php
    }
	else {	
        
		$sql3 = "UPDATE Integrated_dashboard_users SET first_name = '". $first_name ."' ,
		             middle_name = '". $middle_name ."', last_name = '". $last_name ."' , status = '". $status ."',
					 contact_number1 = '". $phone ."' ,  job_title = '". $job_title ."'
                      WHERE email = '". $email ."' ";

       $result3= mysqli_query($conn, $sql3);
		If($result3){
		$success = "User Updated Successfully";	
		//exit();
		}
		if(isset($success)){
	?>
	   <div id="box" class="font">
	      <a href='edit_usernew.php' onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 30px;">User Updated Successfully</h6>
       </div>
    <?php
       }
		else{
			$display_error1 =" Connection error";
		}
		if(isset($display_error1)){
	?>
	   <div id="box" class="font">
	      <a href="edit_usernew.php" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 30px;">Connection error</h6>
       </div>
    <?php
    }
	}
}

?>
<style>
    
	/* Set a style for the submit/register button */
  .btn {
            
            border: none;
            
            }
  .hide{
	  display: none;
      } 
	
   body {   
       margin:0; padding:0; }
    .container{ width:50%; }
	

	
</style>
<!DOCTYPE html>

<body>

<div class="col-sm col-md col-lg">
           <div class="page-header text-center">
                <div class="font page-title">
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
	
	<div class="font form-group row justify-content-center">
	   	    	
		<div class="col-xs-2 px-4">
		<label for="email"  style="width: 250px;height: auto;"><b>Email<span style="color: #f44336">*</span></b></label>    
		<input type="text" class="form-control border-dark" readonly name="email" id="email" value="<?php echo $get_status_row['email'];  ?>">
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
		<input type="text" class="form-control border-dark" name="job_title" id="job_title" value="<?php echo $get_status_row['job_title'];  ?>">
		</div>				
	</div>	
	
	<div class="font form-group row justify-content-center">
	  		
		<div class="col-xs-2 px-4">
		<label for="first_name" style="width: 250px;height: auto;"><b>First Name<span style="color: #f44336">*</span></b></label>   
		<input type="text" class="form-control border-dark" name="first_name" id="first_name" value="<?php echo $get_status_row['first_name'];  ?>">
		<span class="error_form" id="fname_error_message" style="color: #f44336"></span>
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
		<input type="text" class="form-control border-dark"  name="middle_name" id="middle_name" value="<?php echo $get_status_row['middle_name'];  ?>">
		</div>	
		
	</div>	
	
	<div class="font form-group row justify-content-center">
	   			
		<div class="col-xs-2 px-4">
		<label for="last_name" style="width: 250px;height: auto"><b>Last Name<span style="color: #f44336">*</span></b></label>    
		<input type="text" class="form-control border-dark"  name="last_name" id="last_name" value="<?php echo $get_status_row['last_name'];  ?>">
		<span class="error_form" id="lname_error_message" style="color: #f44336"></span>
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
		<input type="text" class="form-control border-dark"  onkeypress="return isNumber(event)" pattern="[0-9]*" name="phone" id="phone" value="<?php echo $get_status_row['contact_number1'];  ?>">
		</div>	
		
	</div>
	   	    	
	<div class="font form-group row justify-content-center">
	   	    	
		<div class="col-xs-2 px-4">
		<label for="email" style="width: 250px;height: auto;"><b>Username</b></label>    
		<input type="text" class="form-control border-dark" readonly id="email" value="<?php echo $get_status_row['email'];  ?>">
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
		<?php if(!empty($edituser_details_status)): ?>
	    <label for="status" style="width: 250px;  height: auto;" class="col-form-label "><b>Status</b></label>
        <div class="col-xs-2"> 
		   <select id="status" name="status" style="height: 37px; width:250px;" class="form-control border-dark">
		   <option  value = "Active"<?php echo(isset($status))? "selected='selected'" : ""; ?>> Active</option> 
		   <option  value = "Inactive"<?php echo(isset($status) )? "selected='selected'" : ""; ?>> Inactive</option>
           </select>
		   <?php endif; ?>
		</div>
		</div>
	
	</div>		
		<br> 
		
		<div class="font form-group row justify-content-center">
		
	     <div class="col-xs-2 px-2">
		 <?php if(!empty($edituser_detailscancel_button)): ?>
		  <a href="edit_usernew.php" class="btn font-weight-bold text-center" style="width: 135px;" name="cancel" id="cancel" role="button" type="submit" ><b> Cancel</b></a>
		 <?php endif; ?>
		 </div>
		
		 
		 <div class="col-xs-2 px-2">
		 <?php if(!empty($edituser_detailsave_button)): ?>
		 <button type="submit" style="width: 135px;margin-left: 40px;" name="submit" id="submit"  class="btn font-weight-bold text-center" onclick="return validate()"><b> Save</b></button> 
         <?php endif; ?>
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
<br>


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

<script type="text/javascript">

//function validateFirstname(fname) {
//       var re = /^[a-zA-Z]*$/;
//        return re.test(fname);
//    }
//function validateLastname(lname) {
//        var re = /^[a-zA-Z]*$/;
//        return re.test(lname);
  //  }	
 
function validate() {
	var fname=$("#first_name").val();
    var lname=$('#last_name').val();
	var error_fname = false;
	$("#fname_error_message").hide();	
	var error_lname = false;
	$("#lname_error_message").hide();
	
	if(fname===""||fname==null)
        {
			$("#fname_error_message").html("Enter First Name");
		    $("#fname_error_message").show();
		    $("#first_name").css("border-bottom", "2px solid #f44336");
            error_fname = true;
			return false;
        }
		else if(lname===""||lname==null)
        {
            $("#lname_error_message").html("Enter Last name");
				 $("#lname_error_message").show();
				 $("#last_name").css("border-bottom", "2px solid #f44336");
                 error_lname = true;
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

</html>
</body>

    
	
		
		