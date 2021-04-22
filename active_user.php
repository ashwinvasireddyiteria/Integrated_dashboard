<?php
include("config.php");
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
$activeuser_save_button = search($menu_validation, 'menu_code', 'ACTIVE_INACTIVE_USER_SAVE'); 
$activeuser_cancel_button = search($menu_validation, 'menu_code', 'ACTIVE_INACTIVE_USER_CANCEL'); 
// Menu and Page code validations ends here //



$user_name = $_GET['user_name'];
$role_name = $_GET['role_name'];
$status = $_GET['status'];
$effective_start_date = $_GET['effective_start_date'];
$effective_end_date = $_GET['effective_end_date'];
$get_status_sql = mysqli_query($conn,"SELECT su.status, su.user_name, su.effective_start_date, su.effective_end_date ,sr.role_name FROM Integrated_dashboard_user_roles su INNER JOIN Integrated_dashboard_roles sr ON (su.role_id = sr.role_id) WHERE su.user_name ='". $user_name ."'  ");


if (isset($_GET['submit'])) { 
     
    $user_name = $_GET['user_name'];
    $role_name = $_GET['role_name'];
    $status = $_GET['status'];
	$effective_start_date = $_GET['effective_start_date'];
	$effective_end_date = $_GET['effective_end_date'];
    $sql2 = "SELECT su.status, su.user_name, su.effective_start_date, su.effective_end_date ,sr.role_name FROM Integrated_dashboard_user_roles su INNER JOIN Integrated_dashboard_roles sr ON (su.role_id = sr.role_id) 
	WHERE su.user_name = '". $user_name ."'  
      AND sr.role_name = '". $role_name ."'
      AND su.status = '". $status ."' ";
	  
	  
    $result2 = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result2) > 0) {
		$display_error = 'Duplicate';
        
    } 
	if(isset($display_error)){
	?>
	   <div id="box" class="font">
	      <a href="user_rolesnew.php" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 20px;">Duplicate User Role</h6>
       </div>
    <?php
    }
	else {

	   $sql3 = "UPDATE Integrated_dashboard_user_roles SET 
		         effective_end_date = CURDATE() ,
		         status = '". $status ."'
                 WHERE user_name = '". $user_name ."' ";

       $result3= mysqli_query($conn, $sql3);
		If($result3){
		$success = "User Role Updated Successfully";	
		//exit();
		}
		if(isset($success)){
	?>
	   <div id="box" class="font">
	      <a href="user_rolesnew.php" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 20px;">User Role Updated Successfully</h6>
       </div>
    <?php
	
       }
		else{
			$display_error1 =" Connection error";
		}
		if(isset($display_error1)){
	?>
	   <div id="box" class="font">
	      <a href="user_rolesnew.php" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 20px;">Connection error</h6>
       </div>
    <?php
    }
	}
}

?>

<!DOCTYPE html>

<body>
<br><br>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET" enctype = "multipart/form-data">
<div class="bs-example">

    <form>
	<?php
                                      
      while($get_status_row = mysqli_fetch_assoc($get_status_sql)){
    
	  ?>
    <div class="font form-group row justify-content-center">
        <label for="role_name" style="font-size: 20px;" class="col-sm-2 col-form-label font-weight-bold">Role Name</label>
        <div class="col-sm-3">
            <input type="text" class="form-control border-dark" id="role_name" placeholder="Enter Role Name"  readonly name="role_name" id="role_name" value="<?php echo $get_status_row['role_name'];  ?>">
        </div>
    </div>
    <div class="font form-group row  justify-content-center">
        <label for="user_name" style="font-size: 20px;" class="col-sm-2 col-form-label font-weight-bold">User Name</label>
        <div class="col-sm-3">
            <input type="text" class="form-control border-dark" id="user_name" placeholder="Enter User Name" readonly name="user_name" id="user_name" value="<?php echo $get_status_row['user_name'];  ?>">
        </div>
    </div>
	<div class="font form-group row  justify-content-center">
        <label for="effective_start_date" style="font-size: 20px;" class="col-sm-2 col-form-label font-weight-bold">Start Date</label>
        <div class="col-sm-3">
            <input type="text" class="form-control border-dark" id="effective_start_date" placeholder="Enter Start Date" readonly name="effective_start_date" id="effective_start_date" value="<?php echo $get_status_row['effective_start_date'];  ?>">
        </div>
    </div>
	<div class="font form-group row  justify-content-center">
        <label for="effective_end_date" style="font-size: 20px;" class="col-sm-2 col-form-label font-weight-bold">End Date</label>
        <div class="col-sm-3">
            <input type="text" class="form-control border-dark" id="effective_end_date" name="effective_end_date" placeholder="Enter End Date" value="<?php echo $get_status_row['effective_end_date'];  ?>">
        </div>
    </div>
	
	<?php if($get_status_row['status'] != "Inactive" ): ?>
	<div class="font form-group row  justify-content-center">
        <label for="status" style="font-size: 20px;" class="col-sm-2 col-form-label font-weight-bold">Status</label>
        <div class="col-sm-3"> 
		   <select id="Status" name="status" style="height: 37px; width:180px;" class="form-control border-dark">
		   <option value = "Active"<?php echo(isset($status))? "selected='selected'" : ""; ?>> Active</option> 
		   <option value = "Inactive"<?php echo(isset($status) )? "selected='selected'" : ""; ?>> Inactive</option>
           </select>
		</div>
    </div>
	<?php endif; ?>
	
    <div class="font form-group row  justify-content-center">
        <div class="col-sm-10 offset-sm-6 px-4" style="margin-top: 50px;">
	<?php if(!empty($activeuser_cancel_button)): ?>	
           <a href="user_rolesnew.php" class="btn font-weight-bold text-center" style="width: 135px; margin-right: 40px; margin-left: 20px;" name="cancel" id="cancel" role="button" type="submit" ><b> Cancel</b></a>
    <?php endif; ?>
	
	<?php if(!empty($activeuser_save_button)): ?>
	<?php if(strpos($get_status_row['status'],'Inactive') === false): ?>
        <button type="submit" style="width: 135px;"  name="submit" id="submit" class="btn font-weight-bold text-center"><b> Save</b></button> 
	<?php endif; ?>	
	<?php endif; ?>	
        </div>
    </div>
   
   <?php
     } 
 ?>
</form>

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
<br>
</body>

