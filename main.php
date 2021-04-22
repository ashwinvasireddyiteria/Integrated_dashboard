<?php
include("config.php");
include("header.php");
include("fontstyle.php");
require_once "vendor/autoload.php";
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
\PhpOffice\PhpSpreadsheet\Cell\Cell::setValueBinder( new \PhpOffice\PhpSpreadsheet\Cell\AdvancedValueBinder() );

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
$main_search_button = search($menu_validation, 'menu_code', 'MAIN_SEARCH'); 
$main_export_button = search($menu_validation, 'menu_code', 'MAIN_EXPORT');
$main_reprocess_button = search($menu_validation, 'menu_code', 'MAIN_REPROCESS');
// Menu and Page code validations ends here //


$transaction_type = $_GET['transaction_type'];
$transaction_number = $_GET['transaction_number'];
$error_priority = $_GET['error_priority'];
$duration1 = $_GET['duration1'];
$from_date = $_GET['from_date1'];
$status = $_GET['status'];
$to_date = $_GET['to_date'];

$status1 = "SELECT * FROM Integrated_dashboard where id is not null";
if ($transaction_type != ""){
$status1 .= " and transaction_type = '". $transaction_type."'";
}
if ($transaction_number != ""){
$status1 .= " and transaction_number = '". $transaction_number."'";
}
if ($error_priority!= ""){
$status1 .= " and error_priority = '". $error_priority ."' ";	
}
if ($status != ""){
$status1 .= " and status = '". $status ."' ";	
}
if($from_date !="" && $duration1 !=""){
   $status1 .= " and transaction_date >= date_sub('".$from_date."',interval ".$duration1." day) AND transaction_date <= '".$from_date."' ";
}
if ($from_date !="" && $to_date !=""){
   $status1 .= " and transaction_date >= '". $from_date ."' AND transaction_date <= '". $to_date ."'  ";  
   }


$get_status_sql = mysqli_query($conn,$status1);



		if(isset($_GET['download'])){
          $status = $_GET['status'];
         $transaction_type = $_GET['transaction_type'];
         $transaction_number = $_GET['transaction_number'];       
		 $from_date= $_GET['from_date'];
		 $to_date= $_GET['to_date'];
	$download = "select * from Integrated_dashboard ";
	$download .="WHERE id is not null ";

if($from_date !="" && $to_date !=""){
	$download .="and transaction_date < '". $from_date ."' AND transaction_date > '". $to_date ."' ";
}	
if($status != ""){
	$download .=" and status like '". $status ."%'";
         }  
if($transaction_type != ""){
	$download .=" and transaction_type like '". $transaction_type ."%'";
         }		 
if($transaction_number != ""){
	$download .=" and transaction_number like '". $transaction_number ."%'";
         }

	$download .=" order by id";
		
$download_transaction_type = mysqli_query($conn,"SELECT * from Integrated_dashboard_transactiontype where transaction_type = '". $transaction_type ."' ");	
$row5 = mysqli_fetch_assoc($download_transaction_type);	
$spreadsheet = new Spreadsheet();

 
$spreadsheet->setActiveSheetIndex(0);
$activeSheet = $spreadsheet->getActiveSheet();

$activeSheet->setCellValue('A1', 'ID');
$activeSheet->setCellValue('B1', 'Transaction Type');
$activeSheet->setCellValue('C1', 'Transaction Number');
$activeSheet->setCellValue('D1', 'Transaction Sub Number');
$activeSheet->setCellValue('E1', 'Transaction Date');
$activeSheet->setCellValue('F1', 'Status');
$activeSheet->setCellValue('G1', 'Processed Date');
$activeSheet->setCellValue('H1', 'Filename');
$activeSheet->setCellValue('I1', 'Transaction Status1');
$activeSheet->setCellValue('J1', 'Transaction Status2');
$activeSheet->setCellValue('K1', 'Transaction Status3');
$activeSheet->setCellValue('L1', 'Transaction Status4');
$activeSheet->setCellValue('M1', 'Transaction Status5');
$activeSheet->setCellValue('N1', 'Transaction Status6');
$activeSheet->setCellValue('O1', 'Transaction Status7');
$activeSheet->setCellValue('P1', 'Transaction Status8');
$activeSheet->setCellValue('Q1', 'Transaction Status9');
$activeSheet->setCellValue('R1', 'Transaction Status10');
$activeSheet->setCellValue('S1', 'Transaction Status11');
$activeSheet->setCellValue('T1', 'Transaction Status12');
$activeSheet->setCellValue('U1', 'Transaction Status13');
$activeSheet->setCellValue('V1', 'Transaction Status14');
$activeSheet->setCellValue('W1', 'Transaction Status15');
$activeSheet->setCellValue('X1', 'Transaction Status16');
$activeSheet->setCellValue('Y1', 'Transaction Status17');
$activeSheet->setCellValue('Z1', 'Transaction Status18');
$activeSheet->setCellValue('AA1', 'Transaction Status19');
$activeSheet->setCellValue('AB1', 'Transaction Status20');
$activeSheet->setCellValue('AC1', 'Error Message1');
$activeSheet->setCellValue('AD1', 'Error Message2');
$activeSheet->setCellValue('AE1', 'Error Message3');
$activeSheet->setCellValue('AF1', 'Error Message4');
$activeSheet->setCellValue('AG1', 'Error Message5');
$activeSheet->setCellValue('AH1', 'Error Message6');
$activeSheet->setCellValue('AI1', 'Error Message7');
$activeSheet->setCellValue('AJ1', 'Error Message8');
$activeSheet->setCellValue('AK1', 'Error Message9');
$activeSheet->setCellValue('AL1', 'Error Message10');
$activeSheet->setCellValue('AM1', 'Error Message11');
$activeSheet->setCellValue('AN1', 'Error Message12');
$activeSheet->setCellValue('AO1', 'Error Message13');
$activeSheet->setCellValue('AP1', 'Error Message14');
$activeSheet->setCellValue('AQ1', 'Error Message15');
$activeSheet->setCellValue('AR1', 'Error Message16');
$activeSheet->setCellValue('AS1', 'Error Message17');
$activeSheet->setCellValue('AT1', 'Error Message18');
$activeSheet->setCellValue('AU1', 'Error Message19');
$activeSheet->setCellValue('AV1', 'Error Message20');
$activeSheet->setCellValue('AW1', $row5['custom_field1']);
$activeSheet->setCellValue('AX1', $row5['custom_field2']);
$activeSheet->setCellValue('AY1', $row5['custom_field3']);
$activeSheet->setCellValue('AZ1', $row5['custom_field4']);
$activeSheet->setCellValue('BA1', $row5['custom_field5']);
$activeSheet->setCellValue('BB1', $row5['custom_field6']);
$activeSheet->setCellValue('BC1', $row5['custom_field7']);
$activeSheet->setCellValue('BD1', $row5['custom_field8']);
$activeSheet->setCellValue('BE1', $row5['custom_field9']);
$activeSheet->setCellValue('BF1', $row5['custom_field10']);
$activeSheet->setCellValue('BG1', $row5['custom_field11']);
$activeSheet->setCellValue('BH1', $row5['custom_field12']);
$activeSheet->setCellValue('BI1', $row5['custom_field13']);
$activeSheet->setCellValue('BJ1', $row5['custom_field14']);
$activeSheet->setCellValue('BK1', $row5['custom_field15']);
$activeSheet->setCellValue('BL1', $row5['custom_field16']);
$activeSheet->setCellValue('BM1', $row5['custom_field17']);
$activeSheet->setCellValue('BN1', $row5['custom_field18']);
$activeSheet->setCellValue('BO1', $row5['custom_field19']);
$activeSheet->setCellValue('BP1', $row5['custom_field20']);

$download_file = mysqli_query($conn, $download);

if($download_file->num_rows > 0) {
    $i=2;
    while($row6 = $download_file->fetch_assoc()) {
		$activeSheet->setCellValue('A'.$i , $row6['id']);
		$activeSheet->setCellValue('B'.$i , $row6['transaction_type']);
		$activeSheet->setCellValue('C'.$i , $row6['transaction_number']);
		$activeSheet->setCellValue('D'.$i , $row6['transaction_sub_num']);
		$activeSheet->setCellValue('E'.$i , $row6['transaction_date']);
		$activeSheet->setCellValue('F'.$i , $row6['status']);
		$activeSheet->setCellValue('G'.$i , $row6['processed_date']);
		$activeSheet->setCellValue('H'.$i , $row6['filename']);
		$activeSheet->setCellValue('I'.$i , $row6['transaction_status1']);
		$activeSheet->setCellValue('J'.$i , $row6['transaction_status2']);
		$activeSheet->setCellValue('K'.$i , $row6['transaction_status3']);
		$activeSheet->setCellValue('L'.$i , $row6['transaction_status4']);
		$activeSheet->setCellValue('M'.$i , $row6['transaction_status5']);
		$activeSheet->setCellValue('N'.$i , $row6['transaction_status6']);
		$activeSheet->setCellValue('O'.$i , $row6['transaction_status7']);
		$activeSheet->setCellValue('P'.$i , $row6['transaction_status8']);
		$activeSheet->setCellValue('Q'.$i , $row6['transaction_status9']);
		$activeSheet->setCellValue('R'.$i , $row6['transaction_status10']);
		$activeSheet->setCellValue('S'.$i , $row6['transaction_status11']);
		$activeSheet->setCellValue('T'.$i , $row6['transaction_status12']);
		$activeSheet->setCellValue('U'.$i , $row6['transaction_status13']);
		$activeSheet->setCellValue('V'.$i , $row6['transaction_status14']);
		$activeSheet->setCellValue('W'.$i , $row6['transaction_status15']);
		$activeSheet->setCellValue('X'.$i , $row6['transaction_status16']);
		$activeSheet->setCellValue('Y'.$i , $row6['transaction_status17']);
		$activeSheet->setCellValue('Z'.$i , $row6['transaction_status18']);
		$activeSheet->setCellValue('AA'.$i , $row6['transaction_status19']);
		$activeSheet->setCellValue('AB'.$i , $row6['transaction_status20']);
		$activeSheet->setCellValue('AC'.$i , $row6['error_msg1']);
		$activeSheet->setCellValue('AD'.$i , $row6['error_msg2']);
		$activeSheet->setCellValue('AE'.$i , $row6['error_msg3']);
		$activeSheet->setCellValue('AF'.$i , $row6['error_msg4']);
		$activeSheet->setCellValue('AG'.$i , $row6['error_msg5']);
		$activeSheet->setCellValue('AH'.$i , $row6['error_msg6']);
		$activeSheet->setCellValue('AI'.$i , $row6['error_msg7']);
		$activeSheet->setCellValue('AJ'.$i , $row6['error_msg8']);
		$activeSheet->setCellValue('AK'.$i , $row6['error_msg9']);
		$activeSheet->setCellValue('AL'.$i , $row6['error_msg10']);
		$activeSheet->setCellValue('AM'.$i , $row6['error_msg11']);
		$activeSheet->setCellValue('AN'.$i , $row6['error_msg12']);
		$activeSheet->setCellValue('AO'.$i , $row6['error_msg13']);
		$activeSheet->setCellValue('AP'.$i , $row6['error_msg14']);
		$activeSheet->setCellValue('AQ'.$i , $row6['error_msg15']);
		$activeSheet->setCellValue('AR'.$i , $row6['error_msg16']);
		$activeSheet->setCellValue('AS'.$i , $row6['error_msg17']);
		$activeSheet->setCellValue('AT'.$i , $row6['error_msg18']);
		$activeSheet->setCellValue('AU'.$i , $row6['error_msg19']);
		$activeSheet->setCellValue('AV'.$i , $row6['error_msg20']);
		$activeSheet->setCellValue('AW'.$i , $row6['custom_field1']);
		$activeSheet->setCellValue('AX'.$i , $row6['custom_field2']);
		$activeSheet->setCellValue('AY'.$i , $row6['custom_field3']);
		$activeSheet->setCellValue('AZ'.$i , $row6['custom_field4']);
		$activeSheet->setCellValue('BA'.$i , $row6['custom_field5']);
		$activeSheet->setCellValue('BB'.$i , $row6['custom_field6']);
		$activeSheet->setCellValue('BC'.$i , $row6['custom_field7']);
		$activeSheet->setCellValue('BD'.$i , $row6['custom_field8']);
		$activeSheet->setCellValue('BE'.$i , $row6['custom_field9']);
		$activeSheet->setCellValue('BF'.$i , $row6['custom_field10']);
		$activeSheet->setCellValue('BG'.$i , $row6['custom_field11']);
		$activeSheet->setCellValue('BH'.$i , $row6['custom_field12']);
		$activeSheet->setCellValue('BI'.$i , $row6['custom_field13']);
		$activeSheet->setCellValue('BJ'.$i , $row6['custom_field14']);
		$activeSheet->setCellValue('BK'.$i , $row6['custom_field15']);
		$activeSheet->setCellValue('BL'.$i , $row6['custom_field16']);
		$activeSheet->setCellValue('BM'.$i , $row6['custom_field17']);
		$activeSheet->setCellValue('BN'.$i , $row6['custom_field18']);
		$activeSheet->setCellValue('BO'.$i , $row6['custom_field19']);
		$activeSheet->setCellValue('BP'.$i , $row6['custom_field20']);
		$i++;
    }
}

$filename = 'Integrated_dashboard.xlsx';

$writer = new Xlsx($spreadsheet);
 
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename=' . $filename);
header('Cache-Control: max-age=0');
header('Cache-Control: cache, must-revalidate');
header('Pragma: public');
$writer->save('php://output');
    exit();
		 }

?>

<!doctype html>
<body>
       <!--  Table search bar start-->
<div  style="border:1px solid #999;padding:5px;background-color: #e6e7e9">
    <div class="col-xs-6"> 
    <! Addding New search  bar>
  <?php
         
         if(isset($_GET['search'])){
         $status = $_GET['status'];
         $transaction_type = $_GET['transaction_type'];
         $transaction_number = $_GET['transaction_number'];       
		 $from_date=$_GET['from_date'];
		 $to_date=$_GET['to_date'];
		 
	$search = "select * from Integrated_dashboard ";
	$search .="WHERE id is not null ";
	
if($from_date > $to_date){
	$error1 = "From Date cannot be greater than To Date";
}if(isset($error1)){
	?>
	   <div id="box" class="font">
	      <a href="main.php" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 20px;">From Date cannot be greater than To Date</h6>
       </div>
    <?php
}  
if($from_date == NULL){
	$search .="and transaction_date >= NULL AND transaction_date <= '". $to_date ."' ";
	$error = "Please select From Date";
}
if(isset($error)){
	?>
	   <div id="box" class="font">
	      <a href="main.php" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 20px;">Please select From Date</h6>
       </div>
    <?php
}
if($to_date == NULL){
	$search .="and transaction_date >= '". $from_date ."' AND transaction_date <= NULL ";
	$error2 = "Please select To Date";
}
if(isset($error2)){
	?>
	   <div id="box" class="font">
	      <a href="main.php" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 20px;">Please select To Date</h6>
       </div>
    <?php
}	
if (!empty($from_date) && !empty($to_date)){
	$search .="and transaction_date >= '". $from_date ."' AND transaction_date <= '". $to_date ."' ";
}	
if($status != ""){
	$search .=" and status like '". $status ."%'";
         }  
if($transaction_type != ""){
	$search .=" and transaction_type like '". $transaction_type ."%'";
         }		 
if($transaction_number != ""){
	$search .=" and transaction_number like '". $transaction_number ."%'";
         }
		 
	$get_status_sql = mysqli_query($conn, $search);
         }
?>


  <div class="container-fluid ">
   <form action="" method="GET">
       <table class="table">
      
       <div class="font form-group row justify-content-center">
	    
		<div class="col-xs-2 px-2">
           <label class="font-weight-bold" for="from_date">From Date</label>
           <input class="form-control border-dark" name="from_date" id="from_date" type="date" value="<?php if (isset($from_date)) {echo $from_date;} ?>">
        </div>

      <div class="col-xs-2 px-2">
        <label class="font-weight-bold" for="to_date">To Date</label>
        <input class="form-control border-dark" name="to_date" id="to_date" type="date" value="<?php if (isset($to_date)) {echo $to_date;} ?>">
      </div>

       <div class="col-xs-2 px-2" style="width:200px;">
           <label class="font-weight-bold" for="status"> Status</label><br>
		   <select id="status" name="status" style="height: 37px; width:180px;" class="form-control border-dark">
		   <option value = "">	</option>
			<?php
             $sql1 = "SELECT distinct status FROM Integrated_dashboard ";
             $result1 = mysqli_query($conn, $sql1);
               if (mysqli_num_rows($result1) > 0) {
                                                // output data of each row
             while ($row = mysqli_fetch_assoc($result1)) {
                                                    ?>
		<option <?php echo (isset($status) && $status == $row["status"]) ? "selected='selected'" : ""; ?>  value="<?php echo $row["status"]; ?>"><?php echo $row["status"]; ?></option>
            <?php												
                                                }
                                              } else {
                                                echo "0 results";
                                            }
            ?>
      
	    </select>
      </div>
	  
	   <div class="col-xs-2 px-2" style="width:200px;">
        <label class="font-weight-bold" for="transaction_type">Transaction Type</label>
       <select id="transaction_type" name="transaction_type" style="height: 37px; width:180px;" class="form-control border-dark text-center">                                           
			<option value = "">	</option>
			<?php
             $sql = "SELECT distinct transaction_type FROM Integrated_dashboard ";
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
        <label class="font-weight-bold" for="transaction_number">Transaction Number</label>
        <input type="text" name="transaction_number" id="transaction_number" value="<?php if(isset($transaction_number)){echo $transaction_number;}?>" class="form-control border-dark text-center">
      </div>  
    
      <div class="col-xs-2">
      
	 <?php if(!empty($main_search_button)): ?> 
	  <input type="submit" style="margin-left: 10px; margin-top: 30px;height: 37px; width: 100px;"  id="search" name="search" class="btn font-weight-bold text-center" value="Search">
	 <?php endif; ?> 
	 <?php if(!empty($main_export_button)): ?> 
	  <input type="submit" style="margin-left: 10px;margin-top: 30px; height: 37px; width: 100px;"  id="download" name="download" class="btn font-weight-bold text-center" value="Export">
	 <?php endif; ?> 
	  <a href="index.php" style="margin-left: 10px; margin-top: 30px; height: 37px; width: 100px;"  id="back" name="back" class="btn font-weight-bold	text-center">Back</a>
	  <a href="main.php" style="margin-left: 10px; margin-top: 30px; height: 37px; width: 100px;"  id="reset" name="reset" class="btn font-weight-bold text-center">Reset</a>
    </div>  
   </div>
   </table>
  </form>
</div>
</div>
</div>



<!-- search bar ending-->


<div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                             <!-- <div class="card-header">
                                <strong class="card-title">Status Report</strong>
                            </div> -->
                            <div class="card-body">
                             <table id="bootstrap-data-table" style="position: relative;" class="table table-striped table-bordered" width="100%">
                           <thead class="thread" style="">
                            <tr>
                            <th scope="col">Transaction Date</th>
							<th scope="col">Transaction Type</th>
                            <th scope="col">Transaction Number</th>                                                     
	                        <th scope="col">Status</th>
	                        <th scope="col">Reprocess</th>
                            </tr>
                            </thead>
                 

                            <tbody>
                                  <?php

                                         while($get_status_row = mysqli_fetch_assoc($get_status_sql)){
											 $trans_date = $get_status_row['transaction_date'];
											 $trans_date1 = date("m-d-Y", strtotime($trans_date));
                                        ?>

										
										
                                        <tr>
                                            <td><?php echo  $trans_date1 ;  ?></td>
											<td><?php echo $get_status_row['transaction_type'];  ?></td>											
                                            <td><a href="order_status.php?transaction_number=<?php echo $get_status_row['transaction_number'];?>& transaction_type=<?php echo $transaction_type;?>& from_date=<?php echo $from_date;?>& duration1=<?php echo $duration1 ;?>& to_date=<?php echo $to_date ;?>">
											<?php echo $get_status_row['transaction_number'];  ?></a></td>								                                                                                
											<td><?php echo $get_status_row['status'];  ?></td>
											<td>
											<?php if(!empty($main_reprocess_button)): ?> 
											<?php if(strpos($get_status_row['status'],'Success') === false): ?>
											<a href="reprocess.php?transaction_number=<?php echo $get_status_row['transaction_number'];?>" 
											   class="btn font-weight-bold" style="">Reprocess
											</a>
											<?php endif; ?>
											<?php endif; ?>
											</td>
                                        </tr>
                                        <?php
                                            } 
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
        
                         
   <div class="clearfix"></div>
<br><br>

<!-- Scripts -->
     
     <script src="assets/js/main.js"></script>
 
 
     <script src="assets/js/lib/data-table/datatables.min.js"></script>
     <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
     <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
     <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
     <script src="assets/js/lib/data-table/jszip.min.js"></script>
     <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
     <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
     <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
     <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
     <script src="assets/js/init/datatables-init.js"></script>
	 
 
     <script type="text/javascript">
	  
      
 $(document).ready(function() {
  var table = $('#bootstrap-data-table-export').DataTable({
  dom: 'lrtip',
	  "language": {
                "Search": "type somthing.. ",
            }

    });	  
 
 
    $('#table-filter').on('change', function(){
        var selected_status = $(this).children("option:selected").val();
        window.location.href='main.php?val="'+selected_status+'"';
       table.search(this.value).draw();   
    });
 });

        $(document).ready(function(){
             $(function() {
                $("#table-filter").val("<?php if($val==null){echo 0;}else{echo $val;} ?>");
             });
	});
   </script>
   
  </body>
