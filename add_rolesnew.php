<?php
include("config.php");
include("header.php");

session_start();
$get_status = "SELECT distinct role_id, role_name, role_description, status from salesorder_dashboard_roles order by role_id";
$get_status_sql = mysqli_query($conn,$get_status);



?>

<!DOCTYPE html>

<body>
<br>
<form action="" method="GET">
<div class="row">
<div class="col-lg-12">

<div class="container-fluid ">
<?php
if(isset($_GET['search'])){
         $status = $_GET['status'];
         $role_id = $_GET['role_id'];
         $role_name = $_GET['role_name'];       
		 $role_description=$_GET['role_description'];
	$search = "SELECT * FROM salesorder_dashboard_roles ";
	$search .= "WHERE role_id is not null ";

if ($role_id != ""){
	$search .=" and role_id like '". $role_id ."%'";
}	
if($status != ""){
	$search .=" and status like '". $status ."%'";
         }  
if($role_name != ""){
	$search .=" and role_name like '". $role_name ."%'";
         }		 
if($role_description != ""){
	$search .=" and role_description like '". $role_description ."%'";
         }		 
	$get_status_sql = mysqli_query($conn, $search);
         }
     ?>   

   
       <table class="table">
      
       <div class="form-group row justify-content-center">
	    
	<div class="col-xs-2 px-2">
           <label class="font-weight-bold" for="role_name">Role Id</label>
        <select id="role_id" name="role_id" style="height: 37px; width:180px;" class="form-control border-dark">
		   <option value = "">	</option>
			<?php
             $sql1 = "SELECT distinct role_id FROM salesorder_dashboard_roles ";
             $result1 = mysqli_query($conn, $sql1);
               if (mysqli_num_rows($result1) > 0) {
                                                // output data of each row
             while ($row = mysqli_fetch_assoc($result1)) {
                                                    ?>
		<option <?php echo (isset($role_id) && $role_id == $row["role_id"]) ? "selected='selected'" : ""; ?>  value="<?php echo $row["role_id"]; ?>"><?php echo $row["role_id"]; ?></option>
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

       <div class="col-xs-2 px-2" style="width:200px;">
           <label class="font-weight-bold" for="role_description">Description</label><br>
		   <select id="role_description" name="role_description" style="height: 37px; width:180px;" class="form-control border-dark">
		   <option value = "">	</option>
			<?php
             $sql1 = "SELECT distinct role_description FROM salesorder_dashboard_roles ";
             $result1 = mysqli_query($conn, $sql1);
               if (mysqli_num_rows($result1) > 0) {
                                                // output data of each row
             while ($row = mysqli_fetch_assoc($result1)) {
                                                    ?>
		<option <?php echo (isset($role_description) && $role_description == $row["role_description"]) ? "selected='selected'" : ""; ?>  value="<?php echo $row["role_description"]; ?>"><?php echo $row["role_description"]; ?></option>
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
             $sql1 = "SELECT distinct status FROM salesorder_dashboard_roles ";
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
		 <a href="add_role1.php" class="btn font-weight-bold" style="background-color:#ADD8E6; height: 45px; width: 120px;" name="edit" id="edit" role="button" type="submit" ><i class="fa fa-plus"><b> Add Role</b></i></a>
		</div>
		
		<div class="col-xs-2 px-2">
		 <a href="admin1.php" class="btn font-weight-bold" style="background-color:#ADD8E6; height: 45px; width: 120px;" name="cancel" id="cancel" role="button" type="submit" ><i class="fa fa-times"><b> Cancel</b></i></a>
		 </div>
		
		
		 
</div>	
</form>




<div class="justify-content-center"  style="overflow-y:auto; margin-left:80px; margin-right:80px;">
<table class="table table-striped table-bordered table-sm" id="dtBasicExample" style="position: relative;" width="100%">

<thead style="font-weight: bold; background-color:#ADD8E6; text-transform: uppercase;">   
<tr>
<th>Role Id</th>
<th>Role Name</th>
<th>Description</th>
<th>Status</th> 
</tr>
</thead>
<tbody>
    
    <?php
    while($get_status_row = mysqli_fetch_assoc($get_status_sql)) {
       
        ?>
    
        
<tr>
<td><?php echo $get_status_row["role_id"]; ?></td>
<td><?php echo $get_status_row["role_name"]; ?></td>
<td><?php echo $get_status_row["role_description"]; ?></td>
<td><div class="custom-control custom-switch" style="margin-left: 30px;">
      <input id="status" checked type="checkbox" class="custom-control-input"  name="status">
	  <label class="custom-control-label" for="status">
	 </label> </div> </td>
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
	

<script>
    $(document).ready(function () {
  $('#dtBasicExample').DataTable({
      pageLength: 100,
      "paging": true,
  });
  $('.dataTables_length').addClass('bs-select');
});
   </script>



<br>
</body>