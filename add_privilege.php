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
$addprivilege_save_button = search($menu_validation, 'menu_code', 'ADD_PRIVILEGE_SAVE');
$addprivilege_cancel_button = search($menu_validation, 'menu_code', 'ADD_PRIVILEGE_CANCEL'); 
// Menu and Page code validations ends here //

if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $menu_code = $_POST['menu_code'];
    $role_name = $_POST['role_name'];
    $page_code = $_POST['page_code'];
    $privilege = $_POST['privilege'];
    $sql2 = " SELECT * FROM Integrated_dashboard_role_permissions sp INNER JOIN Integrated_dashboard_roles sr
	          ON (sr.role_id = sp.role_id) 
	          WHERE sp.menu_code = '". $menu_code ."' AND 
              sr.role_name = '". $role_name ."' AND 
              sp.page_code = '". $page_code ."'	AND 
              sp.privilege = '". $privilege ."'  ";
			  
    $result2 = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result2) > 0) {
		$display_error = "Duplicate Privilege";
        
    }
    if(isset($display_error)){
	?>
	   <div id="box" class="font">
	      <a href="add_privilege.php" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 20px;">Duplicate Privilege</h6>
       </div>
    <?php
    }  
	if (mysqli_num_rows($result2) == 0){
		
		 $sql3 = " SELECT * FROM Integrated_dashboard_role_permissions sp INNER JOIN Integrated_dashboard_roles sr
	          ON (sr.role_id = sp.role_id)
	          WHERE sp.menu_code = '". $menu_code ."' AND 
                    sr.role_name = '". $role_name ."' AND 
                    sp.page_code = '". $page_code ."' AND 
                    sp.privilege != '". $privilege ."' ";
	$result3 = 	mysqli_query($conn, $sql3);
    if (mysqli_num_rows($result3) > 0) {
      	
       $sql4 = " UPDATE Integrated_dashboard_role_permissions sp INNER JOIN Integrated_dashboard_roles sr ON 
		 (sr.role_id= sp.role_id) SET  sp.privilege = '". $privilege ."' , sp.status = 'Active' ,effective_start_date = CURDATE()	
                    WHERE sp.menu_code = '". $menu_code ."' AND 
                          sr.role_name = '". $role_name ."' AND 
                          sp.page_code = '". $page_code ."' ";
		$result4 = 	mysqli_query($conn, $sql4);	
     if($result4){
		
			$success4 = "Privilege Updated Successfully";
		}		
		if(isset($success4)){
		?>
	   <div id="box" class="font">
	      <a href="role_privilegesnew.php" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 20px;">Privilege Updated Successfully</h6>
       </div>
    <?php
	      
		}		
	
		 
	 }
	 else  {
		
		$sql5 = "INSERT INTO Integrated_dashboard_role_permissions (role_id, menu_code, privilege, page_code, status, creation_date, effective_start_date) VALUES
                 ((select role_id from Integrated_dashboard_roles where role_name = '". $role_name ."'), '". $menu_code ."', '". $privilege ."', '". $page_code ."', 'Active', CURDATE(), CURDATE() )";

       $result5= mysqli_query($conn, $sql5);
		if($result5){
        $Success = "Privilege Created Successfully";
		//exit();
		}
		if(isset($Success)){
	?>
	   <div id="box" class="font">
	      <a href="role_privilegesnew.php" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 20px;">Privilege Created Successfully</h6>
       </div>
    <?php
       }
		else {
			$display_error1 =" Connection error";
		}
		if(isset($display_error1)){
	?>
	   <div id="box" class="font">
	      <a href="role_privilegesnew.php" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 20px;">Connection error</h6>
       </div>
    <?php
    }
	}
}

}

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="ajax-script.js" type="text/javascript"></script>
<!DOCTYPE html>

<body>
<br>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype = "multipart/form-data">

<div class="bs-example">
    <form>
      
       <div class="font form-group row justify-content-center">
		<label for="role_name" style="font-size: 20px;" class="col-sm-2 col-form-label font-weight-bold">Role Name</label>
           <div class="col-sm-3">
           <select id="role_name" name="role_name" style="height: 37px; width:180px;" class="form-control border-dark">
		   <option value = "">	</option>
			<?php
             $sql1 = "SELECT distinct role_name FROM Integrated_dashboard_roles ";
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
  

     <div class="font form-group row justify-content-center">
      <label for="page_code" style="font-size: 20px;" class="col-sm-2 col-form-label font-weight-bold">Page Code</label>
           <div class="col-sm-3">
        <select id="page_code" name="page_code" style="height: 37px; width:180px;" class="form-control border-dark">
		   <option value = "">	</option>
			<?php
             $pc_sql = "SELECT distinct page_code FROM Integrated_dashboard_permission_setup ";
             $pc_result = mysqli_query($conn, $pc_sql);
               if (mysqli_num_rows($pc_result) > 0) {
                                                // output data of each row
             while ($row1 = mysqli_fetch_assoc($pc_result)) {
                                                    ?>
		<option <?php echo (isset($page_code) && $page_code == $row1["page_code"]) ? "selected='selected'" : ""; ?>  value="<?php echo $row1["page_code"]; ?>"><?php echo $row1["page_code"]; ?></option>
            <?php												
                                                }
                                              } else {
                                                echo "0 results";
                                            }
            ?>
      
	    </select>
		<span class="error_form" id="pcode_error_message" style="color: #f44336"></span>
      </div>
</div>

<div class="font form-group row justify-content-center">
      <label for="menu_code" style="font-size: 20px;" class="col-sm-2 col-form-label font-weight-bold">Menu Code</label>
           <div class="col-sm-3">
		   <select id="menu_code" name="menu_code" style="height: 37px; width:180px;" class="form-control border-dark">
		   <option value = "">	</option>
			
      
	    </select>
		<span class="error_form" id="mcode_error_message" style="color: #f44336"></span>
      </div>
	</div>

   <div class="font form-group row justify-content-center">	
	   <label for="privilege" style="font-size: 20px;" class="col-sm-2 col-form-label font-weight-bold">Privilege</label>
           <div class="col-sm-3">
       <select id="privilege" name="privilege" style="height: 37px; width:180px;" class="form-control border-dark">            <option value = "">	</option>
			<option value = "Yes"<?php echo(isset($privilege) && $privilege == "Yes")? "selected='selected'" : ""; ?>>Yes</option> 
			<option value = "No"<?php echo(isset($privilege) && $privilege == "No")? "selected='selected'" : ""; ?>>No</option> 
			
	    </select>
		<span class="error_form" id="privilege_error_message" style="color: #f44336"></span>
      </div>
	</div>
	</div>

</table>
</div>	

<div class="font form-group row  justify-content-center display:flex">
        <div class="col-sm-10 offset-sm-6 px-4" style="margin-top: 50px;">
		<?php if(!empty($addprivilege_cancel_button)): ?>
		<a class="btn font-weight-bold text-center" href="role_privilegesnew.php"  style="height: 45px; width: 120px; margin-right: 40px; margin-left: 20px;" name="cancel" id="cancel" role="button" type="submit" ><b> Cancel</b></a>
        <?php endif; ?> 
        <?php if(!empty($addprivilege_save_button)): ?>		 
        <button type="submit" style="height: 45px; width: 120px;"  name="save" id="save" class="btn font-weight-bold text-center" onclick="return validate()"><b> Save</b></button> 
        <?php endif; ?>
		</div>
    </div>
</div>    
</form>


<script type="text/javascript">

    $('#page_code').on('change', function(){
        var page_code = $(this).val();
        if(page_code){
            $.ajax({
                type:'POST',
                url:'menu_code.php',
                data:{'page_code':page_code},
                success:function(html){
                    $('#menu_code').html(html);
                   
                }
            }); 
        }else{
            $('#menu_code').html('<option value="">Select Page Code First</option>');
           
        }
    });

function validate() {
        var role_name = document.getElementById("role_name");
		var page_code = document.getElementById("page_code");
		var menu_code = document.getElementById("menu_code");
		var privilege = document.getElementById("privilege");
		
		$("#rname_error_message").hide();
	    $("#pcode_error_message").hide();
	    $("#mcode_error_message").hide();
	    $("#privilege_error_message").hide();
	
	    var error_rname = false;	
	    var error_pcode = false;
	    var error_mcode = false;
	    var error_privilege = false;
		
        if (role_name.value == "0" || role_name.value === "") {
            $("#rname_error_message").html("Please select a Role Name");
			$("#rname_error_message").show();
		    $("#role_name").css("border-bottom", "2px solid #f44336");
            error_rname = true;
            return false;
        }
        else if (page_code.value == "0" || page_code.value === "") {
            $("#pcode_error_message").html("Please select a Page Code");
			$("#pcode_error_message").show();
		    $("#page_code").css("border-bottom", "2px solid #f44336");
            error_pcode = true;
            return false;
        }
		else if (menu_code.value == "0" || menu_code.value === "") {
            $("#mcode_error_message").html("Please select a Menu Code");
			$("#mcode_error_message").show();
		    $("#menu_code").css("border-bottom", "2px solid #f44336");
            error_mcode = true;
            return false;
        }
		else if (privilege.value == "0" || privilege.value === "") {
            $("#privilege_error_message").html("Please select a Privilege");
			$("#privilege_error_message").show();
		    $("#privilege").css("border-bottom", "2px solid #f44336");
            error_privilege = true;
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