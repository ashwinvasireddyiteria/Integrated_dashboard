<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
require_once('config.php');
$data = json_decode(file_get_contents('php://input'), true);
$processed_date = $data['processed_date'];

 if (isset($processed_date) && ($processed_date) != '' ) {
    
    $query = " SELECT distinct order_number, shipment_number, processed_date, 856_status from EDI_dashboard_856 where processed_date ='".$processed_date."' ";
    $response=array();
    $result= mysqli_query($conn, $query);
    while($row= mysqli_fetch_assoc($result)) {
        $response[]=$row;
    }
    header('Content-Type: application/json');
    echo json_encode($response);
    
   }
else{
   
    header('Content-Type: application/json');
    $json_resp = array(
      "STATUS" => "100","Message" => "Incomplete data"
    );
    print_r(json_encode($json_resp));
}

?>
