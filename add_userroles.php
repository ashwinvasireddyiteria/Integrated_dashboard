<?php
include("config.php");
include("header.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $user_name = $_POST['user_name'];
    $role_name = $_POST['role_name'];
    $sql2 = " SELECT * FROM salesorder_dashboard_user_roles su INNER JOIN salesorder_dashboard_roles sr
	          ON (sr.role_id = su.role_id)
	          where su.user_name = '". $user_name ."' AND 
              sr.role_name = '". $role_name ."' ";
    $result2 = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result2) > 0) {
		$display_error = "Duplicate Role";
        
    }
    if(isset($display_error)){
	echo "<script type='text/javascript'>
	window.alert('$display_error');
	</script>";
    }     
	 else {
        
        
		$sql3 = "INSERT INTO salesorder_dashboard_user_roles (user_name, role_id, effective_start_date, status, creation_date) VALUES
                 ('". $user_name ."', (select role_id from salesorder_dashboard_roles where role_name = '". $role_name ."'), GETDATE(), 'Active', GETDATE() )";

       $result3= mysqli_query($conn, $sql3);
		If($result3){
        $Success = "Successfully Inserted";
		//exit();
		}
		if(isset($Success)){
	echo "<script type='text/javascript'>
	window.alert('$Success');
	window.location.href='user_rolesnew.php';
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
      <label for="user_name" style="font-size: 20px;" class="col-sm-2 col-form-label font-weight-bold">User Name</label>
           <div class="col-sm-3">
        <select id="user_name" name="user_name" style="height: 37px; width:180px;" class="form-control border-dark">
		   <option value = "">	</option>
			<?php
             $sql1 = "SELECT user_name FROM salesorder_dashboard_users WHERE user_name NOT IN
                       (SELECT user_name FROM salesorder_dashboard_user_roles) ";
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
      </div>
</div>
	  
	  
       <div class="form-group row justify-content-center">
		<label for="role_name" style="font-size: 20px;" class="col-sm-2 col-form-label font-weight-bold">Role Name</label>
           <div class="col-sm-3">
           <select id="role_name" name="role_name" style="height: 37px; width:180px;" class="form-control border-dark">
		   <option value = "">	</option>
			<?php
             $sql1 = "SELECT role_name FROM salesorder_dashboard_roles WHERE role_id NOT IN 
                       (SELECT role_id FROM salesorder_dashboard_user_roles)			 ";
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
 
<div class="form-group row  justify-content-center">
        <div class="col-sm-10 offset-sm-6 px-4" style="margin-top: 50px;">
		<a href="user_rolesnew.php" class="btn  btn-lg font-weight-bold" style="background-color:#ADD8E6; margin-right: 40px;" name="cancel" id="cancel" role="button" type="submit" ><i class="fa fa-times"><b> Cancel</b></i></a>
          
        <button type="submit" style="background-color:#ADD8E6;"  name="save" id="save" class="btn btn-lg font-weight-bold" onclick="return validate()"><i class="fa fa-save"><b> Save</b></i></button> 
        </div>
    </div>
</div>    
</form>


<script type="text/javascript">


function validate() {
        var user_name = document.getElementById("user_name");
		var role_name = document.getElementById("role_name");
		
		
        if (user_name.value == "0" || user_name.value === "") {
            //If the "Please Select" option is selected display error.
            alert("Please select a User Name!");
            return false;
        }
        else if (role_name.value == "0" || role_name.value === "") {
            //If the "Please Select" option is selected display error.
            alert("Please select a Role Name!");
            return false;
        }
		else{
            return true;
        }
		
   }	
			
	
</script>	
</body>