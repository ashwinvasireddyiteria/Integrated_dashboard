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
$roleprivilegs_search_button = search($menu_validation, 'menu_code', 'ROLE_PRIVILEGES_SEARCH');
$roleprivilegs_cancel_button = search($menu_validation, 'menu_code', 'ROLE_PRIVILEGES_CANCEL');
$roleprivilegs_addprivilege_button = search($menu_validation, 'menu_code', 'ROLE_PRIVILEGES_ADD_PRIVILEGE'); 
// Menu and Page code validations ends here //

$get_status = "SELECT distinct sr.role_name, sp.page_code, sp.menu_code, sp.privilege, sp.status from Integrated_dashboard_role_permissions sp INNER JOIN Integrated_dashboard_roles sr  ON (sr.role_id = sp.role_id) order by sp.id";
$get_status_sql = mysqli_query($conn,$get_status);

if(isset($_GET['search'])){
         $status = $_GET['status'];
         $page_code = $_GET['page_code'];
         $role_name = $_GET['role_name'];       
		 $menu_code = $_GET['menu_code'];
		 $privilege = $_GET['privilege'];
	$search = "select sp.page_code, sp.menu_code, sp.privilege, sp.status , sr.role_name from Integrated_dashboard_role_permissions sp INNER JOIN Integrated_dashboard_roles sr ON (sr.role_id = sp.role_id) ";
	$search .=" WHERE sp.id is not null ";

if ($role_name != ""){
	$search .=" and sr.role_name like '". $role_name ."%'";
}	
if($page_code != ""){
	$search .=" and sp.page_code like '". $page_code ."%'";
         }  
if($menu_code != ""){
	$search .=" and sp.menu_code like '". $menu_code ."%'";
         }		 
if($privilege != ""){
	$search .=" and sp.privilege like '". $privilege ."%'";
         }
if($status != ""){
	$search .=" and sp.status like '". $status ."%'";
         }  		 
	$get_status_sql = mysqli_query($conn, $search);
         }
        


?>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
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
           <label class="font-weight-bold" for="role_name">Role Name</label>
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
      </div>

      <div class="col-xs-2 px-2">
        <label class="font-weight-bold" for="page_code">Page Code</label>
        <select id="page_code" name="page_code" style="height: 37px; width:180px;" class="form-control border-dark">
		   <option value = "">	</option>
			<?php
             $sql1 = "SELECT distinct page_code FROM Integrated_dashboard_permission_setup ";
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

       <div class="col-xs-2 px-2" style="width:200px;">
           <label class="font-weight-bold" for="menu_code">Menu Code</label><br>
		   <select id="menu_code" name="menu_code" style="height: 37px; width:180px;" class="form-control border-dark">
		   <option value = "">	</option>
			<?php
             $sql1 = "SELECT distinct menu_code FROM Integrated_dashboard_permission_setup ";
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
	  
	   <div class="col-xs-2 px-2" style="width:200px;">
        <label class="font-weight-bold" for="privilege">Privilege</label>
       <select id="privilege" name="privilege" style="height: 37px; width:180px;" class="form-control border-dark">            <option value = "">	</option>
			<?php
             $sql1 = "SELECT distinct privilege FROM Integrated_dashboard_role_permissions ";
             $result1 = mysqli_query($conn, $sql1);
               if (mysqli_num_rows($result1) > 0) {
                                                // output data of each row
             while ($row = mysqli_fetch_assoc($result1)) {
                                                    ?>
		<option <?php echo (isset($privilege) && $privilege == $row["privilege"]) ? "selected='selected'" : ""; ?>  value="<?php echo $row["privilege"]; ?>"><?php echo $row["privilege"]; ?></option>
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
             $sql1 = "SELECT distinct status FROM Integrated_dashboard_role_permissions ";
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
		 <?php if(!empty($roleprivilegs_search_button)): ?>
		 <button type="submit" style="width: 140px;" name="search" id="search"  class="btn font-weight-bold text-center" value="Search"><b>Search</b></button>  
		 <?php endif; ?>
		 </div>
		
		 <div class="col-xs-2 px-2">
		 <?php if(!empty($roleprivilegs_addprivilege_button)): ?>
		 <a href="add_privilege.php" class="btn font-weight-bold text-center" style=" width: 140px;" name="edit" id="edit" role="button" type="submit" ><b>Add Privilege</b></a>
		 <?php endif; ?>
		 </div>
		
		<div class="col-xs-2 px-2">
		<?php if(!empty($roleprivilegs_cancel_button)): ?>
		 <a href="admin_user.php" class="btn font-weight-bold" style="width: 140px;" name="cancel" id="cancel" role="button" type="submit" ><b>Cancel</b></a>
		 <?php endif; ?>
		 </div>
		
		
		 
</div>	
</form>




<div class="justify-content-center"  style="overflow-y:auto; margin-left:80px; margin-right:80px;">
<table class="table table-striped table-bordered table-sm" id="bootstrap-data-table"  style="position: relative;" width="100%">

<thead class="thread" style="font-weight: bold;">   
<tr>
<th>Role Name</th>
<th>Page Code</th>
<th>Menu Code</th>
<th>Privilege</th> 
<th>Status</th>
</tr>
</thead>
<tbody>
    <?php 
                                         
         while($get_status_row = mysqli_fetch_assoc($get_status_sql)){										
    ?>   
        
<tr>
<td><?php echo $get_status_row['role_name']; ?></td>
<td><?php echo $get_status_row['page_code']; ?></td>
<td><?php echo $get_status_row['menu_code']; ?></td>
<td><?php echo $get_status_row['privilege']; ?></td>
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
 
     <script src="assets/js/lib/data-table/datatables.min.js"></script>
     <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
     <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
     <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
     <script src="assets/js/lib/data-table/jszip.min.js"></script>
     <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
     <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
     <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
     <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
     <script src="assets/js/init/datatables-init.js"></script>	

<script type="text/javascript">
    

 $('#table-filter').on('change', function(){
        var selected_status = $(this).children("option:selected").val();
        window.location.href='role_privilegesnew.php?val="'+selected_status+'"';
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
