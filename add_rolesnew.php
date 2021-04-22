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
$addroles_search_button = search($menu_validation, 'menu_code', 'ADD_ROLES_SEARCH');
$addroles_cancel_button = search($menu_validation, 'menu_code', 'ADD_ROLES_CANCEL');
$addroles_add_button = search($menu_validation, 'menu_code', 'ADD_ROLES_ADD'); 
// Menu and Page code validations ends here //

$get_status = "SELECT distinct role_id, role_name, role_description, status from Integrated_dashboard_roles order by role_id";
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
	$search = "SELECT * FROM Integrated_dashboard_roles ";
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
           <label class="font font-weight-bold" for="role_id">Role Id</label>
        <select id="role_id" name="role_id" style="height: 37px; width:180px;" class="font form-control border-dark">
		   <option value = "">	</option>
			<?php
             $sql1 = "SELECT distinct role_id FROM Integrated_dashboard_roles ";
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
        <label class="font font-weight-bold" for="role_name">Role Name</label>
        <select id="role_name" name="role_name" style="height: 37px; width:180px;" class="font form-control border-dark">
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
      </div>

       <div class="col-xs-2 px-2" style="width:200px;">
           <label class="font font-weight-bold" for="role_description">Description</label><br>
		   <select id="role_description" name="role_description" style="height: 37px; width:180px;" class="font form-control border-dark">
		   <option value = "">	</option>
			<?php
             $sql1 = "SELECT distinct role_description FROM Integrated_dashboard_roles ";
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
        <label class="font font-weight-bold" for="status">Status</label>
       <select id="status" name="status" style="height: 37px; width:180px;" class="font form-control border-dark">            <option value = "">	</option>
			<?php
             $sql1 = "SELECT distinct status FROM Integrated_dashboard_roles ";
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
	     <div class="font col-xs-2 px-2">
		 <?php if(!empty($addroles_search_button)): ?>
		 <button type="submit" style="width: 135px;" name="search" id="search"  class="btn font-weight-bold text-center" value="Search"><b> Search </b></button> 
		 <?php endif; ?>
		 </div>
		
		 <div class="font col-xs-2 px-2">
		 <?php if(!empty($addroles_add_button)): ?>
		 <a href="add_role_details.php" class="btn font-weight-bold text-center" style="width: 135px;" name="add_role" id="add_role" role="button" type="submit" ><b> Add Role</b></a>
		 <?php endif; ?>
		 </div>
		
		<div class="font col-xs-2 px-2">
		<?php if(!empty($addroles_cancel_button)): ?>
		 <a href="admin_user.php" class="btn font-weight-bold text-center" style="width: 135px;" name="cancel" id="cancel" role="button" type="submit" ><b> Cancel</b></a>
		<?php endif; ?>
		</div>
		
		
		 
</div>	
</form>




<div class="justify-content-center"  style="overflow-y:auto; margin-left:80px; margin-right:80px;">
<table class="table table-striped table-bordered table-sm" id="dtBasicExample" style="position: relative;" width="100%">

<thead class="thread" style="font-weight: bold;">   
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
<td><a href="roleactive_inactive.php?role_id=<?php echo $get_status_row['role_id']; ?>">
<?php echo $get_status_row['role_id']; ?></a></td>
<td><?php echo $get_status_row["role_name"]; ?></td>
<td><?php echo $get_status_row["role_description"]; ?></td>
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