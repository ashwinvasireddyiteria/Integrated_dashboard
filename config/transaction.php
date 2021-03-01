<?php  
  include("config.php");
  include("header.php");
  session_start();
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
	echo "<script type='text/javascript'>
	window.alert('$display_error');
	</script>";
}
elseif ($num_types == 0){
	$insert_query = mysqli_query($conn,"INSERT INTO Integrated_dashboard_transactiontype (transaction_type) values(NULLIF('".$transaction_type."',''))");
	if($insert_query){
	$Success = "Successfully Inserted";
	}
} 
if(isset($Success)){
	echo "<script type='text/javascript'>
	window.alert('$Success');
	window.location.href='transaction.php';
	</script>";
}

}
?>

<!DOCTYPE html>
<body>
<br> <br>
<table class="table">
      
<div class="form-group row justify-content-center">
<form action="" method="GET">
<input type="submit" style="margin-left: 30px; margin-top: 30px; background-color:#ADD8E6;"  id="Add_Transaction_Type" name="Add_Transaction_Type" class="btn font-weight-bold " value="Add Transaction Type">
</form>
<?php if(isset($_GET["Add_Transaction_Type"]) ): ?>
<form action="" method="GET">
<div class="col-xs-2 px-2">
        <label class="font-weight-bold" for="transaction_type">Transaction name</label>
        <input type="text" name="transaction_type" id="transaction_type" value="<?php if(isset($transaction_type)){echo $transaction_type;}?>" class="form-control border-dark">
      </div> 

<input type="submit" style="margin-left: 30px; margin-top: 30px; background-color:#ADD8E6;"  id="Submit" name="Submit" class="btn font-weight-bold " value="Submit">
<input type="submit" style="margin-left: 30px; margin-top: 30px; background-color:#ADD8E6;"  id="Reset" name="Reset" class="btn font-weight-bold " value="Reset">
</form>
<?php endif; ?>	
</div>
   </table>
<table class="table">
      
<div class="form-group row justify-content-center">
<form action="" method="GET">
<div class="col-xs-6">
<div class="col-xs-2 px-2">        
  <input type="text" name="transaction_type" id="transaction_type" style="height: 37px; width: 250px;" value="<?php if(isset($transaction_type)){echo $transaction_type;}?>" class="form-control border-dark">
 </div> 
 </div class="col-xs-2 px-2">
<input type="submit" style="background-color:#ADD8E6;"  id="Search" name="Search" class="btn font-weight-bold " value="Search">
</div>
 <div class="col-xs-2 px-2">
   <a href="config_page.php" class="btn font-weight-bold float-right" style=" height:35px; width: 100px; background-color:#ADD8E6;" >Back</a>
  </div>
</div>
</form>
</div>
   </table>
   
    <div class=" col-xs col-sm col-md col-lg">
                      
                               <table id="bootstrap-data-table" style="position: relative;" class="table table-striped table-bordered">
                              
                                    <thead style="background-color:#ADD8E6">
                                        <tr>
                                            <th>ID</th>                                           
                                            <th>Transaction Type</th>
											<th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php                                      
                                         while($get_status_row = mysqli_fetch_assoc($get_status_sql)){											
										?>
                                        <tr>
                                            <td><?php echo $get_status_row['id'];  ?></td>                                            
                                            <td><?php echo $get_status_row['transaction_type'];  ?></td> 
											<td>											
											<a href="custom_fields.php?transaction_type=<?php echo $get_status_row['transaction_type'];?>" 
											   class="btn font-weight-bold" style=" background-color:#ADD8E6">Configure
											</a>											
											</td>
										</tr>
										<?php
											} 
										?>
   
                                    </tbody>
                                </table>
             
</div>

<br> <br>
</body>