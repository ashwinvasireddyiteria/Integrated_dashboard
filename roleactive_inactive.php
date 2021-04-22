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
$roleactive_save_button = search($menu_validation, 'menu_code', 'ROLEACTIVE_INACTIVE_SAVE'); 
$roleactive_cancel_button = search($menu_validation, 'menu_code', 'ROLEACTIVE_INACTIVE_CANCEL'); 
// Menu and Page code validations ends here //



$role_id = $_GET['role_id'];
$role_name = $_GET['role_name'];
$role_description = $_GET['role_description'];
$status = $_GET['status'];
$get_status_sql = mysqli_query($conn,"SELECT role_id, role_name, role_description, status FROM Integrated_dashboard_roles
                                       WHERE role_id = '". $role_id ."' ");


if (isset($_GET['submit'])) { 
     
    $role_id = $_GET['role_id'];
    $role_name = $_GET['role_name'];
    $status = $_GET['status'];
	$role_description = $_GET['role_description'];
	
    $sql2 = "SELECT status, role_name, role_description, role_id FROM Integrated_dashboard_roles
	WHERE role_id = '". $role_id ."'  
      AND role_name = '". $role_name ."'
      AND status = '". $status ."'
      AND role_description = '". $role_description ."'  ";
	  
	  
    $result2 = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result2) > 0) {
		$display_error = 'Duplicate';
        
    } 
	if(isset($display_error)){
	?>
	   <div id="box" class="font">
	     <a href="add_rolesnew.php" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
         <h6 class="justify-content-center" style="margin-top: 20px;">Role Already Exists</h6>
       </div>
	<?php
    }
	else {

		$sql3 = "UPDATE Integrated_dashboard_roles SET 
		         status = '". $status ."'
                 WHERE role_name = '". $role_name ."'
                 AND  role_id = '". $role_id ."' ";

       $result3= mysqli_query($conn, $sql3);
		If($result3){
		$success = "Role Updated Successfully ";	
		//exit();
		}
		if(isset($success)){
	?>
	   <div id="box" class="font">
	      <a href='add_rolesnew.php' onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 20px;">Role Updated Successfully</h6>
       </div>
	<?php
       }
		else{
			$display_error1 =" Connection error";
		}
		if(isset($display_error1)){
	?>
	   <div id="box" class="font">
	     <a href="add_rolesnew.php" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
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
        <label for="role_id" style="font-size: 20px;" class="col-sm-2 col-form-label font-weight-bold">Role ID</label>
        <div class="col-sm-3">
            <input type="text" class="form-control border-dark" id="role_id" placeholder="Enter Role ID"  readonly name="role_id" id="role_id" value="<?php echo $get_status_row['role_id'];  ?>">
        </div>
    </div>
    <div class="font form-group row  justify-content-center">
        <label for="role_name" style="font-size: 20px;" class="col-sm-2 col-form-label font-weight-bold">Role Name</label>
        <div class="col-sm-3">
            <input type="text" class="form-control border-dark" id="role_name" placeholder="Enter Role Name" readonly name="role_name" id="role_name" value="<?php echo $get_status_row['role_name'];  ?>">
        </div>
    </div>
	<div class="font form-group row  justify-content-center">
        <label for="role_description" style="font-size: 20px;" class="col-sm-2 col-form-label font-weight-bold">Role Description</label>
        <div class="col-sm-3">
            <input type="text" class="form-control border-dark" id="role_description" placeholder="Enter Description" readonly name="role_description" id="role_description" value="<?php echo $get_status_row['role_description'];  ?>">
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
	<?php if(!empty($roleactive_cancel_button)): ?>	
           <a href="add_rolesnew.php" class="btn font-weight-bold text-center" style="width: 135px; margin-right: 40px; margin-left: 20px;" name="cancel" id="cancel" role="button" type="submit" ><b> Cancel</b></a>
    <?php endif; ?>
	
	<?php if(!empty($roleactive_save_button)): ?>
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

