<?php
include("config.php");
include("header.php");

?>



<!DOCTYPE html>

<body>
<br>

 
   <div class="col-lg-12" style="position:absolute; top:35%;" > 
      <div class="container-fluid">
      <table class="table table-responsive">
	  <div class="form-group row justify-content-center" >
     
	  
     <div class="col-xs-2 px-2 text-align:left">
        <label class="font-weight-bold" for="org_name">User Name</label>
        <input type="text" style="height:45px; width: 220px;" name="org_name" id="org_name"  class="form-control border-dark">
      </div>  
	  
	  <div class="col-xs-2 px-2">
        <label class="font-weight-bold" for="email">Email</label>
        <input type="text" style="height:45px; width: 220px;" class="form-control border-dark"  name="email" id="email">
	  </div>  
	  
	  <div class="col-xs-2 px-2">
		 <button type="submit" style="background-color:#ADD8E6; height: 45px; width: 220px; margin-top: 30px;" name="submit" id="submit"  class="btn font-weight-bold">Send Invite</button>
		</div>
	  
	 </div>
   </div>
 </div>  
 
 <br>
 </body>