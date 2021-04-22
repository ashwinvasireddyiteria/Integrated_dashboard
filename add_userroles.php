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
$adduser_save_button = search($menu_validation, 'menu_code', 'ADD_USERROLES_SAVE');
$adduser_cancel_button = search($menu_validation, 'menu_code', 'ADD_USERROLES_CANCEL'); 
// Menu and Page code validations ends here //


if($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $user_name = $_POST['user_name'];
    $role_name = $_POST['role_name'];
    $sql2 = " SELECT * FROM Integrated_dashboard_user_roles su INNER JOIN Integrated_dashboard_roles sr
	          ON (sr.role_id = su.role_id)
	          where su.user_name = '". $user_name ."' AND 
              sr.role_name = '". $role_name ."' AND su.status = 'Active' ";
    $result2 = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result2) > 0) {
		$display_error = "Duplicate Role";
        
    }
    if(isset($display_error)){
	     ?>
	   <div id="box" class="font">
	      <a href='user_rolesnew.php' onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 20px;">Duplicate Role</h6>
       </div>
    <?php }
	 else {
        
        
		$sql3 = "INSERT INTO Integrated_dashboard_user_roles (user_name, role_id, effective_start_date, status, creation_date) VALUES
                 ('". $user_name ."', (select role_id from Integrated_dashboard_roles where role_name = '". $role_name ."'), CURDATE(), 'Active', CURDATE() )";

       $result3= mysqli_query($conn, $sql3);
		If($result3){
        $Success = "User Assigned new role successfully";
		//exit();
		}
		if(isset($Success)){
	?>
	   <div id="box" class="font">
	      <a href='user_rolesnew.php' onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 20px;">User Assigned new role Successfully</h6>
       </div>
    <?php
       }
		else {
			$display_error1 =" Connection error";
		}
		if(isset($display_error1)){
	?>
	   <div id="box" class="font">
	      <a href='user_rolesnew.php' onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 20px;">Connection Error</h6>
       </div>
    <?php
    }
	}
}

?>

<!DOCTYPE html>

<body>
<br>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype = "multipart/form-data">

<div class="bs-example">
    <form>
      
	   <div class="font form-group row justify-content-center">
      <label for="user_name" style="font-size: 20px;" class="col-sm-2 col-form-label font-weight-bold">User Name</label>
           <div class="col-sm-3">
        <select id="user_name" name="user_name" style="height: 37px; width:250px;" class="form-control border-dark">
		   <option value = "">	</option>
			<?php
             $sql1 = "SELECT user_name FROM Integrated_dashboard_users WHERE user_name NOT IN
                       (SELECT user_name FROM Integrated_dashboard_user_roles WHERE status = 'Active') ";
             $result1 = mysqli_query($conn, $sql1);
               if (mysqli_num_rows($result1) > 0) {
                                                // output data of each row
             while ($row = mysqli_fetch_assoc($result1)) {
                                                    ?>
		<option <?php echo (isset($user_name) && $user_name == $row["user_name"]) ? "selected='selected'" : ""; ?>  value="<?php echo $row["user_name"]; ?>"><?php echo $row["user_name"]; ?></option>
            <?php												
                                                }
                                              } else {
                                                echo "0 results";
                                            }
            ?>
      
	    </select>
		<span class="error_form" id="uname_error_message" style="color: #f44336"></span>
      </div>  
</div>
	  
	  
       <div class="font form-group row justify-content-center">
		<label for="role_name" style="font-size: 20px;" class="col-sm-2 col-form-label font-weight-bold">Role Name</label>
           <div class="col-sm-3">
           <select id="role_name" name="role_name" style="height: 37px; width:250px;" class="form-control border-dark">
		   <option value = "">	</option>
			<?php
             $sql1 = "SELECT role_name FROM Integrated_dashboard_roles  ";
             $result1 = mysqli_query($conn, $sql1);
               if (mysqli_num_rows($result1) > 0) {
                                                // output data of each row
             while ($row = mysqli_fetch_assoc($result1)) {
                                                    ?>
		<option <?php echo (isset($role_name) && $role_name == $row["role_name"]) ? "selected='selected'" : ""; ?>  value="<?php echo $row["role_name"]; ?>"><?php echo $row["role_name"]; ?></option>
            <?php												
                                                }
                                              } else {
                                                echo "0 results";
                                            }
            ?>
      
	    </select>
		<span class="error_form" id="rname_error_message" style="color: #f44336"></span>
      </div>
  </div>
 
<div class="font form-group row  justify-content-center">
        <div class="col-sm-10 offset-sm-6 px-4" style="margin-top: 50px;">
		<?php if(!empty($adduser_cancel_button)): ?>
		<a href="user_rolesnew.php" class="btn font-weight-bold" style="width: 120px; margin-right: 40px;" name="cancel" id="cancel" role="button" type="submit" ><b> Cancel</b></a>
        <?php endif; ?>	 
		<?php if(!empty($adduser_save_button)): ?>
        <button type="submit" style="width: 120px; "  name="save" id="save" class="btn font-weight-bold" onclick="return validate()"><b> Save</b></button> 
        <?php endif; ?>	
		</div>
    </div>
</div>    
</form>


<script type="text/javascript">


function validate() {
        var user_name = document.getElementById("user_name");
		var role_name = document.getElementById("role_name");
		
		$("#uname_error_message").hide();
	    $("#rname_error_message").hide();
	
	    var error_uname = false;	
	    var error_rname = false;
		
        if (user_name.value == "0" || user_name.value === "") {
            $("#uname_error_message").html("Please select a User Name");
			$("#uname_error_message").show();
		    $("#role_name").css("border-bottom", "2px solid #f44336");
            error_uname = true;
            return false;
        }
        else if (role_name.value == "0" || role_name.value === "") {
            $("#rname_error_message").html("Please select a Role Name");
			$("#rname_error_message").show();
		    $("#user_name").css("border-bottom", "2px solid #f44336");
            error_uname = true;
            
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