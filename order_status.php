<?php
include("config.php");
include("header.php");
session_start();
$transaction_number = $_GET['transaction_number'];
$get_status_sql = mysqli_query($conn,"SELECT * FROM Integrated_dashboard where transaction_number ='". $transaction_number ."' ");

?>
<style>
table {
  border-collapse: collapse;
  
}

th, td {
  text-align: left;
 
  padding: 5px;
 }
 

</style>

<!DOCTYPE html>
<body>

 
<br><br>

<div>
   <a href="main.php" class="btn font-weight-bold float-right" style="margin-right:20px; background-color:#ADD8E6;" >Back</a>
</div>

 <div class="col-sm col-md col-lg">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h2> Transaction Details</h2>
                            </div>
                        </div>
 </div>
 
<br><br>
 
    <div class=" col-xs col-sm col-md col-lg">
                      
                               <table id="bootstrap-data-table" style="position: relative;" class="table table-striped table-bordered">
                              
                                    <thead style="background-color:#ADD8E6">
                                        <tr>
                                            <th>Transaction Number</th>
                                            <th>Transaction Date</th>
                                            <th>Transaction Type</th>
                                            <th>Status</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                      
                                         while($get_status_row = mysqli_fetch_assoc($get_status_sql)){
                                        
										$transaction_type = $get_status_row['transaction_type'];
										$get_transaction_type = mysqli_query($conn, "select * from Integrated_dashboard_transactiontype where transaction_type = '". $transaction_type ."' ");
										$fetch_transaction_type = mysqli_fetch_assoc($get_transaction_type);
									    
										?>
                                        <tr>
                                            <td><?php echo $get_status_row['transaction_number'];  ?></td>
                                            <td><?php echo $get_status_row['transaction_date'];  ?></td>
                                            <td><?php echo $get_status_row['transaction_type'];  ?></td>
                                            <td><?php echo $get_status_row['status'];  ?></td>
                                           
                                        </tr>
                                       
									   
                                    </tbody>
                                </table>
             
</div>

<?php if(strpos($get_status_row['status'],'Success') === false): ?>
<div style="overflow-x:auto; margin-left:15px; margin-right:20px">
<table class="table table-striped table-bordered" style="position: relative;" width="100%">
  <thead style="background-color:#ADD8E6;">
    <tr>
	
		<?php if($get_status_row['transaction_status1'] != "" ): ?>
                                            <th>Step 1 Status</th>
		<?php endif; ?>	
		<?php if($get_status_row['transaction_status2'] != "" ): ?>
                                            <th>Step 2 Status</th>
        <?php endif; ?>	
		<?php if($get_status_row['transaction_status3'] != "" ): ?>
											<th>Step 3 Status</th>
		<?php endif; ?>									
		<?php if($get_status_row['transaction_status4'] != "" ): ?>
                                            <th>Step 4 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status5'] != "" ): ?>									
											<th>Step 5 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status6'] != "" ): ?>									
											<th>Step 6 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status7'] != "" ): ?>									
                                            <th>Step 7 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status8'] != "" ): ?>									
                                            <th>Step 8 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status9'] != "" ): ?>									
                                            <th>Step 9 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status10'] != "" ): ?>									
											<th>Step 10 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status11'] != "" ): ?>									
											<th>Step 11 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status12'] != "" ): ?>									
                                            <th>Step 12 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status13'] != "" ): ?>									
                                            <th>Step 13 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status14'] != "" ): ?>									
                                            <th>Step 14 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status15'] != "" ): ?>									
											<th>Step 15 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status16'] != "" ): ?>									
											<th>Step 16 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status17'] != "" ): ?>									
                                            <th>Step 17 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status18'] != "" ): ?>									
                                            <th>Step 18 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status19'] != "" ): ?>									
                                            <th>Step 19 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status20'] != "" ): ?>									
											<th>Step 20 Status</th>
		<?php endif; ?>									
    </tr>
  </thead>
  <tbody>
    <tr>
	<?php if($get_status_row['transaction_status1'] != "" ): ?>
	                                        <td><?php echo $get_status_row['transaction_status1'];  ?></td>
    <?php endif; ?>	
	<?php if($get_status_row['transaction_status2'] != "" ): ?>
											<td><?php echo $get_status_row['transaction_status2'];  ?></td>
    <?php endif; ?>
	<?php if($get_status_row['transaction_status3'] != "" ): ?>
											<td><?php echo $get_status_row['transaction_status3'];  ?></td>
    <?php endif; ?>
	<?php if($get_status_row['transaction_status4'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status4'];  ?></td>
    <?php endif; ?>
	<?php if($get_status_row['transaction_status5'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status5'];  ?></td>
	<?php endif; ?>
	<?php if($get_status_row['transaction_status6'] != "" ): ?>										
											<td><?php echo $get_status_row['transaction_status6'];  ?></td>
    <?php endif; ?>
	<?php if($get_status_row['transaction_status7'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status7'];  ?></td>
    <?php endif; ?>
	<?php if($get_status_row['transaction_status8'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status8'];  ?></td>
    <?php endif; ?>
	<?php if($get_status_row['transaction_status9'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status9'];  ?></td>
    <?php endif; ?>
	<?php if($get_status_row['transaction_status10'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status10'];  ?></td>
	<?php endif; ?>
	<?php if($get_status_row['transaction_status11'] != "" ): ?>										
											<td><?php echo $get_status_row['transaction_status11'];  ?></td>
   	<?php endif; ?>
	<?php if($get_status_row['transaction_status12'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status12'];  ?></td>
    <?php endif; ?>
    <?php if($get_status_row['transaction_status13'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status13'];  ?></td>
    <?php endif; ?>
	<?php if($get_status_row['transaction_status14'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status14'];  ?></td>
    <?php endif; ?>
	<?php if($get_status_row['transaction_status15'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status15'];  ?></td>
    <?php endif; ?>
	<?php if($get_status_row['transaction_status16'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status16'];  ?></td>
    <?php endif; ?>
	<?php if($get_status_row['transaction_status17'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status17'];  ?></td>
    <?php endif; ?>
	<?php if($get_status_row['transaction_status18'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status18'];  ?></td>
    <?php endif; ?>
	<?php if($get_status_row['transaction_status19'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status19'];  ?></td>
    <?php endif; ?>
	<?php if($get_status_row['transaction_status20'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status20'];  ?></td>
	<?php endif; ?>										
    </tr>
    
  </tbody>
</table>
</div>
<?php endif; ?>

<div style="overflow-x:auto; margin-left:15px; margin-right:20px">
<table class="table table-striped table-bordered" style="position: relative;" width="100%">
  <thead style="background-color:#ADD8E6">
    <tr>
	<?php if($get_status_row['error_msg1'] != ""): ?> 
                                            <th>Step 1 Error</th>
    <?php endif; ?>
	<?php if($get_status_row['error_msg2'] != ""): ?>
											<th>Step 2 Error</th>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg3'] != ""): ?>										
											<th>Step 3 Error</th>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg4'] != ""): ?>										
											<th>Step 4 Error</th>
	<?php endif; ?>										
	<?php if($get_status_row['error_msg5'] != ""): ?>										
											<th>Step 5 Error</th>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg6'] != ""): ?>										
											<th>Step 6 Error</th>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg7'] != ""): ?>										
											<th>Step 7 Error</th>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg8'] != ""): ?>										
											<th>Step 8 Error</th>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg9'] != ""): ?>										
											<th>Step 9 Error</th>
	<?php endif; ?>										
	<?php if($get_status_row['error_msg10'] != ""): ?>										
											<th>Step 10 Error</th>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg11'] != ""): ?>										
											<th>Step 11 Error</th>
    <?php endif; ?>                                       
	<?php if($get_status_row['error_msg12'] != ""): ?>										
											<th>Step 12 Error</th>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg13'] != ""): ?>										
											<th>Step 13 Error</th>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg14'] != ""): ?>										
											<th>Step 14 Error</th>
	<?php endif; ?>										
	<?php if($get_status_row['error_msg15'] != ""): ?>										
											<th>Step 15 Error</th>
	<?php endif; ?>										
	<?php if($get_status_row['error_msg16'] != ""): ?>										
											<th>Step 16 Error</th>
    <?php endif; ?>                                       
	<?php if($get_status_row['error_msg17'] != ""): ?>										
											<th>Step 17 Error</th>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg18'] != ""): ?>										
											<th>Step 18 Error</th>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg19'] != ""): ?>										
											<th>Step 19 Error</th>
	<?php endif; ?>										
	<?php if($get_status_row['error_msg20'] != ""): ?>										
											<th>Step 20 Error</th>
    <?php endif; ?>                                        
    </tr>
  </thead>
  <tbody>
    <tr>
	 
	<?php if($get_status_row['error_msg1'] != ""): ?> 
											<td><?php echo $get_status_row['error_msg1'];  ?></td>
    <?php endif; ?>                                       
	<?php if($get_status_row['error_msg2'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg2'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg3'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg3'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg4'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg4'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg5'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg5'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg6'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg6'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg7'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg7'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg8'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg8'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg9'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg9'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg10'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg10'];  ?></td>
	<?php endif; ?>										
	<?php if($get_status_row['error_msg11'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg11'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg12'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg12'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg13'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg13'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg14'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg14'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg15'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg15'];  ?></td>
	<?php endif; ?>										
	<?php if($get_status_row['error_msg16'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg16'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg17'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg17'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg18'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg18'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg19'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg19'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg20'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg20'];  ?></td>
	<?php endif; ?>
	
    </tr>
    
  </tbody>
</table>
</div>

<div style="overflow-x:auto; margin-left:15px; margin-right:20px">
<table class="table table-striped table-bordered" style="position: relative;" width="100">
  <thead style="background-color:#ADD8E6">
    <tr>
	
	
                                            <th><?php echo $fetch_transaction_type['custom_field1'];  ?></th>
                                            
											
											<th><?php echo $fetch_transaction_type['custom_field2'];  ?></th>
                                           
											
											<th><?php echo $fetch_transaction_type['custom_field3'];  ?></th>
                                           
											
											<th><?php echo $fetch_transaction_type['custom_field4'];  ?></th>
											
											
											<th><?php echo $fetch_transaction_type['custom_field5'];  ?></th>
										
											
											<th><?php echo $fetch_transaction_type['custom_field6'];  ?></th>
                                           
										
											<th><?php echo $fetch_transaction_type['custom_field7'];  ?></th>
                                          
										
											<th><?php echo $fetch_transaction_type['custom_field8'];  ?></th>
                                            
											
											<th><?php echo $fetch_transaction_type['custom_field9'];  ?></th>
											
											
											<th><?php echo $fetch_transaction_type['custom_field10'];  ?></th>
											
											
											<th><?php echo $fetch_transaction_type['custom_field11'];  ?></th>
                                           
											
											<th><?php echo $fetch_transaction_type['custom_field12'];  ?></th>
                                            
											
											<th><?php echo $fetch_transaction_type['custom_field13'];  ?></th>
                                            
											
											<th><?php echo $fetch_transaction_type['custom_field14'];  ?></th>
											
											
											<th><?php echo $fetch_transaction_type['custom_field15'];  ?></th>
										
											
											<th><?php echo $fetch_transaction_type['custom_field16'];  ?></th>
                                            
										
											<th><?php echo $fetch_transaction_type['custom_field17'];  ?></th>
                                          
									
											<th><?php echo $fetch_transaction_type['custom_field18'];  ?></th>
                                            
											
											<th><?php echo $fetch_transaction_type['custom_field19'];  ?></th>
    
										
											<th><?php echo $fetch_transaction_type['custom_field20'];  ?></th>
                                            
    
	</tr>
  </thead>
  <tbody>
    <tr>
	
	                                        
											<td><?php echo $get_status_row['custom_field1'];  ?></td>
                                           
											
											<td><?php echo $get_status_row['custom_field2'];  ?></td>
                                           
											
											<td><?php echo $get_status_row['custom_field3'];  ?></td>
                                           
											
											<td><?php echo $get_status_row['custom_field4'];  ?></td>
    									
											<td><?php echo $get_status_row['custom_field5'];  ?></td>
										
											<td><?php echo $get_status_row['custom_field6'];  ?></td>
    									
											<td><?php echo $get_status_row['custom_field7'];  ?></td>
    									
											<td><?php echo $get_status_row['custom_field8'];  ?></td>
    									
											<td><?php echo $get_status_row['custom_field9'];  ?></td>
    									
											<td><?php echo $get_status_row['custom_field10'];  ?></td>
										
											<td><?php echo $get_status_row['custom_field11'];  ?></td>
    									
											<td><?php echo $get_status_row['custom_field12'];  ?></td>
    										
											<td><?php echo $get_status_row['custom_field13'];  ?></td>
    									
											<td><?php echo $get_status_row['custom_field14'];  ?></td>
    									
											<td><?php echo $get_status_row['custom_field15'];  ?></td>
										
											<td><?php echo $get_status_row['custom_field16'];  ?></td>
    										
											<td><?php echo $get_status_row['custom_field17'];  ?></td>
    										
											<td><?php echo $get_status_row['custom_field18'];  ?></td>
    									
											<td><?php echo $get_status_row['custom_field19'];  ?></td>
    									
											<td><?php echo $get_status_row['custom_field20'];  ?></td>
	
	
    </tr>
    
  </tbody>
</table>
</div>


 <?php
     } 
 ?>
      
<div class="clearfix"></div>
<br><br> 


</body>