<?php 
include("config.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$data = json_decode(file_get_contents('php://input'), true);

$processed_date = $data["processed_date"];
$order_number	= $data["order_number"];
$line_number	= $data["line_number"];
$item_sku		= $data["item_sku"];
$shipment_number = $data["shipment_number"];


if($processed_date != ""){

	$insert_query="INSERT INTO Integrated_dashboard_856
					(p_id,
					 p_id_ship,
					processed_date,
					order_number,
					line_number,
					item_sku,
					filename,
					shipment_number,
					shipping_waybill_number,
					ssc_code,
					ship_carrier,
					shipment_date,
					shipped_qty,
					856_status,
					856_error
					)
					
					VALUES 
					( '".$data["p_id"]."',
					'".$data["p_id_ship"]."',
					'".$processed_date."',
					'". $order_number ."',
					'". $line_number ."',
					'". $item_sku ."',
					'".$data["filename"]."',
					'". $shipment_number ."',
					'".$data["shipping_waybill_number"]."',
					'".$data["ssc_code"]."',
					'".$data["ship_carrier"]."',
					'".$data["shipment_date"]."',
					'".$data["shipped_qty"]."',
					'".$data["856_status"]."',
					'".$data["856_error"]."')";
	
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
else{
  header('Content-Type: application/json');
  $json_resp = array(
      "STATUS" => "100","Message" => "Incomplete data"
  );
  print_r(json_encode($json_resp));  
}

        



    ?>