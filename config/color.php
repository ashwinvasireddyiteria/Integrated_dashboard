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
$color_apply_button = search($menu_validation, 'menu_code', 'COLOR_APPLY');

// Menu and Page code validations ends here //

// If upload button is clicked ... 
  if (isset($_POST['submit'])) { 
       
   $color = $_POST['hex'];
   $color1 = $_POST['hex1'];

   if(!empty($color) && !empty($color1)){

	   $update_color = " UPDATE Integrated_dashboard_branding SET button_color = '" .$color. "', 
                         text_color = '" .$color1. "'	   "; 
	   $color_query = mysqli_query($conn,$update_color);
	   $fetch_color_row = mysqli_fetch_assoc($color_query);
	   $success = " Color Applied Successfully ";
	   }if(isset($success)){
	?>
	   <div id="box" class="font">
	      <a href="color.php" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 20px;">Color Applied Successfully</h6>
       </div>
    <?php
       }
	   else if(empty($color) && !empty($color1)){
	   $update_color1 = " UPDATE Integrated_dashboard_branding SET text_color = '" .$color1. "' "; 
	   $color_query1 = mysqli_query($conn,$update_color1);
	   $fetch_color_row1 = mysqli_fetch_assoc($color_query1);
	   $success1 = " Text Color Applied Successfully ";
	   }
	   if(isset($success1)){
	?>
	   <div id="box" class="font">
	      <a href="color.php" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 20px;">Text Color Applied Successfully </h6>
       </div>
    <?php
	
       }
	   else if(!empty($color) && empty($color1)){
	   $update_color2 = " UPDATE Integrated_dashboard_branding SET  button_color = '" .$color. "' "; 
	   $color_query2 = mysqli_query($conn,$update_color2);
	   $fetch_color_row2 = mysqli_fetch_assoc($color_query2);
	   $success2 = " Button Color Applied Successfully ";
	   }if(isset($success2)){
	?>
	   <div id="box" class="font">
	      <a href="color.php" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 20px;">Button Color Applied Successfully </h6>
       </div>
    <?php
       }if(empty($color) && empty($color1)){
			$display_error =" Connection error";
		}
		if(isset($display_error)){
	?>
	   <div id="box" class="font">
	      <a href="color.php" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 20px;">Connection error</h6>
       </div>
    <?php
    }
	
  }
  $query = "SELECT * FROM Integrated_dashboard_branding WHERE id= '1' ";
  $result1 = mysqli_query($conn, $query);	
?>
<!DOCTYPE html>

<body>
 <form action="" method="POST" enctype = "multipart/form-data">
<br><br>

<div class="row">
<div class="col-lg-12">
    <?php  while($row = mysqli_fetch_assoc($result1)){
		?>
<div class="container-fluid ">
   
       <table class="table">
      
       <div class="form-group row justify-content-center">
	   <div class="col-xs-2 px-4" style="margin-top: 31px; ">
	       <label class="font font-weight-bold" style="font-size: 16px;" for="font_style">Select button color</label><br>
	       <input type="color" id="color" style="margin-right: 10px;">	
		   <input type="text" id="hex" name="hex" style="height: 35px;" value="<?php echo $row["button_color"];?>">
	   
       </div>
	   
	   <div class="form-group row justify-content-center">
	   <div class="col-xs-2 px-4" style="margin-top: 31px; ">
	       <label class="font font-weight-bold" style="font-size: 16px;" for="font_style">Select text color</label><br>
	       <input type="color" id="color1" style="margin-right: 10px;">		
		   <input type="text" id="hex1" name="hex1" style="height: 35px;" value="<?php echo $row["text_color"];?>">
	   
       </div>
	
	  
	  <div class="col-xs-2 px-4" style="width:150px;">
	  <?php if(!empty($color_apply_button)): ?>
	       <input type="submit" style="width: 140px; margin-top: 63px;" class="btn font-weight-bold text-center"  value="Apply" id="submit" name="submit">
		   <?php endif; ?>
	  </div>
	  
	  <div class="col-xs-2 px-4" style="width:150px;">
	       <a href="branding.php" class="btn font-weight-bold text-center" style="width: 140px; margin-top: 63px; " role="button" >Back</a>
      </div>
	<?php
	}
	?>
</div>
</form>
<script>

let colorInput = document.querySelector('#color');
let hexInput = document.querySelector('#hex');

colorInput.addEventListener('input',()=>{
	let color = colorInput.value;
	hexInput.value = color;
});

let colorInput1 = document.querySelector('#color1');
let hexInput1 = document.querySelector('#hex1');

colorInput1.addEventListener('input',()=>{
	let color1 = colorInput1.value;
	hexInput1.value = color1;
});

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
