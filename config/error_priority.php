<?php  
  include("config.php");
  include("header.php");
  session_start();
  $transaction_type= $_GET['transaction_type'];
 IF(isset($_GET['search'])){
	$transaction_type= $_GET['transaction_type'];

	
	$query_error_high = mysqli_query($conn,"select * from Integrated_dashboard_error_priority where transaction_type = '". $transaction_type ."' and priority = 'High'");
	$fetch_error_high = mysqli_fetch_assoc($query_error_high);
	$query_error_medium= mysqli_query($conn,"select * from Integrated_dashboard_error_priority where transaction_type = '". $transaction_type ."' and priority = 'Medium'");
	$fetch_error_medium= mysqli_fetch_assoc($query_error_medium);
	$query_error_low= mysqli_query($conn,"select * from Integrated_dashboard_error_priority where transaction_type = '". $transaction_type ."' and priority = 'Low'");
	$fetch_error_low= mysqli_fetch_assoc($query_error_low);
	if(in_array("error_msg1",$fetch_error_low)){
		$error_msg1 = '3';
	}
	if(in_array("error_msg2",$fetch_error_low)){
		$error_msg2 = '3';
	}
	if(in_array("error_msg3",$fetch_error_low)){
		$error_msg3 = '3';
	}	
	if(in_array("error_msg4",$fetch_error_low)){
		$error_msg4 = '3';
	}
	if(in_array("error_msg5",$fetch_error_low)){
		$error_msg5 = '3';
	}
	if(in_array("error_msg6",$fetch_error_low)){
		$error_msg6 = '3';
	}
	if(in_array("error_msg7",$fetch_error_low)){
		$error_msg7 = '3';
	}
	if(in_array("error_msg8",$fetch_error_low)){
		$error_msg8 = '3';
	}
	if(in_array("error_msg9",$fetch_error_low)){
		$error_msg9 = '3';
	}
	if(in_array("error_msg10",$fetch_error_low)){
		$error_msg10 = '3';
	}
	if(in_array("error_msg11",$fetch_error_low)){
		$error_msg11 = '3';
	}
	if(in_array("error_msg12",$fetch_error_low)){
		$error_msg12 = '3';
	}
	if(in_array("error_msg13",$fetch_error_low)){
		$error_msg13 = '3';
	}
	if(in_array("error_msg14",$fetch_error_low)){
		$error_msg14 = '3';
	}
	if(in_array("error_msg15",$fetch_error_low)){
		$error_msg15 = '3';
	}
	if(in_array("error_msg16",$fetch_error_low)){
		$error_msg16 = '3';
	}
	if(in_array("error_msg17",$fetch_error_low)){
		$error_msg17 = '3';
	}
	if(in_array("error_msg18",$fetch_error_low)){
		$error_msg18 = '3';
	}
	if(in_array("error_msg19",$fetch_error_low)){
		$error_msg19 = '3';
	}
	if(in_array("error_msg20",$fetch_error_low)){
		$error_msg20 = '3';
	}
	if(in_array("error_msg21",$fetch_error_low)){
		$error_msg21 = '3';
	}
	if(in_array("error_msg22",$fetch_error_low)){
		$error_msg22 = '3';
	}
	if(in_array("error_msg23",$fetch_error_low)){
		$error_msg23 = '3';
	}
	if(in_array("error_msg24",$fetch_error_low)){
		$error_msg24 = '3';
	}
	if(in_array("error_msg25",$fetch_error_low)){
		$error_msg25 = '3';
	}
	if(in_array("error_msg26",$fetch_error_low)){
		$error_msg26 = '3';
	}
	if(in_array("error_msg27",$fetch_error_low)){
		$error_msg27 = '3';
	}
	if(in_array("error_msg28",$fetch_error_low)){
		$error_msg28 = '3';
	}
	if(in_array("error_msg29",$fetch_error_low)){
		$error_msg29 = '3';
	}
	if(in_array("error_msg30",$fetch_error_low)){
		$error_msg30 = '3';
	}
	if(in_array("error_msg31",$fetch_error_low)){
		$error_msg31 = '3';
	}
	if(in_array("error_msg32",$fetch_error_low)){
		$error_msg32 = '3';
	}
	if(in_array("error_msg33",$fetch_error_low)){
		$error_msg33 = '3';
	}
	if(in_array("error_msg34",$fetch_error_low)){
		$error_msg34 = '3';
	}
	if(in_array("error_msg35",$fetch_error_low)){
		$error_msg35 = '3';
	}
	if(in_array("error_msg36",$fetch_error_low)){
		$error_msg36 = '3';
	}
	if(in_array("error_msg37",$fetch_error_low)){
		$error_msg37 = '3';
	}
	if(in_array("error_msg38",$fetch_error_low)){
		$error_msg38 = '3';
	}
	if(in_array("error_msg39",$fetch_error_low)){
		$error_msg39 = '3';
	}
	if(in_array("error_msg40",$fetch_error_low)){
		$error_msg40 = '3';
	}
	if(in_array("error_msg41",$fetch_error_low)){
		$error_msg41 = '3';
	}
	if(in_array("error_msg42",$fetch_error_low)){
		$error_msg42 = '3';
	}
	if(in_array("error_msg43",$fetch_error_low)){
		$error_msg43 = '3';
	}
	if(in_array("error_msg44",$fetch_error_low)){
		$error_msg44 = '3';
	}
	if(in_array("error_msg45",$fetch_error_low)){
		$error_msg45 = '3';
	}
	if(in_array("error_msg46",$fetch_error_low)){
		$error_msg46 = '3';
	}
	if(in_array("error_msg47",$fetch_error_low)){
		$error_msg47 = '3';
	}
	if(in_array("error_msg48",$fetch_error_low)){
		$error_msg48 = '3';
	}
	if(in_array("error_msg49",$fetch_error_low)){
		$error_msg49 = '3';
	}
	if(in_array("error_msg50",$fetch_error_low)){
		$error_msg50 = '3';
	}
		if(in_array("error_msg1",$fetch_error_medium)){
		$error_msg1 = '2';
	}
	if(in_array("error_msg2",$fetch_error_medium)){
		$error_msg2 = '2';
	}
	if(in_array("error_msg3",$fetch_error_medium)){
		$error_msg3 = '2';
	}	
	if(in_array("error_msg4",$fetch_error_medium)){
		$error_msg4 = '2';
	}
	if(in_array("error_msg5",$fetch_error_medium)){
		$error_msg5 = '2';
	}
	if(in_array("error_msg6",$fetch_error_medium)){
		$error_msg6 = '2';
	}
	if(in_array("error_msg7",$fetch_error_medium)){
		$error_msg7 = '2';
	}
	if(in_array("error_msg8",$fetch_error_medium)){
		$error_msg8 = '2';
	}
	if(in_array("error_msg9",$fetch_error_medium)){
		$error_msg9 = '2';
	}
	if(in_array("error_msg10",$fetch_error_medium)){
		$error_msg10 = '2';
	}
	if(in_array("error_msg11",$fetch_error_medium)){
		$error_msg11 = '2';
	}
	if(in_array("error_msg12",$fetch_error_medium)){
		$error_msg12 = '2';
	}
	if(in_array("error_msg13",$fetch_error_medium)){
		$error_msg13 = '2';
	}
	if(in_array("error_msg14",$fetch_error_medium)){
		$error_msg14 = '2';
	}
	if(in_array("error_msg15",$fetch_error_medium)){
		$error_msg15 = '2';
	}
	if(in_array("error_msg16",$fetch_error_medium)){
		$error_msg16 = '2';
	}
	if(in_array("error_msg17",$fetch_error_medium)){
		$error_msg17 = '2';
	}
	if(in_array("error_msg18",$fetch_error_medium)){
		$error_msg18 = '2';
	}
	if(in_array("error_msg19",$fetch_error_medium)){
		$error_msg19 = '2';
	}
	if(in_array("error_msg20",$fetch_error_medium)){
		$error_msg20 = '2';
	}
	if(in_array("error_msg21",$fetch_error_medium)){
		$error_msg21 = '2';
	}
	if(in_array("error_msg22",$fetch_error_medium)){
		$error_msg22 = '2';
	}
	if(in_array("error_msg23",$fetch_error_medium)){
		$error_msg23 = '2';
	}
	if(in_array("error_msg24",$fetch_error_medium)){
		$error_msg24 = '2';
	}
	if(in_array("error_msg25",$fetch_error_medium)){
		$error_msg25 = '2';
	}
	if(in_array("error_msg26",$fetch_error_medium)){
		$error_msg26 = '2';
	}
	if(in_array("error_msg27",$fetch_error_medium)){
		$error_msg27 = '2';
	}
	if(in_array("error_msg28",$fetch_error_medium)){
		$error_msg28 = '2';
	}
	if(in_array("error_msg29",$fetch_error_medium)){
		$error_msg29 = '2';
	}
	if(in_array("error_msg30",$fetch_error_medium)){
		$error_msg30 = '2';
	}
	if(in_array("error_msg31",$fetch_error_medium)){
		$error_msg31 = '2';
	}
	if(in_array("error_msg32",$fetch_error_medium)){
		$error_msg32 = '2';
	}
	if(in_array("error_msg33",$fetch_error_medium)){
		$error_msg33 = '2';
	}
	if(in_array("error_msg34",$fetch_error_medium)){
		$error_msg34 = '2';
	}
	if(in_array("error_msg35",$fetch_error_medium)){
		$error_msg35 = '2';
	}
	if(in_array("error_msg36",$fetch_error_medium)){
		$error_msg36 = '2';
	}
	if(in_array("error_msg37",$fetch_error_medium)){
		$error_msg37 = '2';
	}
	if(in_array("error_msg38",$fetch_error_medium)){
		$error_msg38 = '2';
	}
	if(in_array("error_msg39",$fetch_error_medium)){
		$error_msg39 = '2';
	}
	if(in_array("error_msg40",$fetch_error_medium)){
		$error_msg40 = '2';
	}
	if(in_array("error_msg41",$fetch_error_medium)){
		$error_msg41 = '2';
	}
	if(in_array("error_msg42",$fetch_error_medium)){
		$error_msg42 = '2';
	}
	if(in_array("error_msg43",$fetch_error_medium)){
		$error_msg43 = '2';
	}
	if(in_array("error_msg44",$fetch_error_medium)){
		$error_msg44 = '2';
	}
	if(in_array("error_msg45",$fetch_error_medium)){
		$error_msg45 = '2';
	}
	if(in_array("error_msg46",$fetch_error_medium)){
		$error_msg46 = '2';
	}
	if(in_array("error_msg47",$fetch_error_medium)){
		$error_msg47 = '2';
	}
	if(in_array("error_msg48",$fetch_error_medium)){
		$error_msg48 = '2';
	}
	if(in_array("error_msg49",$fetch_error_medium)){
		$error_msg49 = '2';
	}
	if(in_array("error_msg50",$fetch_error_medium)){
		$error_msg50 = '2';
	}
	if(in_array("error_msg1",$fetch_error_high)){
		$error_msg1 = '1';
	}
	if(in_array("error_msg2",$fetch_error_high)){
		$error_msg2 = '1';
	}
	if(in_array("error_msg3",$fetch_error_high)){
		$error_msg3 = '1';
	}	
	if(in_array("error_msg4",$fetch_error_high)){
		$error_msg4 = '1';
	}
	if(in_array("error_msg5",$fetch_error_high)){
		$error_msg5 = '1';
	}
	if(in_array("error_msg6",$fetch_error_high)){
		$error_msg6 = '1';
	}
	if(in_array("error_msg7",$fetch_error_high)){
		$error_msg7 = '1';
	}
	if(in_array("error_msg8",$fetch_error_high)){
		$error_msg8 = '1';
	}
	if(in_array("error_msg9",$fetch_error_high)){
		$error_msg9 = '1';
	}
	if(in_array("error_msg10",$fetch_error_high)){
		$error_msg10 = '1';
	}
	if(in_array("error_msg11",$fetch_error_high)){
		$error_msg11 = '1';
	}
	if(in_array("error_msg12",$fetch_error_high)){
		$error_msg12 = '1';
	}
	if(in_array("error_msg13",$fetch_error_high)){
		$error_msg13 = '1';
	}
	if(in_array("error_msg14",$fetch_error_high)){
		$error_msg14 = '1';
	}
	if(in_array("error_msg15",$fetch_error_high)){
		$error_msg15 = '1';
	}
	if(in_array("error_msg16",$fetch_error_high)){
		$error_msg16 = '1';
	}
	if(in_array("error_msg17",$fetch_error_high)){
		$error_msg17 = '1';
	}
	if(in_array("error_msg18",$fetch_error_high)){
		$error_msg18 = '1';
	}
	if(in_array("error_msg19",$fetch_error_high)){
		$error_msg19 = '1';
	}
	if(in_array("error_msg20",$fetch_error_high)){
		$error_msg20 = '1';
	}
	if(in_array("error_msg21",$fetch_error_high)){
		$error_msg21 = '1';
	}
	if(in_array("error_msg22",$fetch_error_high)){
		$error_msg22 = '1';
	}
	if(in_array("error_msg23",$fetch_error_high)){
		$error_msg23 = '1';
	}
	if(in_array("error_msg24",$fetch_error_high)){
		$error_msg24 = '1';
	}
	if(in_array("error_msg25",$fetch_error_high)){
		$error_msg25 = '1';
	}
	if(in_array("error_msg26",$fetch_error_high)){
		$error_msg26 = '1';
	}
	if(in_array("error_msg27",$fetch_error_high)){
		$error_msg27 = '1';
	}
	if(in_array("error_msg28",$fetch_error_high)){
		$error_msg28 = '1';
	}
	if(in_array("error_msg29",$fetch_error_high)){
		$error_msg29 = '1';
	}
	if(in_array("error_msg30",$fetch_error_high)){
		$error_msg30 = '1';
	}
	if(in_array("error_msg31",$fetch_error_high)){
		$error_msg31 = '1';
	}
	if(in_array("error_msg32",$fetch_error_high)){
		$error_msg32 = '1';
	}
	if(in_array("error_msg33",$fetch_error_high)){
		$error_msg33 = '1';
	}
	if(in_array("error_msg34",$fetch_error_high)){
		$error_msg34 = '1';
	}
	if(in_array("error_msg35",$fetch_error_high)){
		$error_msg35 = '1';
	}
	if(in_array("error_msg36",$fetch_error_high)){
		$error_msg36 = '1';
	}
	if(in_array("error_msg37",$fetch_error_high)){
		$error_msg37 = '1';
	}
	if(in_array("error_msg38",$fetch_error_high)){
		$error_msg38 = '1';
	}
	if(in_array("error_msg39",$fetch_error_high)){
		$error_msg39 = '1';
	}
	if(in_array("error_msg40",$fetch_error_high)){
		$error_msg40 = '1';
	}
	if(in_array("error_msg41",$fetch_error_high)){
		$error_msg41 = '1';
	}
	if(in_array("error_msg42",$fetch_error_high)){
		$error_msg42 = '1';
	}
	if(in_array("error_msg43",$fetch_error_high)){
		$error_msg43 = '1';
	}
	if(in_array("error_msg44",$fetch_error_high)){
		$error_msg44 = '1';
	}
	if(in_array("error_msg45",$fetch_error_high)){
		$error_msg45 = '1';
	}
	if(in_array("error_msg46",$fetch_error_high)){
		$error_msg46 = '1';
	}
	if(in_array("error_msg47",$fetch_error_high)){
		$error_msg47 = '1';
	}
	if(in_array("error_msg48",$fetch_error_high)){
		$error_msg48 = '1';
	}
	if(in_array("error_msg49",$fetch_error_high)){
		$error_msg49 = '1';
	}
	if(in_array("error_msg50",$fetch_error_high)){
		$error_msg50 = '1';
	}
 }
if(isset($_GET['update'])){
	$transaction_type= $_GET['transaction_type'];
	$error_msg1 = $_GET['error_msg1'];
	$error_msg2 = $_GET['error_msg2'];
	$error_msg3 = $_GET['error_msg3'];
	$error_msg4 = $_GET['error_msg4'];
	$error_msg5 = $_GET['error_msg5'];
	$error_msg6 = $_GET['error_msg6'];
	$error_msg7 = $_GET['error_msg7'];
	$error_msg8 = $_GET['error_msg8'];
	$error_msg9 = $_GET['error_msg9'];
	$error_msg10 = $_GET['error_msg10'];
	$error_msg11 = $_GET['error_msg11'];
	$error_msg12 = $_GET['error_msg12'];
	$error_msg13 = $_GET['error_msg13'];
	$error_msg14 = $_GET['error_msg14'];
	$error_msg15 = $_GET['error_msg15'];
	$error_msg16 = $_GET['error_msg16'];
	$error_msg17 = $_GET['error_msg17'];
	$error_msg18 = $_GET['error_msg18'];
	$error_msg19 = $_GET['error_msg19'];
	$error_msg20 = $_GET['error_msg20'];
	$error_msg21 = $_GET['error_msg21'];
	$error_msg22 = $_GET['error_msg22'];
	$error_msg23 = $_GET['error_msg23'];
	$error_msg24 = $_GET['error_msg24'];
	$error_msg25 = $_GET['error_msg25'];
	$error_msg26 = $_GET['error_msg26'];
	$error_msg27 = $_GET['error_msg27'];
	$error_msg28 = $_GET['error_msg28'];
	$error_msg29 = $_GET['error_msg29'];
	$error_msg30 = $_GET['error_msg30'];
	$error_msg31 = $_GET['error_msg31'];
	$error_msg32 = $_GET['error_msg32'];
	$error_msg33 = $_GET['error_msg33'];
	$error_msg34 = $_GET['error_msg34'];
	$error_msg35 = $_GET['error_msg35'];
	$error_msg36 = $_GET['error_msg36'];
	$error_msg37 = $_GET['error_msg37'];
	$error_msg38 = $_GET['error_msg38'];
	$error_msg39 = $_GET['error_msg39'];
	$error_msg40 = $_GET['error_msg40'];
	$error_msg41 = $_GET['error_msg41'];
	$error_msg42 = $_GET['error_msg42'];
	$error_msg43 = $_GET['error_msg43'];
	$error_msg44 = $_GET['error_msg44'];
	$error_msg45 = $_GET['error_msg45'];
	$error_msg46 = $_GET['error_msg46'];
	$error_msg47 = $_GET['error_msg47'];
	$error_msg48 = $_GET['error_msg48'];
	$error_msg49 = $_GET['error_msg49'];
	$error_msg50 = $_GET['error_msg50'];
	if(empty($error_msg1)){
		$error_msg1 = '4';
	}
	if(empty($error_msg2)){
		$error_msg2 = '4';
	}
	if(empty($error_msg3)){
		$error_msg3 = '4';
	}
	if(empty($error_msg4)){
		$error_msg4 = '4';
	}
	if(empty($error_msg5)){
		$error_msg5 = '4';
	}
	if(empty($error_msg6)){
		$error_msg6 = '4';
	}
	if(empty($error_msg7)){
		$error_msg7 = '4';
	}
	if(empty($error_msg8)){
		$error_msg8 = '4';
	}
	if(empty($error_msg9)){
		$error_msg9 = '4';
	}
	if(empty($error_msg10)){
		$error_msg10 = '4';
	}
	if(empty($error_msg11)){
		$error_msg11 = '4';
	}
	if(empty($error_msg12)){
		$error_msg12 = '4';
	}
	if(empty($error_msg13)){
		$error_msg13 = '4';
	}
	if(empty($error_msg14)){
		$error_msg14 = '4';
	}
	if(empty($error_msg15)){
		$error_msg15 = '4';
	}
	if(empty($error_msg16)){
		$error_msg16 = '4';
	}
	if(empty($error_msg17)){
		$error_msg17 = '4';
	}
	if(empty($error_msg18)){
		$error_msg18 = '4';
	}
	if(empty($error_msg19)){
		$error_msg19 = '4';
	}
	if(empty($error_msg20)){
		$error_msg20 = '4';
	}
	if(empty($error_msg21)){
		$error_msg21 = '4';
	}
	if(empty($error_msg22)){
		$error_msg22 = '4';
	}
	if(empty($error_msg23)){
		$error_msg23 = '4';
	}
	if(empty($error_msg24)){
		$error_msg24 = '4';
	}
	if(empty($error_msg25)){
		$error_msg25 = '4';
	}
	if(empty($error_msg26)){
		$error_msg26 = '4';
	}
	if(empty($error_msg27)){
		$error_msg27 = '4';
	}
	if(empty($error_msg28)){
		$error_msg28 = '4';
	}
	if(empty($error_msg29)){
		$error_msg29 = '4';
	}
	if(empty($error_msg30)){
		$error_msg30 = '4';
	}
	if(empty($error_msg31)){
		$error_msg31 = '4';
	}
	if(empty($error_msg32)){
		$error_msg32 = '4';
	}
	if(empty($error_msg33)){
		$error_msg33 = '4';
	}
	if(empty($error_msg34)){
		$error_msg34 = '4';
	}
	if(empty($error_msg35)){
		$error_msg35 = '4';
	}
	if(empty($error_msg36)){
		$error_msg36 = '4';
	}
	if(empty($error_msg37)){
		$error_msg37 = '4';
	}
	if(empty($error_msg38)){
		$error_msg38 = '4';
	}
	if(empty($error_msg39)){
		$error_msg39 = '4';
	}
	if(empty($error_msg40)){
		$error_msg40 = '4';
	}
	if(empty($error_msg41)){
		$error_msg41 = '4';
	}
	if(empty($error_msg42)){
		$error_msg42 = '4';
	}
	if(empty($error_msg43)){
		$error_msg43 = '4';
	}
	if(empty($error_msg44)){
		$error_msg44 = '4';
	}
	if(empty($error_msg45)){
		$error_msg45 = '4';
	}
	if(empty($error_msg46)){
		$error_msg46 = '4';
	}
	if(empty($error_msg47)){
		$error_msg47 = '4';
	}
	if(empty($error_msg48)){
		$error_msg48 = '4';
	}
	if(empty($error_msg49)){
		$error_msg49 = '4';
	}
	if(empty($error_msg50)){
		$error_msg50 = '4';
	}
	
	$update_high_error = "update salesorder_dashboard_error_priority set 
							error_type1 = if(".$error_msg1." = '1', 'error_msg1', NULL),
							error_type2 = if(".$error_msg2." = '1', 'error_msg2', NULL),
							error_type3 = if(".$error_msg3." = '1', 'error_msg3', NULL),
							error_type4 = if(".$error_msg4." = '1', 'error_msg4', NULL),
							error_type5 = if(".$error_msg5." = '1', 'error_msg5', NULL),
							error_type6 = if(".$error_msg6." = '1', 'error_msg6', NULL),
							error_type7 = if(".$error_msg7." = '1', 'error_msg7', NULL),
							error_type8 = if(".$error_msg8." = '1', 'error_msg8', NULL),
							error_type9 = if(".$error_msg9." = '1', 'error_msg9', NULL),
							error_type10 = if(".$error_msg10." = '1', 'error_msg10', NULL),
							error_type11 = if(".$error_msg11." = '1', 'error_msg11', NULL),
							error_type12 = if(".$error_msg12." = '1', 'error_msg12', NULL),
							error_type13 = if(".$error_msg13." = '1', 'error_msg13', NULL),
							error_type14 = if(".$error_msg14." = '1', 'error_msg14', NULL),
							error_type15 = if(".$error_msg15." = '1', 'error_msg15', NULL),
							error_type16 = if(".$error_msg16." = '1', 'error_msg16', NULL),
							error_type17 = if(".$error_msg17." = '1', 'error_msg17', NULL),
							error_type18 = if(".$error_msg18." = '1', 'error_msg18', NULL),
							error_type19 = if(".$error_msg19." = '1', 'error_msg19', NULL),
							error_type20 = if(".$error_msg20." = '1', 'error_msg20', NULL),
							error_type21 = if(".$error_msg21." = '1', 'error_msg21', NULL),
							error_type22 = if(".$error_msg22." = '1', 'error_msg22', NULL),
							error_type23 = if(".$error_msg23." = '1', 'error_msg23', NULL),
							error_type24 = if(".$error_msg24." = '1', 'error_msg24', NULL),
							error_type25 = if(".$error_msg25." = '1', 'error_msg25', NULL),
							error_type26 = if(".$error_msg26." = '1', 'error_msg26', NULL),
							error_type27 = if(".$error_msg27." = '1', 'error_msg27', NULL),
							error_type28 = if(".$error_msg28." = '1', 'error_msg28', NULL),
							error_type29 = if(".$error_msg29." = '1', 'error_msg29', NULL),
							error_type30 = if(".$error_msg30." = '1', 'error_msg30', NULL),
							error_type31 = if(".$error_msg31." = '1', 'error_msg31', NULL),
							error_type32 = if(".$error_msg32." = '1', 'error_msg32', NULL),
							error_type33 = if(".$error_msg33." = '1', 'error_msg33', NULL),
							error_type34 = if(".$error_msg34." = '1', 'error_msg34', NULL),
							error_type35 = if(".$error_msg35." = '1', 'error_msg35', NULL),
							error_type36 = if(".$error_msg36." = '1', 'error_msg36', NULL),
							error_type37 = if(".$error_msg37." = '1', 'error_msg37', NULL),
							error_type38 = if(".$error_msg38." = '1', 'error_msg38', NULL),
							error_type39 = if(".$error_msg39." = '1', 'error_msg39', NULL),
							error_type40 = if(".$error_msg40." = '1', 'error_msg40', NULL),
							error_type41 = if(".$error_msg41." = '1', 'error_msg41', NULL),
							error_type42 = if(".$error_msg42." = '1', 'error_msg42', NULL),
							error_type43 = if(".$error_msg43." = '1', 'error_msg43', NULL),
							error_type44 = if(".$error_msg44." = '1', 'error_msg44', NULL),
							error_type45 = if(".$error_msg45." = '1', 'error_msg45', NULL),
							error_type46 = if(".$error_msg46." = '1', 'error_msg46', NULL),
							error_type47 = if(".$error_msg47." = '1', 'error_msg47', NULL),
							error_type48 = if(".$error_msg48." = '1', 'error_msg48', NULL),
							error_type49 = if(".$error_msg49." = '1', 'error_msg49', NULL),
							error_type50 = if(".$error_msg50." = '1', 'error_msg50', NULL)
							where transaction_type = '".$transaction_type."' and priority = 'high' ";
	$update_high_query = mysqli_query($conn,$update_high_error);
	
	$update_meduim_error = "update salesorder_dashboard_error_priority set 
							error_type1 = if(".$error_msg1." = '2', 'error_msg1', NULL),
							error_type2 = if(".$error_msg2." = '2', 'error_msg2', NULL),
							error_type3 = if(".$error_msg3." = '2', 'error_msg3', NULL),
							error_type4 = if(".$error_msg4." = '2', 'error_msg4', NULL),
							error_type5 = if(".$error_msg5." = '2', 'error_msg5', NULL),
							error_type6 = if(".$error_msg6." = '2', 'error_msg6', NULL),
							error_type7 = if(".$error_msg7." = '2', 'error_msg7', NULL),
							error_type8 = if(".$error_msg8." = '2', 'error_msg8', NULL),
							error_type9 = if(".$error_msg9." = '2', 'error_msg9', NULL),
							error_type10 = if(".$error_msg10." = '2', 'error_msg10', NULL),
							error_type11 = if(".$error_msg11." = '2', 'error_msg11', NULL),
							error_type12 = if(".$error_msg12." = '2', 'error_msg12', NULL),
							error_type13 = if(".$error_msg13." = '2', 'error_msg13', NULL),
							error_type14 = if(".$error_msg14." = '2', 'error_msg14', NULL),
							error_type15 = if(".$error_msg15." = '2', 'error_msg15', NULL),
							error_type16 = if(".$error_msg16." = '2', 'error_msg16', NULL),
							error_type17 = if(".$error_msg17." = '2', 'error_msg17', NULL),
							error_type18 = if(".$error_msg18." = '2', 'error_msg18', NULL),
							error_type19 = if(".$error_msg19." = '2', 'error_msg19', NULL),
							error_type20 = if(".$error_msg20." = '2', 'error_msg20', NULL),
							error_type21 = if(".$error_msg21." = '2', 'error_msg21', NULL),
							error_type22 = if(".$error_msg22." = '2', 'error_msg22', NULL),
							error_type23 = if(".$error_msg23." = '2', 'error_msg23', NULL),
							error_type24 = if(".$error_msg24." = '2', 'error_msg24', NULL),
							error_type25 = if(".$error_msg25." = '2', 'error_msg25', NULL),
							error_type26 = if(".$error_msg26." = '2', 'error_msg26', NULL),
							error_type27 = if(".$error_msg27." = '2', 'error_msg27', NULL),
							error_type28 = if(".$error_msg28." = '2', 'error_msg28', NULL),
							error_type29 = if(".$error_msg29." = '2', 'error_msg29', NULL),
							error_type30 = if(".$error_msg30." = '2', 'error_msg30', NULL),
							error_type31 = if(".$error_msg31." = '2', 'error_msg31', NULL),
							error_type32 = if(".$error_msg32." = '2', 'error_msg32', NULL),
							error_type33 = if(".$error_msg33." = '2', 'error_msg33', NULL),
							error_type34 = if(".$error_msg34." = '2', 'error_msg34', NULL),
							error_type35 = if(".$error_msg35." = '2', 'error_msg35', NULL),
							error_type36 = if(".$error_msg36." = '2', 'error_msg36', NULL),
							error_type37 = if(".$error_msg37." = '2', 'error_msg37', NULL),
							error_type38 = if(".$error_msg38." = '2', 'error_msg38', NULL),
							error_type39 = if(".$error_msg39." = '2', 'error_msg39', NULL),
							error_type40 = if(".$error_msg40." = '2', 'error_msg40', NULL),
							error_type41 = if(".$error_msg41." = '2', 'error_msg41', NULL),
							error_type42 = if(".$error_msg42." = '2', 'error_msg42', NULL),
							error_type43 = if(".$error_msg43." = '2', 'error_msg43', NULL),
							error_type44 = if(".$error_msg44." = '2', 'error_msg44', NULL),
							error_type45 = if(".$error_msg45." = '2', 'error_msg45', NULL),
							error_type46 = if(".$error_msg46." = '2', 'error_msg46', NULL),
							error_type47 = if(".$error_msg47." = '2', 'error_msg47', NULL),
							error_type48 = if(".$error_msg48." = '2', 'error_msg48', NULL),
							error_type49 = if(".$error_msg49." = '2', 'error_msg49', NULL),
							error_type50 = if(".$error_msg50." = '2', 'error_msg50', NULL)
							where transaction_type = '".$transaction_type."' and priority = 'medium' ";
	$update_meduim_query = mysqli_query($conn,$update_meduim_error);
	$update_low_error = "update salesorder_dashboard_error_priority set 
						error_type1 = if(".$error_msg1." = '3', 'error_msg1', NULL),
							error_type2 = if(".$error_msg2." = '3', 'error_msg2', NULL),
							error_type3 = if(".$error_msg3." = '3', 'error_msg3', NULL),
							error_type4 = if(".$error_msg4." = '3', 'error_msg4', NULL),
							error_type5 = if(".$error_msg5." = '3', 'error_msg5', NULL),
							error_type6 = if(".$error_msg6." = '3', 'error_msg6', NULL),
							error_type7 = if(".$error_msg7." = '3', 'error_msg7', NULL),
							error_type8 = if(".$error_msg8." = '3', 'error_msg8', NULL),
							error_type9 = if(".$error_msg9." = '3', 'error_msg9', NULL),
							error_type10 = if(".$error_msg10." = '3', 'error_msg10', NULL),
							error_type11 = if(".$error_msg11." = '3', 'error_msg11', NULL),
							error_type12 = if(".$error_msg12." = '3', 'error_msg12', NULL),
							error_type13 = if(".$error_msg13." = '3', 'error_msg13', NULL),
							error_type14 = if(".$error_msg14." = '3', 'error_msg14', NULL),
							error_type15 = if(".$error_msg15." = '3', 'error_msg15', NULL),
							error_type16 = if(".$error_msg16." = '3', 'error_msg16', NULL),
							error_type17 = if(".$error_msg17." = '3', 'error_msg17', NULL),
							error_type18 = if(".$error_msg18." = '3', 'error_msg18', NULL),
							error_type19 = if(".$error_msg19." = '3', 'error_msg19', NULL),
							error_type20 = if(".$error_msg20." = '3', 'error_msg20', NULL),
							error_type21 = if(".$error_msg21." = '3', 'error_msg21', NULL),
							error_type22 = if(".$error_msg22." = '3', 'error_msg22', NULL),
							error_type23 = if(".$error_msg23." = '3', 'error_msg23', NULL),
							error_type24 = if(".$error_msg24." = '3', 'error_msg24', NULL),
							error_type25 = if(".$error_msg25." = '3', 'error_msg25', NULL),
							error_type26 = if(".$error_msg26." = '3', 'error_msg26', NULL),
							error_type27 = if(".$error_msg27." = '3', 'error_msg27', NULL),
							error_type28 = if(".$error_msg28." = '3', 'error_msg28', NULL),
							error_type29 = if(".$error_msg29." = '3', 'error_msg29', NULL),
							error_type30 = if(".$error_msg30." = '3', 'error_msg30', NULL),
							error_type31 = if(".$error_msg31." = '3', 'error_msg31', NULL),
							error_type32 = if(".$error_msg32." = '3', 'error_msg32', NULL),
							error_type33 = if(".$error_msg33." = '3', 'error_msg33', NULL),
							error_type34 = if(".$error_msg34." = '3', 'error_msg34', NULL),
							error_type35 = if(".$error_msg35." = '3', 'error_msg35', NULL),
							error_type36 = if(".$error_msg36." = '3', 'error_msg36', NULL),
							error_type37 = if(".$error_msg37." = '3', 'error_msg37', NULL),
							error_type38 = if(".$error_msg38." = '3', 'error_msg38', NULL),
							error_type39 = if(".$error_msg39." = '3', 'error_msg39', NULL),
							error_type40 = if(".$error_msg40." = '3', 'error_msg40', NULL),
							error_type41 = if(".$error_msg41." = '3', 'error_msg41', NULL),
							error_type42 = if(".$error_msg42." = '3', 'error_msg42', NULL),
							error_type43 = if(".$error_msg43." = '3', 'error_msg43', NULL),
							error_type44 = if(".$error_msg44." = '3', 'error_msg44', NULL),
							error_type45 = if(".$error_msg45." = '3', 'error_msg45', NULL),
							error_type46 = if(".$error_msg46." = '3', 'error_msg46', NULL),
							error_type47 = if(".$error_msg47." = '3', 'error_msg47', NULL),
							error_type48 = if(".$error_msg48." = '3', 'error_msg48', NULL),
							error_type49 = if(".$error_msg49." = '3', 'error_msg49', NULL),
							error_type50 = if(".$error_msg50." = '3', 'error_msg50', NULL)
							where transaction_type = '".$transaction_type."' and priority = 'low' ";
	$update_low_query = mysqli_query($conn,$update_low_error);
if($update_low_query || $update_meduim_query || $update_high_query){
	$Success = 'Successfully updated';
}
if(isset($Success)){
	echo "<script type='text/javascript'>
	window.alert('$Success');
	window.location.href='error_priority.php?transaction_type=$transaction_type&search=Search';
	</script>";
}
}

?>

<!DOCTYPE html>
<body>
<br> <br>
<table class="table">
      
		<form action="" method="GET">
		
	    <div class="form-group row justify-content-center">
		<div class="col-xs-2" style="width:150px; margin-left:10px;">
	 <label class="font-weight-bold" for="transaction_type">Transaction</label>	
	 <select id="transaction_type" name="transaction_type" style="height:35px;  width: 140px;" class="form-control border-dark" >
	 

                                            
                                            <?php
                                            $sql = "SELECT distinct transaction_type FROM Integrated_dashboard order by id asc";
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
	     <input type="submit" style="margin-top: 30px; height:35px; margin-left: 10px; width: 100px; background-color:#ADD8E6;"  id="search" name="search" class="btn text-center font-weight-bold" value="Search">
	</div>
    
	 <div class="col-xs-2 px-2">
   <a href="config_page.php" class="btn font-weight-bold" style=" margin-top: 30px; margin-left: 20px;  height:35px; width: 100px; background-color:#ADD8E6;" >Back</a>
   </div>

  <div class="col-xs-2 px-2"> 
	     <input type="submit" style="margin-top: 30px; height:35px; margin-left: 20px; width: 100px; background-color:#ADD8E6;"  id="update" name="update" class="btn text-center font-weight-bold" value="Update">
	</div>
 </div>

   </table>
<?php if(isset($_GET["search"]) ): ?>
    <div class=" col-xs col-sm col-md col-lg">
                      
                               <table id="bootstrap-data-table" style="position: relative;" class="table table-striped table-bordered">
                              
                                    <thead style="background-color:#ADD8E6">
                                        <tr>
                                            <th>Error Type</th>
                                            <th> <div class="checkbox" ><label>High</label>
											          <input type="checkbox" class="check float-right" id="high" >
                                                 </div></th>
  
                                            <th><div class="checkbox"><label>Medium</label>
											          <input type="checkbox" class="check1 float-right" id="medium" >
                                                 </div></th>
                                            <th><div class="checkbox"><label>Low</label>
											          <input type="checkbox" class="check2 float-right" id="low" >
                                                 </div></th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
<tr>
                                            <tr>
                                            <td>Error Message1</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg1 =='1')?'checked':'' ?> name="error_msg1" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg1 =='2')?'checked':'' ?> name="error_msg1" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg1 =='3')?'checked':'' ?> name="error_msg1" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message2</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg2 =='1')?'checked':'' ?> name="error_msg2" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg2 =='2')?'checked':'' ?> name="error_msg2" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg2 =='3')?'checked':'' ?> name="error_msg2" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message3</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg3 =='1')?'checked':'' ?> name="error_msg3" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg3 =='2')?'checked':'' ?> name="error_msg3" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg3 =='3')?'checked':'' ?> name="error_msg3" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message4</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg4 =='1')?'checked':'' ?> name="error_msg4" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg4 =='2')?'checked':'' ?> name="error_msg4" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg4 =='3')?'checked':'' ?> name="error_msg4" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message5</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg5 =='1')?'checked':'' ?> name="error_msg5" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg5 =='2')?'checked':'' ?> name="error_msg5" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg5 =='3')?'checked':'' ?> name="error_msg5" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message6</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg6 =='1')?'checked':'' ?> name="error_msg6" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg6 =='2')?'checked':'' ?> name="error_msg6" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg6 =='3')?'checked':'' ?> name="error_msg6" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message7</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg7 =='1')?'checked':'' ?> name="error_msg7" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg7 =='2')?'checked':'' ?> name="error_msg7" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg7 =='3')?'checked':'' ?> name="error_msg7" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message8</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg8 =='1')?'checked':'' ?> name="error_msg8" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg8 =='2')?'checked':'' ?> name="error_msg8" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg8 =='3')?'checked':'' ?> name="error_msg8" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message9</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg9 =='1')?'checked':'' ?> name="error_msg9" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg9 =='2')?'checked':'' ?> name="error_msg9" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg9 =='3')?'checked':'' ?> name="error_msg9" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message10</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg10 =='1')?'checked':'' ?> name="error_msg10" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg10 =='2')?'checked':'' ?> name="error_msg10" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg10 =='3')?'checked':'' ?> name="error_msg10" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message11</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg11 =='1')?'checked':'' ?> name="error_msg11" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg11 =='2')?'checked':'' ?> name="error_msg11" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg11 =='3')?'checked':'' ?> name="error_msg11" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message12</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg12 =='1')?'checked':'' ?> name="error_msg12" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg12 =='2')?'checked':'' ?> name="error_msg12" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg12 =='3')?'checked':'' ?> name="error_msg12" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message13</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg13 =='1')?'checked':'' ?> name="error_msg13" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg13 =='2')?'checked':'' ?> name="error_msg13" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg13 =='3')?'checked':'' ?> name="error_msg13" /></td>
                                           
                                        </tr>										
										<tr>
                                            <td>Error Message14</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg14 =='1')?'checked':'' ?> name="error_msg14" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg14 =='2')?'checked':'' ?> name="error_msg14" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg14 =='3')?'checked':'' ?> name="error_msg14" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message15</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg15 =='1')?'checked':'' ?> name="error_msg15" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg15 =='2')?'checked':'' ?> name="error_msg15" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg15 =='3')?'checked':'' ?> name="error_msg15" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message16</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg16 =='1')?'checked':'' ?> name="error_msg16" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg16 =='2')?'checked':'' ?> name="error_msg16" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg16 =='3')?'checked':'' ?> name="error_msg16" /></td>
                                           
                                        </tr>
										
										<tr>
                                            <td>Error Message17</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg17 =='1')?'checked':'' ?> name="error_msg17" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg17 =='2')?'checked':'' ?> name="error_msg17" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg17 =='3')?'checked':'' ?> name="error_msg17" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message18</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg18 =='1')?'checked':'' ?> name="error_msg18" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg18 =='2')?'checked':'' ?> name="error_msg18" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg18 =='3')?'checked':'' ?> name="error_msg18" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message19</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg19 =='1')?'checked':'' ?> name="error_msg19" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg19 =='2')?'checked':'' ?> name="error_msg19" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg19 =='3')?'checked':'' ?> name="error_msg19" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message20</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg20 =='1')?'checked':'' ?> name="error_msg20" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg20 =='2')?'checked':'' ?> name="error_msg20" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg20 =='3')?'checked':'' ?> name="error_msg20" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message21</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg21 =='1')?'checked':'' ?> name="error_msg21" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg21 =='2')?'checked':'' ?> name="error_msg21" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg21 =='3')?'checked':'' ?> name="error_msg21" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message22</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg22 =='1')?'checked':'' ?> name="error_msg22" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg22 =='2')?'checked':'' ?> name="error_msg22" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg22 =='3')?'checked':'' ?> name="error_msg22" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message23</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg23 =='1')?'checked':'' ?> name="error_msg23" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg23 =='2')?'checked':'' ?> name="error_msg23" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg23 =='3')?'checked':'' ?> name="error_msg23" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message24</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg24 =='1')?'checked':'' ?> name="error_msg24" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg24 =='2')?'checked':'' ?> name="error_msg24" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg24 =='3')?'checked':'' ?> name="error_msg24" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message25</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg25 =='1')?'checked':'' ?> name="error_msg25" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg25 =='2')?'checked':'' ?> name="error_msg25" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg25 =='3')?'checked':'' ?> name="error_msg25" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message26</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg26 =='1')?'checked':'' ?> name="error_msg26" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg26 =='2')?'checked':'' ?> name="error_msg26" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg26 =='3')?'checked':'' ?> name="error_msg26" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message27</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg27 =='1')?'checked':'' ?> name="error_msg27" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg27 =='2')?'checked':'' ?> name="error_msg27" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg27 =='3')?'checked':'' ?> name="error_msg27" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message28</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg28 =='1')?'checked':'' ?> name="error_msg28" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg28 =='2')?'checked':'' ?> name="error_msg28" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg28 =='3')?'checked':'' ?> name="error_msg28" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message29</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg29 =='1')?'checked':'' ?> name="error_msg29" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg29 =='2')?'checked':'' ?> name="error_msg29" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg29 =='3')?'checked':'' ?> name="error_msg29" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message30</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg30 =='1')?'checked':'' ?> name="error_msg30" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg30 =='2')?'checked':'' ?> name="error_msg30" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg30 =='3')?'checked':'' ?> name="error_msg30" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message31</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg31 =='1')?'checked':'' ?> name="error_msg31" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg31 =='2')?'checked':'' ?> name="error_msg31" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg31 =='3')?'checked':'' ?> name="error_msg31" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message32</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg32 =='1')?'checked':'' ?> name="error_msg32" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg32 =='2')?'checked':'' ?> name="error_msg32" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg32 =='3')?'checked':'' ?> name="error_msg32" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message33</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg33 =='1')?'checked':'' ?> name="error_msg33" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg33 =='2')?'checked':'' ?> name="error_msg33" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg33 =='3')?'checked':'' ?> name="error_msg33" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message34</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg34 =='1')?'checked':'' ?> name="error_msg34" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg34 =='2')?'checked':'' ?> name="error_msg34" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg34 =='3')?'checked':'' ?> name="error_msg34" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message35</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg35 =='1')?'checked':'' ?> name="error_msg35" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg35 =='2')?'checked':'' ?> name="error_msg35" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg35 =='3')?'checked':'' ?> name="error_msg35" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message36</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg36 =='1')?'checked':'' ?> name="error_msg36" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg36 =='2')?'checked':'' ?> name="error_msg36" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg36 =='3')?'checked':'' ?> name="error_msg36" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message37</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg37 =='1')?'checked':'' ?> name="error_msg37" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg37 =='2')?'checked':'' ?> name="error_msg37" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg37 =='3')?'checked':'' ?> name="error_msg37" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message38</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg38 =='1')?'checked':'' ?> name="error_msg38" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg38 =='2')?'checked':'' ?> name="error_msg38" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg38 =='3')?'checked':'' ?> name="error_msg38" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message39</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg39 =='1')?'checked':'' ?> name="error_msg39" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg39 =='2')?'checked':'' ?> name="error_msg39" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg39 =='3')?'checked':'' ?> name="error_msg39" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message40</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg40 =='1')?'checked':'' ?> name="error_msg40" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg40 =='2')?'checked':'' ?> name="error_msg40" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg40 =='3')?'checked':'' ?> name="error_msg40" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message41</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg41 =='1')?'checked':'' ?> name="error_msg41" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg41 =='2')?'checked':'' ?> name="error_msg41" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg41 =='3')?'checked':'' ?> name="error_msg41" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message42</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg42 =='1')?'checked':'' ?> name="error_msg42" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg42 =='2')?'checked':'' ?> name="error_msg42" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg42 =='3')?'checked':'' ?> name="error_msg42" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message43</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg43 =='1')?'checked':'' ?> name="error_msg43" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg43 =='2')?'checked':'' ?> name="error_msg43" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg43 =='3')?'checked':'' ?> name="error_msg43" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message44</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg44 =='1')?'checked':'' ?> name="error_msg44" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg44 =='2')?'checked':'' ?> name="error_msg44" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg44 =='3')?'checked':'' ?> name="error_msg44" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message45</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg45 =='1')?'checked':'' ?> name="error_msg45" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg45 =='2')?'checked':'' ?> name="error_msg45" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg45 =='3')?'checked':'' ?> name="error_msg45" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message46</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg46 =='1')?'checked':'' ?> name="error_msg46" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg46 =='2')?'checked':'' ?> name="error_msg46" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg46 =='3')?'checked':'' ?> name="error_msg46" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message47</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg47 =='1')?'checked':'' ?> name="error_msg47" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg47 =='2')?'checked':'' ?> name="error_msg47" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg47 =='3')?'checked':'' ?> name="error_msg47" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message48</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg48 =='1')?'checked':'' ?> name="error_msg48" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg48 =='2')?'checked':'' ?> name="error_msg48" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg48 =='3')?'checked':'' ?> name="error_msg48" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message49</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg49 =='1')?'checked':'' ?> name="error_msg49" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg49 =='2')?'checked':'' ?> name="error_msg49" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg49 =='3')?'checked':'' ?> name="error_msg49" /></td>
                                           
                                        </tr>
										<tr>
                                            <td>Error Message50</td>
                                            <td><input type="radio" class="check" value="1" <?php echo ($error_msg50 =='1')?'checked':'' ?> name="error_msg50" /></td>
                                            <td><input type="radio" class="check1" value="2" <?php echo ($error_msg50 =='2')?'checked':'' ?> name="error_msg50" /></td>
                                            <td><input type="radio" class="check2" value="3" <?php echo ($error_msg50 =='3')?'checked':'' ?> name="error_msg50" /></td>
                                           
                                        </tr>
                                       
									   
                                    </tbody>
                                </table>
             
</div>
	
 <?php endif; ?>	
 </form>
 
 <script>
 $("#high").click(function () {
    $(".check").prop('checked', $(this).prop('checked'));
});

$("#medium").click(function () {
    $(".check1").prop('checked', $(this).prop('checked'));
});

$("#low").click(function () {
    $(".check2").prop('checked', $(this).prop('checked'));
});
</script>
<br> <br>
</body>