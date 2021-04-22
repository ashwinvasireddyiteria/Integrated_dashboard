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
$reprocess_mappingsearch_button = search($menu_validation, 'menu_code', 'REPROCESS_MAPPING_SEARCH'); 
$reprocess_mappingupdate_button = search($menu_validation, 'menu_code', 'REPROCESS_MAPPING_UPDATE'); 
// Menu and Page code validations ends here //

  
  $transaction_type= $_GET['transaction_type'];
 IF(isset($_GET['search'])){
	$transaction_type= $_GET['transaction_type'];
	$interface_details = mysqli_query($conn,"select * from Integrated_dashboard_reprocess where transaction_type = '". $transaction_type ."'");
	$fetch_interface_details = mysqli_fetch_assoc($interface_details); 
	$link = $fetch_interface_details['link'];
	$interface_username = $fetch_interface_details['username'];
	$interface_password = $fetch_interface_details['password'];
 }
 IF(isset($_GET['update'])){
	 $_GET['search']= '1';
	 $link = $_GET['link'];
	$interface_username = $_GET['interface_username'];
	$interface_password = $_GET['interface_password'];
	 $transaction_type= $_GET['transaction_type'];
	 $update_interface_details = "update Integrated_dashboard_reprocess set 
									link = '".$link."',
									username = '".$interface_username."',
									password = '".$interface_password."'
									where transaction_type = '".$transaction_type."'";
	$update_query = mysqli_query($conn,$update_interface_details);
	 
 }

?>

<!DOCTYPE html>
<body>
<br>
<table class="table">
      
		<form action="" method="GET">
		
	    <div class="font form-group row justify-content-center">
		<div class="col-xs-2" style="width:150px; margin-left:20px;">
	 <label class="font font-weight-bold" for="transaction_type">Transaction</label>	
	 <select id="transaction_type" name="transaction_type" style="height:40px;  width: 140px;" class="font form-control border-dark" >
	 

                                            
                                            <?php
                                            $sql = "SELECT distinct transaction_type FROM Integrated_dashboard_transactiontype order by id asc";
                                            $result = mysqli_query($conn, $sql);

                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    ?>
 <option <?php echo (isset($transaction_type) && $transaction_type == $row["transaction_type"]) ? "selected='selected'" : ""; ?>  value="<?php echo $row["transaction_type"]; ?>"><?php echo $row["transaction_type"]; ?></option>


                                                    <?php
													
                                                }
                                              } else {
                                                echo "0 results";
                                            }
                                            ?>

                                        </select>
										
	</div>
	
  
	 
	<div class="col-xs-2 px-2"> 
	<?php if(!empty($reprocess_mappingsearch_button)): ?>
	     <input type="submit" style="margin-top: 34px; height:40px; margin-left: 10px; width: 100px;"  id="search" name="search" class="btn text-center font-weight-bold" value="Search">
	<?php endif; ?>
	</div>
  
   <div>
   <a href="config_page.php" class="btn font-weight-bold text-center" style=" margin-top: 34px; margin-left: 20px;  height:40px; width: 100px;" >Back</a>
   </div>

  
 </div>

   </table>
<?php if(isset($_GET["search"]) ): ?>

<div class="font form-group row justify-content-center">
<div class="col-sm-6">
                                <div class="row">
                                    <div id="meg" class="col-25">
                                        <label for="link"><b> Reprocess Integration link <span style="color:red;">*</span><b></label>
                                    </div>
                                    <div class="col-75">
                                        <textarea rows="4" cols="100" maxlength="4000" id="link" value = "<?php if(isset($link)){echo $link;}?>" name="link" cols="50"><?php if(isset($link)){echo $link;}?></textarea>
                                    </div>
                                </div>

</div>
</div>
<div class="font form-group row justify-content-center">
<div class="col-xs-2 px-2" style="margin-right: 435px;">
	<label for="interface_username">Interface username</label>
  <input type="text" name="interface_username" id="interface_username" style="height: 37px; width: 250px;" value="<?php if(isset($interface_username)){echo $interface_username;}?>" class="form-control border-dark">
 </div> 
 </div>
 <div class="font form-group row justify-content-center">
 <div class="col-xs-2 px-2" style="margin-right: 435px;">
	<label for="interface_password">Interface password</label>
  <input type="text" name="interface_password" id="interface_password" style="height: 37px; width: 250px;" value="<?php if(isset($interface_password)){echo $interface_password;}?>" class="form-control border-dark">
 </div> 
 </div>
 <div class="font form-group row justify-content-center">
 <div class="col-xs-2 px-2"> 
 
<?php if(!empty($reprocess_mappingupdate_button)): ?>
	     <input type="submit" style="margin-top: 30px; height:40px; margin-left: 10px; width: 100px;"  id="update" name="update" class="btn text-center font-weight-bold" value="Update">
<?php endif; ?>	
	</div>
</div>

 <?php endif; ?>	
 </form>
<br> <br>
</body>
