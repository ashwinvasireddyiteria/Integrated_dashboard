<?php
include("config.php");
include("header.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $menu_code = $_POST['menu_code'];
    $role_name = $_POST['role_name'];
    $page_code = $_POST['page_code'];
    $privilege = $_POST['privilege'];
    $sql2 = " SELECT * FROM salesorder_dashboard_role_permissions sp INNER JOIN salesorder_dashboard_roles sr
	          ON (sr.role_id = sp.role_id)
	          WHERE sp.menu_code = '". $menu_code ."' AND 
              sr.role_name = '". $role_name ."' AND 
              sp.page_code = '". $page_code ."'	AND 
              sp.privilege = '". $privilege ."'  ";
			  
    $result2 = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result2) > 0) {
		$display_error = "Duplicate";
        
    }
    if(isset($display_error)){
	echo "<script type='text/javascript'>
	window.alert('$display_error');
	</script>";
    }  
	if (mysqli_num_rows($result2) == 0){
		 $sql3 = " SELECT * FROM salesorder_dashboard_role_permissions sp INNER JOIN salesorder_dashboard_roles sr
	          ON (sr.role_id = sp.role_id)
	          WHERE sp.menu_code = '". $menu_code ."' AND 
                    sr.role_name = '". $role_name ."' AND 
                    sp.page_code = '". $page_code ."' AND 
                    sp.privilege != '". $privilege ."' ";
	$result3 = 	mysqli_query($conn, $sql3);
    if (mysqli_num_rows($result3) > 0) {	
       $sql4 = " UPDATE salesorder_dashboard_role_permissions sp INNER JOIN salesorder_dashboard_roles sr ON 
		 (sr.role_id= sp.role_id) SET  sp.privilege = '". $privilege ."'	
                    WHERE sp.menu_code = '". $menu_code ."' AND 
                          sr.role_name = '". $role_name ."' AND 
                          sp.page_code = '". $page_code ."' ";
		$result4 = 	mysqli_query($conn, $sql4);	
     if($result4){
			$success4 = "Successfully Updated";
		}		
		if(isset($success4)){
		echo "<script type='text/javascript'>
	    window.alert('$Success4');
	      window.location.href='role_privilegesnew.php';
	      </script>";	
		}		
	}
		 
	 }
	 else {
        
		$sql5 = "INSERT INTO salesorder_dashboard_role_permissions (role_id, menu_code, privilege, page_code, status, creation_date, effective_start_date) VALUES
                 ((select role_id from salesorder_dashboard_roles where role_name = '". $role_name ."'), '". $menu_code ."', '". $privilege ."', '". $page_code ."', 'Active', CURDATE(), CURDATE() )";

       $result5= mysqli_query($conn, $sql5);
		if($result5){
        $Success = "Successfully Inserted";
		//exit();
		}
		if(isset($Success)){
	echo "<script type='text/javascript'>
	window.alert('$Success');
	window.location.href='role_privilegesnew.php';
	</script>";
       }
		else {
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

<!DOCTYPE html>

<body>
<br>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype = "multipart/form-data">

<div class="bs-example">
    <form>
      
       <div class="form-group row justify-content-center">
		<label for="role_name" style="font-size: 20px;" class="col-sm-2 col-form-label font-weight-bold">Role Name</label>
           <div class="col-sm-3">
           <select id="role_name" name="role_name" style="height: 37px; width:180px;" class="form-control border-dark">
		   <option value = "">	</option>
			<?php
             $sql1 = "SELECT distinct role_name FROM salesorder_dashboard_roles ";
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
      </div>
    </div>
  

     <div class="form-group row justify-content-center">
      <label for="page_code" style="font-size: 20px;" class="col-sm-2 col-form-label font-weight-bold">Page Code</label>
           <div class="col-sm-3">
        <select id="page_code" name="page_code" style="height: 37px; width:180px;" class="form-control border-dark">
		   <option value = "">	</option>
			<?php
             $sql1 = "SELECT distinct page_code FROM salesorder_dashboard_permission_setup ";
             $result1 = mysqli_query($conn, $sql1);
               if (mysqli_num_rows($result1) > 0) {
                                                // output data of each row
             while ($row = mysqli_fetch_assoc($result1)) {
                                                    ?>
		<option <?php echo (isset($page_code) && $page_code == $row["page_code"]) ? "selected='selected'" : ""; ?>  value="<?php echo $row["page_code"]; ?>"><?php echo $row["page_code"]; ?></option>
            <?php												
                                                }
                                              } else {
                                                echo "0 results";
                                            }
            ?>
      
	    </select>
      </div>
</div>

<div class="form-group row justify-content-center">
      <label for="menu_code" style="font-size: 20px;" class="col-sm-2 col-form-label font-weight-bold">Menu Code</label>
           <div class="col-sm-3">
		   <select id="menu_code" name="menu_code" style="height: 37px; width:180px;" class="form-control border-dark">
		   <option value = "">	</option>
			<?php
             $sql1 = "SELECT distinct menu_code FROM salesorder_dashboard_permission_setup ";
             $result1 = mysqli_query($conn, $sql1);
               if (mysqli_num_rows($result1) > 0) {
                                                // output data of each row
             while ($row = mysqli_fetch_assoc($result1)) {
                                                    ?>
		<option <?php echo (isset($menu_code) && $menu_code == $row["menu_code"]) ? "selected='selected'" : ""; ?>  value="<?php echo $row["menu_code"]; ?>"><?php echo $row["menu_code"]; ?></option>
            <?php												
                                                }
                                              } else {
                                                echo "0 results";
                                            }
            ?>
      
	    </select>
      </div>
	</div>

   <div class="form-group row justify-content-center">	
	   <label for="privilege" style="font-size: 20px;" class="col-sm-2 col-form-label font-weight-bold">Privilege</label>
           <div class="col-sm-3">
       <select id="privilege" name="privilege" style="height: 37px; width:180px;" class="form-control border-dark">            <option value = "">	</option>
			<option value = "Yes"<?php echo(isset($privilege) && $privilege == "Yes")? "selected='selected'" : ""; ?>>Yes</option> 
			<option value = "No"<?php echo(isset($privilege) && $privilege == "No")? "selected='selected'" : ""; ?>>No</option> 
			
	    </select>
      </div>
	</div>
	</div>

</table>
</div>	

<div class="form-group row  justify-content-center">
        <div class="col-sm-10 offset-sm-6 px-4" style="margin-top: 50px;">
		<a href="role_privilegesnew.php" class="btn  btn-lg font-weight-bold" style="background-color:#ADD8E6; margin-right: 40px;" name="cancel" id="cancel" role="button" type="submit" ><i class="fa fa-times"><b> Cancel</b></i></a>
          
        <button type="submit" style="background-color:#ADD8E6;"  name="save" id="save" class="btn btn-lg font-weight-bold" onclick="return validate()"><i class="fa fa-save"><b> Save</b></i></button> 
        </div>
    </div>
</div>    
</form>


<script type="text/javascript">


function validate() {
        var role_name = document.getElementById("role_name");
		var page_code = document.getElementById("page_code");
		var menu_code = document.getElementById("menu_code");
		var privilege = document.getElementById("privilege");
		
        if (role_name.value == "0" || role_name.value === "") {
            //If the "Please Select" option is selected display error.
            alert("Please select a role_name!");
            return false;
        }
        else if (page_code.value == "0" || page_code.value === "") {
            //If the "Please Select" option is selected display error.
            alert("Please select a page_code!");
            return false;
        }
		else if (menu_code.value == "0" || menu_code.value === "") {
            //If the "Please Select" option is selected display error.
            alert("Please select a menu_code!");
            return false;
        }
		else if (privilege.value == "0" || privilege.value === "") {
            //If the "Please Select" option is selected display error.
            alert("Please select a privilege!");
            return false;
        }
		else{
            return true;
        }
		
   }	
			
	
</script>	
</body>