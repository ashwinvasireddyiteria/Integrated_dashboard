<?php
include("config.php");
include("header.php");
session_start();
$transaction_number = $_GET['transaction_number'];
$select = mysqli_query($conn, "select * from Integrated_dashboard where transaction_number = '". $transaction_number ."'");
$get_status_row = mysqli_fetch_assoc ($select);
$filename = $get_status_row['filename'];
$transaction_type = $get_status_row['transaction_type'];

if(isset($_GET['YES'])){
include("config.php");
session_start();
$transaction_number = $_GET['YES'];
$select = mysqli_query($conn, "select * from Integrated_dashboard where transaction_number = '". $transaction_number ."'");
$get_status_row = mysqli_fetch_assoc ($select);
$filename = $get_status_row['filename'];
$transaction_type = $get_status_row['transaction_type'];
	
	$url="https://iteria-idb-idm3b4slrhb7-ia.integration.ocp.oraclecloud.com/ic/api/integration/v1/flows/rest/REPROCESS_DASHBOARD_FILES/1.0/Trigger?filename=".$filename."&Transaction_type=" .$transaction_type;
    $username="chandu.melangi@iteria.us";
    $password='OracleCloud@12345';
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
	echo('<h3 align="center"><a href="main.php?transaction_number='.$transaction_number.'" style="background-color:#ADD8E6;" class="btn font-weight-bold">Verify Status</a></h3>');
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
<h2 class="text-center">Are you sure you want to reprocess Transaction Number: <?php echo $get_status_row['transaction_number']?>?</h2>
</div>
<div class="row">
<div class="col-md-2">
<a></a>
</div>
<div class="col-md-3 text-center">
<form action="" method="GET">
 
 <a href="main.php?transaction_number=<?php echo $transaction_number;?>" class="btn font-weight-bold " style="text-align: center;margin-left: 300px;margin-top: 60px; background-color:#ADD8E6;" id="YES" name="YES" >YES</a>
</form>  
</div>               
<div class="col-md-2 text-center">
<h4><a href="main.php" style="text-align: left ;margin-left: 2px; margin-top: 60px; background-color:#ADD8E6;"  class="btn font-weight-bold"> NO</a>
</h4>
</div>
<div class="col-md-5">
<a></a>
</div>
</div>
</body>