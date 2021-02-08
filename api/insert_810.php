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

	$insert_query="INSERT INTO Integrated_dashboard_810
					(p_id,
					 p_id_ship,
					processed_date,
					order_number,
					line_number,
					item_sku,
					filename,
					shipment_number,
					invoice_number,
					invoice_date,
					invoice_amount,
					invoiced_qty,
					810_status,
					810_error
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
					'".$data["invoice_number"]."',
					'".$data["invoice_date"]."',
					'".$data["invoice_amount"]."',
					'".$data["invoiced_qty"]."',
					'".$data["810_status"]."',
					'".$data["810_error"]."')";
	
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