<?php  
  include("config.php");
  include("header.php");
?>
<!DOCTYPE html>
<body>
<br><br>
<table class="table">
      
		<form action="" method="GET">
		
	    <div class="form-group row justify-content-center">
		<div class="col-xs-2 px-4"> 
	     <input type="submit" style="margin-top: 30px; height:35px; margin-left: 10px; width: 200px; background-color:#ADD8E6;"  id="insert_api" name="insert_api" class="btn text-center font-weight-bold" value=" Get Insert API">
	</div>

	</div>
	
	
<br>	
<?php if(isset($_GET["insert_api"]) ): ?>


                      <div class="form-group row justify-content-center">
                         
                       <a href="#"><h4>https://iteria-us.in/Integrated_dashboad/api/insert.php</h4></a>
                                   
                      </div>
 

<?php endif; ?>


   </table>
 <table class="table">
      
		
		
	    <div class="form-group row justify-content-center">
	 
	<div class="col-xs-2 px-2"> 
	     <input type="submit" style="margin-top: 30px; height:35px; margin-left: 10px; width: 200px; background-color:#ADD8E6;"  id="retrieve_api" name="retrieve_api" class="btn text-center font-weight-bold" value=" Get Retrieve API">
	</div>
	</div>
<br>	
<?php if(isset($_GET["retrieve_api"]) ): ?>

                                <div class="form-group row justify-content-center">
                                   
                                  <a href="#"><h4>https://iteria-us.in/Integrated_dashboad/api/retrieve.php</h4></a>
                                    
                                </div>


<?php endif; ?>
  
 <div class="row justify-content-center">
   <a href="config_page.php" class="btn font-weight-bold" style=" margin-top: 20px;height:35px; width: 100px; background-color:#ADD8E6;" >Back</a>
   </div>

   </table>
   </form>
</body>