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
$config_transtype_button = search($menu_validation, 'menu_code', 'CONFIG_PAGE_TRANSACTION_TYPE_MAPPING'); 
$config_errorpriority_button = search($menu_validation, 'menu_code', 'CONFIG_PAGE_ERROR_PRIORITY_MAPPING'); 
$config_insertfetch_button = search($menu_validation, 'menu_code', 'CONFIG_PAGE_INSERT_FETCH_API'); 
$config_reprocess_button = search($menu_validation, 'menu_code', 'CONFIG_PAGE_REPROCESS_MAPPING'); 
$config_branding_button = search($menu_validation, 'menu_code', 'CONFIG_PAGE_BRANDING'); 
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

<br><br>
	
    
    <div class="a col-lg-12" style="position:absolute; top:25%;" > 
      <div class="container-fluid">
      <table class="table table-responsive">
	  
	<div class="form-group row" >
     <div class="col-xs-2 px-2">
	    <?php if(!empty($config_transtype_button)): ?>
        <a href="transaction.php" class="btn btn-lg font-weight-bold text-left" style=" 
		width: 320px;" id="trans" role="button">Transaction Type & Mapping</a>
     </div>
     <div class="col-xs-2 px-2">
        <textarea class="font form-control text-left" rows="1" style="width: 800px; height: 47px; font-size: 17px;" id="comment1">Access to adding new Transation Types and Mapping them to respective Custom Fields </textarea>
        <?php endif; ?>
	  </div>
	</div> 
	  
	<div class="form-group row" > 
	 <div class="col-xs-2 px-2">
	    <?php if(!empty($config_errorpriority_button)): ?>
        <a href="error_priority.php" class="btn btn-lg font-weight-bold text-left" style=" 
		width: 320px;" id="error" role="button">Error Priority Mapping</a>
      </div>
      <div class="col-xs-2 px-2">
        <textarea class="font form-control text-left" rows="1" style="width: 800px; height: 47px; font-size: 17px;" id="comment2">Access to check and update Error Priority and mapping with transaction types </textarea>
        <?php endif; ?>     
	 </div>
	</div> 
	 
	<div class="form-group row" > 
	 <div class="col-xs-2 px-2">
	    <?php if(!empty($config_insertfetch_button)): ?>
        <a href="insert_fetch.php" class="btn btn-lg font-weight-bold text-left" style=" 
		width: 320px;" id="api" role="button">Insert and Fetch API</a>
      </div>
      <div class="col-xs-2 px-2">
        <textarea class="font form-control text-left" rows="1" style="width: 800px; height: 47px; font-size: 17px;" id="comment3">Access to insert and retrieve API's </textarea>
        <?php endif; ?>
	  </div>
	</div> 
	  
	<div class="form-group row" > 
     <div class="col-xs-2 px-2">
	    <?php if(!empty($config_reprocess_button)): ?>
        <a href="reprocess_mapping.php" class="btn btn-lg font-weight-bold text-left" style=" 
		width: 320px;" id="reprocess" role="button">Reprocess Mapping</a>
      </div>
      <div class="col-xs-2 px-2">
        <textarea class="font form-control text-left" rows="1" style="width: 800px; height: 47px; font-size: 17px;" id="comment4">Access to Reprocess mapping with transaction types</textarea>
        <?php endif; ?>
	  </div>
	</div>
	 
	<div class="form-group row" > 
     <div class="col-xs-2 px-2">
	    <?php if(!empty($config_branding_button)): ?>
        <a href="branding.php" class="btn btn-lg font-weight-bold text-left" style=" 
		width: 320px;" id="branding" role="button">Branding</a>
     </div>
     <div class="col-xs-2 px-2">
        <textarea class="font form-control text-left" rows="1" style="width: 800px; height: 47px; font-size: 17px;" id="comment5">Access to Branding changes</textarea>
        <?php endif; ?>
     </div>
	</div> 
	  
     <div class="form-group row" > 
	  <div class="col-xs-2 px-2">
   <a href="../admin.php" class="btn btn-lg font-weight-bold text-left" style="width: 320px;" >Back</a>
</div>
</div>
	  
</table>
</div>
</div>
<script>
$('#trans').ready(function () {
    $('#comment1').hide();
}),$('#trans').hover(function () {
    $('#comment1').show();
}, function(){
	$('#comment1').hide();
});

$('#error').ready(function () {
    $('#comment2').hide();
}),$('#error').hover(function () {
    $('#comment2').show();
}, function () {
    $('#comment2').hide();
});

$('#api').ready(function () {
    $('#comment3').hide();
}),$('#api').hover(function () {
    $('#comment3').show();
}, function () {
    $('#comment3').hide();
});

$('#reprocess').ready(function () {
    $('#comment4').hide();
}),$('#reprocess').hover(function () {
    $('#comment4').show();
}, function () {
    $('#comment4').hide();
});

$('#branding').ready(function () {
    $('#comment5').hide();
}),$('#branding').hover(function () {
    $('#comment5').show();
}, function () {
    $('#comment5').hide();
});
</script>

</body>