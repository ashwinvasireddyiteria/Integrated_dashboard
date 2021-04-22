<?php 
include("config.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$data = json_decode(file_get_contents('php://input'), true);

$transaction_number  = $data["transaction_number"];
$transaction_type    = $data["transaction_type"];
$transaction_sub_num = $data["transaction_sub_num"];
$transaction_date    = $data["transaction_date"];
$status              = $data["status"];
$processed_date      = $data["processed_date"];
$filename            = $data["filename"];
$transaction_status1 = $data["transaction_status1"];
$transaction_status2 = $data["transaction_status2"];
$transaction_status3 = $data["transaction_status3"];
$transaction_status4 = $data["transaction_status4"];
$transaction_status5 = $data["transaction_status5"];
$transaction_status6 = $data["transaction_status6"];
$transaction_status7 = $data["transaction_status7"];
$transaction_status8 = $data["transaction_status8"];
$transaction_status9 = $data["transaction_status9"];
$transaction_status10= $data["transaction_status10"];
$transaction_status11= $data["transaction_status11"];
$transaction_status12= $data["transaction_status12"];
$transaction_status13= $data["transaction_status13"];
$transaction_status14= $data["transaction_status14"];
$transaction_status15= $data["transaction_status15"];
$transaction_status16= $data["transaction_status16"];
$transaction_status17= $data["transaction_status17"];
$transaction_status18= $data["transaction_status18"];
$transaction_status19= $data["transaction_status19"];
$transaction_status20= $data["transaction_status20"];
$transaction_status21= $data["transaction_status21"];
$transaction_status22= $data["transaction_status22"];
$transaction_status23= $data["transaction_status23"];
$transaction_status24= $data["transaction_status24"];
$transaction_status25= $data["transaction_status25"];
$transaction_status26= $data["transaction_status26"];
$transaction_status27= $data["transaction_status27"];
$transaction_status28= $data["transaction_status28"];
$transaction_status29= $data["transaction_status29"];
$transaction_status30= $data["transaction_status30"];
$transaction_status31= $data["transaction_status31"];
$transaction_status32= $data["transaction_status32"];
$transaction_status33= $data["transaction_status33"];
$transaction_status34= $data["transaction_status34"];
$transaction_status35= $data["transaction_status35"];
$transaction_status36= $data["transaction_status36"];
$transaction_status37= $data["transaction_status37"];
$transaction_status38= $data["transaction_status38"];
$transaction_status39= $data["transaction_status39"];
$transaction_status40= $data["transaction_status40"];
$transaction_status41= $data["transaction_status41"];
$transaction_status42= $data["transaction_status42"];
$transaction_status43= $data["transaction_status43"];
$transaction_status44= $data["transaction_status44"];
$transaction_status45= $data["transaction_status45"];
$transaction_status46= $data["transaction_status46"];
$transaction_status47= $data["transaction_status47"];
$transaction_status48= $data["transaction_status48"];
$transaction_status49= $data["transaction_status49"];
$transaction_status50= $data["transaction_status50"];
$error_msg1 =$data["error_msg1"];
$error_msg2 =$data["error_msg2"];
$error_msg3 =$data["error_msg3"];
$error_msg4 =$data["error_msg4"];
$error_msg5 =$data["error_msg5"];
$error_msg6 =$data["error_msg6"];
$error_msg7 =$data["error_msg7"];
$error_msg8 =$data["error_msg8"];
$error_msg9 =$data["error_msg9"];
$error_msg10 =$data["error_msg10"];
$error_msg11 =$data["error_msg11"];
$error_msg12 =$data["error_msg12"];
$error_msg13 =$data["error_msg13"];
$error_msg14 =$data["error_msg14"];
$error_msg15 =$data["error_msg15"];
$error_msg16 =$data["error_msg16"];
$error_msg17 =$data["error_msg17"];
$error_msg18 =$data["error_msg18"];
$error_msg19 =$data["error_msg19"];
$error_msg20 =$data["error_msg20"];
$error_msg21 =$data["error_msg21"];
$error_msg22 =$data["error_msg22"];
$error_msg23 =$data["error_msg23"];
$error_msg24 =$data["error_msg24"];
$error_msg25 =$data["error_msg25"];
$error_msg26 =$data["error_msg26"];
$error_msg27 =$data["error_msg27"];
$error_msg28 =$data["error_msg28"];
$error_msg29 =$data["error_msg29"];
$error_msg30 =$data["error_msg30"];
$error_msg31 =$data["error_msg31"];
$error_msg32 =$data["error_msg32"];
$error_msg33 =$data["error_msg33"];
$error_msg34 =$data["error_msg34"];
$error_msg35 =$data["error_msg35"];
$error_msg36 =$data["error_msg36"];
$error_msg37 =$data["error_msg37"];
$error_msg38 =$data["error_msg38"];
$error_msg39 =$data["error_msg39"];
$error_msg40 =$data["error_msg40"];
$error_msg41 =$data["error_msg41"];
$error_msg42 =$data["error_msg42"];
$error_msg43 =$data["error_msg43"];
$error_msg44 =$data["error_msg44"];
$error_msg45 =$data["error_msg45"];
$error_msg46 =$data["error_msg46"];
$error_msg47 =$data["error_msg47"];
$error_msg48 =$data["error_msg48"];
$error_msg49 =$data["error_msg49"];
$error_msg50 =$data["error_msg50"];
$custom_field1 =$data["custom_field1"];
$custom_field2 =$data["custom_field2"];
$custom_field3 =$data["custom_field3"];
$custom_field4 =$data["custom_field4"];
$custom_field5 =$data["custom_field5"];
$custom_field6 =$data["custom_field6"];
$custom_field7 =$data["custom_field7"];
$custom_field8 =$data["custom_field8"];
$custom_field9 =$data["custom_field9"];
$custom_field10 =$data["custom_field10"];
$custom_field11 =$data["custom_field11"];
$custom_field12 =$data["custom_field12"];
$custom_field13 =$data["custom_field13"];
$custom_field14 =$data["custom_field14"];
$custom_field15 =$data["custom_field15"];
$custom_field16 =$data["custom_field16"];
$custom_field17 =$data["custom_field17"];
$custom_field18 =$data["custom_field18"];
$custom_field19 =$data["custom_field19"];
$custom_field20 =$data["custom_field20"];
$custom_field21 =$data["custom_field21"];
$custom_field22 =$data["custom_field22"];
$custom_field23 =$data["custom_field23"];
$custom_field24 =$data["custom_field24"];
$custom_field25 =$data["custom_field25"];
$custom_field26 =$data["custom_field26"];
$custom_field27 =$data["custom_field27"];
$custom_field28 =$data["custom_field28"];
$custom_field29 =$data["custom_field29"];
$custom_field30 =$data["custom_field30"];
$custom_field31 =$data["custom_field31"];
$custom_field32 =$data["custom_field32"];
$custom_field33 =$data["custom_field33"];
$custom_field34 =$data["custom_field34"];
$custom_field35 =$data["custom_field35"];
$custom_field36 =$data["custom_field36"];
$custom_field37 =$data["custom_field37"];
$custom_field38 =$data["custom_field38"];
$custom_field39 =$data["custom_field39"];
$custom_field40 =$data["custom_field40"];
$custom_field41 =$data["custom_field41"];
$custom_field42 =$data["custom_field42"];
$custom_field43 =$data["custom_field43"];
$custom_field44 =$data["custom_field44"];
$custom_field45 =$data["custom_field45"];
$custom_field46 =$data["custom_field46"];
$custom_field47 =$data["custom_field47"];
$custom_field48 =$data["custom_field48"];
$custom_field49 =$data["custom_field49"];
$custom_field50 =$data["custom_field50"];
$error_priority =$data["error_priority"];



$check = mysqli_query($conn, "select * from Integrated_dashboard where transaction_number ='". $transaction_number ."'");
$result = mysqli_num_rows($check);

if($result > 0){

	$update_query="update Integrated_dashboard set
					transaction_type =      NULLIF('".$transaction_type."',''), 
					transaction_number =    NULLIF('".$transaction_number."',''),
					transaction_sub_num =   NULLIF('".$transaction_sub_num."',''),
					transaction_date =      NULLIF('".$transaction_date."',''),	
					status =                NULLIF('".$status."',''),
					processed_date =        NULLIF('".$processed_date."',''),
					filename =	            NULLIF('".$filename."',''),
					transaction_status1 =	NULLIF('".$transaction_status1."',''),
					transaction_status2 =	NULLIF('".$transaction_status2."',''),
					transaction_status3 =	NULLIF('".$transaction_status3."',''),
					transaction_status4 =	NULLIF('".$transaction_status4."',''),
					transaction_status5 =	NULLIF('".$transaction_status5."',''),
					transaction_status6 =	NULLIF('".$transaction_status6."',''),
					transaction_status7 =	NULLIF('".$transaction_status7."',''),
					transaction_status8 =	NULLIF('".$transaction_status8."',''),
					transaction_status9 =	NULLIF('".$transaction_status9."',''),
					transaction_status10 =	NULLIF('".$transaction_status10."',''),
					transaction_status11 =	NULLIF('".$transaction_status11."',''),
					transaction_status12 =	NULLIF('".$transaction_status12."',''),
					transaction_status13 =	NULLIF('".$transaction_status13."',''),
					transaction_status14 =	NULLIF('".$transaction_status14."',''),
					transaction_status15 =	NULLIF('".$transaction_status15."',''),
					transaction_status16 =	NULLIF('".$transaction_status16."',''),
					transaction_status17 =	NULLIF('".$transaction_status17."',''),
					transaction_status18 =	NULLIF('".$transaction_status18."',''),
					transaction_status19 =	NULLIF('".$transaction_status19."',''),
					transaction_status20 =	NULLIF('".$transaction_status20."',''),
					transaction_status21 =	NULLIF('".$transaction_status21."',''),
					transaction_status22 =	NULLIF('".$transaction_status22."',''),
					transaction_status23 =	NULLIF('".$transaction_status23."',''),
					transaction_status24 =	NULLIF('".$transaction_status24."',''),
					transaction_status25 =	NULLIF('".$transaction_status25."',''),
					transaction_status26 =	NULLIF('".$transaction_status26."',''),
					transaction_status27 =	NULLIF('".$transaction_status27."',''),
					transaction_status28 =	NULLIF('".$transaction_status28."',''),
					transaction_status29 =	NULLIF('".$transaction_status29."',''),
					transaction_status30 =	NULLIF('".$transaction_status30."',''),
					transaction_status31 =	NULLIF('".$transaction_status31."',''),
					transaction_status32 =	NULLIF('".$transaction_status32."',''),
					transaction_status33 =	NULLIF('".$transaction_status33."',''),
					transaction_status34 =	NULLIF('".$transaction_status34."',''),
					transaction_status35 =	NULLIF('".$transaction_status35."',''),
					transaction_status36 =	NULLIF('".$transaction_status36."',''),
					transaction_status37 =	NULLIF('".$transaction_status37."',''),
					transaction_status38 =	NULLIF('".$transaction_status38."',''),
					transaction_status39 =	NULLIF('".$transaction_status39."',''),
					transaction_status40 =	NULLIF('".$transaction_status40."',''),
					transaction_status41 =	NULLIF('".$transaction_status41."',''),
					transaction_status42 =	NULLIF('".$transaction_status42."',''),
					transaction_status43 =	NULLIF('".$transaction_status43."',''),
					transaction_status44 =	NULLIF('".$transaction_status44."',''),
					transaction_status45 =	NULLIF('".$transaction_status45."',''),
					transaction_status46 =	NULLIF('".$transaction_status46."',''),
					transaction_status47 =	NULLIF('".$transaction_status47."',''),
					transaction_status48 =	NULLIF('".$transaction_status48."',''),
					transaction_status49 =	NULLIF('".$transaction_status49."',''),
					transaction_status50 =	NULLIF('".$transaction_status50."',''),
					error_msg1 =	        NULLIF('".$error_msg1."',''),
					error_msg2 =	        NULLIF('".$error_msg2."',''),
					error_msg3 =	        NULLIF('".$error_msg3."',''),
					error_msg4 =            NULLIF('".$error_msg4."',''),
					error_msg5 =	        NULLIF('".$error_msg5."',''),
					error_msg6 =	        NULLIF('".$error_msg6."',''),
					error_msg7 =	        NULLIF('".$error_msg7."',''),
					error_msg8 =	        NULLIF('".$error_msg8."',''),
					error_msg9 =	        NULLIF('".$error_msg9."',''),
					error_msg10 =	        NULLIF('".$error_msg10."',''),
					error_msg11 =	        NULLIF('".$error_msg11."',''),
					error_msg12 =	        NULLIF('".$error_msg12."',''),
					error_msg13 =	        NULLIF('".$error_msg13."',''),
					error_msg14 =	        NULLIF('".$error_msg14."',''),
					error_msg15 =	        NULLIF('".$error_msg15."',''),
					error_msg16 =	        NULLIF('".$error_msg16."',''),
					error_msg17=	        NULLIF('".$error_msg17."',''),
					error_msg18 =	        NULLIF('".$error_msg18."',''),
					error_msg19 =	        NULLIF('".$error_msg19."',''),
					error_msg20 =	        NULLIF('".$error_msg20."',''),
					error_msg21 =	        NULLIF('".$error_msg21."',''),
					error_msg22 =	        NULLIF('".$error_msg22."',''),
					error_msg23 =	        NULLIF('".$error_msg23."',''),
					error_msg24 =	        NULLIF('".$error_msg24."',''),
					error_msg25 =	        NULLIF('".$error_msg25."',''),
					error_msg26 =	        NULLIF('".$error_msg26."',''),
					error_msg27 =	        NULLIF('".$error_msg27."',''),
					error_msg28 =	        NULLIF('".$error_msg28."',''),
					error_msg29 =	        NULLIF('".$error_msg29."',''),
					error_msg30 =	        NULLIF('".$error_msg30."',''),
					error_msg31 =	        NULLIF('".$error_msg31."',''),
					error_msg32 =	        NULLIF('".$error_msg32."',''),
					error_msg33 =	        NULLIF('".$error_msg33."',''),
					error_msg34 =	        NULLIF('".$error_msg34."',''),
					error_msg35 =	        NULLIF('".$error_msg35."',''),
					error_msg36 =	        NULLIF('".$error_msg36."',''),
					error_msg37 =	        NULLIF('".$error_msg37."',''),
					error_msg38 =	        NULLIF('".$error_msg38."',''),
					error_msg39 =	        NULLIF('".$error_msg39."',''),
					error_msg40 =	        NULLIF('".$error_msg40."',''),
					error_msg41 =	        NULLIF('".$error_msg41."',''),
					error_msg42 =	        NULLIF('".$error_msg42."',''),
					error_msg43 =	        NULLIF('".$error_msg43."',''),
					error_msg44 =	        NULLIF('".$error_msg44."',''),
					error_msg45 =	        NULLIF('".$error_msg45."',''),
					error_msg46 =	        NULLIF('".$error_msg46."',''),
					error_msg47 =	        NULLIF('".$error_msg47."',''),
					error_msg48 =	        NULLIF('".$error_msg48."',''),
					error_msg49 =	        NULLIF('".$error_msg49."',''),
					error_msg50 =	        NULLIF('".$error_msg50."',''),
					custom_field1  =	    NULLIF('".$custom_field1."',''),
					custom_field2  =	    NULLIF('".$custom_field2."',''),
					custom_field3  =	    NULLIF('".$custom_field3."',''),
					custom_field4  =	    NULLIF('".$custom_field4."',''),
					custom_field5  =	    NULLIF('".$custom_field5."',''),
					custom_field6  =	    NULLIF('".$custom_field6."',''),
					custom_field7  =	    NULLIF('".$custom_field7."',''),
					custom_field8  =	    NULLIF('".$custom_field8."',''),
					custom_field9  =	    NULLIF('".$custom_field9."',''),
					custom_field10 =        NULLIF('".$custom_field10."',''),
					custom_field11 =        NULLIF('".$custom_field11."',''),
					custom_field12 =        NULLIF('".$custom_field12."',''),
					custom_field13 =        NULLIF('".$custom_field13."',''),
					custom_field14 =        NULLIF('".$custom_field14."',''),
					custom_field15 =        NULLIF('".$custom_field15."',''),
					custom_field16 =        NULLIF('".$custom_field16."',''),
					custom_field17 =        NULLIF('".$custom_field17."',''),
					custom_field18 =        NULLIF('".$custom_field18."',''),
					custom_field19 =        NULLIF('".$custom_field19."',''),
					custom_field20 =        NULLIF('".$custom_field20."',''),
					custom_field21 =	    NULLIF('".$custom_field21."',''),
					custom_field22 =	    NULLIF('".$custom_field22."',''),
					custom_field23 =	    NULLIF('".$custom_field23."',''),
					custom_field24 =	    NULLIF('".$custom_field24."',''),
					custom_field25 =	    NULLIF('".$custom_field25."',''),
					custom_field26 =	    NULLIF('".$custom_field26."',''),
					custom_field27 =	    NULLIF('".$custom_field27."',''),
					custom_field28 =	    NULLIF('".$custom_field28."',''),
					custom_field29 =	    NULLIF('".$custom_field29."',''),
					custom_field30 =        NULLIF('".$custom_field30."',''),
					custom_field31 =	    NULLIF('".$custom_field31."',''),
					custom_field32 =	    NULLIF('".$custom_field32."',''),
					custom_field33 =	    NULLIF('".$custom_field33."',''),
					custom_field34 =	    NULLIF('".$custom_field34."',''),
					custom_field35 =	    NULLIF('".$custom_field35."',''),
					custom_field36 =	    NULLIF('".$custom_field36."',''),
					custom_field37 =	    NULLIF('".$custom_field37."',''),
					custom_field38 =	    NULLIF('".$custom_field38."',''),
					custom_field39 =	    NULLIF('".$custom_field39."',''),
					custom_field40 =        NULLIF('".$custom_field40."',''),
					custom_field41 =	    NULLIF('".$custom_field41."',''),
					custom_field42 =	    NULLIF('".$custom_field42."',''),
					custom_field43 =	    NULLIF('".$custom_field43."',''),
					custom_field44 =	    NULLIF('".$custom_field44."',''),
					custom_field45 =	    NULLIF('".$custom_field45."',''),
					custom_field46 =	    NULLIF('".$custom_field46."',''),
					custom_field47 =	    NULLIF('".$custom_field47."',''),
					custom_field48 =	    NULLIF('".$custom_field48."',''),
					custom_field49 =	    NULLIF('".$custom_field49."',''),
					custom_field50 =        NULLIF('".$custom_field50."','') 
					where transaction_number = '". $transaction_number ."' ";
	

	
    $query = mysqli_query($conn,$update_query);
	
//<!--defining error priority-->       
$priority_high = mysqli_query($conn,"SELECT * from Integrated_dashboard_error_priority where priority ='High' and transaction_type = '". $transaction_type ."' ");
while($priority_high_fetch = mysqli_fetch_assoc($priority_high)){
	$error_type1= $priority_high_fetch["error_type1"];
	$error_type2= $priority_high_fetch["error_type2"];
	$error_type3= $priority_high_fetch["error_type3"];
	$error_type4= $priority_high_fetch["error_type4"];
	$error_type5= $priority_high_fetch["error_type5"];
	$error_type6= $priority_high_fetch["error_type6"];
	$error_type7= $priority_high_fetch["error_type7"];
	$error_type8= $priority_high_fetch["error_type8"];
	$error_type9= $priority_high_fetch["error_type9"];
	$error_type10= $priority_high_fetch["error_type10"];
	$error_type11= $priority_high_fetch["error_type11"];
	$error_type12= $priority_high_fetch["error_type12"];
	$error_type13= $priority_high_fetch["error_type13"];
	$error_type14= $priority_high_fetch["error_type14"];
	$error_type15= $priority_high_fetch["error_type15"];
	$error_type16= $priority_high_fetch["error_type16"];
	$error_type17= $priority_high_fetch["error_type17"];
	$error_type18= $priority_high_fetch["error_type18"];
	$error_type19= $priority_high_fetch["error_type19"];
	$error_type20= $priority_high_fetch["error_type20"];
	$error_type21= $priority_high_fetch["error_type21"];
	$error_type22= $priority_high_fetch["error_type22"];
	$error_type23= $priority_high_fetch["error_type23"];
	$error_type24= $priority_high_fetch["error_type24"];
	$error_type25= $priority_high_fetch["error_type25"];
	$error_type26= $priority_high_fetch["error_type26"];
	$error_type27= $priority_high_fetch["error_type27"];
	$error_type28= $priority_high_fetch["error_type28"];
	$error_type29= $priority_high_fetch["error_type29"];
	$error_type30= $priority_high_fetch["error_type30"];
	$error_type31= $priority_high_fetch["error_type31"];
	$error_type32= $priority_high_fetch["error_type32"];
	$error_type33= $priority_high_fetch["error_type33"];
	$error_type34= $priority_high_fetch["error_type34"];
	$error_type35= $priority_high_fetch["error_type35"];
	$error_type36= $priority_high_fetch["error_type36"];
	$error_type37= $priority_high_fetch["error_type37"];
	$error_type38= $priority_high_fetch["error_type38"];
	$error_type39= $priority_high_fetch["error_type39"];
	$error_type40= $priority_high_fetch["error_type40"];
	$error_type41= $priority_high_fetch["error_type41"];
	$error_type42= $priority_high_fetch["error_type42"];
	$error_type43= $priority_high_fetch["error_type43"];
	$error_type44= $priority_high_fetch["error_type44"];
	$error_type45= $priority_high_fetch["error_type45"];
	$error_type46= $priority_high_fetch["error_type46"];
	$error_type47= $priority_high_fetch["error_type47"];
	$error_type48= $priority_high_fetch["error_type48"];
	$error_type49= $priority_high_fetch["error_type49"];
	$error_type50= $priority_high_fetch["error_type50"];
	$high_error = " select sum(CASE WHEN id is NULL THEN 1  " ;
	if (!empty($error_type1)){
	$high_error .=" WHEN ".$error_type1." is NOT NULL THEN 1 "; 
	}
	if (!empty($error_type2)){
	$high_error .="	WHEN ".$error_type2." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type3)){
	$high_error .="	WHEN ".$error_type3." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type4)){
	$high_error .="	WHEN ".$error_type4." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type5)){
	$high_error .="	WHEN ".$error_type5." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type6)){
	$high_error .="	WHEN ".$error_type6." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type7)){
	$high_error .="	WHEN ".$error_type7." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type8)){
	$high_error .="	WHEN ".$error_type8." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type9)){
	$high_error .="	WHEN ".$error_type9." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type10)){
	$high_error .="	WHEN ".$error_type10." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type11)){
	$high_error .="	WHEN ".$error_type11." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type12)){
	$high_error .="	WHEN ".$error_type12." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type13)){
	$high_error .="	WHEN ".$error_type13." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type14)){
	$high_error .="	WHEN ".$error_type14." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type15)){
	$high_error .="	WHEN ".$error_type15." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type16)){
	$high_error .="	WHEN ".$error_type16." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type17)){
	$high_error .="	WHEN ".$error_type17." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type18)){
	$high_error .="	WHEN ".$error_type18." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type19)){
	$high_error .="	WHEN ".$error_type19." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type20)){
	$high_error .="	WHEN ".$error_type20." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type21)){
	$high_error .="	WHEN ".$error_type21." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type22)){
	$high_error .="	WHEN ".$error_type22." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type23)){
	$high_error .="	WHEN ".$error_type23." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type24)){
	$high_error .="	WHEN ".$error_type24." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type25)){
	$high_error .="	WHEN ".$error_type25." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type26)){
	$high_error .="	WHEN ".$error_type26." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type27)){
	$high_error .="	WHEN ".$error_type27." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type28)){
	$high_error .="	WHEN ".$error_type28." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type29)){
	$high_error .="	WHEN ".$error_type29." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type30)){
	$high_error .="	WHEN ".$error_type30." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type31)){
	$high_error .="	WHEN ".$error_type31." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type32)){
	$high_error .="	WHEN ".$error_type32." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type33)){
	$high_error .="	WHEN ".$error_type33." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type34)){
	$high_error .="	WHEN ".$error_type35." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type36)){
	$high_error .="	WHEN ".$error_type36." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type37)){
	$high_error .="	WHEN ".$error_type37." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type38)){
	$high_error .="	WHEN ".$error_type38." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type39)){
	$high_error .="	WHEN ".$error_type39." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type40)){
	$high_error .="	WHEN ".$error_type40." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type41)){
	$high_error .="	WHEN ".$error_type41." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type42)){
	$high_error .="	WHEN ".$error_type42." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type43)){
	$high_error .="	WHEN ".$error_type43." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type44)){
	$high_error .="	WHEN ".$error_type44." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type45)){
	$high_error .="	WHEN ".$error_type45." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type46)){
	$high_error .="	WHEN ".$error_type46." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type47)){
	$high_error .="	WHEN ".$error_type47." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type48)){
	$high_error .="	WHEN ".$error_type48." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type49)){
	$high_error .="	WHEN ".$error_type49." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type50)){
	$high_error .="	WHEN ".$error_type50." is NOT NULL THEN 1 ";
	}
	$high_error	.="	ELSE 0 END) AS count 
					FROM Integrated_dashboard where transaction_number = '".$transaction_number."'";
	$high_error_query = mysqli_query($conn,$high_error);
	$high_error_fetch = mysqli_fetch_assoc($high_error_query);
	$high_error_count = $high_error_fetch["count"];
} 	
if ($high_error_count > 0){
	
	$insert_error_priority = mysqli_query($conn,"update Integrated_dashboard set error_priority = 'High' where transaction_number = '".$transaction_number."'");
	
}
//<!-- end of defining high error priority-->  	


 //<!--defining medium error priority-->       
$priority_medium = mysqli_query($conn,"SELECT * from Integrated_dashboard_error_priority where priority ='medium' and transaction_type = '". $transaction_type ."' ");
while($priority_medium_fetch = mysqli_fetch_assoc($priority_medium)){
	$error_type1= $priority_medium_fetch["error_type1"];
	$error_type2= $priority_medium_fetch["error_type2"];
	$error_type3= $priority_medium_fetch["error_type3"];
	$error_type4= $priority_medium_fetch["error_type4"];
	$error_type5= $priority_medium_fetch["error_type5"];
	$error_type6= $priority_medium_fetch["error_type6"];
	$error_type7= $priority_medium_fetch["error_type7"];
	$error_type8= $priority_medium_fetch["error_type8"];
	$error_type9= $priority_medium_fetch["error_type9"];
	$error_type10= $priority_medium_fetch["error_type10"];
	$error_type11= $priority_medium_fetch["error_type11"];
	$error_type12= $priority_medium_fetch["error_type12"];
	$error_type13= $priority_medium_fetch["error_type13"];
	$error_type14= $priority_medium_fetch["error_type14"];
	$error_type15= $priority_medium_fetch["error_type15"];
	$error_type16= $priority_medium_fetch["error_type16"];
	$error_type17= $priority_medium_fetch["error_type17"];
	$error_type18= $priority_medium_fetch["error_type18"];
	$error_type19= $priority_medium_fetch["error_type19"];
	$error_type20= $priority_medium_fetch["error_type20"];
	$error_type21= $priority_medium_fetch["error_type21"];
	$error_type22= $priority_medium_fetch["error_type22"];
	$error_type23= $priority_medium_fetch["error_type23"];
	$error_type24= $priority_medium_fetch["error_type24"];
	$error_type25= $priority_medium_fetch["error_type25"];
	$error_type26= $priority_medium_fetch["error_type26"];
	$error_type27= $priority_medium_fetch["error_type27"];
	$error_type28= $priority_medium_fetch["error_type28"];
	$error_type29= $priority_medium_fetch["error_type29"];
	$error_type30= $priority_medium_fetch["error_type30"];
	$error_type31= $priority_medium_fetch["error_type31"];
	$error_type32= $priority_medium_fetch["error_type32"];
	$error_type33= $priority_medium_fetch["error_type33"];
	$error_type34= $priority_medium_fetch["error_type34"];
	$error_type35= $priority_medium_fetch["error_type35"];
	$error_type36= $priority_medium_fetch["error_type36"];
	$error_type37= $priority_medium_fetch["error_type37"];
	$error_type38= $priority_medium_fetch["error_type38"];
	$error_type39= $priority_medium_fetch["error_type39"];
	$error_type40= $priority_medium_fetch["error_type40"];
	$error_type41= $priority_medium_fetch["error_type41"];
	$error_type42= $priority_medium_fetch["error_type42"];
	$error_type43= $priority_medium_fetch["error_type43"];
	$error_type44= $priority_medium_fetch["error_type44"];
	$error_type45= $priority_medium_fetch["error_type45"];
	$error_type46= $priority_medium_fetch["error_type46"];
	$error_type47= $priority_medium_fetch["error_type47"];
	$error_type48= $priority_medium_fetch["error_type48"];
	$error_type49= $priority_medium_fetch["error_type49"];
	$error_type50= $priority_medium_fetch["error_type50"];
	$medium_error = " select sum(CASE WHEN id is NULL THEN 1  " ;
	if (!empty($error_type1)){
	$medium_error .=" WHEN ".$error_type1." is NOT NULL THEN 1 "; 
	}
	if (!empty($error_type2)){
	$medium_error .="	WHEN ".$error_type2." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type3)){
	$medium_error .="	WHEN ".$error_type3." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type4)){
	$medium_error .="	WHEN ".$error_type4." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type5)){
	$medium_error .="	WHEN ".$error_type5." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type6)){
	$medium_error .="	WHEN ".$error_type6." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type7)){
	$medium_error .="	WHEN ".$error_type7." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type8)){
	$medium_error .="	WHEN ".$error_type8." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type9)){
	$medium_error .="	WHEN ".$error_type9." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type10)){
	$medium_error .="	WHEN ".$error_type10." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type11)){
	$medium_error .="	WHEN ".$error_type11." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type12)){
	$medium_error .="	WHEN ".$error_type12." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type13)){
	$medium_error .="	WHEN ".$error_type13." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type14)){
	$medium_error .="	WHEN ".$error_type14." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type15)){
	$medium_error .="	WHEN ".$error_type15." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type16)){
	$medium_error .="	WHEN ".$error_type16." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type17)){
	$medium_error .="	WHEN ".$error_type17." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type18)){
	$medium_error .="	WHEN ".$error_type18." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type19)){
	$medium_error .="	WHEN ".$error_type19." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type20)){
	$medium_error .="	WHEN ".$error_type20." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type21)){
	$medium_error .="	WHEN ".$error_type21." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type22)){
	$medium_error .="	WHEN ".$error_type22." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type23)){
	$medium_error .="	WHEN ".$error_type23." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type24)){
	$medium_error .="	WHEN ".$error_type24." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type25)){
	$medium_error .="	WHEN ".$error_type25." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type26)){
	$medium_error .="	WHEN ".$error_type26." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type27)){
	$medium_error .="	WHEN ".$error_type27." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type28)){
	$medium_error .="	WHEN ".$error_type28." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type29)){
	$medium_error .="	WHEN ".$error_type29." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type30)){
	$medium_error .="	WHEN ".$error_type30." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type31)){
	$medium_error .="	WHEN ".$error_type31." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type32)){
	$medium_error .="	WHEN ".$error_type32." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type33)){
	$medium_error .="	WHEN ".$error_type33." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type34)){
	$medium_error .="	WHEN ".$error_type35." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type36)){
	$medium_error .="	WHEN ".$error_type36." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type37)){
	$medium_error .="	WHEN ".$error_type37." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type38)){
	$medium_error .="	WHEN ".$error_type38." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type39)){
	$medium_error .="	WHEN ".$error_type39." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type40)){
	$medium_error .="	WHEN ".$error_type40." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type41)){
	$medium_error .="	WHEN ".$error_type41." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type42)){
	$medium_error .="	WHEN ".$error_type42." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type43)){
	$medium_error .="	WHEN ".$error_type43." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type44)){
	$medium_error .="	WHEN ".$error_type44." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type45)){
	$medium_error .="	WHEN ".$error_type45." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type46)){
	$medium_error .="	WHEN ".$error_type46." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type47)){
	$medium_error .="	WHEN ".$error_type47." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type48)){
	$medium_error .="	WHEN ".$error_type48." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type49)){
	$medium_error .="	WHEN ".$error_type49." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type50)){
	$medium_error .="	WHEN ".$error_type50." is NOT NULL THEN 1 ";
	}
	$medium_error	.="	ELSE 0 END) AS count 
					FROM Integrated_dashboard where transaction_number = '".$transaction_number."'";
	$medium_error_query = mysqli_query($conn,$medium_error);
	$medium_error_fetch = mysqli_fetch_assoc($medium_error_query);
	$medium_error_count = $medium_error_fetch["count"];
} 	
if ($medium_error_count > 0 && $high_error_count == 0){
	
	$insert_error_priority = mysqli_query($conn,"update Integrated_dashboard set error_priority = 'medium' where transaction_number = '".$transaction_number."'");
	
}
//<!-- end of defining medium error priority-->  		


//<!--defining low error priority-->       
$priority_low = mysqli_query($conn,"SELECT * from Integrated_dashboard_error_priority where priority ='low' and transaction_type = '". $transaction_type ."' ");
while($priority_low_fetch = mysqli_fetch_assoc($priority_low)){
	$error_type1= $priority_low_fetch["error_type1"];
	$error_type2= $priority_low_fetch["error_type2"];
	$error_type3= $priority_low_fetch["error_type3"];
	$error_type4= $priority_low_fetch["error_type4"];
	$error_type5= $priority_low_fetch["error_type5"];
	$error_type6= $priority_low_fetch["error_type6"];
	$error_type7= $priority_low_fetch["error_type7"];
	$error_type8= $priority_low_fetch["error_type8"];
	$error_type9= $priority_low_fetch["error_type9"];
	$error_type10= $priority_low_fetch["error_type10"];
	$error_type11= $priority_low_fetch["error_type11"];
	$error_type12= $priority_low_fetch["error_type12"];
	$error_type13= $priority_low_fetch["error_type13"];
	$error_type14= $priority_low_fetch["error_type14"];
	$error_type15= $priority_low_fetch["error_type15"];
	$error_type16= $priority_low_fetch["error_type16"];
	$error_type17= $priority_low_fetch["error_type17"];
	$error_type18= $priority_low_fetch["error_type18"];
	$error_type19= $priority_low_fetch["error_type19"];
	$error_type20= $priority_low_fetch["error_type20"];
	$error_type21= $priority_low_fetch["error_type21"];
	$error_type22= $priority_low_fetch["error_type22"];
	$error_type23= $priority_low_fetch["error_type23"];
	$error_type24= $priority_low_fetch["error_type24"];
	$error_type25= $priority_low_fetch["error_type25"];
	$error_type26= $priority_low_fetch["error_type26"];
	$error_type27= $priority_low_fetch["error_type27"];
	$error_type28= $priority_low_fetch["error_type28"];
	$error_type29= $priority_low_fetch["error_type29"];
	$error_type30= $priority_low_fetch["error_type30"];
	$error_type31= $priority_low_fetch["error_type31"];
	$error_type32= $priority_low_fetch["error_type32"];
	$error_type33= $priority_low_fetch["error_type33"];
	$error_type34= $priority_low_fetch["error_type34"];
	$error_type35= $priority_low_fetch["error_type35"];
	$error_type36= $priority_low_fetch["error_type36"];
	$error_type37= $priority_low_fetch["error_type37"];
	$error_type38= $priority_low_fetch["error_type38"];
	$error_type39= $priority_low_fetch["error_type39"];
	$error_type40= $priority_low_fetch["error_type40"];
	$error_type41= $priority_low_fetch["error_type41"];
	$error_type42= $priority_low_fetch["error_type42"];
	$error_type43= $priority_low_fetch["error_type43"];
	$error_type44= $priority_low_fetch["error_type44"];
	$error_type45= $priority_low_fetch["error_type45"];
	$error_type46= $priority_low_fetch["error_type46"];
	$error_type47= $priority_low_fetch["error_type47"];
	$error_type48= $priority_low_fetch["error_type48"];
	$error_type49= $priority_low_fetch["error_type49"];
	$error_type50= $priority_low_fetch["error_type50"];
	$low_error = " select sum(CASE WHEN id is NULL THEN 1  " ;
	if (!empty($error_type1)){
	$low_error .=" WHEN ".$error_type1." is NOT NULL THEN 1 "; 
	}
	if (!empty($error_type2)){
	$low_error .="	WHEN ".$error_type2." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type3)){
	$low_error .="	WHEN ".$error_type3." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type4)){
	$low_error .="	WHEN ".$error_type4." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type5)){
	$low_error .="	WHEN ".$error_type5." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type6)){
	$low_error .="	WHEN ".$error_type6." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type7)){
	$low_error .="	WHEN ".$error_type7." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type8)){
	$low_error .="	WHEN ".$error_type8." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type9)){
	$low_error .="	WHEN ".$error_type9." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type10)){
	$low_error .="	WHEN ".$error_type10." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type11)){
	$low_error .="	WHEN ".$error_type11." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type12)){
	$low_error .="	WHEN ".$error_type12." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type13)){
	$low_error .="	WHEN ".$error_type13." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type14)){
	$low_error .="	WHEN ".$error_type14." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type15)){
	$low_error .="	WHEN ".$error_type15." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type16)){
	$low_error .="	WHEN ".$error_type16." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type17)){
	$low_error .="	WHEN ".$error_type17." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type18)){
	$low_error .="	WHEN ".$error_type18." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type19)){
	$low_error .="	WHEN ".$error_type19." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type20)){
	$low_error .="	WHEN ".$error_type20." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type21)){
	$low_error .="	WHEN ".$error_type21." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type22)){
	$low_error .="	WHEN ".$error_type22." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type23)){
	$low_error .="	WHEN ".$error_type23." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type24)){
	$low_error .="	WHEN ".$error_type24." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type25)){
	$low_error .="	WHEN ".$error_type25." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type26)){
	$low_error .="	WHEN ".$error_type26." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type27)){
	$low_error .="	WHEN ".$error_type27." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type28)){
	$low_error .="	WHEN ".$error_type28." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type29)){
	$low_error .="	WHEN ".$error_type29." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type30)){
	$low_error .="	WHEN ".$error_type30." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type31)){
	$low_error .="	WHEN ".$error_type31." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type32)){
	$low_error .="	WHEN ".$error_type32." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type33)){
	$low_error .="	WHEN ".$error_type33." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type34)){
	$low_error .="	WHEN ".$error_type35." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type36)){
	$low_error .="	WHEN ".$error_type36." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type37)){
	$low_error .="	WHEN ".$error_type37." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type38)){
	$low_error .="	WHEN ".$error_type38." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type39)){
	$low_error .="	WHEN ".$error_type39." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type40)){
	$low_error .="	WHEN ".$error_type40." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type41)){
	$low_error .="	WHEN ".$error_type41." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type42)){
	$low_error .="	WHEN ".$error_type42." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type43)){
	$low_error .="	WHEN ".$error_type43." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type44)){
	$low_error .="	WHEN ".$error_type44." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type45)){
	$low_error .="	WHEN ".$error_type45." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type46)){
	$low_error .="	WHEN ".$error_type46." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type47)){
	$low_error .="	WHEN ".$error_type47." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type48)){
	$low_error .="	WHEN ".$error_type48." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type49)){
	$low_error .="	WHEN ".$error_type49." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type50)){
	$low_error .="	WHEN ".$error_type50." is NOT NULL THEN 1 ";
	}
	$low_error	.="	ELSE 0 END) AS count 
					FROM Integrated_dashboard where transaction_number = '".$transaction_number."'";
	$low_error_query = mysqli_query($conn,$low_error);
	$low_error_fetch = mysqli_fetch_assoc($low_error_query);
	$low_error_count = $low_error_fetch["count"];
} 	
if ($low_error_count > 0 && $medium_error_count == 0 && $high_error_count == 0 ){
	
	$insert_error_priority = mysqli_query($conn,"update Integrated_dashboard set error_priority = 'low' where transaction_number = '".$transaction_number."'");
	
}
//<!-- end of defining Low error priority-->  	
        
        
        if($query)
        {
        
        header('Content-Type: application/json');
        $json_resp = array(
          "STATUS" => "200","Message" => "Update complete"
        );
        print_r(json_encode($json_resp));
        }
        
         else
        {
          header('Content-Type: application/json');
          $json_resp = array(
          "STATUS" => "100","Message" => "update error"
        );
        print_r(json_encode($json_resp));
        exit;
        }

}
else{
	$insert_query="INSERT INTO Integrated_dashboard 
					(transaction_type,
					transaction_number,
					transaction_sub_num,
					transaction_date,
					status,
					processed_date,
					filename,
					transaction_status1,
					transaction_status2,
					transaction_status3,
					transaction_status4,
					transaction_status5,
					transaction_status6,
					transaction_status7,
					transaction_status8,
					transaction_status9,
					transaction_status10,
					transaction_status11,
					transaction_status12,
					transaction_status13,
					transaction_status14,
					transaction_status15,
					transaction_status16,
					transaction_status17,
					transaction_status18,
					transaction_status19,
					transaction_status20,
					transaction_status21,
					transaction_status22,
					transaction_status23,
					transaction_status24,
					transaction_status25,
					transaction_status26,
					transaction_status27,
					transaction_status28,
					transaction_status29,
					transaction_status30,
					transaction_status31,
					transaction_status32,
					transaction_status33,
					transaction_status34,
					transaction_status35,
					transaction_status36,
					transaction_status37,
					transaction_status38,
					transaction_status39,
					transaction_status40,
					transaction_status41,
					transaction_status42,
					transaction_status43,
					transaction_status44,
					transaction_status45,
					transaction_status46,
					transaction_status47,
					transaction_status48,
					transaction_status49,
					transaction_status50,
					error_msg1,
					error_msg2,
					error_msg3,
					error_msg4,
					error_msg5,
					error_msg6,
					error_msg7,
					error_msg8,
					error_msg9,
					error_msg10,
					error_msg11,
					error_msg12,
					error_msg13,
					error_msg14,
					error_msg15,
					error_msg16,
					error_msg17,
					error_msg18,
					error_msg19,
					error_msg20,
					error_msg21,
					error_msg22,
					error_msg23,
					error_msg24,
					error_msg25,
					error_msg26,
					error_msg27,
					error_msg28,
					error_msg29,
					error_msg30,
					error_msg31,
					error_msg32,
					error_msg33,
					error_msg34,
					error_msg35,
					error_msg36,
					error_msg37,
					error_msg38,
					error_msg39,
					error_msg40,
					error_msg41,
					error_msg42,
					error_msg43,
					error_msg44,
					error_msg45,
					error_msg46,
					error_msg47,
					error_msg48,
					error_msg49,
					error_msg50,
					custom_field1,
					custom_field2,
					custom_field3,
					custom_field4,
					custom_field5,
					custom_field6,
					custom_field7,
					custom_field8,
					custom_field9,
					custom_field10,
					custom_field11,
					custom_field12,
					custom_field13,
					custom_field14,
					custom_field15,
					custom_field16,
					custom_field17,
					custom_field18,
					custom_field19,
					custom_field20,
					custom_field21,
					custom_field22,
					custom_field23,
					custom_field24,
					custom_field25,
					custom_field26,
					custom_field27,
					custom_field28,
					custom_field29,
					custom_field30,
					custom_field31,
					custom_field32,
					custom_field33,
					custom_field34,
					custom_field35,
					custom_field36,
					custom_field37,
					custom_field38,
					custom_field39,
					custom_field40,
					custom_field41,
					custom_field42,
					custom_field43,
					custom_field44,
					custom_field45,
					custom_field46,
					custom_field47,
					custom_field48,
					custom_field49,
					custom_field50				
					)
					
					VALUES 
					( NULLIF('".$transaction_type."',''),
					NULLIF('".$transaction_number."',''),
					NULLIF('".$transaction_sub_num."',''),
					str_to_date('".$transaction_date."','%m-%d-%Y'),
					NULLIF('".$status."',''),
					NULLIF('".$processed_date."',''),
					NULLIF('".$filename."',''),
					NULLIF('".$transaction_status1."',''),
					NULLIF('".$transaction_status2."',''),
					NULLIF('".$transaction_status3."',''),
					NULLIF('".$transaction_status4."',''),
					NULLIF('".$transaction_status5."',''),
					NULLIF('".$transaction_status6."',''),
					NULLIF('".$transaction_status7."',''),
					NULLIF('".$transaction_status8."',''),
					NULLIF('".$transaction_status9."',''),
					NULLIF('".$transaction_status10."',''),
					NULLIF('".$transaction_status11."',''),
					NULLIF('".$transaction_status12."',''),
					NULLIF('".$transaction_status13."',''),
					NULLIF('".$transaction_status14."',''),
					NULLIF('".$transaction_status15."',''),
					NULLIF('".$transaction_status16."',''),
					NULLIF('".$transaction_status17."',''),
					NULLIF('".$transaction_status18."',''),
					NULLIF('".$transaction_status19."',''),
					NULLIF('".$transaction_status20."',''),
					NULLIF('".$transaction_status21."',''),
					NULLIF('".$transaction_status22."',''),
					NULLIF('".$transaction_status23."',''),
					NULLIF('".$transaction_status24."',''),
					NULLIF('".$transaction_status25."',''),
					NULLIF('".$transaction_status26."',''),
					NULLIF('".$transaction_status27."',''),
					NULLIF('".$transaction_status28."',''),
					NULLIF('".$transaction_status29."',''),
					NULLIF('".$transaction_status30."',''),
					NULLIF('".$transaction_status31."',''),
					NULLIF('".$transaction_status32."',''),
					NULLIF('".$transaction_status33."',''),
					NULLIF('".$transaction_status34."',''),
					NULLIF('".$transaction_status35."',''),
					NULLIF('".$transaction_status36."',''),
					NULLIF('".$transaction_status37."',''),
					NULLIF('".$transaction_status38."',''),
					NULLIF('".$transaction_status39."',''),
					NULLIF('".$transaction_status40."',''),
					NULLIF('".$transaction_status41."',''),
					NULLIF('".$transaction_status42."',''),
					NULLIF('".$transaction_status43."',''),
					NULLIF('".$transaction_status44."',''),
					NULLIF('".$transaction_status45."',''),
					NULLIF('".$transaction_status46."',''),
					NULLIF('".$transaction_status47."',''),
					NULLIF('".$transaction_status48."',''),
					NULLIF('".$transaction_status49."',''),
					NULLIF('".$transaction_status50."',''),
					NULLIF('".$error_msg1."',''),
					NULLIF('".$error_msg2."',''),
					NULLIF('".$error_msg3."',''),
					NULLIF('".$error_msg4."',''),
					NULLIF('".$error_msg5."',''),
					NULLIF('".$error_msg6."',''),
					NULLIF('".$error_msg7."',''),
					NULLIF('".$error_msg8."',''),
					NULLIF('".$error_msg9."',''),
					NULLIF('".$error_msg10."',''),
					NULLIF('".$error_msg11."',''),
					NULLIF('".$error_msg12."',''),
					NULLIF('".$error_msg13."',''),
					NULLIF('".$error_msg14."',''),
					NULLIF('".$error_msg15."',''),
					NULLIF('".$error_msg16."',''),
					NULLIF('".$error_msg17."',''),
					NULLIF('".$error_msg18."',''),
					NULLIF('".$error_msg19."',''),
					NULLIF('".$error_msg20."',''),
					NULLIF('".$error_msg21."',''),
					NULLIF('".$error_msg22."',''),
					NULLIF('".$error_msg23."',''),
					NULLIF('".$error_msg24."',''),
					NULLIF('".$error_msg25."',''),
					NULLIF('".$error_msg26."',''),
					NULLIF('".$error_msg27."',''),
					NULLIF('".$error_msg28."',''),
					NULLIF('".$error_msg29."',''),
					NULLIF('".$error_msg30."',''),
					NULLIF('".$error_msg31."',''),
					NULLIF('".$error_msg32."',''),
					NULLIF('".$error_msg33."',''),
					NULLIF('".$error_msg34."',''),
					NULLIF('".$error_msg35."',''),
					NULLIF('".$error_msg36."',''),
					NULLIF('".$error_msg37."',''),
					NULLIF('".$error_msg38."',''),
					NULLIF('".$error_msg39."',''),
					NULLIF('".$error_msg40."',''),
					NULLIF('".$error_msg41."',''),
					NULLIF('".$error_msg42."',''),
					NULLIF('".$error_msg43."',''),
					NULLIF('".$error_msg44."',''),
					NULLIF('".$error_msg45."',''),
					NULLIF('".$error_msg46."',''),
					NULLIF('".$error_msg47."',''),
					NULLIF('".$error_msg48."',''),
					NULLIF('".$error_msg49."',''),
					NULLIF('".$error_msg50."',''),
					NULLIF('".$custom_field1."',''),
					NULLIF('".$custom_field2."',''),
					NULLIF('".$custom_field3."',''),
					NULLIF('".$custom_field4."',''),
					NULLIF('".$custom_field5."',''),
					NULLIF('".$custom_field6."',''),
					NULLIF('".$custom_field7."',''),
					NULLIF('".$custom_field8."',''),
					NULLIF('".$custom_field9."',''),
					NULLIF('".$custom_field10."',''),
					NULLIF('".$custom_field11."',''),
					NULLIF('".$custom_field12."',''),
					NULLIF('".$custom_field13."',''),
					NULLIF('".$custom_field14."',''),
					NULLIF('".$custom_field15."',''),
					NULLIF('".$custom_field16."',''),
					NULLIF('".$custom_field17."',''),
					NULLIF('".$custom_field18."',''),
					NULLIF('".$custom_field19."',''),
					NULLIF('".$custom_field20."',''),
					NULLIF('".$custom_field21."',''),
					NULLIF('".$custom_field22."',''),
					NULLIF('".$custom_field23."',''),
					NULLIF('".$custom_field24."',''),
					NULLIF('".$custom_field25."',''),
					NULLIF('".$custom_field26."',''),
					NULLIF('".$custom_field27."',''),
					NULLIF('".$custom_field28."',''),
					NULLIF('".$custom_field29."',''),
					NULLIF('".$custom_field30."',''),
					NULLIF('".$custom_field31."',''),
					NULLIF('".$custom_field32."',''),
					NULLIF('".$custom_field33."',''),
					NULLIF('".$custom_field34."',''),
					NULLIF('".$custom_field35."',''),
					NULLIF('".$custom_field36."',''),
					NULLIF('".$custom_field37."',''),
					NULLIF('".$custom_field38."',''),
					NULLIF('".$custom_field39."',''),
					NULLIF('".$custom_field40."',''),
					NULLIF('".$custom_field41."',''),
					NULLIF('".$custom_field42."',''),
					NULLIF('".$custom_field43."',''),
					NULLIF('".$custom_field44."',''),
					NULLIF('".$custom_field45."',''),
					NULLIF('".$custom_field46."',''),
					NULLIF('".$custom_field47."',''),
					NULLIF('".$custom_field48."',''),
					NULLIF('".$custom_field49."',''),
					NULLIF('".$custom_field50."',''))";
	
	
$query = mysqli_query($conn,$insert_query);
 //<!--defining error priority-->       
$priority_high = mysqli_query($conn,"SELECT * from Integrated_dashboard_error_priority where priority ='High' and transaction_type = '". $transaction_type ."' ");
while($priority_high_fetch = mysqli_fetch_assoc($priority_high)){
	$error_type1= $priority_high_fetch["error_type1"];
	$error_type2= $priority_high_fetch["error_type2"];
	$error_type3= $priority_high_fetch["error_type3"];
	$error_type4= $priority_high_fetch["error_type4"];
	$error_type5= $priority_high_fetch["error_type5"];
	$error_type6= $priority_high_fetch["error_type6"];
	$error_type7= $priority_high_fetch["error_type7"];
	$error_type8= $priority_high_fetch["error_type8"];
	$error_type9= $priority_high_fetch["error_type9"];
	$error_type10= $priority_high_fetch["error_type10"];
	$error_type11= $priority_high_fetch["error_type11"];
	$error_type12= $priority_high_fetch["error_type12"];
	$error_type13= $priority_high_fetch["error_type13"];
	$error_type14= $priority_high_fetch["error_type14"];
	$error_type15= $priority_high_fetch["error_type15"];
	$error_type16= $priority_high_fetch["error_type16"];
	$error_type17= $priority_high_fetch["error_type17"];
	$error_type18= $priority_high_fetch["error_type18"];
	$error_type19= $priority_high_fetch["error_type19"];
	$error_type20= $priority_high_fetch["error_type20"];
	$error_type21= $priority_high_fetch["error_type21"];
	$error_type22= $priority_high_fetch["error_type22"];
	$error_type23= $priority_high_fetch["error_type23"];
	$error_type24= $priority_high_fetch["error_type24"];
	$error_type25= $priority_high_fetch["error_type25"];
	$error_type26= $priority_high_fetch["error_type26"];
	$error_type27= $priority_high_fetch["error_type27"];
	$error_type28= $priority_high_fetch["error_type28"];
	$error_type29= $priority_high_fetch["error_type29"];
	$error_type30= $priority_high_fetch["error_type30"];
	$error_type31= $priority_high_fetch["error_type31"];
	$error_type32= $priority_high_fetch["error_type32"];
	$error_type33= $priority_high_fetch["error_type33"];
	$error_type34= $priority_high_fetch["error_type34"];
	$error_type35= $priority_high_fetch["error_type35"];
	$error_type36= $priority_high_fetch["error_type36"];
	$error_type37= $priority_high_fetch["error_type37"];
	$error_type38= $priority_high_fetch["error_type38"];
	$error_type39= $priority_high_fetch["error_type39"];
	$error_type40= $priority_high_fetch["error_type40"];
	$error_type41= $priority_high_fetch["error_type41"];
	$error_type42= $priority_high_fetch["error_type42"];
	$error_type43= $priority_high_fetch["error_type43"];
	$error_type44= $priority_high_fetch["error_type44"];
	$error_type45= $priority_high_fetch["error_type45"];
	$error_type46= $priority_high_fetch["error_type46"];
	$error_type47= $priority_high_fetch["error_type47"];
	$error_type48= $priority_high_fetch["error_type48"];
	$error_type49= $priority_high_fetch["error_type49"];
	$error_type50= $priority_high_fetch["error_type50"];
	$high_error = " select sum(CASE WHEN id is NULL THEN 1  " ;
	if (!empty($error_type1)){
	$high_error .=" WHEN ".$error_type1." is NOT NULL THEN 1 "; 
	}
	if (!empty($error_type2)){
	$high_error .="	WHEN ".$error_type2." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type3)){
	$high_error .="	WHEN ".$error_type3." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type4)){
	$high_error .="	WHEN ".$error_type4." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type5)){
	$high_error .="	WHEN ".$error_type5." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type6)){
	$high_error .="	WHEN ".$error_type6." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type7)){
	$high_error .="	WHEN ".$error_type7." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type8)){
	$high_error .="	WHEN ".$error_type8." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type9)){
	$high_error .="	WHEN ".$error_type9." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type10)){
	$high_error .="	WHEN ".$error_type10." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type11)){
	$high_error .="	WHEN ".$error_type11." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type12)){
	$high_error .="	WHEN ".$error_type12." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type13)){
	$high_error .="	WHEN ".$error_type13." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type14)){
	$high_error .="	WHEN ".$error_type14." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type15)){
	$high_error .="	WHEN ".$error_type15." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type16)){
	$high_error .="	WHEN ".$error_type16." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type17)){
	$high_error .="	WHEN ".$error_type17." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type18)){
	$high_error .="	WHEN ".$error_type18." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type19)){
	$high_error .="	WHEN ".$error_type19." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type20)){
	$high_error .="	WHEN ".$error_type20." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type21)){
	$high_error .="	WHEN ".$error_type21." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type22)){
	$high_error .="	WHEN ".$error_type22." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type23)){
	$high_error .="	WHEN ".$error_type23." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type24)){
	$high_error .="	WHEN ".$error_type24." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type25)){
	$high_error .="	WHEN ".$error_type25." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type26)){
	$high_error .="	WHEN ".$error_type26." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type27)){
	$high_error .="	WHEN ".$error_type27." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type28)){
	$high_error .="	WHEN ".$error_type28." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type29)){
	$high_error .="	WHEN ".$error_type29." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type30)){
	$high_error .="	WHEN ".$error_type30." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type31)){
	$high_error .="	WHEN ".$error_type31." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type32)){
	$high_error .="	WHEN ".$error_type32." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type33)){
	$high_error .="	WHEN ".$error_type33." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type34)){
	$high_error .="	WHEN ".$error_type35." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type36)){
	$high_error .="	WHEN ".$error_type36." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type37)){
	$high_error .="	WHEN ".$error_type37." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type38)){
	$high_error .="	WHEN ".$error_type38." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type39)){
	$high_error .="	WHEN ".$error_type39." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type40)){
	$high_error .="	WHEN ".$error_type40." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type41)){
	$high_error .="	WHEN ".$error_type41." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type42)){
	$high_error .="	WHEN ".$error_type42." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type43)){
	$high_error .="	WHEN ".$error_type43." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type44)){
	$high_error .="	WHEN ".$error_type44." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type45)){
	$high_error .="	WHEN ".$error_type45." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type46)){
	$high_error .="	WHEN ".$error_type46." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type47)){
	$high_error .="	WHEN ".$error_type47." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type48)){
	$high_error .="	WHEN ".$error_type48." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type49)){
	$high_error .="	WHEN ".$error_type49." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type50)){
	$high_error .="	WHEN ".$error_type50." is NOT NULL THEN 1 ";
	}
	$high_error	.="	ELSE 0 END) AS count 
					FROM Integrated_dashboard where transaction_number = '".$transaction_number."'";
	$high_error_query = mysqli_query($conn,$high_error);
	$high_error_fetch = mysqli_fetch_assoc($high_error_query);
	$high_error_count = $high_error_fetch["count"];
} 	
if ($high_error_count > 0){
	
	$insert_error_priority = mysqli_query($conn,"update Integrated_dashboard set error_priority = 'High' where transaction_number = '".$transaction_number."'");
	
}
//<!-- end of defining high error priority-->  	


 //<!--defining medium error priority-->       
$priority_medium = mysqli_query($conn,"SELECT * from Integrated_dashboard_error_priority where priority ='medium' and transaction_type = '". $transaction_type ."' ");
while($priority_medium_fetch = mysqli_fetch_assoc($priority_medium)){
	$error_type1= $priority_medium_fetch["error_type1"];
	$error_type2= $priority_medium_fetch["error_type2"];
	$error_type3= $priority_medium_fetch["error_type3"];
	$error_type4= $priority_medium_fetch["error_type4"];
	$error_type5= $priority_medium_fetch["error_type5"];
	$error_type6= $priority_medium_fetch["error_type6"];
	$error_type7= $priority_medium_fetch["error_type7"];
	$error_type8= $priority_medium_fetch["error_type8"];
	$error_type9= $priority_medium_fetch["error_type9"];
	$error_type10= $priority_medium_fetch["error_type10"];
	$error_type11= $priority_medium_fetch["error_type11"];
	$error_type12= $priority_medium_fetch["error_type12"];
	$error_type13= $priority_medium_fetch["error_type13"];
	$error_type14= $priority_medium_fetch["error_type14"];
	$error_type15= $priority_medium_fetch["error_type15"];
	$error_type16= $priority_medium_fetch["error_type16"];
	$error_type17= $priority_medium_fetch["error_type17"];
	$error_type18= $priority_medium_fetch["error_type18"];
	$error_type19= $priority_medium_fetch["error_type19"];
	$error_type20= $priority_medium_fetch["error_type20"];
	$error_type21= $priority_medium_fetch["error_type21"];
	$error_type22= $priority_medium_fetch["error_type22"];
	$error_type23= $priority_medium_fetch["error_type23"];
	$error_type24= $priority_medium_fetch["error_type24"];
	$error_type25= $priority_medium_fetch["error_type25"];
	$error_type26= $priority_medium_fetch["error_type26"];
	$error_type27= $priority_medium_fetch["error_type27"];
	$error_type28= $priority_medium_fetch["error_type28"];
	$error_type29= $priority_medium_fetch["error_type29"];
	$error_type30= $priority_medium_fetch["error_type30"];
	$error_type31= $priority_medium_fetch["error_type31"];
	$error_type32= $priority_medium_fetch["error_type32"];
	$error_type33= $priority_medium_fetch["error_type33"];
	$error_type34= $priority_medium_fetch["error_type34"];
	$error_type35= $priority_medium_fetch["error_type35"];
	$error_type36= $priority_medium_fetch["error_type36"];
	$error_type37= $priority_medium_fetch["error_type37"];
	$error_type38= $priority_medium_fetch["error_type38"];
	$error_type39= $priority_medium_fetch["error_type39"];
	$error_type40= $priority_medium_fetch["error_type40"];
	$error_type41= $priority_medium_fetch["error_type41"];
	$error_type42= $priority_medium_fetch["error_type42"];
	$error_type43= $priority_medium_fetch["error_type43"];
	$error_type44= $priority_medium_fetch["error_type44"];
	$error_type45= $priority_medium_fetch["error_type45"];
	$error_type46= $priority_medium_fetch["error_type46"];
	$error_type47= $priority_medium_fetch["error_type47"];
	$error_type48= $priority_medium_fetch["error_type48"];
	$error_type49= $priority_medium_fetch["error_type49"];
	$error_type50= $priority_medium_fetch["error_type50"];
	$medium_error = " select sum(CASE WHEN id is NULL THEN 1  " ;
	if (!empty($error_type1)){
	$medium_error .=" WHEN ".$error_type1." is NOT NULL THEN 1 "; 
	}
	if (!empty($error_type2)){
	$medium_error .="	WHEN ".$error_type2." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type3)){
	$medium_error .="	WHEN ".$error_type3." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type4)){
	$medium_error .="	WHEN ".$error_type4." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type5)){
	$medium_error .="	WHEN ".$error_type5." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type6)){
	$medium_error .="	WHEN ".$error_type6." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type7)){
	$medium_error .="	WHEN ".$error_type7." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type8)){
	$medium_error .="	WHEN ".$error_type8." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type9)){
	$medium_error .="	WHEN ".$error_type9." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type10)){
	$medium_error .="	WHEN ".$error_type10." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type11)){
	$medium_error .="	WHEN ".$error_type11." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type12)){
	$medium_error .="	WHEN ".$error_type12." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type13)){
	$medium_error .="	WHEN ".$error_type13." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type14)){
	$medium_error .="	WHEN ".$error_type14." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type15)){
	$medium_error .="	WHEN ".$error_type15." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type16)){
	$medium_error .="	WHEN ".$error_type16." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type17)){
	$medium_error .="	WHEN ".$error_type17." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type18)){
	$medium_error .="	WHEN ".$error_type18." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type19)){
	$medium_error .="	WHEN ".$error_type19." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type20)){
	$medium_error .="	WHEN ".$error_type20." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type21)){
	$medium_error .="	WHEN ".$error_type21." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type22)){
	$medium_error .="	WHEN ".$error_type22." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type23)){
	$medium_error .="	WHEN ".$error_type23." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type24)){
	$medium_error .="	WHEN ".$error_type24." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type25)){
	$medium_error .="	WHEN ".$error_type25." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type26)){
	$medium_error .="	WHEN ".$error_type26." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type27)){
	$medium_error .="	WHEN ".$error_type27." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type28)){
	$medium_error .="	WHEN ".$error_type28." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type29)){
	$medium_error .="	WHEN ".$error_type29." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type30)){
	$medium_error .="	WHEN ".$error_type30." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type31)){
	$medium_error .="	WHEN ".$error_type31." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type32)){
	$medium_error .="	WHEN ".$error_type32." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type33)){
	$medium_error .="	WHEN ".$error_type33." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type34)){
	$medium_error .="	WHEN ".$error_type35." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type36)){
	$medium_error .="	WHEN ".$error_type36." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type37)){
	$medium_error .="	WHEN ".$error_type37." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type38)){
	$medium_error .="	WHEN ".$error_type38." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type39)){
	$medium_error .="	WHEN ".$error_type39." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type40)){
	$medium_error .="	WHEN ".$error_type40." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type41)){
	$medium_error .="	WHEN ".$error_type41." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type42)){
	$medium_error .="	WHEN ".$error_type42." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type43)){
	$medium_error .="	WHEN ".$error_type43." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type44)){
	$medium_error .="	WHEN ".$error_type44." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type45)){
	$medium_error .="	WHEN ".$error_type45." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type46)){
	$medium_error .="	WHEN ".$error_type46." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type47)){
	$medium_error .="	WHEN ".$error_type47." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type48)){
	$medium_error .="	WHEN ".$error_type48." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type49)){
	$medium_error .="	WHEN ".$error_type49." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type50)){
	$medium_error .="	WHEN ".$error_type50." is NOT NULL THEN 1 ";
	}
	$medium_error	.="	ELSE 0 END) AS count 
					FROM Integrated_dashboard where transaction_number = '".$transaction_number."'";
	$medium_error_query = mysqli_query($conn,$medium_error);
	$medium_error_fetch = mysqli_fetch_assoc($medium_error_query);
	$medium_error_count = $medium_error_fetch["count"];
} 	
if ($medium_error_count > 0 && $high_error_count == 0){
	
	$insert_error_priority = mysqli_query($conn,"update Integrated_dashboard set error_priority = 'medium' where transaction_number = '".$transaction_number."'");
	
}
//<!-- end of defining medium error priority-->  		


//<!--defining low error priority-->       
$priority_low = mysqli_query($conn,"SELECT * from Integrated_dashboard_error_priority where priority ='low' and transaction_type = '". $transaction_type ."' ");
while($priority_low_fetch = mysqli_fetch_assoc($priority_low)){
	$error_type1= $priority_low_fetch["error_type1"];
	$error_type2= $priority_low_fetch["error_type2"];
	$error_type3= $priority_low_fetch["error_type3"];
	$error_type4= $priority_low_fetch["error_type4"];
	$error_type5= $priority_low_fetch["error_type5"];
	$error_type6= $priority_low_fetch["error_type6"];
	$error_type7= $priority_low_fetch["error_type7"];
	$error_type8= $priority_low_fetch["error_type8"];
	$error_type9= $priority_low_fetch["error_type9"];
	$error_type10= $priority_low_fetch["error_type10"];
	$error_type11= $priority_low_fetch["error_type11"];
	$error_type12= $priority_low_fetch["error_type12"];
	$error_type13= $priority_low_fetch["error_type13"];
	$error_type14= $priority_low_fetch["error_type14"];
	$error_type15= $priority_low_fetch["error_type15"];
	$error_type16= $priority_low_fetch["error_type16"];
	$error_type17= $priority_low_fetch["error_type17"];
	$error_type18= $priority_low_fetch["error_type18"];
	$error_type19= $priority_low_fetch["error_type19"];
	$error_type20= $priority_low_fetch["error_type20"];
	$error_type21= $priority_low_fetch["error_type21"];
	$error_type22= $priority_low_fetch["error_type22"];
	$error_type23= $priority_low_fetch["error_type23"];
	$error_type24= $priority_low_fetch["error_type24"];
	$error_type25= $priority_low_fetch["error_type25"];
	$error_type26= $priority_low_fetch["error_type26"];
	$error_type27= $priority_low_fetch["error_type27"];
	$error_type28= $priority_low_fetch["error_type28"];
	$error_type29= $priority_low_fetch["error_type29"];
	$error_type30= $priority_low_fetch["error_type30"];
	$error_type31= $priority_low_fetch["error_type31"];
	$error_type32= $priority_low_fetch["error_type32"];
	$error_type33= $priority_low_fetch["error_type33"];
	$error_type34= $priority_low_fetch["error_type34"];
	$error_type35= $priority_low_fetch["error_type35"];
	$error_type36= $priority_low_fetch["error_type36"];
	$error_type37= $priority_low_fetch["error_type37"];
	$error_type38= $priority_low_fetch["error_type38"];
	$error_type39= $priority_low_fetch["error_type39"];
	$error_type40= $priority_low_fetch["error_type40"];
	$error_type41= $priority_low_fetch["error_type41"];
	$error_type42= $priority_low_fetch["error_type42"];
	$error_type43= $priority_low_fetch["error_type43"];
	$error_type44= $priority_low_fetch["error_type44"];
	$error_type45= $priority_low_fetch["error_type45"];
	$error_type46= $priority_low_fetch["error_type46"];
	$error_type47= $priority_low_fetch["error_type47"];
	$error_type48= $priority_low_fetch["error_type48"];
	$error_type49= $priority_low_fetch["error_type49"];
	$error_type50= $priority_low_fetch["error_type50"];
	$low_error = " select sum(CASE WHEN id is NULL THEN 1  " ;
	if (!empty($error_type1)){
	$low_error .=" WHEN ".$error_type1." is NOT NULL THEN 1 "; 
	}
	if (!empty($error_type2)){
	$low_error .="	WHEN ".$error_type2." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type3)){
	$low_error .="	WHEN ".$error_type3." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type4)){
	$low_error .="	WHEN ".$error_type4." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type5)){
	$low_error .="	WHEN ".$error_type5." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type6)){
	$low_error .="	WHEN ".$error_type6." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type7)){
	$low_error .="	WHEN ".$error_type7." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type8)){
	$low_error .="	WHEN ".$error_type8." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type9)){
	$low_error .="	WHEN ".$error_type9." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type10)){
	$low_error .="	WHEN ".$error_type10." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type11)){
	$low_error .="	WHEN ".$error_type11." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type12)){
	$low_error .="	WHEN ".$error_type12." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type13)){
	$low_error .="	WHEN ".$error_type13." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type14)){
	$low_error .="	WHEN ".$error_type14." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type15)){
	$low_error .="	WHEN ".$error_type15." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type16)){
	$low_error .="	WHEN ".$error_type16." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type17)){
	$low_error .="	WHEN ".$error_type17." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type18)){
	$low_error .="	WHEN ".$error_type18." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type19)){
	$low_error .="	WHEN ".$error_type19." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type20)){
	$low_error .="	WHEN ".$error_type20." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type21)){
	$low_error .="	WHEN ".$error_type21." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type22)){
	$low_error .="	WHEN ".$error_type22." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type23)){
	$low_error .="	WHEN ".$error_type23." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type24)){
	$low_error .="	WHEN ".$error_type24." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type25)){
	$low_error .="	WHEN ".$error_type25." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type26)){
	$low_error .="	WHEN ".$error_type26." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type27)){
	$low_error .="	WHEN ".$error_type27." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type28)){
	$low_error .="	WHEN ".$error_type28." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type29)){
	$low_error .="	WHEN ".$error_type29." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type30)){
	$low_error .="	WHEN ".$error_type30." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type31)){
	$low_error .="	WHEN ".$error_type31." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type32)){
	$low_error .="	WHEN ".$error_type32." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type33)){
	$low_error .="	WHEN ".$error_type33." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type34)){
	$low_error .="	WHEN ".$error_type35." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type36)){
	$low_error .="	WHEN ".$error_type36." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type37)){
	$low_error .="	WHEN ".$error_type37." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type38)){
	$low_error .="	WHEN ".$error_type38." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type39)){
	$low_error .="	WHEN ".$error_type39." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type40)){
	$low_error .="	WHEN ".$error_type40." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type41)){
	$low_error .="	WHEN ".$error_type41." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type42)){
	$low_error .="	WHEN ".$error_type42." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type43)){
	$low_error .="	WHEN ".$error_type43." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type44)){
	$low_error .="	WHEN ".$error_type44." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type45)){
	$low_error .="	WHEN ".$error_type45." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type46)){
	$low_error .="	WHEN ".$error_type46." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type47)){
	$low_error .="	WHEN ".$error_type47." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type48)){
	$low_error .="	WHEN ".$error_type48." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type49)){
	$low_error .="	WHEN ".$error_type49." is NOT NULL THEN 1 ";
	}
	if (!empty($error_type50)){
	$low_error .="	WHEN ".$error_type50." is NOT NULL THEN 1 ";
	}
	$low_error	.="	ELSE 0 END) AS count 
					FROM Integrated_dashboard where transaction_number = '".$transaction_number."'";
	$low_error_query = mysqli_query($conn,$low_error);
	$low_error_fetch = mysqli_fetch_assoc($low_error_query);
	$low_error_count = $low_error_fetch["count"];
} 	
if ($low_error_count > 0 && $medium_error_count == 0 && $high_error_count == 0 ){
	
	$insert_error_priority = mysqli_query($conn,"update Integrated_dashboard set error_priority = 'low' where transaction_number = '".$transaction_number."'");
	
}
//<!-- end of defining Low error priority-->  	
        
        if($query)
        {
        
        header('Content-Type: application/json');
        $json_resp = array(
          "STATUS" => "200","Message" => "Insert complete"
        );
        print_r(json_encode($json_resp));
        }
        
         else
        {
          header('Content-Type: application/json');
          $json_resp = array(
          "STATUS" => "100","Message" => "Insert error"
        );
        print_r(json_encode($json_resp));
        exit;
        } 
}

        



    ?>