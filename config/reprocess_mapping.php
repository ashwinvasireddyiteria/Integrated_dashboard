<?php  
  include("config.php");
  include("header.php");
  session_start();
  $transaction_type= $_GET['transaction_type'];
 IF(isset($_GET['search'])){
	$transaction_type= $_GET['transaction_type'];
	$interface_details = mysqli_query($conn,"select * from salesorder_dashboard_reprocess where transaction_type = '". $transaction_type ."'");
	$fetch_interface_details = mysqli_fetch_assoc($interface_details); 
	$link = $fetch_interface_details['link'];
	$interface_username = $fetch_interface_details['username'];
	$interface_password = $fetch_interface_details['password'];
 }
 IF(isset($_GET['update'])){
	 $_GET['search']= '1';
	 $link = $_GET['link'];
	$interface_username = $_GET['interface_username'];
	$interface_password = $_GET['interface_password'];
	 $transaction_type= $_GET['transaction_type'];
	 $update_interface_details = "update salesorder_dashboard_reprocess set 
									link = '".$link."',
									username = '".$interface_username."',
									password = '".$interface_password."'
									where transaction_type = '".$transaction_type."'";
	$update_query = mysqli_query($conn,$update_interface_details);
	 
 }

?>

<!DOCTYPE html>
<body>
<br>
<table class="table">
      
		<form action="" method="GET">
		
	    <div class="form-group row justify-content-center">
		<div class="col-xs-2" style="width:150px; margin-left:10px;">
	 <label class="font-weight-bold" for="transaction_type">Transaction</label>	
	 <select id="transaction_type" name="transaction_type" style="height:35px;  width: 140px;" class="form-control border-dark" >
	 

                                            
                                            <?php
                                            $sql = "SELECT distinct transaction_type FROM Integrated_dashboard order by id asc";
                                            $result = mysqli_query($conn, $sql);

                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    ?>
 <option <?php echo (isset($transaction_type) && $transaction_type == $row["transaction_type"]) ? "selected='selected'" : ""; ?>  value="<?php echo $row["transaction_type"]; ?>"><?php echo $row["transaction_type"]; ?></option>


                                                    <?php
													
                                                }
                                              } else {
                                                echo "0 results";
                                            }
                                            ?>

                                        </select>
										
	</div>
	
  
	 
	<div class="col-xs-2 px-2"> 
	     <input type="submit" style="margin-top: 30px; height:35px; margin-left: 10px; width: 100px; background-color:#ADD8E6;"  id="search" name="search" class="btn text-center font-weight-bold" value="Search">
	</div>
  
   <div>
   <a href="config_page.php" class="btn font-weight-bold" style=" margin-top: 30px; margin-left: 20px;  height:35px; width: 100px; background-color:#ADD8E6;" >Back</a>
   </div>

  
 </div>

   </table>
<?php if(isset($_GET["search"]) ): ?>

<div class="form-group row justify-content-center">
<div class="col-sm-6">
                                <div class="row">
                                    <div id="meg" class="col-25">
                                        <label for="link"><sup style="color:red;">*</sup> Reprocess Integration link</label>
                                    </div>
                                    <div class="col-75">
                                        <textarea rows="4" cols="100" maxlength="4000" id="link" value = "<?php if(isset($link)){echo $link;}?>" name="link" cols="50"><?php if(isset($link)){echo $link;}?></textarea>
                                    </div>
                                </div>

</div>
</div>
<div class="form-group row justify-content-center">
<div class="col-xs-2 px-2" style="margin-right: 435px;">
	<label for="interface_username">Interface username</label>
  <input type="text" name="interface_username" id="interface_username" style="height: 37px; width: 250px;" value="<?php if(isset($interface_username)){echo $interface_username;}?>" class="form-control border-dark">
 </div> 
 </div>
 <div class="form-group row justify-content-center">
 <div class="col-xs-2 px-2" style="margin-right: 435px;">
	<label for="interface_password">Interface password</label>
  <input type="text" name="interface_password" id="interface_password" style="height: 37px; width: 250px;" value="<?php if(isset($interface_password)){echo $interface_password;}?>" class="form-control border-dark">
 </div> 
 </div>
 <div class="form-group row justify-content-center">
 <div class="col-xs-2 px-2"> 
	     <input type="submit" style="margin-top: 30px; height:35px; margin-left: 10px; width: 100px; background-color:#ADD8E6;"  id="update" name="update" class="btn text-center font-weight-bold" value="Update">
	</div>
</div>

 <?php endif; ?>	
 </form>
<br> <br>
</body>