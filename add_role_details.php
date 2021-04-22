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
$addrole_detailsave_button = search($menu_validation, 'menu_code', 'ADD_ROLE_DETAILS_SAVE');
$addrole_detailcancel_button = search($menu_validation, 'menu_code', 'ADD_ROLE_DETAILS_SAVE'); 
// Menu and Page code validations ends here //

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {
	
    
    $role_name  = $_POST['role_name'];
	$roledesc = $_POST['desc'];
    $sql1 = "SELECT * FROM Integrated_dashboard_roles WHERE role_name ='".$role_name."' ";
    $result1 = mysqli_query($conn, $sql1);

    if (mysqli_num_rows($result1) > 0) {
		$display_error = "Role Name already exists";
        
    }
	if(isset($display_error)){
	?>
	   <div id="box" class="font">
	      <a href='add_rolesnew.php' onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 20px;">Role Name already exists</h6>
       </div>
    <?php

    }
      
	  if (mysqli_num_rows($result1) == 0) {
		
		$sql = "INSERT INTO Integrated_dashboard_roles (role_name,role_description, status, creation_date) 
                      VALUES ('$role_name','$roledesc', 'Active', CURDATE())";

       $result= mysqli_query($conn, $sql);
		If($result){
	    $Success = "Role Created Successfully";
		//exit();
		}
		if(isset($Success)){
	?>
	   <div id="box" class="font">
	      <a href='add_rolesnew.php' onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 20px;">Role Created Successfully</h6>
       </div>
    <?php
       }

		else{
			$display_error1 =" Connection error";
		}
		if(isset($display_error1)){
	?>
	   <div id="box" class="font">
	      <a href='add_rolesnew.php' onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 20px;">Connection Error</h6>
       </div>
    <?php
    }
	
	}
}	
?>

<!DOCTYPE html>

<body>

<?php  ?>
 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype = "multipart/form-data">
 <br><br>
<div class="bs-example">
    <form>
    <div class="font form-group row justify-content-center">
        <label for="role_name" style="font-size: 20px;" class="col-sm-2 col-form-label font-weight-bold ">Role Name</label>
        <div class="col-sm-3">
            <input type="text" class="form-control border-dark" id="role_name" name="role_name" placeholder="Enter Role Name">
			<span class="error_form" id="rname_error_message" style="color: #f44336"></span>
        </div>
    </div>
	
    <div class="font form-group row  justify-content-center">
        <label for="desc" style="font-size: 20px;" class="col-sm-2 col-form-label font-weight-bold">Role Description</label>
        <div class="col-sm-3">
            <input type="text" class="form-control border-dark" id="desc" name="desc" placeholder="Enter Description">
			<span class="error_form" id="desc_error_message" style="color: #f44336"></span>
        </div>
    </div>
	
    <div class="font form-group row  justify-content-center">
        <div class="font col-sm-10 offset-sm-6 px-4" style="margin-top: 50px;">
		<?php if(!empty($addrole_detailcancel_button)): ?>
		<a href="add_rolesnew.php" class="btn btn-lg font-weight-bold text-center" style="width: 120px; margin-left: 70px; margin-right: 40px;"  name="cancel" id="cancel" role="button"><b> Cancel</b></a>
        <?php endif; ?>
        
       <?php if(!empty($addrole_detailsave_button)): ?> 
        <button type="submit" style="width: 120px;"  name="submit" id="submit" class="btn btn-lg font-weight-bold text-center" onclick="return validate()"><b> Save</b></button> 
       <?php endif; ?>
		</div>
    </div>
    
</form>
</div>

<script type="text/javascript">


function validate() {
         var role_name = $('#role_name').val();
         var desc      = $("#desc").val();
		 
		 $("#rname_error_message").hide();
	     $("#desc_error_message").hide();
	
	    var error_rname = false;	
	    var error_desc = false;
		
		if(role_name === ""||role_name == null)
        {
			$("#rname_error_message").html("Please Enter Role Name");
			$("#rname_error_message").show();
		    $("#role_name").css("border-bottom", "2px solid #f44336");
            error_fname = true;
            return false;
		}else if(desc === ""||desc == null)
        {
			$("#desc_error_message").html("Please Enter Role Description");
		    $("#desc_error_message").show();
		    $("#desc").css("border-bottom", "2px solid #f44336");
            error_email = true;
            return false;
        }else{
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
