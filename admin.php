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
$admin_config_button = search($menu_validation, 'menu_code', 'ADMIN_CONFIGURATION_SETUP');
$admin_user_button = search($menu_validation, 'menu_code', 'ADMIN_USER_ADMIN');
$admin_purge_button = search($menu_validation, 'menu_code', 'ADMIN_PURGE'); 
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


</style>
<!DOCTYPE html>
<body>

<br><br><br>
	
    
    <div class="a col-lg-12" style="position:absolute; top:25%;" > 
      <div class="font container-fluid">
      <table class="table table-responsive">
	   <div class="font form-group row " >
	  <div class="col-xs-2 px-2">
	  <?php if(!empty($admin_config_button)): ?>
       <a href="config/config_page.php"  class="btn btn-lg font-weight-bold text-left" style=" 
	   width: 250px;" id="config" role="button">Configuration</a>
   </div>
  <div class="col-xs-2 px-2">
  <textarea class="form-control text-left"  rows="1" style="width: 800px; height: 47px; font-size: 17px;" id="comment">Access to configuration pages. Searching, editing and mapping according to transaction types</textarea>
	  <?php endif; ?>	
	 
      </div> 
	  </div>
	  
	  <div class="form-group row " >
	   <div class="col-xs-2 px-2">
	  <?php if(!empty($admin_user_button)): ?> 
       <a href="admin_user.php" class="btn btn-lg font-weight-bold text-left" style=" 
		 width: 250px;" id="user_admin" role="button">User Admin</a>
   </div>
  <div class="col-xs-2 px-2">
  <textarea class="form-control text-left" rows="1" style="width: 800px; height: 47px; font-size: 17px;" id="comment1">Access to all the user pages. Creating, editing, adding users, roles and privileges</textarea>
      <?php endif; ?>
	  </div> 
	  </div>
	  
	  
	  <div class="form-group row " >
	   <div class="col-xs-2 px-2">
	  <?php if(!empty($admin_purge_button)): ?> 
       <a href="config/purge.php" class="btn btn-lg font-weight-bold text-left" style=" 
		 width: 250px;" id="purge" role="button">Purge</a>
  </div>
  <div class="col-xs-2 px-2">
  <textarea class="form-control text-left" rows="1" style="width: 800px; height: 47px; font-size: 17px;" id="comment2">Access to the purge page</textarea>
      <?php endif; ?>
	  </div> 
	  </div>
	  
	  <div class="form-group row" >
	 <div class="col-xs-2 px-2">
       <a href="index.php" class="btn btn-lg font-weight-bold text-left" style="
	   width: 250px;" role="button" >Back</a>
     </div>
	</div> 
	  
</table>
</div>
</div>
<script>
$('#config').ready(function () {
    $('#comment').hide();
}),$('#config').hover(function () {
    $('#comment').show();
}, function(){
	$('#comment').hide();
});

$('#user_admin').ready(function () {
    $('#comment1').hide();
}),$('#user_admin').hover(function () {
    $('#comment1').show();
}, function () {
    $('#comment1').hide();
});

$('#purge').ready(function () {
    $('#comment2').hide();
}),$('#purge').hover(function () {
    $('#comment2').show();
}, function () {
    $('#comment2').hide();
});
</script>

</body>