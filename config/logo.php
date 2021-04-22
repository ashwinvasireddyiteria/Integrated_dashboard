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
$logo_upload_button = search($menu_validation, 'menu_code', 'LOGO_UPDATE');

// Menu and Page code validations ends here //


// If upload button is clicked ... 
  if (isset($_POST['submit'])) { 
       
  
      if(!empty($_FILES["file"]["name"])){
		 
		  
      $filename = basename($_FILES['file']['name']); 
	  $targetFilePath = '../images/new_logo.jpg';
	  $filetype = pathinfo($targetFilePath,PATHINFO_EXTENSION);
      
        
   // Allow certain file formats       
    $allowtypes = array('jpg','png','jpeg');
	if(in_array($filetype, $allowtypes)){
		
   // Upload file to server
   
    if(move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)){
	
		
        // Now let's move the uploaded image into the folder: 
            $msg = "Image uploaded successfully"; 
	}
			if(isset($msg)){
    ?>
	   <div id="box" class="font">
	      <a href="logo.php" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 20px;">Image uploaded successfully</h6>
       </div>
    <?php
       
        }else{ 
            $msg1 = "Failed to upload image, please try again"; 
			}
         if(isset($msg1)){
	?>
	   <div id="box" class="font">
	      <a href="logo.php" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 20px;">Failed to upload image, please try again</h6>
       </div>
    <?php		
     }
	else{
            $msg2 = "Sorry, there was an error uploading your file ";
	 }
	 if(isset($msg2)){
	?>
	   <div id="box" class="font">
	      <a href="logo.php" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 20px;">Sorry, there was an error uploading your file</h6>
       </div>
    <?php
	}
	  }else{
		    $msg3 = "Sorry, only JPG, JPEG, PNG";
	}if(isset($msg3)){
	?>
	   <div id="box" class="font">
	      <a href="logo.php" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 20px;">Sorry, only JPG, JPEG & PNG allowed</h6>
       </div>
    <?php
  }
  }else{
	        $msg4 = "Please select a file to upload";
  }
  if(isset($msg4)){
	?>
	   <div id="box" class="font">
	      <a href="logo.php" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 20px;">Please select a file to upload</h6>
       </div>
    <?php
 } 
}
	  
    
  
?> 


<style>

</style>
<!DOCTYPE html>
<body>
 <form action="" method="POST" enctype = "multipart/form-data">
<br>

<br><br>
<div class="container">
<div class="col-xs-12">
<div class="form-group row justify-content-center">
<div class="col-xs-2 px-2">  
<?php if(!empty($logo_upload_button)): ?>
  <div class="font custom-file font-weight-bold" style="font-size: 18px">
   Select Logo to upload:  
  <input type="file" name="file" id="file" style="height: 38px; width: 250px; margin-left: 10px; margin-right: 20px;" >
  <input type="submit" style="height: 38px; width: 135px;" class="btn font-weight-bold text-center float-right"  value="Upload Logo" id="submit" name="submit">
  <?php endif; ?>
  </div>
  </div>
  </div>
  <div class="form-group row justify-content-center">
  
  <a href="branding.php" class="btn font-weight-bold text-center" style="height: 38px; width: 135px; margin-top: 30px; " role="button" >Back</a>
  
  </div>
</div>
</div>
</form>

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

