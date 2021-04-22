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
$insertfetch_getinsertapi_button = search($menu_validation, 'menu_code', 'INSERT_FETCH_API_GET_INSERTAPI');
$insertfetch_getretrieveapi_button = search($menu_validation, 'menu_code', 'INSERT_FETCH_API_GET_RETRIEVEAPI'); 
// Menu and Page code validations ends here //


?>
<!DOCTYPE html>
<body>
<br><br>
<table class="table">
      
		<form action="" method="GET">
		
	    <div class="form-group row justify-content-center">
		<div class="col-xs-2 px-4"> 
		<?php if(!empty($insertfetch_getinsertapi_button)): ?>

	     <input type="submit" style="margin-top: 30px; height:35px; margin-left: 10px; width: 200px;"  id="insert_api" name="insert_api" class="btn text-center font-weight-bold" value=" Get Insert API">
	    <?php endif; ?>

	</div>

	</div>
	
	
<br>	
<?php if(isset($_GET["insert_api"]) ): ?>


                      <div class="font form-group row justify-content-center">
                         
                       <a href="#"><h4>https://iteria-us.in/Integrated_dashboard/api/insert.php</h4></a>
                                   
                      </div>
 

<?php endif; ?>


   </table>
 <table class="table">
      
		
		
	    <div class="form-group row justify-content-center">
	 
	<div class="col-xs-2 px-2"> 
	<?php if(!empty($insertfetch_getretrieveapi_button)): ?>
	     <input type="submit" style="margin-top: 30px; height:35px; margin-left: 10px; width: 200px;"  id="retrieve_api" name="retrieve_api" class="btn text-center font-weight-bold" value=" Get Retrieve API">
	<?php endif; ?>
	</div>
	</div>
<br>	
<?php if(isset($_GET["retrieve_api"]) ): ?>

                                <div class="font form-group row justify-content-center">
                                   
                                  <a href="#"><h4>https://iteria-us.in/Integrated_dashboard/api/retrieve.php</h4></a>
                                    
                                </div>


<?php endif; ?>
  
 <div class="row justify-content-center">
   <a href="config_page.php" class="btn font-weight-bold" style=" margin-top: 20px;height:35px; width: 100px;" >Back</a>
   </div>

   </table>
   </form>
</body>