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
$custom_field_update_button = search($menu_validation, 'menu_code', 'CUSTOM_FIELDS_UPDATE'); 
// Menu and Page code validations ends here //

  
	$transaction_type = $_GET['transaction_type'];
$get_custom_fields = mysqli_query($conn,"select * from Integrated_dashboard_transactiontype where transaction_type = '".$transaction_type."'");	
$fetch_custom_fields = mysqli_fetch_assoc($get_custom_fields);
	$custom_field1 = $fetch_custom_fields['custom_field1'];
	$custom_field2 = $fetch_custom_fields['custom_field2'];
	$custom_field3 = $fetch_custom_fields['custom_field3'];
	$custom_field4 = $fetch_custom_fields['custom_field4'];
	$custom_field5 = $fetch_custom_fields['custom_field5'];
	$custom_field6 = $fetch_custom_fields['custom_field6'];
	$custom_field7 = $fetch_custom_fields['custom_field7'];
	$custom_field8 = $fetch_custom_fields['custom_field8'];
	$custom_field9 = $fetch_custom_fields['custom_field9'];
	$custom_field10 = $fetch_custom_fields['custom_field10'];
	$custom_field11 = $fetch_custom_fields['custom_field11'];
	$custom_field12 = $fetch_custom_fields['custom_field12'];
	$custom_field13 = $fetch_custom_fields['custom_field13'];
	$custom_field14 = $fetch_custom_fields['custom_field14'];
	$custom_field15 = $fetch_custom_fields['custom_field15'];
	$custom_field16 = $fetch_custom_fields['custom_field16'];
	$custom_field17 = $fetch_custom_fields['custom_field17'];
	$custom_field18 = $fetch_custom_fields['custom_field18'];
	$custom_field19 = $fetch_custom_fields['custom_field19'];
	$custom_field20 = $fetch_custom_fields['custom_field20'];
	$custom_field21 = $fetch_custom_fields['custom_field21'];
	$custom_field22 = $fetch_custom_fields['custom_field22'];
	$custom_field23 = $fetch_custom_fields['custom_field23'];
	$custom_field24 = $fetch_custom_fields['custom_field24'];
	$custom_field25 = $fetch_custom_fields['custom_field25'];
	$custom_field26 = $fetch_custom_fields['custom_field26'];
	$custom_field27 = $fetch_custom_fields['custom_field27'];
	$custom_field28 = $fetch_custom_fields['custom_field28'];
	$custom_field29 = $fetch_custom_fields['custom_field29'];
	$custom_field30 = $fetch_custom_fields['custom_field30'];
	$custom_field31 = $fetch_custom_fields['custom_field31'];
	$custom_field32 = $fetch_custom_fields['custom_field32'];
	$custom_field33 = $fetch_custom_fields['custom_field33'];
	$custom_field34 = $fetch_custom_fields['custom_field34'];
	$custom_field35 = $fetch_custom_fields['custom_field35'];
	$custom_field36 = $fetch_custom_fields['custom_field36'];
	$custom_field37 = $fetch_custom_fields['custom_field37'];
	$custom_field38 = $fetch_custom_fields['custom_field38'];
	$custom_field39 = $fetch_custom_fields['custom_field39'];
	$custom_field40 = $fetch_custom_fields['custom_field40'];
	$custom_field41 = $fetch_custom_fields['custom_field41'];
	$custom_field42 = $fetch_custom_fields['custom_field42'];
	$custom_field43 = $fetch_custom_fields['custom_field43'];
	$custom_field44 = $fetch_custom_fields['custom_field44'];
	$custom_field45 = $fetch_custom_fields['custom_field45'];
	$custom_field46 = $fetch_custom_fields['custom_field46'];
	$custom_field47 = $fetch_custom_fields['custom_field47'];
	$custom_field48 = $fetch_custom_fields['custom_field48'];
	$custom_field49 = $fetch_custom_fields['custom_field49'];
	$custom_field50 = $fetch_custom_fields['custom_field50'];

if(isset($_GET['Update']))	{
	$transaction_type = $_GET['transaction_type'];
	$custom_field1 = $_GET['custom_field1'];
	$custom_field2 = $_GET['custom_field2'];
	$custom_field3 = $_GET['custom_field3'];
	$custom_field4 = $_GET['custom_field4'];
	$custom_field5 = $_GET['custom_field5'];
	$custom_field6 = $_GET['custom_field6'];
	$custom_field7 = $_GET['custom_field7'];
	$custom_field8 = $_GET['custom_field8'];
	$custom_field9 = $_GET['custom_field9'];
	$custom_field10 = $_GET['custom_field10'];
	$custom_field11 = $_GET['custom_field11'];
	$custom_field12 = $_GET['custom_field12'];
	$custom_field13 = $_GET['custom_field13'];
	$custom_field14 = $_GET['custom_field14'];
	$custom_field15 = $_GET['custom_field15'];
	$custom_field16 = $_GET['custom_field16'];
	$custom_field17 = $_GET['custom_field17'];
	$custom_field18 = $_GET['custom_field18'];
	$custom_field19 = $_GET['custom_field19'];
	$custom_field20 = $_GET['custom_field20'];
	$custom_field21 = $_GET['custom_field21'];
	$custom_field22 = $_GET['custom_field22'];
	$custom_field23 = $_GET['custom_field23'];
	$custom_field24 = $_GET['custom_field24'];
	$custom_field25 = $_GET['custom_field25'];
	$custom_field26 = $_GET['custom_field26'];
	$custom_field27 = $_GET['custom_field27'];
	$custom_field28 = $_GET['custom_field28'];
	$custom_field29 = $_GET['custom_field29'];
	$custom_field30 = $_GET['custom_field30'];
	$custom_field31 = $_GET['custom_field31'];
	$custom_field32 = $_GET['custom_field32'];
	$custom_field33 = $_GET['custom_field33'];
	$custom_field34 = $_GET['custom_field34'];
	$custom_field35 = $_GET['custom_field35'];
	$custom_field36 = $_GET['custom_field36'];
	$custom_field37 = $_GET['custom_field37'];
	$custom_field38 = $_GET['custom_field38'];
	$custom_field39 = $_GET['custom_field39'];
	$custom_field40 = $_GET['custom_field40'];
	$custom_field41 = $_GET['custom_field41'];
	$custom_field42 = $_GET['custom_field42'];
	$custom_field43 = $_GET['custom_field43'];
	$custom_field44 = $_GET['custom_field44'];
	$custom_field45 = $_GET['custom_field45'];
	$custom_field46 = $_GET['custom_field46'];
	$custom_field47 = $_GET['custom_field47'];
	$custom_field48 = $_GET['custom_field48'];
	$custom_field49 = $_GET['custom_field49'];
	$custom_field50 = $_GET['custom_field50'];

$update_custom_fields = "UPDATE Integrated_dashboard_transactiontype set
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
					where transaction_type = '".$transaction_type."'";
$update_query = mysqli_query($conn,$update_custom_fields);
$display_error = "successfully updated";
	if($update_query){
	?>
	   <div id="box" class="font">
	      <a href="custom_fields.php" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 20px;">Successfully Updated</h6>
       </div>
    <?php
	}
}

?>

<!DOCTYPE html>
<body>
<form action="" method="GET">
<br><br>
<div class="font page-header text-center">
<h3>Transaction Type : <?php echo $transaction_type ?></h3>
<input type="hidden" name="transaction_type" value="<?php echo $transaction_type ?>">
</div>
<br>
<table class="table">
     <div class="font"> 
     <div class="font form-group row  justify-content-center">
        <label class="col-form-label font-weight-bold px-4" for="custom_field1">Custom Field1</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field1" id="custom_field1" value="<?php if(isset($custom_field1)){echo $custom_field1;}?>" class="form-control border-dark">
        </div>
	 </div> 
	 
     <div class="font form-group row justify-content-center">
        <label class="col-form-label font-weight-bold px-4" for="custom_field1">Custom Field2</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
	   <div class="col-sm-3">
        <input type="text" name="custom_field2" id="custom_field2" value="<?php if(isset($custom_field2)){echo $custom_field2;}?>" class="form-control border-dark">
       </div>
     </div>
 
 <div class="font form-group row justify-content-center">
        <label class="col-form-label font-weight-bold px-4" for="custom_field3">Custom Field3</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field3" id="custom_field3" value="<?php if(isset($custom_field3)){echo $custom_field3;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="font form-group row justify-content-center">
        <label class="col-form-label font-weight-bold px-4" for="custom_field4">Custom Field4</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field4" id="custom_field4" value="<?php if(isset($custom_field4)){echo $custom_field4;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="font form-group row justify-content-center">
        <label class="col-form-label font-weight-bold px-4" for="custom_field5">Custom Field5</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field5" id="custom_field5" value="<?php if(isset($custom_field5)){echo $custom_field5;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="font form-group row justify-content-center">
        <label class="col-form-label font-weight-bold px-4" for="custom_field6">Custom Field6</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field6" id="custom_field6" value="<?php if(isset($custom_field6)){echo $custom_field6;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="font form-group row justify-content-center">
        <label class="col-form-label font-weight-bold px-4" for="custom_field7">Custom Field7</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field7" id="custom_field7" value="<?php if(isset($custom_field7)){echo $custom_field7;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="font form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field8">Custom Field8</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field8" id="custom_field8" value="<?php if(isset($custom_field8)){echo $custom_field8;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="font form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field9">Custom Field9</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field9" id="custom_field9" value="<?php if(isset($custom_field9)){echo $custom_field9;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="font form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field10">Custom Field10</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field10" id="custom_field10" value="<?php if(isset($custom_field10)){echo $custom_field10;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field11">Custom Field11</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field11" id="custom_field11" value="<?php if(isset($custom_field11)){echo $custom_field11;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field12">Custom Field12</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field12" id="custom_field12" value="<?php if(isset($custom_field12)){echo $custom_field12;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field13">Custom Field13</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		 <div class="col-sm-3">
        <input type="text" name="custom_field13" id="custom_field13" value="<?php if(isset($custom_field13)){echo $custom_field13;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field14">Custom Field14</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field14" id="custom_field14" value="<?php if(isset($custom_field14)){echo $custom_field14;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field15">Custom Field15</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field15" id="custom_field15" value="<?php if(isset($custom_field15)){echo $custom_field15;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field16">Custom Field16</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field16" id="custom_field16" value="<?php if(isset($custom_field16)){echo $custom_field16;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field17">Custom Field17</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field17" id="custom_field17" value="<?php if(isset($custom_field17)){echo $custom_field17;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class=" col-form-label px-4 font-weight-bold" for="custom_field18">Custom Field18</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field18" id="custom_field18" value="<?php if(isset($custom_field18)){echo $custom_field18;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field19">Custom Field19</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field19" id="custom_field19" value="<?php if(isset($custom_field19)){echo $custom_field19;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field20">Custom Field20</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field20" id="custom_field20" value="<?php if(isset($custom_field20)){echo $custom_field20;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field21">Custom Field21</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field21" id="custom_field21" value="<?php if(isset($custom_field21)){echo $custom_field21;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field22">Custom Field22</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field22" id="custom_field22" value="<?php if(isset($custom_field22)){echo $custom_field22;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field23">Custom Field23</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field23" id="custom_field23" value="<?php if(isset($custom_field23)){echo $custom_field23;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field24">Custom Field24</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field24" id="custom_field24" value="<?php if(isset($custom_field24)){echo $custom_field24;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field25">Custom Field25</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field25" id="custom_field25" value="<?php if(isset($custom_field25)){echo $custom_field25;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field26">Custom Field26</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field26" id="custom_field26" value="<?php if(isset($custom_field26)){echo $custom_field26;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field27">Custom Field27</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field27" id="custom_field27" value="<?php if(isset($custom_field27)){echo $custom_field27;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field28">Custom Field28</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field28" id="custom_field28" value="<?php if(isset($custom_field28)){echo $custom_field28;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field29">Custom Field29</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field29" id="custom_field29" value="<?php if(isset($custom_field29)){echo $custom_field29;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field30">Custom Field30</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field30" id="custom_field30" value="<?php if(isset($custom_field30)){echo $custom_field30;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field31">Custom Field31</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field31" id="custom_field31" value="<?php if(isset($custom_field31)){echo $custom_field31;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field32">Custom Field32</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field32" id="custom_field32" value="<?php if(isset($custom_field32)){echo $custom_field32;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field33">Custom Field33</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field33" id="custom_field33" value="<?php if(isset($custom_field33)){echo $custom_field33;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field34">Custom Field34</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field34" id="custom_field34" value="<?php if(isset($custom_field34)){echo $custom_field34;}?>" class="form-control border-dark">
 </div>
 </div> 
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field35">Custom Field35</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field35" id="custom_field35" value="<?php if(isset($custom_field35)){echo $custom_field35;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field36">Custom Field36</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field36" id="custom_field36" value="<?php if(isset($custom_field36)){echo $custom_field36;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field37">Custom Field37</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field37" id="custom_field37" value="<?php if(isset($custom_field37)){echo $custom_field37;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field38">Custom Field38</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field38" id="custom_field38" value="<?php if(isset($custom_field38)){echo $custom_field38;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field39">Custom Field39</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field39" id="custom_field39" value="<?php if(isset($custom_field39)){echo $custom_field39;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field40">Custom Field40</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field40" id="custom_field40" value="<?php if(isset($custom_field40)){echo $custom_field40;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field41">Custom Field41</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field41" id="custom_field41" value="<?php if(isset($custom_field41)){echo $custom_field41;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field42">Custom Field42</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field42" id="custom_field42" value="<?php if(isset($custom_field42)){echo $custom_field42;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field43">Custom Field43</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field43" id="custom_field43" value="<?php if(isset($custom_field43)){echo $custom_field43;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field44">Custom Field44</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field44" id="custom_field44" value="<?php if(isset($custom_field44)){echo $custom_field44;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field45">Custom Field45</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field45" id="custom_field45" value="<?php if(isset($custom_field45)){echo $custom_field45;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field46">Custom Field46</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field46" id="custom_field46" value="<?php if(isset($custom_field46)){echo $custom_field46;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field47">Custom Field47</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field47" id="custom_field47" value="<?php if(isset($custom_field47)){echo $custom_field47;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field48">Custom Field48</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field48" id="custom_field48" value="<?php if(isset($custom_field48)){echo $custom_field48;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field49">Custom Field49</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field49" id="custom_field49" value="<?php if(isset($custom_field49)){echo $custom_field49;}?>" class="form-control border-dark">
 </div>
 </div>
 
 <div class="form-group row justify-content-center">
        <label class="col-form-label px-4 font-weight-bold" for="custom_field50">Custom Field50</label>
		<label class="col-form-label font-weight-bold px-4" for="varchar45">VARCHAR(45)</label>
		<div class="col-sm-3">
        <input type="text" name="custom_field50" id="custom_field50" value="<?php if(isset($custom_field50)){echo $custom_field50;}?>" class="form-control border-dark">
 </div>
 </div>
 </div>

<div class="form-group row justify-content-center">
<div class="col-xs-2 px-2">
<?php if(!empty($custom_field_update_button)): ?>

<input type="submit" style="margin-left: 30px; height: 40px; width: 100px;; margin-top: 30px;"  id="Update" name="Update" class="btn font-weight-bold text-center" value="Update">
<?php endif; ?>
</div>
<div class="col-xs-2 px-2">
   <a href="transaction.php" class="btn font-weight-bold float-right text-center" style="margin-top: 30px; margin-left: 20px; height: 40px; width: 100px;" >Back</a>
  </div>
  </div>
</form>
	
</div>
   </table>

<br><br>

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
</body>