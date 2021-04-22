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
$logo_button = search($menu_validation, 'menu_code', 'BRANDING_LOGO');
$color_button = search($menu_validation, 'menu_code', 'BRANDING_COLOR');
$font_button = search($menu_validation, 'menu_code', 'BRANDING_FONT'); 
// Menu and Page code validations ends here //

?>
<style>

</style>
<!DOCTYPE html>
<body>

<br><br>
	
    
 <div class="a col-lg-12" style="position:absolute; top:25%;" > 
   <div class="font container-fluid">
    <table class="table table-responsive">
	
    <div class="font form-group row " >
	  <div class="col-xs-2 px-2">
	     <?php if(!empty($logo_button)): ?>
         <a href="logo.php" class="btn btn-lg font-weight-bold text-left" style=" 
		  width: 300px;" id="logo" role="button">Logo</a>
	  </div>
      <div class="col-xs-2 px-2">
         <textarea class="form-control text-left" rows="1" style="width: 800px; height: 47px; font-size: 17px;" id="comment1">Access to change the logo </textarea>
	     <?php endif; ?>	
	   </div> 
	</div>
	  
	<div class="form-group row " >
	  <div class="col-xs-2 px-2">
	     <?php if(!empty($color_button)): ?> 
         <a href="color.php" class="btn btn-lg font-weight-bold text-left" style=" 
		 width: 300px;" id="colour" role="button">Color</a>
	  </div>
      <div class="col-xs-2 px-2">
         <textarea class="form-control text-left" rows="1" style="width: 800px; height: 47px; font-size: 17px;" id="comment2">Access to change the background color of the header and body</textarea>
         <?php endif; ?>
	  </div> 
	</div>
	  
	  
	<div class="form-group row " >
	  <div class="col-xs-2 px-2">
	     <?php if(!empty($font_button)): ?> 
         <a href="font.php" class="btn btn-lg font-weight-bold text-left" style=" 
		  width: 300px;" id="font" role="button">Font</a>
	  </div>
      <div class="col-xs-2 px-2">
         <textarea class="form-control text-left" rows="1" style="width: 800px; height: 47px; font-size: 17px;" id="comment3">Access to change the font style and size </textarea>
          <?php endif; ?>
	  </div> 
	</div>
	
	<div class="form-group row" > 
	  <div class="col-xs-2 px-2">
         <a href="config_page.php" class="btn btn-lg font-weight-bold text-left" style="width: 300px; " >Back</a>
      </div>
	</div>  
	  
   </table>
  </div>
</div>
<script>
$('#logo').ready(function () {
    $('#comment1').hide();
}),$('#logo').hover(function () {
    $('#comment1').show();
}, function(){
	$('#comment1').hide();
});

$('#colour').ready(function () {
    $('#comment2').hide();
}),$('#colour').hover(function () {
    $('#comment2').show();
}, function () {
    $('#comment2').hide();
});

$('#font').ready(function () {
    $('#comment3').hide();
}),$('#font').hover(function () {
    $('#comment3').show();
}, function () {
    $('#comment3').hide();
});

</script>

</body>