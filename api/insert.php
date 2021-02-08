<?php 
include("config.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$data = json_decode(file_get_contents('php://input'), true);

$transaction_number  = $data["transaction_number"];

$check = mysqli_query($conn, "select * from Integrated_dashboard where transaction_number ='". $transaction_number ."'");
$result = mysqli_num_rows($check);

if($result > 0){

	$update_query="update Integrated_dashboard set
					transaction_type = '".$data["transaction_type"]."',
					transaction_number = '".$data["transaction_number"]."',
					transaction_sub_num = '".$data["transaction_sub_num"]."',
					transaction_date = '".$data["transaction_date"]."',	
					status = '".$data["status"]."',
					processed_date = '".$data["processed_date"]."',
					filename =	'".$data["filename"]."',
					transaction_status1 =	'".$data["transaction_status1"]."',
					transaction_status2 =	'".$data["transaction_status2"]."',
					transaction_status3 =	'".$data["transaction_status3"]."',
					transaction_status4 =	'".$data["transaction_status4"]."',
					transaction_status5 =	'".$data["transaction_status5"]."',
					transaction_status6 =	'".$data["transaction_status6"]."',
					transaction_status7 =	'".$data["transaction_status7"]."',
					transaction_status8 =	'".$data["transaction_status8"]."',
					transaction_status9 =	'".$data["transaction_status9"]."',
					transaction_status10 =	'".$data["transaction_status10"]."',
					transaction_status11 =	'".$data["transaction_status11"]."',
					transaction_status12 =	'".$data["transaction_status12"]."',
					transaction_status13 =	'".$data["transaction_status13"]."',
					transaction_status14 =	'".$data["transaction_status14"]."',
					transaction_status15 =	'".$data["transaction_status15"]."',
					transaction_status16 =	'".$data["transaction_status16"]."',
					transaction_status17 =	'".$data["transaction_status17"]."',
					transaction_status18 =	'".$data["transaction_status18"]."',
					transaction_status19 =	'".$data["transaction_status19"]."',
					transaction_status20 =	'".$data["transaction_status20"]."',
					error_msg1 =	'".$data["error_msg1"]."',
					error_msg2 =	'".$data["error_msg2"]."',
					error_msg3 =	'".$data["error_msg3"]."',
					error_msg4 =	'".$data["error_msg4"]."',
					error_msg5 =	'".$data["error_msg5"]."',
					error_msg6 =	'".$data["error_msg6"]."',
					error_msg7 =	'".$data["error_msg7"]."',
					error_msg8 =	'".$data["error_msg8"]."',
					error_msg9 =	'".$data["error_msg9"]."',
					error_msg10 =	'".$data["error_msg10"]."',
					error_msg11 =	'".$data["error_msg11"]."',
					error_msg12 =	'".$data["error_msg12"]."',
					error_msg13 =	'".$data["error_msg13"]."',
					error_msg14 =	'".$data["error_msg14"]."',
					error_msg15 =	'".$data["error_msg15"]."',
					error_msg16 =	'".$data["error_msg16"]."',
					error_msg17=	'".$data["error_msg17"]."',
					error_msg18 =	'".$data["error_msg18"]."',
					error_msg19 =	'".$data["error_msg19"]."',
					error_msg20 =	'".$data["error_msg20"]."',
					custom_field1 =	'".$data["custom_field1"]."',
					custom_field2 =	'".$data["custom_field2"]."',
					custom_field3 =	'".$data["custom_field3"]."',
					custom_field4 =	'".$data["custom_field4"]."',
					custom_field5 =	'".$data["custom_field5"]."',
					custom_field6 =	'".$data["custom_field6"]."',
					custom_field7 =	'".$data["custom_field7"]."',
					custom_field8 =	'".$data["custom_field8"]."',
					custom_field9 =	'".$data["custom_field9"]."',
					custom_field10 = '".$data["custom_field10"]."',
					custom_field11 = '".$data["custom_field11"]."',
					custom_field12 = '".$data["custom_field12"]."',
					custom_field13 = '".$data["custom_field13"]."',
					custom_field14 = '".$data["custom_field14"]."',
					custom_field15 = '".$data["custom_field15"]."',
					custom_field16 = '".$data["custom_field16"]."',
					custom_field17 = '".$data["custom_field17"]."',
					custom_field18 = '".$data["custom_field18"]."',
					custom_field19 = '".$data["custom_field19"]."',
					custom_field20 = '".$data["custom_field20"]."'
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
					custom_field20
					)
					
					VALUES 
					( '".$data["transaction_type"]."',
					'".$data["transaction_number"]."',
					'".$data["transaction_sub_num"]."',
					'".$data["transaction_date"]."',
					'".$data["status"]."',
					'".$data["processed_date"]."',
					'".$data["filename"]."',
					'".$data["transaction_status1"]."',
					'".$data["transaction_status2"]."',
					'".$data["transaction_status3"]."',
					'".$data["transaction_status4"]."',
					'".$data["transaction_status5"]."',
					'".$data["transaction_status6"]."',
					'".$data["transaction_status7"]."',
					'".$data["transaction_status8"]."',
					'".$data["transaction_status9"]."',
					'".$data["transaction_status10"]."',
					'".$data["transaction_status11"]."',
					'".$data["transaction_status12"]."',
					'".$data["transaction_status13"]."',
					'".$data["transaction_status14"]."',
					'".$data["transaction_status15"]."',
					'".$data["transaction_status16"]."',
					'".$data["transaction_status17"]."',
					'".$data["transaction_status18"]."',
					'".$data["transaction_status19"]."',
					'".$data["transaction_status20"]."',
					'".$data["error_msg1"]."',
					'".$data["error_msg2"]."',
					'".$data["error_msg3"]."',
					'".$data["error_msg4"]."',
					'".$data["error_msg5"]."',
					'".$data["error_msg6"]."',
					'".$data["error_msg7"]."',
					'".$data["error_msg8"]."',
					'".$data["error_msg9"]."',
					'".$data["error_msg10"]."',
					'".$data["error_msg11"]."',
					'".$data["error_msg12"]."',
					'".$data["error_msg13"]."',
					'".$data["error_msg14"]."',
					'".$data["error_msg15"]."',
					'".$data["error_msg16"]."',
					'".$data["error_msg17"]."',
					'".$data["error_msg18"]."',
					'".$data["error_msg19"]."',
					'".$data["error_msg20"]."',
					'".$data["custom_field1"]."',
					'".$data["custom_field2"]."',
					'".$data["custom_field3"]."',
					'".$data["custom_field4"]."',
					'".$data["custom_field5"]."',
					'".$data["custom_field6"]."',
					'".$data["custom_field7"]."',
					'".$data["custom_field8"]."',
					'".$data["custom_field9"]."',
					'".$data["custom_field10"]."',
					'".$data["custom_field11"]."',
					'".$data["custom_field12"]."',
					'".$data["custom_field13"]."',
					'".$data["custom_field14"]."',
					'".$data["custom_field15"]."',
					'".$data["custom_field16"]."',
					'".$data["custom_field17"]."',
					'".$data["custom_field18"]."',
					'".$data["custom_field19"]."',
					'".$data["custom_field20"]."')";
	
    $query = mysqli_query($conn,$insert_query);
        
        
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