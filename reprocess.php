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
$reprocess_button = search($menu_validation, 'menu_code', 'REPROCESS_YES'); 
// Menu and Page code validations ends here //

$transaction_number = $_GET['transaction_number'];
$select = mysqli_query($conn, "select * from Integrated_dashboard where transaction_number = '". $transaction_number ."'");
$get_status_row = mysqli_fetch_assoc ($select);
$filename = $get_status_row['filename'];
$transaction_type = $get_status_row['transaction_type'];

if(isset($_GET['YES'])){
include("config.php");
session_start();
$transaction_number = $_GET['transaction_number'];
$select = mysqli_query($conn, "select * from Integrated_dashboard where transaction_number = '". $transaction_number ."'");
$get_status_row = mysqli_fetch_assoc ($select);


$transaction_type = $get_status_row['transaction_type'];
$transaction_number = $get_status_row['transaction_number'];
$transaction_sub_num = $get_status_row['transaction_sub_num'];
$transaction_date = $get_status_row['transaction_date'];
$status = $get_status_row['status'];
$processed_date = $get_status_row['processed_date'];
$filename = $get_status_row['filename'];
$transaction_status1 = $get_status_row['transaction_status1'];
$transaction_status2 = $get_status_row['transaction_status2'];
$transaction_status3 = $get_status_row['transaction_status3'];
$transaction_status4 = $get_status_row['transaction_status4'];
$transaction_status5 = $get_status_row['transaction_status5'];
$transaction_status6 = $get_status_row['transaction_status6'];
$transaction_status7 = $get_status_row['transaction_status7'];
$transaction_status8 = $get_status_row['transaction_status8'];
$transaction_status9 = $get_status_row['transaction_status9'];
$transaction_status10 = $get_status_row['transaction_status10'];
$transaction_status11 = $get_status_row['transaction_status11'];
$transaction_status12 = $get_status_row['transaction_status12'];
$transaction_status13 = $get_status_row['transaction_status13'];
$transaction_status14 = $get_status_row['transaction_status14'];
$transaction_status15 = $get_status_row['transaction_status15'];
$transaction_status16 = $get_status_row['transaction_status16'];
$transaction_status17 = $get_status_row['transaction_status17'];
$transaction_status18 = $get_status_row['transaction_status18'];
$transaction_status19 = $get_status_row['transaction_status19'];
$transaction_status20 = $get_status_row['transaction_status20'];
$transaction_status21 = $get_status_row['transaction_status21'];
$transaction_status22 = $get_status_row['transaction_status22'];
$transaction_status23 = $get_status_row['transaction_status23'];
$transaction_status24 = $get_status_row['transaction_status24'];
$transaction_status25 = $get_status_row['transaction_status25'];
$transaction_status26 = $get_status_row['transaction_status26'];
$transaction_status27 = $get_status_row['transaction_status27'];
$transaction_status28 = $get_status_row['transaction_status28'];
$transaction_status29 = $get_status_row['transaction_status29'];
$transaction_status30 = $get_status_row['transaction_status30'];
$transaction_status31 = $get_status_row['transaction_status31'];
$transaction_status32 = $get_status_row['transaction_status32'];
$transaction_status33 = $get_status_row['transaction_status33'];
$transaction_status34 = $get_status_row['transaction_status34'];
$transaction_status35 = $get_status_row['transaction_status35'];
$transaction_status36 = $get_status_row['transaction_status36'];
$transaction_status37 = $get_status_row['transaction_status37'];
$transaction_status38 = $get_status_row['transaction_status38'];
$transaction_status39 = $get_status_row['transaction_status39'];
$transaction_status40 = $get_status_row['transaction_status40'];
$transaction_status41 = $get_status_row['transaction_status41'];
$transaction_status42 = $get_status_row['transaction_status42'];
$transaction_status43 = $get_status_row['transaction_status43'];
$transaction_status44 = $get_status_row['transaction_status44'];
$transaction_status45 = $get_status_row['transaction_status45'];
$transaction_status46 = $get_status_row['transaction_status46'];
$transaction_status47 = $get_status_row['transaction_status47'];
$transaction_status48 = $get_status_row['transaction_status48'];
$transaction_status49 = $get_status_row['transaction_status49'];
$transaction_status50 = $get_status_row['transaction_status50'];
$error_msg1 = $get_status_row['error_msg1'];
$error_msg2 = $get_status_row['error_msg2'];
$error_msg3 = $get_status_row['error_msg3'];
$error_msg4 = $get_status_row['error_msg4'];
$error_msg5 = $get_status_row['error_msg5'];
$error_msg6 = $get_status_row['error_msg6'];
$error_msg7 = $get_status_row['error_msg7'];
$error_msg8 = $get_status_row['error_msg8'];
$error_msg9 = $get_status_row['error_msg9'];
$error_msg10 = $get_status_row['error_msg10'];
$error_msg11 = $get_status_row['error_msg11'];
$error_msg12 = $get_status_row['error_msg12'];
$error_msg13 = $get_status_row['error_msg13'];
$error_msg14 = $get_status_row['error_msg14'];
$error_msg15 = $get_status_row['error_msg15'];
$error_msg16 = $get_status_row['error_msg16'];
$error_msg17 = $get_status_row['error_msg17'];
$error_msg18 = $get_status_row['error_msg18'];
$error_msg19 = $get_status_row['error_msg19'];
$error_msg20 = $get_status_row['error_msg20'];
$error_msg21 = $get_status_row['error_msg21'];
$error_msg22 = $get_status_row['error_msg22'];
$error_msg23 = $get_status_row['error_msg23'];
$error_msg24 = $get_status_row['error_msg24'];
$error_msg25 = $get_status_row['error_msg25'];
$error_msg26 = $get_status_row['error_msg26'];
$error_msg27 = $get_status_row['error_msg27'];
$error_msg28 = $get_status_row['error_msg28'];
$error_msg29 = $get_status_row['error_msg29'];
$error_msg30 = $get_status_row['error_msg30'];
$error_msg31 = $get_status_row['error_msg31'];
$error_msg32 = $get_status_row['error_msg32'];
$error_msg33 = $get_status_row['error_msg33'];
$error_msg34 = $get_status_row['error_msg34'];
$error_msg35 = $get_status_row['error_msg35'];
$error_msg36 = $get_status_row['error_msg36'];
$error_msg37 = $get_status_row['error_msg37'];
$error_msg38 = $get_status_row['error_msg38'];
$error_msg39 = $get_status_row['error_msg39'];
$error_msg40 = $get_status_row['error_msg40'];
$error_msg41 = $get_status_row['error_msg41'];
$error_msg42 = $get_status_row['error_msg42'];
$error_msg43 = $get_status_row['error_msg43'];
$error_msg44 = $get_status_row['error_msg44'];
$error_msg45 = $get_status_row['error_msg45'];
$error_msg46 = $get_status_row['error_msg46'];
$error_msg47 = $get_status_row['error_msg47'];
$error_msg48 = $get_status_row['error_msg48'];
$error_msg49 = $get_status_row['error_msg49'];
$error_msg50 = $get_status_row['error_msg50'];
$custom_field1 = $get_status_row['custom_field1'];
$custom_field2 = $get_status_row['custom_field2'];
$custom_field3 = $get_status_row['custom_field3'];
$custom_field4 = $get_status_row['custom_field4'];
$custom_field5 = $get_status_row['custom_field5'];
$custom_field6 = $get_status_row['custom_field6'];
$custom_field7 = $get_status_row['custom_field7'];
$custom_field8 = $get_status_row['custom_field8'];
$custom_field9 = $get_status_row['custom_field9'];
$custom_field10 = $get_status_row['custom_field10'];
$custom_field11 = $get_status_row['custom_field11'];
$custom_field12 = $get_status_row['custom_field12'];
$custom_field13 = $get_status_row['custom_field13'];
$custom_field14 = $get_status_row['custom_field14'];
$custom_field15 = $get_status_row['custom_field15'];
$custom_field16 = $get_status_row['custom_field16'];
$custom_field17 = $get_status_row['custom_field17'];
$custom_field18 = $get_status_row['custom_field18'];
$custom_field19 = $get_status_row['custom_field19'];
$custom_field20 = $get_status_row['custom_field20'];
$custom_field21 = $get_status_row['custom_field21'];
$custom_field22 = $get_status_row['custom_field22'];
$custom_field23 = $get_status_row['custom_field23'];
$custom_field24 = $get_status_row['custom_field24'];
$custom_field25 = $get_status_row['custom_field25'];
$custom_field26 = $get_status_row['custom_field26'];
$custom_field27 = $get_status_row['custom_field27'];
$custom_field28 = $get_status_row['custom_field28'];
$custom_field29 = $get_status_row['custom_field29'];
$custom_field30 = $get_status_row['custom_field30'];
$custom_field31 = $get_status_row['custom_field31'];
$custom_field32 = $get_status_row['custom_field32'];
$custom_field33 = $get_status_row['custom_field33'];
$custom_field34 = $get_status_row['custom_field34'];
$custom_field35 = $get_status_row['custom_field35'];
$custom_field36 = $get_status_row['custom_field36'];
$custom_field37 = $get_status_row['custom_field37'];
$custom_field38 = $get_status_row['custom_field38'];
$custom_field39 = $get_status_row['custom_field39'];
$custom_field40 = $get_status_row['custom_field40'];
$custom_field41 = $get_status_row['custom_field41'];
$custom_field42 = $get_status_row['custom_field42'];
$custom_field43 = $get_status_row['custom_field43'];
$custom_field44 = $get_status_row['custom_field44'];
$custom_field45 = $get_status_row['custom_field45'];
$custom_field46 = $get_status_row['custom_field46'];
$custom_field47 = $get_status_row['custom_field47'];
$custom_field48 = $get_status_row['custom_field48'];
$custom_field49 = $get_status_row['custom_field49'];
$custom_field50 = $get_status_row['custom_field50'];

//Making the url and credentials dynamic 
$query_url = mysqli_query($conn,"select * from Integrated_dashboard_reprocess where transaction_type = '". $transaction_type ."'");
$fetch_url = mysqli_fetch_assoc($query_url);
$url_integration = $fetch_url['link'];
//$url= "".$url_integration."filename=".$filename."&transaction_type=".$transaction_type."&transaction_number=".$transaction_number."&transaction_sub_num=".$transaction_sub_num."&transaction_date=".$transaction_date."&status=".$status."&processed_date=".$processed_date."&transaction_status1=".$transaction_status1."&transaction_status2=".$transaction_status2."&transaction_status3=".$transaction_status3."&transaction_status4=".$transaction_status4."&transaction_status5=".$transaction_status5."&transaction_status6=".$transaction_status6."&transaction_status7=".$transaction_status7."&transaction_status8=".$transaction_status8."&transaction_status9=".$transaction_status9."&transaction_status10=".$transaction_status10."&transaction_status11=".$transaction_status11."&transaction_status12=".$transaction_status12."&transaction_status13=".$transaction_status13."&transaction_status14=".$transaction_status14."&transaction_status15=".$transaction_status15."&transaction_status16=".$transaction_status16."&transaction_status17=".$transaction_status17."&transaction_status18=".$transaction_status18."&transaction_status19=".$transaction_status19."&transaction_status20=".$transaction_status20."&transaction_status21=".$transaction_status21."&transaction_status22=".$transaction_status22."&transaction_status23=".$transaction_status23."&transaction_status24=".$transaction_status24."&transaction_status25=".$transaction_status25."&transaction_status26=".$transaction_status26."&transaction_status27=".$transaction_status27."&transaction_status28=".$transaction_status28."&transaction_status29=".$transaction_status29."&transaction_status30=".$transaction_status30."&transaction_status31=".$transaction_status31."&transaction_status32=".$transaction_status32."&transaction_status33=".$transaction_status33."&transaction_status34=".$transaction_status34."&transaction_status35=".$transaction_status35."&transaction_status36=".$transaction_status36."&transaction_status37=".$transaction_status37."&transaction_status38=".$transaction_status38."&transaction_status39=".$transaction_status39."&transaction_status40=".$transaction_status40."&transaction_status41=".$transaction_status41."&transaction_status42=".$transaction_status42."&transaction_status43=".$transaction_status43."&transaction_status44=".$transaction_status44."&transaction_status45=".$transaction_status45."&transaction_status46=".$transaction_status46."&transaction_status47=".$transaction_status47."&transaction_status48=".$transaction_status48."&transaction_status49=".$transaction_status49."&transaction_status50=".$transaction_status50."&error_msg1=".$error_msg1."&error_msg2=".$error_msg2."&error_msg3=".$error_msg3."&error_msg4=".$error_msg4."&error_msg5=".$error_msg5."&error_msg6=".$error_msg6."&error_msg7=".$error_msg7."&error_msg8=".$error_msg8."&error_msg9=".$error_msg9."&error_msg10=".$error_msg10."&error_msg11=".$error_msg11."&error_msg12=".$error_msg12."&error_msg13=".$error_msg13."&error_msg14=".$error_msg14."&error_msg15=".$error_msg15."&error_msg16=".$error_msg16."&error_msg17=".$error_msg17."&error_msg18=".$error_msg18."&error_msg19=".$error_msg19."&error_msg20=".$error_msg20."&error_msg21=".$error_msg21."&error_msg22=".$error_msg22."&error_msg23=".$error_msg23."&error_msg24=".$error_msg24."&error_msg25=".$error_msg25."&error_msg26=".$error_msg26."&error_msg27=".$error_msg27."&error_msg28=".$error_msg28."&error_msg29=".$error_msg29."&error_msg30=".$error_msg30."&error_msg31=".$error_msg31."&error_msg32=".$error_msg32."&error_msg33=".$error_msg33."&error_msg34=".$error_msg34."&error_msg35=".$error_msg35."&error_msg36=".$error_msg36."&error_msg37=".$error_msg37."&error_msg38=".$error_msg38."&error_msg39=".$error_msg39."&error_msg40=".$error_msg40."&error_msg41=".$error_msg41."&error_msg42=".$error_msg42."&error_msg43=".$error_msg43."&error_msg44=".$error_msg44."&error_msg45=".$error_msg45."&error_msg46=".$error_msg46."&error_msg47=".$error_msg47."&error_msg48=".$error_msg48."&error_msg49=".$error_msg49."&error_msg50=".$error_msg50."&custom_field1=".$custom_field1."&custom_field2=".$custom_field2."&custom_field3=".$custom_field3."&custom_field4=".$custom_field4."&custom_field5=".$custom_field5."&custom_field6=".$custom_field6."&custom_field7=".$custom_field7."&custom_field8=".$custom_field8."&custom_field9=".$custom_field9."&custom_field10=".$custom_field10."&custom_field11=".$custom_field11."&custom_field12=".$custom_field12."&custom_field13=".$custom_field13."&custom_field14=".$custom_field14."&custom_field15=".$custom_field15."&custom_field16=".$custom_field16."&custom_field17=".$custom_field17."&custom_field18=".$custom_field18."&custom_field19=".$custom_field19."&custom_field20=".$custom_field20."&custom_field21=".$custom_field21."&custom_field22=".$custom_field23."&custom_field24=".$custom_field24."&custom_field25=".$custom_field25."&custom_field26=".$custom_field26."&custom_field27=".$custom_field27."&custom_field28=".$custom_field28."&custom_field29=".$custom_field29."&custom_field30=".$custom_field30."&custom_field31=".$custom_field31."&custom_field32=".$custom_field32."&custom_field33=".$custom_field33."&custom_field34=".$custom_field34."&custom_field35=".$custom_field35."&custom_field36=".$custom_field36."&custom_field37=".$custom_field37."&custom_field38=".$custom_field38."&custom_field39=".$custom_field39."&custom_field40=".$custom_field40."&custom_field41=".$custom_field41."&custom_field42=".$custom_field42."&custom_field43=".$custom_field43."&custom_field44=".$custom_field44."&custom_field45=".$custom_field45."&custom_field46=".$custom_field46."&custom_field47=".$custom_field47."&custom_field48=".$custom_field48."&custom_field49=".$custom_field49."&custom_field50=".$custom_field50;
    
	$url= "".$url_integration."filename=".$filename."&transaction_type=".$transaction_type;
    $username=$fetch_url['username'];
    $password=$fetch_url['password'];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERPWD, $username.":".$password);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_TIMEOUT, 100);
    curl_setopt($ch, CURLOPT_POST, false);
    $varResponse=curl_exec($ch);
    curl_close($ch);
	$data = json_decode($varResponse, true);
	echo('<body>');
	echo('<div>');
	echo('<br><br><br><br><br>');
	echo ('<h3 align="center"><a>'. $data['Status'] . '</a></p>');
	echo('<h3 align="center"><a href="main.php?transaction_number='.$transaction_number.'" class="btn font-weight-bold">Verify Status</a></h3>');
	echo($url);
	echo('</div>');
	echo('</body>');
	exit;
	
}

?>
<!DOCTYPE html>
<body>
<div class="clearfix"></div>
<br><br><br><br><br>

<div>
<h2 class="font text-center">Are you sure you want to reprocess Transaction Number: <?php echo $get_status_row['transaction_number']?>?</h2>
</div>
<div class="row">
<div class="col-md-2">
<a></a>
</div>

<?php if(!empty($reprocess_button)): ?>
<form action="" method="GET">
<div class="col-md-3 text-center">
 <a href="reprocess.php?transaction_number=<?php echo $transaction_number;?>&YES=yes" class="btn font-weight-bold" style="text-align: center; margin-left: 300px; margin-top: 60px; width: 80px;" id="YES" name="YES">YES</a>
<?php endif; ?>
</form>  
</div> 
              
<div class="col-md-2 text-center">
<h4><a href="main.php" style="text-align: center ;margin-left: 10px; margin-top: 60px; width: 80px;"  class="btn font-weight-bold">NO</a>
</h4>
</div>
<div class="col-md-5">
<a></a>
</div>
</div>
</body>