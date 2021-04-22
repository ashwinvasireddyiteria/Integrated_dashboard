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
$trans_add_button = search($menu_validation, 'menu_code', 'TRANSACTION_ADD_TRANSACTIONTYPE'); 
$trans_submit_button = search($menu_validation, 'menu_code', 'TRANSACTION_ADD_TRANSACTIONTYPE_SUBMIT'); 
$trans_reset_button = search($menu_validation, 'menu_code', 'TRANSACTION_ADD_TRANSACTIONTYPE_RESET'); 
$trans_search_button = search($menu_validation, 'menu_code', 'TRANSACTION_SEARCH'); 
$trans_configure_button = search($menu_validation, 'menu_code', 'TRANSACTION_CONFIGURE'); 

// Menu and Page code validations ends here //
  
$get_status = "SELECT distinct id, transaction_type from Integrated_dashboard_transactiontype order by id";
$get_status_sql = mysqli_query($conn,$get_status);

if(isset($_GET['Search'])){
$transaction_type = $_GET["transaction_type"];
$get_status = "SELECT distinct id, transaction_type from Integrated_dashboard_transactiontype where transaction_type like '".$transaction_type."%' order by id";
$get_status_sql = mysqli_query($conn,$get_status);
	
}
if(isset($_GET['Submit'])){
$_GET['Add_Transaction_Type'] = '1';
$transaction_type = $_GET["transaction_type"];
$query = mysqli_query($conn,"select distinct transaction_type from Integrated_dashboard_transactiontype where transaction_type = '".$transaction_type."'");
$num_types = mysqli_num_rows($query);
if($num_types > 0){
	$display_error = "Transaction Type already exists";
}
if(isset($display_error)){
	?>
	   <div id="box" class="font">
	      <a href="transaction.php" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 style="margin-top: 20px;">Transaction Type already exists</h6>
       </div>
    <?php
}
elseif ($num_types == 0){
	$insert_query = mysqli_query($conn,"INSERT INTO Integrated_dashboard_transactiontype (transaction_type) values(NULLIF('".$transaction_type."',''))");
	if($insert_query){
	$Success = "Successfully Inserted";
	}
} 
if(isset($Success)){
	?>
	   <div id="box" class="font">
	      <a href="transaction.php" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 style="margin-top: 20px;">Successfully Inserted</h6>
       </div>
    <?php
}

}
?>

<!DOCTYPE html>
<body>
<br> <br>
<table class="table">
      
<div class="form-group row justify-content-center">
<form action="" method="GET">

<?php if(!empty($trans_add_button)): ?>
<input type="submit" style="margin-left: 30px; margin-top: 30px;"  id="Add_Transaction_Type" name="Add_Transaction_Type" class="btn font-weight-bold text-center" value="Add Transaction Type">
<?php endif; ?>
</form>
<?php if(isset($_GET["Add_Transaction_Type"]) ): ?>
<form action="" method="GET">
<div class="col-xs-2 px-2">
        <label class="font font-weight-bold" for="transaction_type">Transaction name</label>
        <input type="text" name="transaction_type" id="transaction_type" value="<?php if(isset($transaction_type)){echo $transaction_type;}?>" class="font form-control border-dark">
      </div> 
<?php if(!empty($trans_submit_button)): ?>
<input type="submit" style="margin-left: 30px; margin-top: 30px; height: 40px; width: 100px; "  id="Submit" name="Submit" class="btn font-weight-bold text-center" value="Submit">
<?php endif; ?>
<?php if(!empty($trans_reset_button)): ?>
<input type="submit" style="margin-left: 30px; margin-top: 30px; height: 40px; width: 100px; "  id="Reset" name="Reset" class="btn font-weight-bold text-center" value="Reset">
<?php endif; ?>
</form>

<?php endif; ?>	
</div>
   </table>    

<form action="" method="GET">
<div class="form-group row justify-content-center">
<div class="col-xs-2 px-2">        
  <input type="text" name="transaction_type" id="transaction_type" style="height: 37px; width: 200px;" value="<?php if(isset($transaction_type)){echo $transaction_type;}?>" class="font form-control border-dark text-center">
  </div>
  <div class="col-xs-2 px-2"> 
<?php if(!empty($trans_search_button)): ?> 
<input type="submit" style="height: 40px; width: 100px;"  id="Search" name="Search" class="btn font-weight-bold text-center" value="Search">
<?php endif; ?>
</div>
  <div class="col-xs-2 px-2">
  <a href="config_page.php" class="btn font-weight-bold float-right text-center" style="height: 40px; width: 100px;">Back</a>
  </div>
</div>
</div>
</form>
   
    <div class=" col-xs col-sm col-md col-lg">
                      
                               <table id="bootstrap-data-table" style="position: relative;" class="table table-striped table-bordered">
                              
                                    <thead class="thread">
                                        <tr>
                                            <th>ID</th>                                           
                                            <th>Transaction Type</th>
											<th>Custom Fields Mapping</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php                                      
                                         while($get_status_row = mysqli_fetch_assoc($get_status_sql)){											
										?>
                                        <tr>
                                            <td><?php echo $get_status_row['id'];  ?></td>                                            
                                            <td><?php echo $get_status_row['transaction_type'];  ?></td> 
											<td><?php if(!empty($trans_configure_button)): ?>													
											<a href="custom_fields.php?transaction_type=<?php echo $get_status_row['transaction_type'];?>" 
											   class="btn font-weight-bold text-center" style="height: 40px; width: 100px;">Configure
											</a>
                                            <?php endif; ?>										
											</td>
										</tr>
										<?php
											} 
										?>
   
                                    </tbody>
                                </table>
             
</div>

<br> <br>
<script>

var c = 0;
function pop(){
	if(c == 0){
		document.getElementById("box").style.display = "block";
		c = 1;
	}else{
		document.getElementById("box").style.display = "none";
		c = 0;
	}
}
</script>
</body>