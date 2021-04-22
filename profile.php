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
// Menu and Page code validations ends here //


 
 
?>
<style>
    

	
	
</style>
<!DOCTYPE html>

<body>
<br><br>
<div class="col-sm col-md col-lg">
           <div class="page-header text-center">
                <div class="font page-title">
                      <h4> My Profile</h4>
                </div>
            </div>
</div>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET" enctype = "multipart/form-data">
<br>
 
 <div class="container-fluid"> 
      	<div class="col-sm col-md col-lg"> 
		<table class="table">
	
	<div class="font form-group row justify-content-center">
	   	    	
		<div class="col-xs-2 px-4">
		<label for="email"  style="width: 250px;height: auto;"><b>Email<span style="color: #f44336">*</span></b></label>    
		<input type="text" class="form-control border-dark" readonly name="email" id="email" value="<?php echo $fetch_username['email'];  ?>">
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
		<input type="text" class="form-control border-dark" readonly name="job_title" id="job_title" value="<?php echo $fetch_username['job_title'];  ?>">
		</div>				
	</div>	
	
	<div class="font form-group row justify-content-center">
	  		
		<div class="col-xs-2 px-4">
		<label for="first_name" style="width: 250px;height: auto;"><b>First Name<span style="color: #f44336">*</span></b></label>   
		<input type="text" class="form-control border-dark" readonly name="first_name" id="first_name" value="<?php echo $fetch_username['first_name'];  ?>">
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
		<input type="text" class="form-control border-dark" readonly name="middle_name" id="middle_name" value="<?php echo $fetch_username['middle_name'];  ?>">
		</div>	
		
	</div>	
	
	<div class="font form-group row justify-content-center">
	   			
		<div class="col-xs-2 px-4">
		<label for="last_name" style="width: 250px;height: auto"><b>Last Name<span style="color: #f44336">*</span></b></label>    
		<input type="text" class="form-control border-dark" readonly name="last_name" id="last_name" value="<?php echo $fetch_username['last_name'];  ?>">
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
		<input type="text" class="form-control border-dark" readonly onkeypress="return isNumber(event)" pattern="[0-9]*" name="phone" id="phone" value="<?php echo $fetch_username['contact_number1'];  ?>">
		</div>	
		
	</div>
	   	    	
	
	<br>
	<div class="font form-group row justify-content-center">
			
	
	<label for="status" style="margin-right: 20px;"><h4> Status</h4></label> 	
	   
	   <div class="custom-control custom-switch" style="margin-right: 50px;margin-top: 5px;" >
         <?php $status = $fetch_username['status'] ?>
         <?php if($status=='Active'){ ?>
	     <input id='status' class="custom-control-input" type='checkbox' checked disabled>
        <label class="custom-control-label" for='status'></label>
        <?php }
        else{
          ?>
      <input id='status' class='custom-control-input' type='checkbox' unchecked disabled>
        <label class="custom-control-label" for='status'></label>
        <?php
        }?>
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
		 <div class="col-xs-4 px-4">
		</div>			
		<div class="col-xs-4 px-4">
		</div>
		<div class="col-xs-4 px-4">
		</div>
	
		
		
	</div>	

</table>
</div>
</div>	


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



    
	
		
		