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
FROM Integrated_dashboard_user_roles su, Integrated_dashboard_roles sr , Integrated_dashboard_role_permissions sp 
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
$piechart_update_button = search($menu_validation, 'menu_code', 'PIECHART_UPDATE'); 
$piechart_details_button = search($menu_validation, 'menu_code', 'PIECHART_DETAILS'); 
// Menu and Page code validations ends here //
 
  
 $transaction_type1 = $_GET['transaction_type1'];
 $from_date1  = $_GET['from_date1'];
 $duration1  = $_GET['duration1'];   
   
  if(isset($_GET['update1'])){
 $from_date1  = $_GET['from_date1'];
 $duration1  = $_GET['duration1'];
 $transaction_type1 = $_GET['transaction_type1'];
 $clickbutton = "1";
  }
  
   $transaction_type2 = $_GET['transaction_type2'];
   $from_date2  = $_GET['from_date2'];
   $duration2  = $_GET['duration2'];   
  
  if(isset($_GET['update2'])){
 $transaction_type2 = $_GET['transaction_type2'];
 $from_date2  = $_GET['from_date2'];
 $duration2  = $_GET['duration2'];
  }
  
   $query = "SELECT status, count(*) as number FROM Integrated_dashboard where transaction_type = '". $transaction_type1 ."' ";
  If(empty($from_date1)){
   $from_date1 = date('Y-m-d');
   $query .= " and transaction_date BETWEEN date_sub('".$from_date1."',interval 60 day) AND '".$from_date1."'   group by status order by number desc";  }  
  If(!empty($from_date1)){
   $query .= " and transaction_date BETWEEN date_sub('".$from_date1."',interval ".$duration1." day) AND '".$from_date1."'   ";  }
   $query .= " group by status order by number desc";
   $result = mysqli_query($conn, $query);
 
 
   
   $query2 = "SELECT status, count(*) as number FROM Integrated_dashboard where transaction_type = '". $transaction_type2 ."' ";
  If(empty($from_date2)){
   $from_date2 = date('Y-m-d');
   $query2 .= " and transaction_date BETWEEN date_sub('".$from_date2."',interval 60 day) AND '".$from_date2."'   group by status order by number desc";  }  
  If(!empty($from_date2)){
   $query2 .= " and transaction_date BETWEEN date_sub('".$from_date2."',interval ".$duration2." day) AND '".$from_date2."'   group by status order by number desc";  }
   $result2 = mysqli_query($conn, $query2);
   
 
// High Error priority count for left side //  
  $priority_high_query = "SELECT error_priority, count(*) as number FROM Integrated_dashboard 
              WHERE transaction_type = '". $transaction_type1 ."'
                and error_priority = 'High' and transaction_date BETWEEN date_sub('".$from_date1."',interval '".$duration1."' day) AND '".$from_date1."' "; 
   $priority_high_result = mysqli_query($conn, $priority_high_query);
   $priority_high_fetch = mysqli_fetch_assoc($priority_high_result);
// End of High Error priority count for left side // 

// Medium Error priority count for left side //  
  $priority_medium_query = "SELECT error_priority, count(*) as number FROM Integrated_dashboard 
              WHERE transaction_type = '". $transaction_type1 ."'
                and error_priority = 'Medium' and transaction_date BETWEEN date_sub('".$from_date1."',interval '".$duration1."' day) AND '".$from_date1."' ";
  
   $priority_medium_result = mysqli_query($conn, $priority_medium_query);
   $priority_medium_fetch = mysqli_fetch_assoc($priority_medium_result);

// End of Medium Error priority count for left side //

// Low Error priority count for left side //  
  $priority_low_query = "SELECT error_priority, count(*) as number FROM Integrated_dashboard 
              WHERE transaction_type = '". $transaction_type1 ."'
                and error_priority = 'Low' ";
  If(empty($from_date1)){
   $from_date1 = date('Y-m-d');
   $priority_low_query .= " and transaction_date BETWEEN date_sub('".$from_date1."',interval 60 day) AND '".$from_date1."'   ";  }  
  If(!empty($from_date1)){
   $priority_low_query .= " and transaction_date BETWEEN date_sub('".$from_date1."',interval ".$duration1." day) AND '".$from_date1."'   ";  }
   $priority_low_result = mysqli_query($conn, $priority_low_query);
   $priority_low_fetch = mysqli_fetch_assoc($priority_low_result);
 
// End of Low Error priority count for left side //

// High Error priority count for right side //
  $priority_high_query2 = "SELECT error_priority, count(*) as number FROM Integrated_dashboard 
              WHERE transaction_type = '". $transaction_type2 ."'
                and error_priority = 'High' ";
  If(empty($from_date2)){
   $from_date2 = date('Y-m-d');
   $priority_high_query2 .= " and transaction_date BETWEEN date_sub('".$from_date2."',interval 60 day) AND '".$from_date2."'   ";  }  
  If(!empty($from_date2)){
   $priority_high_query2 .= " and transaction_date BETWEEN date_sub('".$from_date2."',interval ".$duration2." day) AND '".$from_date2."'   ";  }
   $priority_high_result2 = mysqli_query($conn, $priority_high_query2);
   $priority_high_fetch2 = mysqli_fetch_assoc($priority_high_result2);
 
 // End of High Error priority count for right side //
 
 // Medium Error priority count for right side //
  $priority_medium_query2 = "SELECT error_priority, count(*) as number FROM Integrated_dashboard 
              WHERE transaction_type = '". $transaction_type2 ."'
                and error_priority = 'Medium' ";
  If(empty($from_date2)){
   $from_date2 = date('Y-m-d');
   $priority_medium_query2 .= " and transaction_date BETWEEN date_sub('".$from_date2."',interval 60 day) AND '".$from_date2."'   ";  }  
  If(!empty($from_date2)){
   $priority_medium_query2 .= " and transaction_date BETWEEN date_sub('".$from_date2."',interval ".$duration2." day) AND '".$from_date2."'   ";  }
   $priority_medium_result2 = mysqli_query($conn, $priority_medium_query2);
   $priority_medium_fetch2 = mysqli_fetch_assoc($priority_medium_result2);

 // End of Medium Error priority count for right side //
 
 // Low Error priority count for right side //
  $priority_low_query2 = "SELECT error_priority, count(*) as number FROM Integrated_dashboard 
              WHERE transaction_type = '". $transaction_type2 ."'
                and error_priority = 'Low' ";
  If(empty($from_date2)){
   $from_date2 = date('Y-m-d');
   $priority_low_query2 .= " and transaction_date BETWEEN date_sub('".$from_date2."',interval 60 day) AND '".$from_date2."'   ";  }  
  If(!empty($from_date2)){
   $priority_low_query2 .= " and transaction_date BETWEEN date_sub('".$from_date2."',interval ".$duration2." day) AND '".$from_date2."'   ";  }
   $priority_low_result2 = mysqli_query($conn, $priority_low_query2);
   $priority_low_fetch2 = mysqli_fetch_assoc($priority_low_result2);
 // End of Low Error priority count for right side //
 
 

 ?>   
 
 <style>
html {
    zoom: 1.0;
    -moz-transform: scale(1.0);
    -webkit-transform: scale(1.0);
    transform: scale(1.0);
}
 p.a { 
  word-spacing: 40px;
}

 p.b { 
  word-spacing: 40px;
}

 p.c { 
  word-spacing: 40px;
}

.space-left1{
   padding-left:3px;
}

.space-left2{
   padding-left:13px;
}

 </style>

 
 <!DOCTYPE html>  
 <html>  
      <head>
	   <meta name="viewport" content="width=device-width, initial-scale=0.9, maximum-scale=0.9, user-scalable=no" />
      </head>	   
	   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Status', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["status"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                     
                     // is3D:true,
					pieHole: 0.4
                       
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
		   
		  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Status', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result2))  
                          {  
                               echo "['".$row["status"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                     
                      //is3D:true,
					pieHole: 0.4
                       
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart2'));  
                chart.draw(data, options);  
           }  
           </script>  
      
      <body>  
           <br>
		  
		<div class="container-fluid"> 
        <div class="row">
		
		<div class="col-lg-6"> 
		<form action="" method="GET">
		
	    <div class="font form-group row justify-content-center">
		<div class="font col-xs-2" style="width:150px; margin-left: 10px;">
	 <label class="font-weight-bold" for="transaction_type1">Transaction</label>	
	 <select id="transaction_type1" name="transaction_type1" style="height:35px;  width: 140px;" class="form-control border-dark" >
	 

                                            
                                            <?php
                                            $sql1 = "SELECT distinct transaction_type FROM Integrated_dashboard order by id asc";
                                            $result1 = mysqli_query($conn, $sql1);

                                            if (mysqli_num_rows($result1) > 0) {
                                                // output data of each row
                                                while ($row = mysqli_fetch_assoc($result1)) {
                                                    ?>


 <option <?php echo (isset($transaction_type1) && $transaction_type1 == $row["transaction_type"]) ? "selected='selected'" : ""; ?>  value="<?php echo $row["transaction_type"]; ?>"><?php echo $row["transaction_type"]; ?></option>


                                                    <?php
													
                                                }
                                              } else {
                                                echo "0 results";
                                            }
                                            ?>

                                        </select>
										
	</div>
	
    <div class="col-xs-2 px-2">
           <label class="font-weight-bold" for="from_date1"><span class="space-left1">From Date</label>
           <input class="form-control border-dark" style="height:35px;  width: 170px;" name="from_date1" id="from_date1" type="date" value="<?php if (isset($from_date1)) {echo $from_date1;} ?>">
     </div>
	 
     
	<div class="col-xs-2 px-2" style="width:150px;">
           <label class="font-weight-bold" for="duration1"> Duration</label><br>
		   <select id="duration1" name="duration1" style="height: 35px; width:140px;" class="form-control border-dark">
		   <option value = "30"<?php echo(isset($duration1) && $duration1=="30")? "selected='selected'" : ""; ?>>Last 30 Days</option> 
		   <option value = "45"<?php echo(isset($duration1) && $duration1=="45")? "selected='selected'" : ""; ?>>Last 45 Days</option>
           <option value = "91"<?php echo(isset($duration1) && $duration1=="91")? "selected='selected'" : ""; ?>>Last 3 Months</option>
           <option value = "183"<?php echo(isset($duration1) && $duration1=="183")? "selected='selected'" : ""; ?>>Last 6 Months</option>
           <option value = "274"<?php echo(isset($duration1) && $duration1=="274")? "selected='selected'" : ""; ?>>Last 9 Months</option>
           <option value = "365"<?php echo(isset($duration1) && $duration1=="365")? "selected='selected'" : ""; ?>>Last 1 Year</option>	 
           
	    </select>
      </div>
	 
	<div class="col-xs-2 px-2"> 
	  <?php if(!empty($piechart_update_button)): ?>
	     <input type="submit" style="margin-top: 32px; height: 35px; margin-left: 10px; width: 100px; "  id="update1" name="update1" class="btn text-center font-weight-bold" value="Update">
	  <?php endif; ?>
	</div>
  
 </div>
	
		
    <div class="form-group row justify-content-center">
      <div id="piechart" class="col-xs-2" style="width:430px; height: 330px; margin-left: 10px; "> 
	</div>
	  
	<div class="font col-xs-2">
	<div class="card border-dark" style="width:10rem;margin-left: 10px; margin-top: 80px;">
      <div class="card-header text-center font-weight-bold" >
    Error Summary
      </div>
  <ul class="list-group list-group-flush" id="error_priority" name="error_priority">
    <p class = "a font-weight-bold text-danger"  style="margin-left:10px;"><?php  echo $priority_high_fetch["number"] ?>
	<a class="text-danger" href="main.php?transaction_type=<?php echo $transaction_type1;?>& error_priority=<?php echo 'High' ;?>& from_date1=<?php echo $from_date1;?>& duration1=<?php echo $duration1 ;?>& status=<?php echo 'Errored';?>">   High  </a></p>
	<p class = "b font-weight-bold text-warning" style="margin-left:10px;"><?php  echo $priority_medium_fetch["number"] ?>
	<a class="text-warning" href="main.php?transaction_type=<?php echo $transaction_type1;?>& error_priority=<?php echo 'Medium' ;?>& from_date1=<?php echo $from_date1;?>& duration1=<?php echo $duration1 ;?>& status=<?php echo 'Errored';?>">   Medium  </a></p>
	<p class = "c font-weight-bold text-primary" style="margin-left:10px;"><?php  echo $priority_low_fetch["number"] ?> 
	<a class="text-primary" href="main.php?transaction_type=<?php echo $transaction_type1;?>& error_priority=<?php echo 'Low' ;?>& from_date1=<?php echo $from_date1;?>& duration1=<?php echo $duration1 ;?>& status=<?php echo 'Errored';?>">   Low  </a></p>
  </ul>
</div>   
</div>	 
</div>	

	<div class="form-group row justify-content-around">
	   <div class="col-xs-2">
	   <?php if(!empty($piechart_details_button)): ?>
	    <a href="main.php?transaction_type=<?php echo $transaction_type1;?>& from_date1=<?php echo $from_date1;?>& duration1=<?php echo $duration1 ;?>" class="btn font-weight-bold text-center" style="height: 35px; width: 100px;" role="button">Details</a>
	  <?php endif; ?>
      </div>
	</div>
	
</div>

 
 
 <div class="col-lg-6">
  <form action="" method="GET">
	    <div class="font form-group row justify-content-center">
		<div class="col-xs-2 px-2" style="width:150px;  ">
		<label class="font-weight-bold" for="transaction_type2">Transaction</label>
	 <select id="transaction_type2" name="transaction_type2" style="height:35px;  width: 140px; " class="form-control border-dark" >
     
                                            
                                            <?php
                                            $sql2 = "SELECT distinct transaction_type FROM Integrated_dashboard order by id desc";
                                            $result3 = mysqli_query($conn, $sql2);

                                            if (mysqli_num_rows($result3) > 0) {
                                                // output data of each row
                                                while ($row = mysqli_fetch_assoc($result3)) {
                                                    ?>


 <option <?php echo (isset($transaction_type2) && $transaction_type2 == $row["transaction_type"]) ? "selected='selected'" : ""; ?>  value="<?php echo $row["transaction_type"]; ?>"><?php echo $row["transaction_type"]; ?></option>


                                                    <?php
													
                                                }
                                              } else {
                                                echo "0 results";
                                            }
                                            ?>

                                        </select>
										
	</div>
	
	
    <div class="col-xs-2 px-2">
           <label class="font-weight-bold " for="from_date2"><span class="space-left2">From Date</label>
           <input class="form-control border-dark" style="height:35px;  width: 170px;margin-left:10px;" name="from_date2" id="from_date2" type="date" value="<?php if (isset($from_date2)) {echo $from_date2;} ?>">
     </div>
	 
	 <div class="col-xs-2 px-2" style="width:150px;">
           <label class="font-weight-bold" for="duration2"> Duration</label><br>
		   <select id="duration2" name="duration2" style="height: 35px; width:140px;" class="form-control border-dark">
		   <option value = "30"<?php echo(isset($duration2) && $duration2=="30")? "selected='selected'" : ""; ?>>Last 30 Days</option> 
		   <option value = "45"<?php echo(isset($duration2) && $duration2=="45")? "selected='selected'" : ""; ?>>Last 45 Days</option>
           <option value = "91"<?php echo(isset($duration2) && $duration2=="91")? "selected='selected'" : ""; ?>>Last 3 Months</option>
           <option value = "183"<?php echo(isset($duration2) && $duration2=="183")? "selected='selected'" : ""; ?>>Last 6 Months</option>
           <option value = "274"<?php echo(isset($duration2) && $duration2=="274")? "selected='selected'" : ""; ?>>Last 9 Months</option>
           <option value = "365"<?php echo(isset($duration2) && $duration2=="365")? "selected='selected'" : ""; ?>>Last 1 Year</option>	 	
      
	    </select>
      </div>
	  
	<div class="col-xs-2 px-2">
         <?php if(!empty($piechart_update_button)): ?>	
		<input type="submit" style="margin-top:32px; height: 35px; margin-left: 16px;  width: 100px;"  id="update2" name="update2" class="btn text-center font-weight-bold" value="Update">
		 <?php endif; ?>  
	</div>
  
 </div>
	
	<div class="form-group row justify-content-center">
      <div id="piechart2" class="col-xs-2" style="width:430px; height: 330px; margin-left: 10px"> 
	  </div>
	  
	<div class="font col-xs-2">
	<div class="card border-dark" style="width:10rem; margin-right: 10px; margin-top: 80px;">
      <div class="card-header text-center font-weight-bold" >
         Error Summary
      </div>
  <ul class="list-group list-group-flush" >
    <p class = "a font-weight-bold text-danger" style="margin-left:10px;"><?php  echo $priority_high_fetch2["number"] ?>
	<a class="text-danger" href="main.php?transaction_type=<?php echo $transaction_type2;?>& error_priority=<?php echo 'High' ;?>& from_date1=<?php echo $from_date2;?>& duration1=<?php echo $duration2 ;?>& status=<?php echo 'Errored';?>">   High   </a></p>
	<p class = "b font-weight-bold text-warning" style="margin-left:10px;"><?php  echo $priority_medium_fetch2["number"] ?>
	<a class="text-warning" href="main.php?transaction_type=<?php echo $transaction_type2;?>& error_priority=<?php echo 'Medium' ;?>& from_date1=<?php echo $from_date2;?>& duration1=<?php echo $duration2 ;?>& status=<?php echo 'Errored';?>">   Medium  </a></p>
	<p class = "c font-weight-bold text-primary" style="margin-left:10px;"><?php  echo $priority_low_fetch2["number"] ?>
	<a class="text-primary" href="main.php?transaction_type=<?php echo $transaction_type2;?>& error_priority=<?php echo 'Low' ;?>& from_date1=<?php echo $from_date2;?>& duration1=<?php echo $duration2 ;?>& status=<?php echo 'Errored';?>">   Low  </a></p>
  </ul>
</div>
</div>	 
</div> 
	
	<div class=" form-group row justify-content-around">
      <div class="col-xs-2 ">
	 <?php if(!empty($piechart_details_button)): ?>	 
	  <a href="main.php?transaction_type=<?php echo $transaction_type2;?>& from_date1=<?php echo $from_date2;?>& duration1=<?php echo $duration2 ;?>" class="btn font-weight-bold text-center" style="height: 35px; width: 100px;" role="button">Details</a>
	 <?php endif; ?>
      </div>
	</div>
    
  
  </div>
  </div>
  </div>
  </div>
 
<?php if(empty($clickbutton)): ?>	 
 <script type="text/javascript">
document.getElementById("update1").click();
 </script>
 <?php endif; ?>


  <br>
 </body>  
 </html>  
