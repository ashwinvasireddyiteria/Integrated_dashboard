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

$purge_search_button = search($menu_validation, 'menu_code', 'PURGE_SEARCH'); 
$purge_delete_button = search($menu_validation, 'menu_code', 'PURGE_DELETE');
// Menu and Page code validations ends here //


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
	      <a href="purge.php" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
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
	      <a href="purge.php" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
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
	      <a href="purge.php" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 20px;">Please select To Date</h6>
       </div>
    <?php
}	
if($from_date != "" && $to_date != ""){
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
      
       <div class="form-group row justify-content-center">
	    
		<div class="font col-xs-2 px-2">
           <label class="font-weight-bold" for="from_date">From Date</label>
           <input class="form-control border-dark" name="from_date" id="from_date" type="date" value="<?php if (isset($from_date)) {echo $from_date;} ?>">
        </div>

      <div class="font col-xs-2 px-2">
        <label class="font-weight-bold" for="to_date">To Date</label>
        <input class="form-control border-dark" name="to_date" id="to_date" type="date" value="<?php if (isset($to_date)) {echo $to_date;} ?>">
      </div>

       <div class="font col-xs-2 px-2" style="width:200px;">
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
	  
	   <div class="font col-xs-2 px-2" style="width:200px;">
        <label class="font-weight-bold" for="transaction_type">Transaction Type</label>
       <select id="transaction_type" name="transaction_type" style="height: 37px; width:180px;" class="form-control border-dark">                                           
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
	  
  
    
      <div class="col-xs-2">
      
	 <?php if(!empty($purge_search_button)): ?>
	  <input type="submit" style="margin-left: 30px; margin-top: 30px; height: 40px; width: 100px;"  id="search" name="search" class="btn font-weight-bold text-center" value="Search">
	 <?php endif; ?>
	 
	 <a href="../admin.php" style="margin-left: 10px;margin-top: 30px; height: 40px; width: 100px;"  id="back" name="back" class="btn font-weight-bold text-center">Back</a>

    </div>  
   </div>
   </table>
 </form> 
</div>
</div>
</div>



<!-- search bar ending-->


<div class="content">
<form action="delete_selected.php" method="POST">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                             <!-- <div class="card-header">
                                <strong class="card-title">Status Report</strong>
                            </div> -->
                            <div class="card-body">
                             <table id="bootstrap-data-table" style="position: relative;" class="table table-striped table-bordered" width="100%">
                           <thead class="thread">
                            <tr>
                            <th scope="col">Transaction Date</th>
							<th scope="col">Transaction Type</th>
                            <th scope="col">Transaction Number</th>                                                     
	                        <th scope="col">Status</th>
	                        <th scope="col"> <div class="checkbox">Select all
							<input type="checkbox" class="check" id="select_all" ></div></th>
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
                                            <td><?php echo $get_status_row['transaction_number'];  ?></td>								                                                                                
											<td><?php echo $get_status_row['status'];  ?></td>																	
											<td><input type="checkbox" class="check" value="<?php echo $get_status_row['id']; ?>" name="delete_checked[]" /></td>
                                        </tr>
                                        <?php
                                            } 
                                        ?>
                                    </tbody>
                                </table>
<?php if(!empty($purge_delete_button)): ?>		
 <input type="submit" style="margin-left: 30px; margin-top: 30px; "  id="delete" name="delete" class="btn font-weight-bold " onclick="return confirm('Are you sure?')" value="Delete Selected">  
<?php endif; ?> 								
								 <input type="hidden" id="from_date" name="from_date" value="<?php echo $from_date; ?>">
								 <input type="hidden" id="from_date" name="to_date" value="<?php $to_date; ?>">
								 <input type="hidden" id="transaction_type" name="transaction_type" value="<?php echo $transaction_type; ?>">
								 <input type="hidden" id="status" name="status" value="<?php echo $status; ?>">
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

  </form>                       
   <div class="clearfix"></div>
<br><br>
   
<script src="../assets/js/main.js"></script>
     <script src="../assets/js/lib/data-table/datatables.min.js"></script>
     <script src="../assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
     <script src="../assets/js/lib/data-table/dataTables.buttons.min.js"></script>
     <script src="../assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
     <script src="../assets/js/lib/data-table/jszip.min.js"></script>
     <script src="../assets/js/lib/data-table/vfs_fonts.js"></script>
     <script src="../assets/js/lib/data-table/buttons.html5.min.js"></script>
     <script src="../assets/js/lib/data-table/buttons.print.min.js"></script>
     <script src="../assets/js/lib/data-table/buttons.colVis.min.js"></script>
     <script src="../assets/js/init/datatables-init.js"></script>  
 <script type="text/javascript">

 $("#select_all").click(function () {
    $(".check").prop('checked', $(this).prop('checked'));
});

       $(document).ready(function() {
    $('#bootstrap-data-table').DataTable();
} );


</script>
<br> <br>
</body>