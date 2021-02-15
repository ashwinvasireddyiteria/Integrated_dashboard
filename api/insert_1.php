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


if(isset($transaction_status1)==""){
	$transaction_status1=="NULL";}
if(isset($transaction_status2)==""){
	$transaction_status2=="NULL";}
if(isset($transaction_status3)==""){
	$transaction_status3=="NULL";}
if(isset($transaction_status4)==""){
	$transaction_status4=="NULL";}
if(isset($transaction_status5)==""){
	$transaction_status5=="NULL";}
if(isset($transaction_status6)==""){
	$transaction_status6="NULL";}
if(isset($transaction_status7)==""){
	$transaction_status7="NULL";}
if(isset($transaction_status8)==""){
	$transaction_status8="NULL";}
if(isset($transaction_status9)==""){
	$transaction_status9="NULL";}
if(isset($transaction_status10)==""){
	$transaction_status10="NULL";}
if(isset($transaction_status11)==""){
	$transaction_status11="NULL";}
if(isset($transaction_status12)==""){
	$transaction_status12="NULL";}
if(isset($transaction_status13)==""){
	$transaction_status13="NULL";}
if(isset($transaction_status14)==""){
	$transaction_status14="NULL";}
if(isset($transaction_status15)==""){
	$transaction_status15="NULL";}
if(isset($transaction_status16)==""){
	$transaction_status16="NULL";}
if(isset($transaction_status17)==""){
	$transaction_status17="NULL";}
if(isset($transaction_status18)==""){
	$transaction_status18="NULL";}
if(isset($transaction_status19)==""){
	$transaction_status19="NULL";}
if(isset($transaction_status20)==""){
	$transaction_status20="NULL";}
if(isset($transaction_status21)==""){
	$transaction_status21="NULL";}
if(isset($transaction_status22)==""){
	$transaction_status22="NULL";}
if(isset($transaction_status23)==""){
	$transaction_status23="NULL";}
if(isset($transaction_status24)==""){
	$transaction_status24="NULL";}
if(isset($transaction_status25)==""){
	$transaction_status25="NULL";}
if(isset($transaction_status26)==""){
	$transaction_status26="NULL";}
if(isset($transaction_status27)==""){
	$transaction_status27="NULL";}
if(isset($transaction_status28)==""){
	$transaction_status28="NULL";}
if(isset($transaction_status29)==""){
	$transaction_status29="NULL";}
if(isset($transaction_status30)==""){
	$transaction_status30="NULL";}
if(isset($transaction_status31)==""){
	$transaction_status31="NULL";}
if(isset($transaction_status32)==""){
	$transaction_status32="NULL";}
if(isset($transaction_status33)==""){
	$transaction_status33="NULL";}
if(isset($transaction_status34)==""){
	$transaction_status34="NULL";}
if(isset($transaction_status35)==""){
	$transaction_status35="NULL";}
if(isset($transaction_status36)==""){
	$transaction_status36="NULL";}
if(isset($transaction_status37)==""){
	$transaction_status37="NULL";}
if(isset($transaction_status38)==""){
	$transaction_status38="NULL";}
if(isset($transaction_status39)==""){
	$transaction_status39="NULL";}
if(isset($transaction_status40)==""){
	$transaction_status40="NULL";}
if(isset($transaction_status41)==""){
	$transaction_status41="NULL";}
if(isset($transaction_status42)==""){
	$transaction_status42="NULL";}
if(isset($transaction_status43)==""){
	$transaction_status43="NULL";}
if(isset($transaction_status44)==""){
	$transaction_status44="NULL";}
if(isset($transaction_status45)==""){
	$transaction_status45="NULL";}
if(isset($transaction_status46)==""){
	$transaction_status46="NULL";}
if(isset($transaction_status47)==""){
	$transaction_status47="NULL";}
if(isset($transaction_status48)==""){
	$transaction_status48="NULL";}
if(isset($transaction_status49)==""){
	$transaction_status49="NULL";}
if(isset($transaction_status50)==""){
	$transaction_status50="NULL";}
if(($error_msg1)=""){
	$error_msg1 = NULL ;}
if(isset($error_msg2)==""){
	$error_msg2="NULL";}
if(isset($error_msg3)==""){
	$error_msg3="NULL";}
if(isset($error_msg4)==""){
	$error_msg4="NULL";}
if(isset($error_msg5)==""){
	$error_msg5='NULL';}
if(isset($error_msg6)==""){
	$error_msg6='NULL';}
if(isset($error_msg7)==""){
	$error_msg7='NULL';}
if(isset($error_msg8)==""){
	$error_msg8="NULL";}
if(isset($error_msg9)==""){
	$error_msg9="NULL";}
if(isset($error_msg10)==""){
	$error_msg10="NULL";}
if(isset($error_msg11)==""){
	$error_msg11=="NULL";}
if(isset($error_msg12)==""){
	$error_msg12=="NULL";}
if(isset($error_msg13)==""){
	$error_msg13=="NULL";}
if(isset($error_msg14)==""){
	$error_msg14=="NULL";}
if(isset($error_msg15)==""){
	$error_msg15=="NULL";}
if(isset($error_msg16)==""){
	$error_msg16=="NULL";}
if(isset($error_msg17)==""){
	$error_msg17="NULL";}
if(isset($error_msg18)==""){
	$error_msg18="NULL";}
if(isset($error_msg19)==""){
	$error_msg19="NULL";}
if(isset($error_msg20)==""){
	$error_msg20="NULL";}
if(isset($error_msg21)==""){
	$error_msg21="NULL";}
if(isset($error_msg22)==""){
	$error_msg22="NULL";}
if(isset($error_msg23)==""){
	$error_msg23="NULL";}
if(isset($error_msg24)==""){
	$error_msg24="NULL";}
if(isset($error_msg25)==""){
	$error_msg25="NULL";}
if(isset($error_msg26)==""){
	$error_msg26="NULL";}
if(isset($error_msg27)==""){
	$error_msg27="NULL";}
if(isset($error_msg28)==""){
	$error_msg28="NULL";}
if(isset($error_msg29)==""){
	$error_msg29="NULL";}
if(isset($error_msg30)==""){
	$error_msg30="NULL";}
if(isset($error_msg31)==""){
	$error_msg31="NULL";}
if(isset($error_msg32)==""){
	$error_msg32="NULL";}
if(isset($error_msg33)==""){
	$error_msg33="NULL";}
if(isset($error_msg34)==""){
	$error_msg34="NULL";}
if(isset($error_msg35)==""){
	$error_msg35="NULL";}
if(isset($error_msg36)==""){
	$error_msg36="NULL";}
if(isset($error_msg37)==""){
    $error_msg37="NULL";}
if(isset($error_msg38)==""){
	$error_msg38=="NULL";}
if(isset($error_msg39)==""){
	$error_msg39=="NULL";}
if(isset($error_msg40)==""){
	$error_msg40=="NULL";}
if(isset($error_msg41)==""){
	$error_msg41="NULL";}
if(isset($error_msg42)==""){
	$error_msg42="NULL";}
if(isset($error_msg43)==""){
	$error_msg43="NULL";}
if(isset($error_msg44)==""){
	$error_msg44="NULL";}
if(isset($error_msg45)==""){
	$error_msg45="NULL";}
if(isset($error_msg46)==""){
	$error_msg46="NULL";}
if(isset($error_msg47)==""){
	$error_msg47="NULL";}
if(isset($error_msg48)==""){
	$error_msg48="NULL";}
if(isset($error_msg49)==""){
	$error_msg49="NULL";}
if(isset($error_msg50)==""){
	$error_msg50="NULL";}
if(isset($custom_field1)==""){
	$custom_field1="NULL";}
if(isset($custom_field2)==""){
	$custom_field2="NULL";}
if(isset($custom_field3)==""){
	$custom_field3="NULL";}
if(isset($custom_field4)==""){
	$custom_field4="NULL";}
if(isset($custom_field5)==""){
	$custom_field5="NULL";}
if(isset($custom_field6)==""){
	$custom_field6="NULL";}
if(isset($custom_field7)==""){
	$custom_field7="NULL";}
if(isset($custom_field8)==""){
	$custom_field8="NULL";}
if(isset($custom_field9)==""){
	$custom_field9="NULL";}
if(isset($custom_field10)==""){
	$custom_field10="NULL";}
if(isset($custom_field11)==""){
	$custom_field11="NULL";}
if(isset($custom_field12)==""){
	$custom_field12="NULL";}
if(isset($custom_field13)==""){
	$custom_field13="NULL";}
if(isset($custom_field14)==""){
	$custom_field14="NULL";}
if(isset($custom_field15)==""){
	$custom_field15="NULL";}
if(isset($custom_field16)==""){
	$custom_field16="NULL";}
if(isset($custom_field17)==""){
	$custom_field17="NULL";}
if(isset($custom_field18)==""){
	$custom_field18="NULL";}
if(isset($custom_field19)==""){
	$custom_field19="NULL";}
if(isset($custom_field20)==""){
	$custom_field20="NULL";}
if(isset($custom_field21)==""){
	$custom_field21="NULL";}
if(isset($custom_field22)==""){
	$custom_field22="NULL";}
if(isset($custom_field23)==""){
	$custom_field23="NULL";}
if(isset($custom_field24)==""){
	$custom_field24="NULL";}
if(isset($custom_field25)==""){
	$custom_field25="NULL";}
if(isset($custom_field26)==""){
	$custom_field26="NULL";}
if(isset($custom_field27)==""){
	$custom_field27="NULL";}
if(isset($custom_field28)==""){
	$custom_field28="NULL";}
if(isset($custom_field29)==""){
	$custom_field29="NULL";}
if(isset($custom_field30)==""){
	$custom_field30="NULL";}
if(isset($custom_field31)==""){
	$custom_field31="NULL";}
if(isset($custom_field32)==""){
	$custom_field32="NULL";}
if(isset($custom_field33)==""){
	$custom_field33="NULL";}
if(isset($custom_field34)==""){
	$custom_field34="NULL";}
if(isset($custom_field35)==""){
	$custom_field35="NULL";}
if(isset($custom_field36)==""){
	$custom_field36="NULL";}
if(isset($custom_field37)==""){
	$custom_field37="NULL";}
if(isset($custom_field38)==""){
	$custom_field38="NULL";}
if(isset($custom_field39)==""){
	$custom_field39="NULL";}
if(isset($custom_field40)==""){
	$custom_field40="NULL";}
if(isset($custom_field41)==""){
	$custom_field41="NULL";}
if(isset($custom_field42)==""){
	$custom_field42="NULL";}
if(isset($custom_field43)==""){
	$custom_field43="NULL";}
if(isset($custom_field44)==""){
	$custom_field44="NULL";}
if(isset($custom_field45)==""){
	$custom_field45="NULL";}
if(isset($custom_field46)==""){
	$custom_field46="NULL";}
if(isset($custom_field47)==""){
	$custom_field47="NULL";}
if(isset($custom_field48)==""){
	$custom_field48="NULL";}
if(isset($custom_field49)==""){
	$custom_field49="NULL";}
if(isset($custom_field50)==""){
	$custom_field50="NULL";}

$check = mysqli_query($conn, "select * from salesorder_dashboard where transaction_number ='". $transaction_number ."'");
$result = mysqli_num_rows($check);

if($result > 0){

	$update_query="update salesorder_dashboard set
					transaction_type =      '".$transaction_type."', 
					transaction_number =    '".$transaction_number."',
					transaction_sub_num =   '".$transaction_sub_num."',
					transaction_date =      '".$transaction_date."',	
					status =                '".$status."',
					processed_date =        '".$processed_date."',
					filename =	            '".$filename."',
					transaction_status1 =	'".$transaction_status1."',
					transaction_status2 =	'".$transaction_status2."',
					transaction_status3 =	'".$transaction_status3."',
					transaction_status4 =	'".$transaction_status4."',
					transaction_status5 =	'".$transaction_status5."',
					transaction_status6 =	'".$transaction_status6."',
					transaction_status7 =	'".$transaction_status7."',
					transaction_status8 =	'".$transaction_status8."',
					transaction_status9 =	'".$transaction_status9."',
					transaction_status10 =	'".$transaction_status10."',
					transaction_status11 =	'".$transaction_status11."',
					transaction_status12 =	'".$transaction_status12."',
					transaction_status13 =	'".$transaction_status13."',
					transaction_status14 =	'".$transaction_status14."',
					transaction_status15 =	'".$transaction_status15."',
					transaction_status16 =	'".$transaction_status16."',
					transaction_status17 =	'".$transaction_status17."',
					transaction_status18 =	'".$transaction_status18."',
					transaction_status19 =	'".$transaction_status19."',
					transaction_status20 =	'".$transaction_status20."',
					transaction_status21 =	'".$transaction_status21."',
					transaction_status22 =	'".$transaction_status22."',
					transaction_status23 =	'".$transaction_status23."',
					transaction_status24 =	'".$transaction_status24."',
					transaction_status25 =	'".$transaction_status25."',
					transaction_status26 =	'".$transaction_status26."',
					transaction_status27 =	'".$transaction_status27."',
					transaction_status28 =	'".$transaction_status28."',
					transaction_status29 =	'".$transaction_status29."',
					transaction_status30 =	'".$transaction_status30."',
					transaction_status31 =	'".$transaction_status31."',
					transaction_status32 =	'".$transaction_status32."',
					transaction_status33 =	'".$transaction_status33."',
					transaction_status34 =	'".$transaction_status34."',
					transaction_status35 =	'".$transaction_status35."',
					transaction_status36 =	'".$transaction_status36."',
					transaction_status37 =	'".$transaction_status37."',
					transaction_status38 =	'".$transaction_status38."',
					transaction_status39 =	'".$transaction_status39."',
					transaction_status40 =	'".$transaction_status40."',
					transaction_status41 =	'".$transaction_status41."',
					transaction_status42 =	'".$transaction_status42."',
					transaction_status43 =	'".$transaction_status43."',
					transaction_status44 =	'".$transaction_status44."',
					transaction_status45 =	'".$transaction_status45."',
					transaction_status46 =	'".$transaction_status46."',
					transaction_status47 =	'".$transaction_status47."',
					transaction_status48 =	'".$transaction_status48."',
					transaction_status49 =	'".$transaction_status49."',
					transaction_status50 =	'".$transaction_status50."',
					error_msg1 =	        '".$error_msg1."',
					error_msg2 =	        '".$error_msg2."',
					error_msg3 =	        '".$error_msg3."',
					error_msg4 =            '".$error_msg4."',
					error_msg5 =	        '".$error_msg5."',
					error_msg6 =	        '".$error_msg6."',
					error_msg7 =	        '".$error_msg7."',
					error_msg8 =	        '".$error_msg8."',
					error_msg9 =	        '".$error_msg9."',
					error_msg10 =	        '".$error_msg10."',
					error_msg11 =	        '".$error_msg11."',
					error_msg12 =	        '".$error_msg12."',
					error_msg13 =	        '".$error_msg13."',
					error_msg14 =	        '".$error_msg14."',
					error_msg15 =	        '".$error_msg15."',
					error_msg16 =	        '".$error_msg16."',
					error_msg17=	        '".$error_msg17."',
					error_msg18 =	        '".$error_msg18."',
					error_msg19 =	        '".$error_msg19."',
					error_msg20 =	        '".$error_msg20."',
					error_msg21 =	        '".$error_msg21."',
					error_msg22 =	        '".$error_msg22."',
					error_msg23 =	        '".$error_msg23."',
					error_msg24 =	        '".$error_msg24."',
					error_msg25 =	        '".$error_msg25."',
					error_msg26 =	        '".$error_msg26."',
					error_msg27 =	        '".$error_msg27."',
					error_msg28 =	        '".$error_msg28."',
					error_msg29 =	        '".$error_msg29."',
					error_msg30 =	        '".$error_msg30."',
					error_msg31 =	        '".$error_msg31."',
					error_msg32 =	        '".$error_msg32."',
					error_msg33 =	        '".$error_msg33."',
					error_msg34 =	        '".$error_msg34."',
					error_msg35 =	        '".$error_msg35."',
					error_msg36 =	        '".$error_msg36."',
					error_msg37 =	        '".$error_msg37."',
					error_msg38 =	        '".$error_msg38."',
					error_msg39 =	        '".$error_msg39."',
					error_msg40 =	        '".$error_msg40."',
					error_msg41 =	        '".$error_msg41."',
					error_msg42 =	        '".$error_msg42."',
					error_msg43 =	        '".$error_msg43."',
					error_msg44 =	        '".$error_msg44."',
					error_msg45 =	        '".$error_msg45."',
					error_msg46 =	        '".$error_msg46."',
					error_msg47 =	        '".$error_msg47."',
					error_msg48 =	        '".$error_msg48."',
					error_msg49 =	        '".$error_msg49."',
					error_msg50 =	        '".$error_msg50."',
					custom_field1  =	    '".$custom_field1."',
					custom_field2  =	    '".$custom_field2."',
					custom_field3  =	    '".$custom_field3."',
					custom_field4  =	    '".$custom_field4."',
					custom_field5  =	    '".$custom_field5."',
					custom_field6  =	    '".$custom_field6."',
					custom_field7  =	    '".$custom_field7."',
					custom_field8  =	    '".$custom_field8."',
					custom_field9  =	    '".$custom_field9."',
					custom_field10 =        '".$custom_field10."',
					custom_field11 =        '".$custom_field11."',
					custom_field12 =        '".$custom_field12."',
					custom_field13 =        '".$custom_field13."',
					custom_field14 =        '".$custom_field14."',
					custom_field15 =        '".$custom_field15."',
					custom_field16 =        '".$custom_field16."',
					custom_field17 =        '".$custom_field17."',
					custom_field18 =        '".$custom_field18."',
					custom_field19 =        '".$custom_field19."',
					custom_field20 =        '".$custom_field20."',
					custom_field21 =	    '".$custom_field21."',
					custom_field22 =	    '".$custom_field22."',
					custom_field23 =	    '".$custom_field23."',
					custom_field24 =	    '".$custom_field24."',
					custom_field25 =	    '".$custom_field25."',
					custom_field26 =	    '".$custom_field26."',
					custom_field27 =	    '".$custom_field27."',
					custom_field28 =	    '".$custom_field28."',
					custom_field29 =	    '".$custom_field29."',
					custom_field30 =        '".$custom_field30."',
					custom_field31 =	    '".$custom_field31."',
					custom_field32 =	    '".$custom_field32."',
					custom_field33 =	    '".$custom_field33."',
					custom_field34 =	    '".$custom_field34."',
					custom_field35 =	    '".$custom_field35."',
					custom_field36 =	    '".$custom_field36."',
					custom_field37 =	    '".$custom_field37."',
					custom_field38 =	    '".$custom_field38."',
					custom_field39 =	    '".$custom_field39."',
					custom_field40 =        '".$custom_field40."',
					custom_field41 =	    '".$custom_field41."',
					custom_field42 =	    '".$custom_field42."',
					custom_field43 =	    '".$custom_field43."',
					custom_field44 =	    '".$custom_field44."',
					custom_field45 =	    '".$custom_field45."',
					custom_field46 =	    '".$custom_field46."',
					custom_field47 =	    '".$custom_field47."',
					custom_field48 =	    '".$custom_field48."',
					custom_field49 =	    '".$custom_field49."',
					custom_field50 =        '".$custom_field50."',
					error_priority =        '".$error_priority."' 
					where transaction_number = '". $transaction_number ."' ";
	

	
    $query = mysqli_query($conn,$update_query);
        
        
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
	$insert_query="INSERT INTO salesorder_dashboard 
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
					custom_field50,
					error_priority
					)
					
					VALUES 
					( '".$transaction_type."',
					'".$transaction_number."',
					'".$transaction_sub_num."',
					'".$transaction_date."',
					'".$status."',
					'".$processed_date."',
					'".$filename."',
					'".$transaction_status1."',
					'".$transaction_status2."',
					'".$transaction_status3."',
					'".$transaction_status4."',
					'".$transaction_status5."',
					'".$transaction_status6."',
					'".$transaction_status7."',
					'".$transaction_status8."',
					'".$transaction_status9."',
					'".$transaction_status10."',
					'".$transaction_status11."',
					'".$transaction_status12."',
					'".$transaction_status13."',
					'".$transaction_status14."',
					'".$transaction_status15."',
					'".$transaction_status16."',
					'".$transaction_status17."',
					'".$transaction_status18."',
					'".$transaction_status19."',
					'".$transaction_status20."',
					'".$transaction_status21."',
					'".$transaction_status22."',
					'".$transaction_status23."',
					'".$transaction_status24."',
					'".$transaction_status25."',
					'".$transaction_status26."',
					'".$transaction_status27."',
					'".$transaction_status28."',
					'".$transaction_status29."',
					'".$transaction_status30."',
					'".$transaction_status31."',
					'".$transaction_status32."',
					'".$transaction_status33."',
					'".$transaction_status34."',
					'".$transaction_status35."',
					'".$transaction_status36."',
					'".$transaction_status37."',
					'".$transaction_status38."',
					'".$transaction_status39."',
					'".$transaction_status40."',
					'".$transaction_status41."',
					'".$transaction_status42."',
					'".$transaction_status43."',
					'".$transaction_status44."',
					'".$transaction_status45."',
					'".$transaction_status46."',
					'".$transaction_status47."',
					'".$transaction_status48."',
					'".$transaction_status49."',
					'".$transaction_status50."',
					'".$error_msg1."',
					'".$error_msg2."',
					'".$error_msg3."',
					'".$error_msg4."',
					'".$error_msg5."',
					'".$error_msg6."',
					'".$error_msg7."',
					'".$error_msg8."',
					'".$error_msg9."',
					'".$error_msg10."',
					'".$error_msg11."',
					'".$error_msg12."',
					'".$error_msg13."',
					'".$error_msg14."',
					'".$error_msg15."',
					'".$error_msg16."',
					'".$error_msg17."',
					'".$error_msg18."',
					'".$error_msg19."',
					'".$error_msg20."',
					'".$error_msg21."',
					'".$error_msg22."',
					'".$error_msg23."',
					'".$error_msg24."',
					'".$error_msg25."',
					'".$error_msg26."',
					'".$error_msg27."',
					'".$error_msg28."',
					'".$error_msg29."',
					'".$error_msg30."',
					'".$error_msg31."',
					'".$error_msg32."',
					'".$error_msg33."',
					'".$error_msg34."',
					'".$error_msg35."',
					'".$error_msg36."',
					'".$error_msg37."',
					'".$error_msg38."',
					'".$error_msg39."',
					'".$error_msg40."',
					'".$error_msg41."',
					'".$error_msg42."',
					'".$error_msg43."',
					'".$error_msg44."',
					'".$error_msg45."',
					'".$error_msg46."',
					'".$error_msg47."',
					'".$error_msg48."',
					'".$error_msg49."',
					'".$error_msg50."',
					'".$custom_field1."',
					'".$custom_field2."',
					'".$custom_field3."',
					'".$custom_field4."',
					'".$custom_field5."',
					'".$custom_field6."',
					'".$custom_field7."',
					'".$custom_field8."',
					'".$custom_field9."',
					'".$custom_field10."',
					'".$custom_field11."',
					'".$custom_field12."',
					'".$custom_field13."',
					'".$custom_field14."',
					'".$custom_field15."',
					'".$custom_field16."',
					'".$custom_field17."',
					'".$custom_field18."',
					'".$custom_field19."',
					'".$custom_field20."',
					'".$custom_field21."',
					'".$custom_field22."',
					'".$custom_field23."',
					'".$custom_field24."',
					'".$custom_field25."',
					'".$custom_field26."',
					'".$custom_field27."',
					'".$custom_field28."',
					'".$custom_field29."',
					'".$custom_field30."',
					'".$custom_field31."',
					'".$custom_field32."',
					'".$custom_field33."',
					'".$custom_field34."',
					'".$custom_field35."',
					'".$custom_field36."',
					'".$custom_field37."',
					'".$custom_field38."',
					'".$custom_field39."',
					'".$custom_field40."',
					'".$custom_field41."',
					'".$custom_field42."',
					'".$custom_field43."',
					'".$custom_field44."',
					'".$custom_field45."',
					'".$custom_field46."',
					'".$custom_field47."',
					'".$custom_field48."',
					'".$custom_field49."',
					'".$custom_field50."',
					'".$error_priority."')";
	
	
$query = mysqli_query($conn,$insert_query);
 //<!--defining error priority-->       
$priority_high = mysqli_query($conn,"SELECT * from salesorder_dashboard_error_priority where priority ='High' and transaction_type = '". $transaction_type ."' ");
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
	$high_error = " select sum(CASE WHEN id = '0' THEN 1  " ;
	if (!empty($error_type1)){
	$high_error .=" WHEN ".$error_type1." !='' THEN 1 "; 
	}
	if (!empty($error_type2)){
	$high_error .="	WHEN ".$error_type2." !='' THEN 1 ";
	}
	if (!empty($error_type3)){
	$high_error .="	WHEN ".$error_type3." !='' THEN 1 ";
	}
	if (!empty($error_type4)){
	$high_error .="	WHEN ".$error_type4." !='' THEN 1 ";
	}
	if (!empty($error_type5)){
	$high_error .="	WHEN ".$error_type5." !='' THEN 1 ";
	}
	if (!empty($error_type6)){
	$high_error .="	WHEN ".$error_type6." !='' THEN 1 ";
	}
	if (!empty($error_type7)){
	$high_error .="	WHEN ".$error_type7." !='' THEN 1 ";
	}
	if (!empty($error_type8)){
	$high_error .="	WHEN ".$error_type8." !='' THEN 1 ";
	}
	if (!empty($error_type9)){
	$high_error .="	WHEN ".$error_type9." !='' THEN 1 ";
	}
	if (!empty($error_type10)){
	$high_error .="	WHEN ".$error_type10." !='' THEN 1 ";
	}
	$high_error	.="	ELSE 0 END) AS count 
					FROM salesorder_dashboard where transaction_number = '".$transaction_number."'";
	$high_error_query = mysqli_query($conn,$high_error);
	$high_error_fetch = mysqli_fetch_assoc($high_error_query);
	$high_error_count = $high_error_fetch["count"];
} 	
if ($high_error_count > 0){
	
	$insert_error_priority = mysqli_query($conn,"update salesorder_dashboard set error_priority = 'High' where transaction_number = '".$transaction_number."'");
	
}
//<!-- end of defining high error priority-->  	


 //<!--defining medium error priority-->       
$priority_medium = mysqli_query($conn,"SELECT * from salesorder_dashboard_error_priority where priority ='Medium' and transaction_type = '". $transaction_type ."' ");
while($priority_medium_fetch = mysqli_fetch_assoc($priority_medium)){
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
	$medium_error = " select sum(CASE WHEN id = '0' THEN 1  " ;
	if (!empty($error_type11)){
	$medium_error .="   WHEN ".$error_type11." !='' THEN 1 "; 
	}
	if (!empty($error_type12)){
	$medium_error .="   WHEN ".$error_type12." !='' THEN 1 ";
	}
	if (!empty($error_type13)){
	$medium_error .="	WHEN ".$error_type13." !='' THEN 1 ";
	}
	if (!empty($error_type14)){
	$medium_error .="	WHEN ".$error_type14." !='' THEN 1 ";
	}
	if (!empty($error_type15)){
	$medium_error .="	WHEN ".$error_type15." !='' THEN 1 ";
	}
	if (!empty($error_type16)){
	$medium_error .="	WHEN ".$error_type16." !='' THEN 1 ";
	}
	if (!empty($error_type17)){
	$medium_error .="	WHEN ".$error_type17." !='' THEN 1 ";
	}
	if (!empty($error_type18)){
	$medium_error .="	WHEN ".$error_type18." !='' THEN 1 ";
	}
	if (!empty($error_type19)){
	$medium_error .="	WHEN ".$error_type19." !='' THEN 1 ";
	}
	if (!empty($error_type20)){
	$medium_error .="	WHEN ".$error_type20." !='' THEN 1 ";
	}
	$medium_error	.="	ELSE 0 END) AS count 
					FROM salesorder_dashboard where transaction_number = '".$transaction_number."'";
	$medium_error_query = mysqli_query($conn,$medium_error);
	$medium_error_fetch = mysqli_fetch_assoc($medium_error_query);
	$medium_error_count = $medium_error_fetch["count"];
} 	
if ($medium_error_count > 0){
	
	$insert_error_priority = mysqli_query($conn,"update salesorder_dashboard set error_priority = 'Medium' where transaction_number = '".$transaction_number."'");
	
}
//<!-- end of defining medium error priority-->  		


//<!--defining low error priority-->       
$priority_low = mysqli_query($conn,"SELECT * from salesorder_dashboard_error_priority where priority ='Low' and transaction_type = '". $transaction_type ."' ");
while($priority_low_fetch = mysqli_fetch_assoc($priority_low)){
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
	$low_error = " select sum(CASE WHEN id = '0' THEN 1  " ;
	if (!empty($error_type21)){
	$low_error .=" WHEN ".$error_type21." !='' THEN 1 "; 
	}
	if (!empty($error_type22)){
	$low_error .="	WHEN ".$error_type22." !='' THEN 1 ";
	}
	if (!empty($error_type23)){
	$low_error .="	WHEN ".$error_type23." !='' THEN 1 ";
	}
	if (!empty($error_type24)){
	$low_error .="	WHEN ".$error_type24." !='' THEN 1 ";
	}
	if (!empty($error_type25)){
	$low_error .="	WHEN ".$error_type25." !='' THEN 1 ";
	}
	if (!empty($error_type26)){
	$low_error .="	WHEN ".$error_type26." !='' THEN 1 ";
	}
	if (!empty($error_type27)){
	$low_error .="	WHEN ".$error_type27." !='' THEN 1 ";
	}
	if (!empty($error_type28)){
	$low_error .="	WHEN ".$error_type28." !='' THEN 1 ";
	}
	if (!empty($error_type29)){
	$low_error .="	WHEN ".$error_type29." !='' THEN 1 ";
	}
	if (!empty($error_type30)){
	$low_error .="	WHEN ".$error_type30." !='' THEN 1 ";
	}
	$low_error	.="	ELSE 0 END) AS count 
					FROM salesorder_dashboard where transaction_number = '".$transaction_number."'";
	$low_error_query = mysqli_query($conn,$low_error);
	$low_error_fetch = mysqli_fetch_assoc($low_error_query);
	$low_error_count = $low_error_fetch["count"];
} 	
if ($low_error_count > 0){
	
	$insert_error_priority = mysqli_query($conn,"update salesorder_dashboard set error_priority = 'Low' where transaction_number = '".$transaction_number."'");
	
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