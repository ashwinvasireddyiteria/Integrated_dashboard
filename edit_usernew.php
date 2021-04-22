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
where sr.role_id = su.role_id and su.role_id = sp.role_id and su.status ='Active' and sp.privilege = 'Yes' and su.user_name = '". $user_name ."' and sr.role_name = 'Admin' ";
$run_menu_validation = mysqli_query($conn,$query_menu_validation);
if (mysqli_num_rows($run_menu_validation) > 0) {
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
$edituser_search_button = search($menu_validation, 'menu_code', 'EDIT_USER_SEARCH'); 
$edituser_cancel_button = search($menu_validation, 'menu_code', 'EDIT_USER_CANCEL');
$edituser_emaillink_button = search($menu_validation, 'menu_code', 'EDIT_USER_EMAIL_LINK');
// Menu and Page code validations ends here //


$get_status = "SELECT distinct first_name, last_name, email, job_title , status from Integrated_dashboard_users 
	 order by user_id desc";
$get_status_sql = mysqli_query($conn,$get_status);

if(isset($_GET['search'])){
         $status = $_GET['status'];
         $first_name = $_GET['first_name'];
         $last_name = $_GET['last_name'];       
		 $email=$_GET['email'];
		 $job_title=$_GET['job_title'];
	$search = "select * from Integrated_dashboard_users ";
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
 
 }
else if(mysqli_num_rows($run_menu_validation) == 0) {
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
$edituser_search_button = search($menu_validation, 'menu_code', 'EDIT_USER_SEARCH'); 
$edituser_cancel_button = search($menu_validation, 'menu_code', 'EDIT_USER_CANCEL');
$edituser_emaillink_button = search($menu_validation, 'menu_code', 'EDIT_USER_EMAIL_LINK');
// Menu and Page code validations ends here //


$get_status = "SELECT first_name, last_name, email, job_title , status from Integrated_dashboard_users 
	            WHERE user_id = '". $user_id ."' ";
$get_status_sql = mysqli_query($conn,$get_status);
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
           <label class="font font-weight-bold" for="first_name">First Name</label>
        <select id="first_name" name="first_name" style="height: 37px; width:180px;" class="font form-control border-dark">
		   <option value = "">	</option>
			<?php
             $sql1 = "SELECT distinct first_name FROM Integrated_dashboard_users ";
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
        <label class="font font-weight-bold" for="last_name">Last Name</label>
        <select id="last_name" name="last_name" style="height: 37px; width:180px;" class="font form-control border-dark">
		   <option value = "">	</option>
			<?php
             $sql1 = "SELECT distinct last_name FROM Integrated_dashboard_users ";
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
           <label class="font font-weight-bold" for="job_title">Job Title</label><br>
		   <select id="job_title" name="job_title" style="height: 37px; width:180px;" class="font form-control border-dark">
		   <option value = "">	</option>
			<?php
             $sql1 = "SELECT distinct job_title FROM Integrated_dashboard_users ";
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
        <label class="font font-weight-bold" for="status">Status</label>
       <select id="status" name="status" style="height: 37px; width:180px;" class="font form-control border-dark">            <option value = "">	</option>
			<?php
             $sql1 = "SELECT distinct status FROM Integrated_dashboard_users ";
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
		 <?php if(!empty($edituser_search_button)): ?>
		 <button type="submit" style="width: 135px;" name="search" id="search"  class="btn font-weight-bold text-center" value="Search"><b> Search </b></button> 
		 <?php endif; ?>
		 </div>
		
		
		<div class="col-xs-2 px-2">
		<?php if(!empty($edituser_cancel_button)): ?>
		 <a href="admin_user.php" class="btn font-weight-bold text-center" style="width: 135px;" name="cancel" id="cancel" role="button" type="submit"><b> Cancel </b></a>
		<?php endif; ?>
	    </div>
		 
</div>	
</form>




<div class="justify-content-center"  style="overflow-y:auto; margin-left:80px; margin-right:80px;">
<table class="table table-striped table-bordered table-sm" id="dtBasicExample" style="position: relative;" width="100%">

<thead class="thread" style="font-weight: bold;">   
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
<td><?php if(!empty($edituser_emaillink_button)): ?>
<a href="edit_user_details.php?email=<?php echo $get_status_row["email"]; ?>">
<?php echo $get_status_row["email"]; ?></a>
<?php endif; ?></td>
<td><?php echo $get_status_row["job_title"]; ?></td>
<td><div class="custom-control custom-switch" style="margin-left: 30px;">
    <?php $status = $get_status_row['status'] ?>
     <?php if($status=='Active'){ ?>
	 <input id='status' class="custom-control-input" onclick="$status=1" type='checkbox' checked >
        <label class="custom-control-label" for='status'></label>
      <?php }
        else{
          ?>
      <input id='status' class='custom-control-input' onclick="$status=0" type='checkbox' unchecked >
        <label class="custom-control-label" for='status'></label>
        <?php
        }?>
      </div></td>
	
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

$('#table-filter').on('change', function(){
        var selected_status = $(this).children("option:selected").val();
        window.location.href='user_rolesnew.php?val="'+selected_status+'"';
       table.search(this.value).draw();   
    });
});

$(document).ready(function(){
         $(function() {
          $("#table-filter").val("<?php if($val==null){echo 0;}else{echo $val;} ?>");
           });
        });


 </script>



<br>
</body>