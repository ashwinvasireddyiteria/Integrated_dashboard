<?php
include("config.php");

if(isset($_POST['delete'])) {
	$delete_checked = $_POST['delete_checked'];
	$from_date = $_POST['from_date'];
	$to_date = $_POST['to_date'];
	$status = $_POST['status'];
	$transaction_type = $_POST['transaction_type'];

    $sku = array();
    if (empty($delete_checked)) {
		?>
	   <div id="box" class="font">
	      <a href="purge.php" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 20px;">Please select a checkbox</h6>
       </div>
    <?php
    } else {
        $N = count($delete_checked);

        for ($i = 0; $i < $N; $i++) {
            $sku[] = $delete_checked[$i];
           //echo $delete_checked[$i];
        }
         $ids=implode(',',$sku);
		 
	
}
if(!empty($ids)){
	
$delete_query = "delete from Integrated_dashboard where id in (".$ids.")";
$delete_selected = mysqli_query($conn,$delete_query);
if($delete_selected){
$Success = "Successfully deleted";
}
}
if(isset($Success)){
	?>
	   <div id="box" class="font">
	      <a href="purge.php?from_date=<?php echo $from_date;?>&to_date=<?php echo $to_date;?>&status=<?php echo $status; ?>&transaction_type=<?php echo $transaction_type ;?>&search=Search" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 20px;">Successfully deleted</h6>
       </div>
    <?php
}
exit();
}

?>


<style>
#box{
	width: 300px;
	height: 100px;
	overflow: hidden;
	background: #f1f1f1;
	box-shadow: 0 0 20px black;
	border-radius: 8px;
	position: absolute;
	top: 23%;
	left: 50%;
	transform: translate(-50%, -50%);
	z-index: 9999;
	padding: 10px;
	text-align: center;
}

#box h6{
	color: #FF0000;
}

.close{
	color: white;
	padding: 10px
	cursor: pointer;
	background: #3498db;
	display: inline-block;
}

</style>

<script>
var c = 0;
function pop(){
	if(c == 0){
		document.getElementById("box").style.display = "block";
		c = 1;
	}else{
		document.getElementById("box").style.display = "none";
		c = 0;
	}
}

</script>	