<?php
include("config.php");
include("header.php");

session_start();

$get_status = "SELECT su.user_name, sr.role_name, sr.role_description, su.status FROM salesorder_dashboard_roles sr
	INNER JOIN salesorder_dashboard_user_roles su ON (su.role_id=sr.role_id) ORDER BY su.role_id";

$get_status_sql = mysqli_query($conn,$get_status);

if(isset($_GET['search'])){
         $status = $_GET['status'];
         $user_name = $_GET['user_name'];
         $role_name = $_GET['role_name'];       
		 
		 
	$search = "SELECT su.user_name, sr.role_name, sr.role_description, su.status FROM salesorder_dashboard_user_roles su
	            INNER JOIN salesorder_dashboard_roles sr ON (su.role_id=sr.role_id) ";
	$search .=" WHERE su.id is not null ";

if($user_name != ""){
	$search .=" and su.user_name like '". $user_name ."%'";
         } 
if ($role_name != ""){
	$search .=" and sr.role_name like '". $role_name ."%'";
}	
if($status != ""){
	$search .=" and su.status like '". $status ."%'";
         }  		 
	$get_status_sql = mysqli_query($conn, $search);
         }
        


?>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<!DOCTYPE html>

<body>
<br>
<form action="" method="GET">
<div class="row">
<div class="col-lg-12">

<div class="container-fluid ">
   <table class="table">
    <div class="form-group row justify-content-center">
	
	<div class="col-xs-2 px-2">
        <label class="font-weight-bold" for="user_name">User Name</label>
        <select id="user_name" name="user_name" style="height: 37px; width:180px;" class="form-control border-dark">
		   <option value = "">	</option>
			<?php
             $sql1 = "SELECT user_name FROM salesorder_dashboard_user_roles ";
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
	    
	<div class="col-xs-2 px-2">
           <label class="font-weight-bold" for="role_name">Role Name</label>
           <select id="role_name" name="role_name" style="height: 37px; width:180px;" class="form-control border-dark">
		   <option value = "">	</option>
			<?php
             $sql1 = "SELECT sr.role_name FROM salesorder_dashboard_roles sr INNER JOIN salesorder_dashboard_user_roles su ON (sr.role_id = su.role_id) ";
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

	  
	  <div class="col-xs-2 px-2" style="width:200px;">
        <label class="font-weight-bold" for="status">Status</label>
       <select id="status" name="status" style="height: 37px; width:180px;" class="form-control border-dark">            <option value = "">	</option>
			<?php
             $sql1 = "SELECT distinct status FROM salesorder_dashboard_user_roles ";
             $result1 = mysqli_query($conn, $sql1);
               if (mysqli_num_rows($result1) > 0) {
                                                // output data of each row
             while ($row = mysqli_fetch_assoc($result1)) {
                                                    ?>
		<option <?php echo (isset($status) && $status == $row["status"]) ? "selected='selected'" : ""; ?>  value="<?php echo $row["status"]; ?>"><?php echo $row["status"]; ?></option>
            <?php												
                                                }
                                              } else {
                                                echo "0 results";
                                            }
            ?>
      
	    </select>
      </div>
	  
	  
	  
	</div>
</table>
</div>	

<div class="form-group row justify-content-center">
	     <div class="col-xs-2 px-2">
		 <button type="submit" style="background-color:#ADD8E6; height: 45px; width: 120px;" name="search" id="search"  class="btn font-weight-bold"><i class="fa fa-search"><b> Search </b></i></button> 
		 </div>
		
		 <div class="col-xs-2 px-2">
		 <a href="add_userroles.php" class="btn font-weight-bold" style="background-color:#ADD8E6; height: 45px; width: 120px;" name="add" id="add" role="button" type="submit" ><i class="fa fa-plus"><b> Add Role</b></i></a>
		</div>
		
		<div class="col-xs-2 px-2">
		 <a href="admin1.php" class="btn font-weight-bold" style="background-color:#ADD8E6; height: 45px; width: 120px;" name="cancel" id="cancel" role="button" type="submit" ><i class="fa fa-times"><b> Cancel</b></i></a>
		 </div>
		
		
		 
</div>	
</form>




<div class="justify-content-center"  style="overflow-y:auto; margin-left:80px; margin-right:80px;">
<table class="table table-striped table-bordered table-sm" id="bootstrap-data-table" style="position: relative;" width="100%">

<thead style="font-weight: bold; background-color:#ADD8E6; text-transform: uppercase;">   
<tr>
<th>User Name</th>
<th>Role Name</th>
<th>Role Description</th> 
<th>Status</th>
</tr>
</thead>
<tbody>
    <?php 
                                         
         while($get_status_row = mysqli_fetch_assoc($get_status_sql)){										
    ?>   
        
<tr>
<td><a href="active_user.php?user_name=<?php echo $get_status_row['user_name']; ?>">
<?php echo $get_status_row['user_name']; ?></a></td>
<td><?php echo $get_status_row['role_name']; ?></td>
<td><?php echo $get_status_row['role_description']; ?></td>
<td><div class="custom-control custom-switch" style="margin-left: 30px;">
      <input id="status" checked type="checkbox" class="custom-control-input"  name="status">
	  <label class="custom-control-label" for="status">
	 </label> </div>
	
</tr>

    <?php
    }
?>   
    
    
</tbody>
</table>
</div>
    
   
</div>
</div>
</div>
<br>
	

     <script type="text/javascript">
 

		
   </script>



<br>
</body>