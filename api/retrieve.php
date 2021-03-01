<?php 
include("config.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

$transaction_number = $data["transaction_number"];
$transaction_type = $data["transaction_type"];


$date = date('m/d/Y h:i:s a', time());

if(!empty($data) ){
	
		$response=array();
if(!empty($data['transaction_number'])){		
		$fetch_query = "select * from Integrated_dashboard where transaction_number = '". $transaction_number ."' "; 
}
elseif(!empty($data['transaction_type']) && empty($data['transaction_number'])) {
		$fetch_query = "select * from Integrated_dashboard where transaction_type = '". $transaction_type ."' "; 
}

	
    $result = mysqli_query($conn,$fetch_query);
		    $num_item_vendors=mysqli_num_rows($result);
	    if ($num_item_vendors >0){
	while($row=mysqli_fetch_assoc($result)) {

		array_push($response, $row);
		
	}
	echo json_encode($response);
	    } 
		else
        {
          header('Content-Type: application/json');
          $json_resp = array(
          "STATUS" => "100","Message" => "NO Matching Data"
        );
        print_r(json_encode($json_resp));
        exit;
		
}}
	
        
        
        
        
         else
        {
          header('Content-Type: application/json');
          $json_resp = array(
          "STATUS" => "100","Message" => "NO Data Given"
        );
        print_r(json_encode($json_resp));
        exit;
        } 


        



    ?>