<?php
include("config.php");
include("header.php");

session_start();

$get_status = "SELECT distinct first_name, last_name, email, job_title , status from salesorder_dashboard_users 
	 order by user_id desc";
$get_status_sql = mysqli_query($conn,$get_status);

if(isset($_GET['search'])){
         $status = $_GET['status'];
         $first_name = $_GET['first_name'];
         $last_name = $_GET['last_name'];       
		 $email=$_GET['email'];
		 $job_title=$_GET['job_title'];
	$search = "select * from salesorder_dashboard_users ";
	$search .="WHERE user_id is not null ";

if ($first_name != ""){
	$search .=" and first_name like '". $first_name ."%'";
}	
if($status != ""){
	$search .=" and status like '". $status ."%'";
         }  
if($last_name != ""){
	$search .=" and last_name like '". $last_name ."%'";
         }		 
if($email != ""){
	$search .=" and email like '". $email ."%'";
         }
if($job_title != ""){
	$search .=" and job_title like '". $job_title ."%'";
         }		 
	$get_status_sql = mysqli_query($conn, $search);
         }
        


?>
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
           <label class="font-weight-bold" for="role_name">First Name</label>
        <select id="first_name" name="first_name" style="height: 37px; width:180px;" class="form-control border-dark">
		   <option value = "">	</option>
			<?php
             $sql1 = "SELECT distinct first_name FROM salesorder_dashboard_users ";
             $result1 = mysqli_query($conn, $sql1);
               if (mysqli_num_rows($result1) > 0) {
                                                // output data of each row
             while ($row = mysqli_fetch_assoc($result1)) {
                                                    ?>
		<option <?php echo (isset($first_name) && $first_name == $row["first_name"]) ? "selected='selected'" : ""; ?>  value="<?php echo $row["first_name"]; ?>"><?php echo $row["first_name"]; ?></option>
            <?php												
                                                }
                                              } else {
                                                echo "0 results";
                                            }
            ?>
      
        </select>
     </div>

      <div class="col-xs-2 px-2">
        <label class="font-weight-bold" for="last_name">Last Name</label>
        <select id="last_name" name="last_name" style="height: 37px; width:180px;" class="form-control border-dark">
		   <option value = "">	</option>
			<?php
             $sql1 = "SELECT distinct last_name FROM salesorder_dashboard_users ";
             $result1 = mysqli_query($conn, $sql1);
               if (mysqli_num_rows($result1) > 0) {
                                                // output data of each row
             while ($row = mysqli_fetch_assoc($result1)) {
                                                    ?>
		<option <?php echo (isset($last_name) && $last_name == $row["last_name"]) ? "selected='selected'" : ""; ?>  value="<?php echo $row["last_name"]; ?>"><?php echo $row["last_name"]; ?></option>
            <?php												
                                                }
                                              } else {
                                                echo "0 results";
                                            }
            ?>
      
	    </select>
      </div>

       <div class="col-xs-2 px-2" style="width:200px;">
           <label class="font-weight-bold" for="job_title">Job Title</label><br>
		   <select id="job_title" name="job_title" style="height: 37px; width:180px;" class="form-control border-dark">
		   <option value = "">	</option>
			<?php
             $sql1 = "SELECT distinct job_title FROM salesorder_dashboard_users ";
             $result1 = mysqli_query($conn, $sql1);
               if (mysqli_num_rows($result1) > 0) {
                                                // output data of each row
             while ($row = mysqli_fetch_assoc($result1)) {
                                                    ?>
		<option <?php echo (isset($job_title) && $job_title == $row["job_title"]) ? "selected='selected'" : ""; ?>  value="<?php echo $row["job_title"]; ?>"><?php echo $row["job_title"]; ?></option>
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
             $sql1 = "SELECT distinct status FROM salesorder_dashboard_users ";
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
		 <a href="admin1.php" class="btn font-weight-bold" style="background-color:#ADD8E6; height: 45px; width: 120px;" name="cancel" id="cancel" role="button" type="submit" ><i class="fa fa-times"><b> Cancel</b></i></a>
		 </div>
		
		
		 
</div>	
</form>




<div class="justify-content-center"  style="overflow-y:auto; margin-left:80px; margin-right:80px;">
<table class="table table-striped table-bordered table-sm" id="dtBasicExample" style="position: relative;" width="100%">

<thead style="font-weight: bold; background-color:#ADD8E6; text-transform: uppercase;">   
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Job Title</th>
<th>Status</th> 
</tr>
</thead>
<tbody>
    
    <?php
    while($get_status_row = mysqli_fetch_assoc($get_status_sql)) {
       
        ?>
    
        
<tr>
<td><?php echo $get_status_row["first_name"]; ?></td>
<td><?php echo $get_status_row["last_name"]; ?></td>
<td><a href="edit_user1.php?email=<?php echo $get_status_row["email"]; ?>">
<?php echo $get_status_row["email"]; ?></a></td>
<td><?php echo $get_status_row["job_title"]; ?></td>
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