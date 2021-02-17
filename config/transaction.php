<?php  
  include("config.php");
  include("header.php");
$transaction_type = $_GET["transaction_type"];
$query = mysqli_query($conn,"select distinct transaction_type from Integrated_dashboard_transactiontype where transaction_type = '".$transaction_type."'");
$num_types = mysqli_num_rows($query);
$get_status = "SELECT distinct id, transaction_type from Integrated_dashboard_transactiontype order by id";
$get_status_sql = mysqli_query($conn,$get_status);
if($num_types > 0){
	$display_error = "Transaction Type already exists";
}
elseif ($num_types == 0){
	$insert_query = mysqli_query($conn,"INSERT INTO Integrated_dashboard_transactiontype (transaction_type) values(NULLIF('".$transaction_type."',''))");
	if($insert_query){
	$display_error = "Successfully Inserted";
	}
}
?>

<!DOCTYPE html>
<body>
<br> <br>
    <div class=" col-xs col-sm col-md col-lg">
                      
                               <table id="bootstrap-data-table" style="position: relative;" class="table table-striped table-bordered">
                              
                                    <thead style="background-color:#ADD8E6">
                                        <tr>
                                            <th>ID</th>                                           
                                            <th>Transaction Type</th>                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php                                      
                                         while($get_status_row = mysqli_fetch_assoc($get_status_sql)){											
										?>
                                        <tr>
                                            <td><?php echo $get_status_row['id'];  ?></td>                                            
                                            <td><?php echo $get_status_row['transaction_type'];  ?></td> 
										</tr>
										<?php
											} 
										?>
   
                                    </tbody>
                                </table>
             
</div>

<form action="" method="GET">
<div class="col-xs-2 px-2">
        <label class="font-weight-bold" for="transaction_type">Transaction type</label>
        <input type="text" name="transaction_type" id="transaction_type" value="<?php if(isset($transaction_type)){echo $transaction_type;}?>" class="form-control border-dark">
      </div> 

<input type="submit" style="margin-left: 30px; margin-top: 30px; background-color:#ADD8E6;"  id="save" name="save" class="btn font-weight-bold " value="save">
<p><?php echo $display_error ?></p>

</form>
</body>