<?php  
  include("config.php");
  
  include("header.php");
 session_start();
 $transaction_type1 = $_GET['transaction_type1'];
  
  if(isset($_GET['update1'])){
 $from_date  = $_GET['from_date'];
 $transaction_type1 = $_GET['transaction_type1'];
 $clickbutton = "1";
  }
  $transaction_type2 = $_GET['transaction_type2'];
  if(isset($_GET['update2'])){
 $transaction_type2 = $_GET['transaction_type2'];
 
  }
   $query = "SELECT status, count(*) as number FROM Integrated_dashboard where transaction_type = '". $transaction_type1 ."'  group by status order by number desc";  
 $result = mysqli_query($conn, $query);
   $query2 = "SELECT status, count(*) as number FROM Integrated_dashboard where transaction_type = '". $transaction_type2 ."' group by status order by number desc";  
 $result2 = mysqli_query($conn, $query2);
 
 $priority_high =mysqli_query($conn,"SELECT * from Integrated_dashboard_error_priority where priority ='High' and transaction_type = '". $transaction_type1 ."' ");
while($priority_high_fetch = mysqli_fetch_assoc($priority_high)){
	$error_msg1= $priority_high_fetch["error_type1"];
	$error_msg2= $priority_high_fetch["error_type2"];
	$error_msg3= $priority_high_fetch["error_type3"];
	$error_msg4= $priority_high_fetch["error_type4"];
	$error_msg5= $priority_high_fetch["error_type5"]; 
	$high_error = " select  sum(CASE WHEN ".$error_msg1." !='' THEN 1  
									 WHEN ".$error_msg2." !='' THEN 1 
									 WHEN ".$error_msg3." !='' THEN 1
									 WHEN ".$error_msg4." !='' THEN 1
									 WHEN ".$error_msg5." !='' THEN 1	ELSE 0 END) AS count 
					FROM Integrated_dashboard where transaction_type = '".$transaction_type1."'";
	$high_error_query = mysqli_query($conn,$high_error);
	$high_error_fetch1 = mysqli_fetch_assoc($high_error_query);
} 
$priority_medium =mysqli_query($conn,"SELECT * from Integrated_dashboard_error_priority where priority ='Medium' and transaction_type = '". $transaction_type1 ."' ");
while($priority_medium_fetch = mysqli_fetch_assoc($priority_medium)){
	$error_msg6= $priority_medium_fetch["error_type1"];
	$error_msg7= $priority_medium_fetch["error_type2"];
	$error_msg8= $priority_medium_fetch["error_type3"];
	$error_msg9= $priority_medium_fetch["error_type4"];
	$error_msg10= $priority_medium_fetch["error_type5"];
	$error_msg11= $priority_medium_fetch["error_type6"];
	$error_msg12= $priority_medium_fetch["error_type7"]; 
	$error_msg13= $priority_medium_fetch["error_type8"]; 
	$error_msg14= $priority_medium_fetch["error_type9"];
	$error_msg15= $priority_medium_fetch["error_type10"]; 
	
	$medium_error = " select  sum(CASE WHEN ".$error_msg6." !='' THEN 1  
									   WHEN ".$error_msg7." !='' THEN 1 
									   WHEN ".$error_msg8." !='' THEN 1
									   WHEN ".$error_msg9." !='' THEN 1  
									   WHEN ".$error_msg10." !='' THEN 1 
									   WHEN ".$error_msg11." !='' THEN 1
									   WHEN ".$error_msg12." !='' THEN 1  
									   WHEN ".$error_msg13." !='' THEN 1 
									   WHEN ".$error_msg14." !='' THEN 1
									   WHEN ".$error_msg15." !='' THEN 1  ELSE 0 END) AS count 
					FROM Integrated_dashboard where transaction_type = '".$transaction_type1."'";
	$medium_error_query = mysqli_query($conn,$medium_error);
	$medium_error_fetch1 = mysqli_fetch_assoc($medium_error_query);
} 

$priority_low =mysqli_query($conn,"SELECT * from Integrated_dashboard_error_priority where priority ='Low' and transaction_type = '". $transaction_type1 ."' ");
while($priority_low_fetch = mysqli_fetch_assoc($priority_low)){
	$error_msg1= $priority_low_fetch["error_type1"];
	$error_msg2= $priority_low_fetch["error_type2"];
	$error_msg3= $priority_low_fetch["error_type3"];
	$error_msg4= $priority_low_fetch["error_type4"];
	$error_msg5= $priority_low_fetch["error_type5"]; 
	$low_error = " select  sum(CASE WHEN ".$error_msg1." !='' THEN 1  
									 WHEN ".$error_msg2." !='' THEN 1 
									 WHEN ".$error_msg3." !='' THEN 1
									 WHEN ".$error_msg4." !='' THEN 1
									 WHEN ".$error_msg5." !='' THEN 1	ELSE 0 END) AS count 
					FROM Integrated_dashboard where transaction_type = '".$transaction_type1."'";
	$low_error_query = mysqli_query($conn,$low_error);
	$low_error_fetch1 = mysqli_fetch_assoc($low_error_query);
} 

$priority_high =mysqli_query($conn,"SELECT * from Integrated_dashboard_error_priority where priority ='High' and transaction_type = '". $transaction_type2 ."' ");
while($priority_high_fetch = mysqli_fetch_assoc($priority_high)){
	$error_msg1= $priority_high_fetch["error_type1"];
	$error_msg2= $priority_high_fetch["error_type2"];
	$error_msg3= $priority_high_fetch["error_type3"];
	$error_msg4= $priority_high_fetch["error_type4"];
	$error_msg5= $priority_high_fetch["error_type5"]; 
	$high_error = " select  sum(CASE WHEN ".$error_msg1." !='' THEN 1  
									 WHEN ".$error_msg2." !='' THEN 1 
									 WHEN ".$error_msg3." !='' THEN 1
									 WHEN ".$error_msg4." !='' THEN 1
									 WHEN ".$error_msg5." !='' THEN 1	ELSE 0 END) AS count 
					FROM Integrated_dashboard where transaction_type = '".$transaction_type2."'";
	$high_error_query = mysqli_query($conn,$high_error);
	$high_error_fetch2 = mysqli_fetch_assoc($high_error_query);
} 
$priority_medium =mysqli_query($conn,"SELECT * from Integrated_dashboard_error_priority where priority ='Medium' and transaction_type = '". $transaction_type2 ."' ");
while($priority_medium_fetch = mysqli_fetch_assoc($priority_medium)){
	$error_msg6= $priority_medium_fetch["error_type1"];
	$error_msg7= $priority_medium_fetch["error_type2"];
	$error_msg8= $priority_medium_fetch["error_type3"];
	$error_msg9= $priority_medium_fetch["error_type4"];
	$error_msg10= $priority_medium_fetch["error_type5"];
	$error_msg11= $priority_medium_fetch["error_type6"];
	$error_msg12= $priority_medium_fetch["error_type7"]; 
	$error_msg13= $priority_medium_fetch["error_type8"]; 
	$error_msg14= $priority_medium_fetch["error_type9"];
	$error_msg15= $priority_medium_fetch["error_type10"]; 
	
	$medium_error = " select  sum(CASE WHEN ".$error_msg6." !='' THEN 1  
									   WHEN ".$error_msg7." !='' THEN 1 
									   WHEN ".$error_msg8." !='' THEN 1
									   WHEN ".$error_msg9." !='' THEN 1  
									   WHEN ".$error_msg10." !='' THEN 1 
									   WHEN ".$error_msg11." !='' THEN 1
									   WHEN ".$error_msg12." !='' THEN 1  
									   WHEN ".$error_msg13." !='' THEN 1 
									   WHEN ".$error_msg14." !='' THEN 1
									   WHEN ".$error_msg15." !='' THEN 1  ELSE 0 END) AS count 
					FROM Integrated_dashboard where transaction_type = '".$transaction_type2."'";
	$medium_error_query = mysqli_query($conn,$medium_error);
	$medium_error_fetch2 = mysqli_fetch_assoc($medium_error_query);
} 

$priority_low =mysqli_query($conn,"SELECT * from Integrated_dashboard_error_priority where priority ='Low' and transaction_type = '". $transaction_type2 ."' ");
while($priority_low_fetch = mysqli_fetch_assoc($priority_low)){
	$error_msg1= $priority_low_fetch["error_type1"];
	$error_msg2= $priority_low_fetch["error_type2"];
	$error_msg3= $priority_low_fetch["error_type3"];
	$error_msg4= $priority_low_fetch["error_type4"];
	$error_msg5= $priority_low_fetch["error_type5"]; 
	$low_error = " select  sum(CASE WHEN ".$error_msg1." !='' THEN 1  
									 WHEN ".$error_msg2." !='' THEN 1 
									 WHEN ".$error_msg3." !='' THEN 1
									 WHEN ".$error_msg4." !='' THEN 1
									 WHEN ".$error_msg5." !='' THEN 1	ELSE 0 END) AS count 
					FROM Integrated_dashboard where transaction_type = '".$transaction_type2."'";
	$low_error_query = mysqli_query($conn,$low_error);
	$low_error_fetch2 = mysqli_fetch_assoc($low_error_query);
} 

 ?>   
 <style>
 p.a { 
  word-spacing: 40px;
}

 p.b { 
  word-spacing: 40px;
}

 p.c { 
  word-spacing: 40px;
}
 
 </style>

 
 <!DOCTYPE html>  
 <html>  
      
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
           <br />
		<div class="container-fluid"> 
        <div class="row">
		
		<div class="col-lg-6"> 
		<form action="" method="GET">
		
	    <div class="form-group row">
		<div class="col-xs-2" style="width:150px; margin-left:100px;">
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
	
    <div class="col-xs-2 px-4">
           <label class="font-weight-bold" for="from_date">From Date</label>
           <input class="form-control border-dark" style="height:35px;  width: 170px;margin-left:15px;" name="from_date" id="from_date" type="date" value="<?php if (isset($from_date)) {echo $from_date;} ?>">
     </div>
	 
	<div class="col-xs-2 px-4"> 
	     <input type="submit" style="margin-top: 30px; height:35px;margin-left: 6px;  width: 100px; background-color:#ADD8E6;"  id="update1" name="update1" class="btn text-center font-weight-bold" value="Update">
	</div>
  
 
	</div>
	
		
    <div class="form-group row">
      <div id="piechart" class="col-xs-2" style="width:430px; height: 330px; margin-left: 10px;"> 
	  </div>
	<div class="col-xs-2">
	<div class="card border-dark" style="width:10rem; margin-left: 10px; margin-top: 80px;">
      <div class="card-header text-center font-weight-bold" >
    Error Summary
      </div>
  <ul class="list-group list-group-flush">
    <p class = "a font-weight-bold text-danger" style="margin-left:10px;"><?php  echo $high_error_fetch1["count"] ?><a class="a" href="">   High  </a> </p>
	<p class = "b font-weight-bold text-warning" style="margin-left:10px;"><?php  echo $medium_error_fetch1["count"] ?><a href="">  Medium  </a> </p>
	<p class = "c font-weight-bold text-primary" style="margin-left:10px;"><?php  echo $low_error_fetch1["count"] ?> <a href="">  Low  </a>  </p>
  </ul>
</div>   
</div>	 
</div>	
	<div class=" form-group row">
	
      <div class="col-xs-2">
	  <a href="main.php?transaction_type=<?php echo $transaction_type1;?>" class="btn font-weight-bold" style="margin-left:260px; background-color:#ADD8E6;" role="button">Details</a>
      </div>
	</div>
	
	
	  
  
 </div>
 
  
  <div class="col-lg-6">
  <form action="" method="GET">
	    <div class="form-group row">
		<div class="col-xs-2 px-2" style="width:150px; margin-left: 100px; ">
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
	
	
    <div class="col-xs-2 px-4">
           <label class="font-weight-bold " for="from_date">From Date</label>
           <input class="form-control border-dark" style="height:35px;  width: 170px;margin-left:20px;" name="from_date" id="from_date" type="date" value="<?php if (isset($from_date)) {echo $from_date;} ?>">
     </div>
	 
	<div class="col-xs-2 px-4"> 
	       <input type="submit" style="margin-top: 30px; height:35px;margin-left:16px;  width: 100px; background-color:#ADD8E6;"  id="update2" name="update2" class="btn text-center font-weight-bold" value="Update">
	</div>
  
 
	</div>
	
	<div class="form-group row">
      <div id="piechart2" class="col-xs-2" style="width:430px; height: 330px; margin-left: 40px"> 
	  </div>
	<div class="col-xs-2">
	<div class="card border-dark" style="width:10rem; margin-right: 10px; margin-top: 80px;">
      <div class="card-header text-center font-weight-bold" >
    Error Summary
      </div>
  <ul class="list-group list-group-flush" >
    <p class = "a font-weight-bold text-danger" style="margin-left:10px;"><?php  echo $high_error_fetch2["count"] ?><a href="">   High   </a> </p>
	<p class = "b font-weight-bold text-warning" style="margin-left:10px;"><?php  echo $medium_error_fetch2["count"] ?><a href="">   Medium  </a>  </p>
	<p class = "c font-weight-bold text-primary" style="margin-left:10px;"><?php  echo $low_error_fetch2["count"] ?><a href="">   Low     </a>  </p>
  </ul>
</div>
</div>	 
</div> 
	
	<div class=" form-group row">
      <div class="col-xs-2">
	  <a href="main.php?transaction_type=<?php echo $transaction_type2;?>" class="btn font-weight-bold" style=" margin-left: 310px; background-color:#ADD8E6;" role="button">Details</a>
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