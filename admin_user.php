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
$adminuser_createuser_button = search($menu_validation, 'menu_code', 'ADMIN_USER_CREATE_USER'); 
$adminuser_edituser_button = search($menu_validation, 'menu_code', 'ADMIN_USER_EDIT_USER'); 
$adminuser_addroles_button = search($menu_validation, 'menu_code', 'ADMIN_USER_ADD_ROLES'); 
$adminuser_roleprivilege_button = search($menu_validation, 'menu_code', 'ADMIN_USER_ROLE_PRIVILEGES'); 
$adminuser_userroles_button = search($menu_validation, 'menu_code', 'ADMIN_USER_USER_ROLES'); 
// Menu and Page code validations ends here //

?>
<style>

.a {

width: 100%;
position: absolute;
left: 0;
right: 0;
margin-left: auto;
margin-right: auto;

}

title {
	font-size: 30px; 
}

</style>
<!DOCTYPE html>
<body>

<br><br>
	
    
<div class="a col-lg-12" style="position:absolute; top:25%;" > 
 <div class="font container-fluid">
  <table class="table table-responsive">
	  
     
	<div class="form-group row " >
     <div class="col-xs-2 px-2">
	   <?php if(!empty($adminuser_createuser_button)): ?>
       <a href="create_user.php" class="btn btn-lg font-weight-bold text-left" style=" 
		width: 200px;" id="create" role="button">Create User</a>
     </div>
     <div class="col-xs-2 px-2">
        <textarea class="form-control text-left" rows="1" style="width: 800px; height: 47px; font-size: 17px;" id="comment1">Access to Creating new users</textarea>
        <?php endif; ?> 
	 </div>
    </div>
	  
	<div class="form-group row" >
     <div class="col-xs-2 px-2">
	   <?php if(!empty($adminuser_edituser_button)): ?>
       <a href="edit_usernew.php" class="btn btn-lg font-weight-bold text-left" style=" 
		width: 200px;" id="edit" role="button">Edit User</a>
     </div>
     <div class="col-xs-2 px-2">
       <textarea class="form-control text-left" rows="1" style="width: 800px; height: 47px; font-size: 17px;" id="comment2">Access to Editing existing user deatils</textarea>
       <?php endif; ?>
	 </div>
	</div>
	  
	<div class="form-group row " >
     <div class="col-xs-2 px-2">
	   <?php if(!empty($adminuser_addroles_button)): ?>
       <a href="add_rolesnew.php" class="btn btn-lg font-weight-bold text-left" style=" 
		width: 200px;" id="add" role="button">Add Roles</a>
     </div>
     <div class="col-xs-2 px-2">
        <textarea class="form-control text-left" rows="1" style="width: 800px; height: 47px; font-size: 17px;" id="comment3">Access to search and see existing roles and Adding new roles</textarea>
        <?php endif; ?>    
	 </div>
    </div>
	  
	<div class="form-group row " >
	 <div class="col-xs-2 px-2">
	   <?php if(!empty($adminuser_roleprivilege_button)): ?>
       <a href="role_privilegesnew.php" class="btn btn-lg font-weight-bold text-left" style=" 
		width: 200px;" id="role" role="button">Role Privileges</a>
     </div>
     <div class="col-xs-2 px-2">
        <textarea class="form-control text-left" rows="1" style="width: 800px; height: 47px; font-size: 17px;" id="comment4">Access to search and see existing role privileges and adding new role privileges</textarea>
        <?php endif; ?>
	 </div>
	</div>
	  
	<div class="form-group row" >
	 <div class="col-xs-2 px-2">
	   <?php if(!empty($adminuser_userroles_button)): ?>
       <a href="user_rolesnew.php" class="btn btn-lg font-weight-bold text-left" style=" 
		width: 200px;" id="user" role="button">User Roles</a>
     </div>
     <div class="col-xs-2 px-2">
       <textarea class="form-control text-left" rows="1" style="width: 800px; height: 47px; font-size: 17px;" id="comment5">Access to search and see existing user roles and adding new user roles</textarea>
      <?php endif; ?>
	 </div>
	</div>
	  
	<div class="form-group row" >
	 <div class="col-xs-2 px-2">
       <a href="admin.php" class="btn btn-lg font-weight-bold text-left" style="
	   width: 200px;" role="button" >Back</a>
     </div>
	</div> 

  </table>
 </div>
</div>
<script>
$('#create').ready(function () {
    $('#comment1').hide();
}),$('#create').hover(function () {
    $('#comment1').show();
}, function(){
	$('#comment1').hide();
});

$('#edit').ready(function () {
    $('#comment2').hide();
}),$('#edit').hover(function () {
    $('#comment2').show();
}, function () {
    $('#comment2').hide();
});

$('#add').ready(function () {
    $('#comment3').hide();
}),$('#add').hover(function () {
    $('#comment3').show();
}, function () {
    $('#comment3').hide();
});

$('#role').ready(function () {
    $('#comment4').hide();
}),$('#role').hover(function () {
    $('#comment4').show();
}, function () {
    $('#comment4').hide();
});

$('#user').ready(function () {
    $('#comment5').hide();
}),$('#user').hover(function () {
    $('#comment5').show();
}, function () {
    $('#comment5').hide();
});
</script>

</body>