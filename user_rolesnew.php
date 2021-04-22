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
$userrole_search_button = search($menu_validation, 'menu_code', 'USER_ROLES_SEARCH');
$userrole_cancel_button = search($menu_validation, 'menu_code', 'USER_ROLES_CANCEL');
$userrole_add_button = search($menu_validation, 'menu_code', 'USER_ROLES_ADD'); 
$userrole_usernamelink_button = search($menu_validation, 'menu_code', 'USER_ROLES_USERNAME_LINK');

// Menu and Page code validations ends here //


$get_status = "SELECT su.user_name, sr.role_name, sr.role_description, su.status FROM Integrated_dashboard_roles sr
	INNER JOIN Integrated_dashboard_user_roles su ON (su.role_id=sr.role_id) ORDER BY su.role_id";

$get_status_sql = mysqli_query($conn,$get_status);

if(isset($_GET['search'])){
         $status = $_GET['status'];
         $user_name = $_GET['user_name'];
         $role_name = $_GET['role_name'];       
		 
		 
	$search = "SELECT su.user_name, sr.role_name, sr.role_description, su.status FROM Integrated_dashboard_user_roles su
	            INNER JOIN Integrated_dashboard_roles sr ON (su.role_id=sr.role_id) ";
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
    <div class="font form-group row justify-content-center">
	
	<div class="col-xs-2 px-2">
        <label class="font-weight-bold" for="user_name">User Name</label>
        <select id="user_name" name="user_name" style="height: 37px; width:220px;" class="form-control border-dark">
		   <option value = "">	</option>
			<?php
             $sql1 = "SELECT user_name FROM Integrated_dashboard_users ";
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
           <select id="role_name" name="role_name" style="height: 37px; width:220px;" class="form-control border-dark">
		   <option value = "">	</option>
			<?php
             $sql1 = "SELECT DISTINCT sr.role_name FROM Integrated_dashboard_roles sr INNER JOIN Integrated_dashboard_user_roles su ON (sr.role_id = su.role_id) ";
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
       <select id="status" name="status" style="height: 37px; width:220px;" class="form-control border-dark">            <option value = "">	</option>
			<?php
             $sql1 = "SELECT distinct status FROM Integrated_dashboard_user_roles ";
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

<div class="font form-group row justify-content-center">
	     <div class="col-xs-2 px-2">
		 <?php if(!empty($userrole_search_button)): ?>
		 <button type="submit" style="width: 135px;" name="search" id="search"  class="btn font-weight-bold text-center" value="Search"><b> Search</b></button> 
		 <?php endif; ?>
		 </div>
		
		 <div class="col-xs-2 px-2">
		 <?php if(!empty($userrole_add_button)): ?>
		 <a href="add_userroles.php" class="btn font-weight-bold text-center" style="width: 135px;" name="add" id="add" role="button" type="submit" ><b> Add Role</b></a>
		 <?php endif; ?>
		 </div>
		
		<div class="col-xs-2 px-2">
		<?php if(!empty($userrole_cancel_button)): ?>
		 <a href="admin_user.php" class="btn font-weight-bold text-center" style="width: 135px;" name="cancel" id="cancel" role="button" type="submit" ><b> Cancel</b></a>
		<?php endif; ?>
		</div>
		
		
		 
</div>	
</form>




<div class="justify-content-center"  style="overflow-y:auto; margin-left:80px; margin-right:80px;">
<table class="table table-striped table-bordered table-sm" id="bootstrap-data-table" style="position: relative;" width="100%">

<thead class="thread" style="font-weight: bold;">   
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
<td><?php if(!empty($userrole_usernamelink_button)): ?>
<a href="active_user.php?user_name=<?php echo $get_status_row['user_name']; ?>">
<?php echo $get_status_row['user_name']; ?></a>
<?php endif; ?></td>
<td><?php echo $get_status_row['role_name']; ?></td>
<td><?php echo $get_status_row['role_description']; ?></td>
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
	

     <script type="text/javascript">
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