<?php
include("config.php");
include("header.php");
include("fontstyle.php");
session_start();
$transaction_number = $_GET['transaction_number'];
$transaction_type = $_GET['transaction_type'];
$error_priority = $_GET['error_priority'];
$duration1 = $_GET['duration1'];
$from_date = $_GET['from_date'];
$status = $_GET['status'];
$to_date = $_GET['to_date'];

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
   <a href="main.php?transaction_type=<?php echo $transaction_type;?>& from_date1=<?php echo $from_date;?>& duration1=<?php echo $duration1 ;?>& to_date=<?php echo $to_date;?>" class="btn font-weight-bold float-right" style="margin-right:20px;" >Back</a>
</div>

 <div class="col-sm col-md col-lg">
                        <div class="page-header float-left">
                            <div class="font page-title">
                                <h2> Transaction Details</h2>
                            </div>
                        </div>
 </div>
 
<br><br>
 
    <div class=" col-xs col-sm col-md col-lg">
                      
                               <table id="bootstrap-data-table" style="position: relative;" class="table table-striped table-bordered">
                              
                                    <thead class="thread">
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
  <thead class="thread">
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
        <?php if($get_status_row['transaction_status21'] != "" ): ?>									
											<th>Step 21 Status</th>
		<?php endif; ?>	
        <?php if($get_status_row['transaction_status22'] != "" ): ?>									
											<th>Step 22 Status</th>
		<?php endif; ?>	
        <?php if($get_status_row['transaction_status23'] != "" ): ?>									
											<th>Step 23 Status</th>
		<?php endif; ?>	
        <?php if($get_status_row['transaction_status24'] != "" ): ?>									
											<th>Step 24 Status</th>
		<?php endif; ?>	
        <?php if($get_status_row['transaction_status25'] != "" ): ?>									
											<th>Step 25 Status</th>
		<?php endif; ?>	
        <?php if($get_status_row['transaction_status26'] != "" ): ?>									
											<th>Step 26 Status</th>
		<?php endif; ?>			
		<?php if($get_status_row['transaction_status27'] != "" ): ?>									
											<th>Step 27 Status</th>
		<?php endif; ?>	
		<?php if($get_status_row['transaction_status28'] != "" ): ?>									
											<th>Step 28 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status29'] != "" ): ?>									
											<th>Step 29 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status30'] != "" ): ?>									
											<th>Step 30 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status31'] != "" ): ?>									
											<th>Step 31 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status32'] != "" ): ?>									
											<th>Step 32 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status33'] != "" ): ?>									
											<th>Step 33 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status34'] != "" ): ?>									
											<th>Step 34 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status35'] != "" ): ?>									
											<th>Step 35 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status36'] != "" ): ?>									
											<th>Step 36 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status37'] != "" ): ?>									
											<th>Step 37 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status38'] != "" ): ?>									
											<th>Step 38 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status39'] != "" ): ?>									
											<th>Step 39 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status40'] != "" ): ?>									
											<th>Step 40 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status41'] != "" ): ?>									
											<th>Step 41 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status42'] != "" ): ?>									
											<th>Step 42 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status43'] != "" ): ?>									
											<th>Step 43 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status44'] != "" ): ?>									
											<th>Step 44 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status45'] != "" ): ?>									
											<th>Step 45 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status46'] != "" ): ?>									
											<th>Step 46 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status47'] != "" ): ?>									
											<th>Step 47 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status48'] != "" ): ?>									
											<th>Step 48 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status49'] != "" ): ?>									
											<th>Step 49 Status</th>
		<?php endif; ?>
		<?php if($get_status_row['transaction_status50'] != "" ): ?>									
											<th>Step 50 Status</th>
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
    <?php if($get_status_row['transaction_status21'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status21'];  ?></td>
	<?php endif; ?>	
    <?php if($get_status_row['transaction_status22'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status22'];  ?></td>
	<?php endif; ?>	
    <?php if($get_status_row['transaction_status23'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status23'];  ?></td>
	<?php endif; ?>	
    <?php if($get_status_row['transaction_status24'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status24'];  ?></td>
	<?php endif; ?>	
    <?php if($get_status_row['transaction_status25'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status25'];  ?></td>
	<?php endif; ?>	
    <?php if($get_status_row['transaction_status26'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status26'];  ?></td>
	<?php endif; ?>	
    <?php if($get_status_row['transaction_status27'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status27'];  ?></td>
	<?php endif; ?>	
    <?php if($get_status_row['transaction_status28'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status28'];  ?></td>
	<?php endif; ?>	
    <?php if($get_status_row['transaction_status29'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status29'];  ?></td>
	<?php endif; ?>	
    <?php if($get_status_row['transaction_status30'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status30'];  ?></td>
	<?php endif; ?>	
    <?php if($get_status_row['transaction_status31'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status31'];  ?></td>
	<?php endif; ?>	
    <?php if($get_status_row['transaction_status32'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status32'];  ?></td>
	<?php endif; ?>	
    <?php if($get_status_row['transaction_status33'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status33'];  ?></td>
	<?php endif; ?>	
    <?php if($get_status_row['transaction_status34'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status34'];  ?></td>
	<?php endif; ?>	
    <?php if($get_status_row['transaction_status35'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status35'];  ?></td>
	<?php endif; ?>	
    <?php if($get_status_row['transaction_status36'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status36'];  ?></td>
	<?php endif; ?>	
    <?php if($get_status_row['transaction_status37'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status37'];  ?></td>
	<?php endif; ?>	
    <?php if($get_status_row['transaction_status38'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status38'];  ?></td>
	<?php endif; ?>	
    <?php if($get_status_row['transaction_status39'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status39'];  ?></td>
	<?php endif; ?>	
    <?php if($get_status_row['transaction_status40'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status40'];  ?></td>
	<?php endif; ?>	
    <?php if($get_status_row['transaction_status41'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status41'];  ?></td>
	<?php endif; ?>	
    <?php if($get_status_row['transaction_status42'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status42'];  ?></td>
	<?php endif; ?>	
    <?php if($get_status_row['transaction_status43'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status43'];  ?></td>
	<?php endif; ?>	
    <?php if($get_status_row['transaction_status44'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status44'];  ?></td>
	<?php endif; ?>	
    <?php if($get_status_row['transaction_status45'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status45'];  ?></td>
	<?php endif; ?>	
    <?php if($get_status_row['transaction_status46'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status46'];  ?></td>
	<?php endif; ?>	
    <?php if($get_status_row['transaction_status47'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status47'];  ?></td>
	<?php endif; ?>	
    <?php if($get_status_row['transaction_status48'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status48'];  ?></td>
	<?php endif; ?>	
    <?php if($get_status_row['transaction_status49'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status49'];  ?></td>
	<?php endif; ?>	
    <?php if($get_status_row['transaction_status50'] != "" ): ?>                                        
											<td><?php echo $get_status_row['transaction_status50'];  ?></td>
	<?php endif; ?>		
    </tr>
    
  </tbody>
</table>
</div>
<?php endif; ?>

<div style="overflow-x:auto; margin-left:15px; margin-right:20px">
<table class="table table-striped table-bordered" style="position: relative;" width="100%">
  <thead class="thread">
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
    <?php if($get_status_row['error_msg21'] != ""): ?>										
											<th>Step 21 Error</th>
    <?php endif; ?>
    <?php if($get_status_row['error_msg22'] != ""): ?>										
											<th>Step 22 Error</th>
    <?php endif; ?>
    <?php if($get_status_row['error_msg23'] != ""): ?>										
											<th>Step 23 Error</th>
    <?php endif; ?>
    <?php if($get_status_row['error_msg24'] != ""): ?>										
											<th>Step 24 Error</th>
    <?php endif; ?>
    <?php if($get_status_row['error_msg25'] != ""): ?>										
											<th>Step 25 Error</th>
    <?php endif; ?>
    <?php if($get_status_row['error_msg26'] != ""): ?>										
											<th>Step 26 Error</th>
    <?php endif; ?>
    <?php if($get_status_row['error_msg27'] != ""): ?>										
											<th>Step 27 Error</th>
    <?php endif; ?>
    <?php if($get_status_row['error_msg28'] != ""): ?>										
											<th>Step 28 Error</th>
    <?php endif; ?>
    <?php if($get_status_row['error_msg29'] != ""): ?>										
											<th>Step 29 Error</th>
    <?php endif; ?>
    <?php if($get_status_row['error_msg30'] != ""): ?>										
											<th>Step 30 Error</th>
    <?php endif; ?>
    <?php if($get_status_row['error_msg31'] != ""): ?>										
											<th>Step 31 Error</th>
    <?php endif; ?>
    <?php if($get_status_row['error_msg32'] != ""): ?>										
											<th>Step 32 Error</th>
    <?php endif; ?>
    <?php if($get_status_row['error_msg33'] != ""): ?>										
											<th>Step 33 Error</th>
    <?php endif; ?>
    <?php if($get_status_row['error_msg34'] != ""): ?>										
											<th>Step 34 Error</th>
    <?php endif; ?>
    <?php if($get_status_row['error_msg35'] != ""): ?>										
											<th>Step 35 Error</th>
    <?php endif; ?>
    <?php if($get_status_row['error_msg36'] != ""): ?>										
											<th>Step 36 Error</th>
    <?php endif; ?>
    <?php if($get_status_row['error_msg37'] != ""): ?>										
											<th>Step 37 Error</th>
    <?php endif; ?>
    <?php if($get_status_row['error_msg38'] != ""): ?>										
											<th>Step 38 Error</th>
    <?php endif; ?>
    <?php if($get_status_row['error_msg39'] != ""): ?>										
											<th>Step 39 Error</th>
    <?php endif; ?>
    <?php if($get_status_row['error_msg40'] != ""): ?>										
											<th>Step 40 Error</th>
    <?php endif; ?>
    <?php if($get_status_row['error_msg41'] != ""): ?>										
											<th>Step 41 Error</th>
    <?php endif; ?>
    <?php if($get_status_row['error_msg42'] != ""): ?>										
											<th>Step 42 Error</th>
    <?php endif; ?>
    <?php if($get_status_row['error_msg43'] != ""): ?>										
											<th>Step 43 Error</th>
    <?php endif; ?>
    <?php if($get_status_row['error_msg44'] != ""): ?>										
											<th>Step 44 Error</th>
    <?php endif; ?>
    <?php if($get_status_row['error_msg45'] != ""): ?>										
											<th>Step 45 Error</th>
    <?php endif; ?>
    <?php if($get_status_row['error_msg46'] != ""): ?>										
											<th>Step 46 Error</th>
    <?php endif; ?>
    <?php if($get_status_row['error_msg47'] != ""): ?>										
											<th>Step 47 Error</th>
    <?php endif; ?>
    <?php if($get_status_row['error_msg48'] != ""): ?>										
											<th>Step 48 Error</th>
    <?php endif; ?>
    <?php if($get_status_row['error_msg49'] != ""): ?>										
											<th>Step 49 Error</th>
    <?php endif; ?>
    <?php if($get_status_row['error_msg50'] != ""): ?>										
											<th>Step 50 Error</th>
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
	<?php if($get_status_row['error_msg21'] != ""): ?> 
											<td><?php echo $get_status_row['error_msg21'];  ?></td>
    <?php endif; ?>                                       
	<?php if($get_status_row['error_msg22'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg22'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg23'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg23'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg24'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg24'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg25'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg25'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg26'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg26'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg27'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg27'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg28'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg28'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg29'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg29'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg30'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg30'];  ?></td>
	<?php endif; ?>										
	<?php if($get_status_row['error_msg31'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg31'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg32'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg32'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg33'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg33'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg34'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg34'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg35'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg35'];  ?></td>
	<?php endif; ?>										
	<?php if($get_status_row['error_msg36'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg36'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg37'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg37'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg38'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg38'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg39'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg39'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg40'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg40'];  ?></td>
	<?php endif; ?>
	<?php if($get_status_row['error_msg41'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg41'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg42'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg42'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg43'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg43'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg44'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg44'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg45'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg45'];  ?></td>
	<?php endif; ?>										
	<?php if($get_status_row['error_msg46'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg46'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg47'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg47'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg48'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg48'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg49'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg49'];  ?></td>
    <?php endif; ?>                                        
	<?php if($get_status_row['error_msg50'] != ""): ?>										
											<td><?php echo $get_status_row['error_msg50'];  ?></td>
	<?php endif; ?>
	
    </tr>
    
  </tbody>
</table>
</div>

<div style="overflow-x:auto; margin-left:15px; margin-right:20px">
<table class="table table-striped table-bordered" style="position: relative;" width="100">
  <thead class="thread">
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
											
																						
											<th><?php echo $fetch_transaction_type['custom_field21'];  ?></th>
                                            
											
											<th><?php echo $fetch_transaction_type['custom_field22'];  ?></th>
                                           
											
											<th><?php echo $fetch_transaction_type['custom_field23'];  ?></th>
                                           
											
											<th><?php echo $fetch_transaction_type['custom_field24'];  ?></th>
											
											
											<th><?php echo $fetch_transaction_type['custom_field25'];  ?></th>
										
											
											<th><?php echo $fetch_transaction_type['custom_field26'];  ?></th>
                                           
										
											<th><?php echo $fetch_transaction_type['custom_field27'];  ?></th>
                                          
										
											<th><?php echo $fetch_transaction_type['custom_field28'];  ?></th>
                                            
											
											<th><?php echo $fetch_transaction_type['custom_field29'];  ?></th>
											
											
											<th><?php echo $fetch_transaction_type['custom_field30'];  ?></th>
											
											
											<th><?php echo $fetch_transaction_type['custom_field31'];  ?></th>
                                           
											
											<th><?php echo $fetch_transaction_type['custom_field32'];  ?></th>
                                            
											
											<th><?php echo $fetch_transaction_type['custom_field33'];  ?></th>
                                            
											
											<th><?php echo $fetch_transaction_type['custom_field34'];  ?></th>
											
											
											<th><?php echo $fetch_transaction_type['custom_field35'];  ?></th>
										
											
											<th><?php echo $fetch_transaction_type['custom_field36'];  ?></th>
                                            
										
											<th><?php echo $fetch_transaction_type['custom_field37'];  ?></th>
                                          
									
											<th><?php echo $fetch_transaction_type['custom_field38'];  ?></th>
                                            
											
											<th><?php echo $fetch_transaction_type['custom_field39'];  ?></th>
    
										
											<th><?php echo $fetch_transaction_type['custom_field40'];  ?></th>
											
											
											<th><?php echo $fetch_transaction_type['custom_field41'];  ?></th>
											
											
											<th><?php echo $fetch_transaction_type['custom_field42'];  ?></th>
                                            
											
											<th><?php echo $fetch_transaction_type['custom_field43'];  ?></th>
                                            
											
											<th><?php echo $fetch_transaction_type['custom_field44'];  ?></th>
											
											
											<th><?php echo $fetch_transaction_type['custom_field45'];  ?></th>
										
											
											<th><?php echo $fetch_transaction_type['custom_field46'];  ?></th>
                                            
										
											<th><?php echo $fetch_transaction_type['custom_field47'];  ?></th>
                                          
									
											<th><?php echo $fetch_transaction_type['custom_field48'];  ?></th>
                                            
											
											<th><?php echo $fetch_transaction_type['custom_field49'];  ?></th>
    
										
											<th><?php echo $fetch_transaction_type['custom_field50'];  ?></th>
                                            
    
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
											
											<td><?php echo $get_status_row['custom_field21'];  ?></td>
                                           											
											<td><?php echo $get_status_row['custom_field22'];  ?></td>
                                           											
											<td><?php echo $get_status_row['custom_field23'];  ?></td>
                                           											
											<td><?php echo $get_status_row['custom_field24'];  ?></td>
    									
											<td><?php echo $get_status_row['custom_field25'];  ?></td>
										
											<td><?php echo $get_status_row['custom_field26'];  ?></td>
    									
											<td><?php echo $get_status_row['custom_field27'];  ?></td>
    									
											<td><?php echo $get_status_row['custom_field28'];  ?></td>
    									
											<td><?php echo $get_status_row['custom_field29'];  ?></td>
    									
											<td><?php echo $get_status_row['custom_field30'];  ?></td>
										
											<td><?php echo $get_status_row['custom_field31'];  ?></td>
    									
											<td><?php echo $get_status_row['custom_field32'];  ?></td>
    										
											<td><?php echo $get_status_row['custom_field33'];  ?></td>
    									
											<td><?php echo $get_status_row['custom_field34'];  ?></td>
    									
											<td><?php echo $get_status_row['custom_field35'];  ?></td>
										
											<td><?php echo $get_status_row['custom_field36'];  ?></td>
    										
											<td><?php echo $get_status_row['custom_field37'];  ?></td>
    										
											<td><?php echo $get_status_row['custom_field38'];  ?></td>
    									
											<td><?php echo $get_status_row['custom_field39'];  ?></td>
    									
											<td><?php echo $get_status_row['custom_field40'];  ?></td>
											
											<td><?php echo $get_status_row['custom_field41'];  ?></td>
                                           											
											<td><?php echo $get_status_row['custom_field42'];  ?></td>
                                           											
											<td><?php echo $get_status_row['custom_field43'];  ?></td>
                                           											
											<td><?php echo $get_status_row['custom_field44'];  ?></td>
    									
											<td><?php echo $get_status_row['custom_field45'];  ?></td>
										
											<td><?php echo $get_status_row['custom_field46'];  ?></td>
    									
											<td><?php echo $get_status_row['custom_field47'];  ?></td>
    									
											<td><?php echo $get_status_row['custom_field48'];  ?></td>
    									
											<td><?php echo $get_status_row['custom_field49'];  ?></td>
    									
											<td><?php echo $get_status_row['custom_field50'];  ?></td>
	
	
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