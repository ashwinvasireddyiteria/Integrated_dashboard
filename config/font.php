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
$font_apply_button = search($menu_validation, 'menu_code', 'FONT_APPLY');

// Menu and Page code validations ends here //

// If upload button is clicked ... 
  if (isset($_POST['submit'])) { 
 
   $font_style = $_POST['font_style'];
   $font_size  = $_POST['size'];

   if(!empty($font_style)&&!empty($font_size)){
	   
		
	   $update_font = " UPDATE Integrated_dashboard_branding SET font_size = '" .$font_size. "' , font_style = '" .$font_style. "'  "; 
	   $font_query1 = mysqli_query($conn,$update_font);
	   $fetch_font_row1 = mysqli_fetch_assoc($font_query1);
	   $success = " Font Style and Size Applied Successfully ";
	   }if(isset($success)){
	?>
	   <div id="box" class="font">
	   <a href='font.php' onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
       <h6 style="margin-top: 20px;">Font Style and Size Applied Successfully</h6>
       </div>
		<?php
       }
		else{
			$display_error =" Connection error";
		}
		if(isset($display_error)){
	?>
	   <div id="box" class="font">
	      <a href="font.php" onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 style="margin-top: 20px;">Connection error</h6>
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

<div class="row">
<div class="col-lg-12">

<div class="container-fluid ">
   
       <table class="table">
      
       <div class="form-group row justify-content-center">
	    
	<div class="col-xs-2 px-4" style="width:150px;">
           <label class="font font-weight-bold" style="font-size: 17px;" for="font_style">Font Style </label><br>
		   <select id="font_style" name="font_style" style="height: 35px; width:140px;" class="form-control border-dark">        		   
		   <option style="font-family: Calibri" value = "Calibri"<?php echo(isset($font_style)&& $font_style=="Calibri")? "selected='selected'" : ""; ?>> Calibri</option>
		   <option style="font-family: Trirong" value = "Trirong"<?php echo(isset($font_style)&& $font_style=="Trirong")? "selected='selected'" : ""; ?>>Trirong</option>
		   <option style="font-family: Open Sans" value = "Open Sans"<?php echo(isset($font_style)&& $font_style=="Open Sans")? "selected='selected'" : ""; ?>>Open Sans</option>
		   <option style="font-family: Lato" value = "Lato"<?php echo(isset($font_style)&& $font_style=="Lato")? "selected='selected'" : ""; ?>>Lato</option>
		   <option style="font-family: Recursive" value = "Recursive"<?php echo(isset($font_style)&& $font_style=="Recursive")? "selected='selected'" : ""; ?>>Recursive</option>
		   <option style="font-family: Mukta" value = "Mukta"<?php echo(isset($font_style)&& $font_style=="Mukta")? "selected='selected'" : ""; ?>>Mukta</option>
		   <option style="font-family: Raleway;" value = "Raleway"<?php echo(isset($font_style)&& $font_style=="Raleway")? "selected='selected'" : ""; ?>>Raleway</option>
		   <option style="font-family: Oswald;" value = "Oswald"<?php echo(isset($font_style)&& $font_style=="Oswald")? "selected='selected'" : ""; ?>>Oswald</option>
		   <option style="font-family: Lora;" value = "Lora"<?php echo(isset($font_style)&& $font_style=="Lora")? "selected='selected'" : ""; ?>>Lora</option>
		   <option style="font-family: Poppins;" value = "Poppins"<?php echo(isset($font_style)&& $font_style=="Poppins")? "selected='selected'" : ""; ?>>Poppins</option>
		   <option style="font-family: Redressed ;" value = "Redressed"<?php echo(isset($font_style)&& $font_style=="Redressed")? "selected='selected'" : ""; ?>>Redressed</option> 
		   <option style="font-family: Roboto;" value = "Roboto"<?php echo(isset($font_style)&& $font_style=="Roboto")? "selected='selected'" : ""; ?>>Roboto</option>
		   <option style="font-family: Rubik;" value = "Rubik"<?php echo(isset($font_style)&& $font_style=="Rubik")? "selected='selected'" : ""; ?>>Rubik</option>
		   <option style="font-family: Tahoma;" value = "Tahoma"<?php echo(isset($font_style)&& $font_style=="Tahoma")? "selected='selected'" : ""; ?>>Tahoma</option>
		   <option style="font-family: Trebuchet MS;" value = "Trebuchet MS"<?php echo(isset($font_style)&& $font_style=="Trebuchet MS")? "selected='selected'" : ""; ?>>Trebuchet MS</option>
		   <option style="font-family: Ubuntu;" value = "Ubuntu"<?php echo(isset($font_style)&& $font_style=="Ubuntu")? "selected='selected'" : ""; ?>>Ubuntu</option>
		   <option style="font-family: Verdana;" value = "Verdana"<?php echo(isset($font_style)&& $font_style=="Verdana")? "selected='selected'" : ""; ?>>Verdana</option>              
	    </select>
      </div>

      <div class="col-xs-2 px-4" style="width:150px;">
           <label class="font font-weight-bold" style="font-size: 17px;" for="size"> Font Size</label><br>
		   <select id="size" name="size" style="height: 35px; width:140px;" class="form-control border-dark">		   
		   <option value = "16"<?php echo(isset($font_size) && $font_size=="16")? "selected='selected'" : ""; ?>>16</option> 
		   <option value = "17"<?php echo(isset($font_size)&& $font_size=="17")? "selected='selected'" : ""; ?>>17</option>
           <option value = "18"<?php echo(isset($font_size)&& $font_size=="18")? "selected='selected'" : ""; ?>> 18</option>
           <option value = "19"<?php echo(isset($font_size)&& $font_size=="19")? "selected='selected'" : ""; ?>> 19</option>          		   
           
	    </select>
      </div>
	  
	  <div class="col-xs-2 px-4" style="width:150px;">
	   <?php if(!empty($font_apply_button)): ?>
	       <input type="submit" style="width: 140px; margin-top: 31px;" class="font btn font-weight-bold text-center"  value="Apply" id="submit" name="submit">
	   <?php endif; ?>
	  </div>
	  
	  <div class="col-xs-2 px-4" style="width:150px;">
	       <a href="branding.php" class="font btn font-weight-bold text-center" style="width: 140px; margin-top: 31px;" role="button">Back</a>
      </div>

</div>

</form>
<script  type="text/javascript">
$(document).ready(function(){
    $("select.font_style").change(function(){
        var selectedFont = $(this).children("option:selected").val();
        
    });
});

$(document).ready(function(){
    $("select.size").change(function(){
        var selectedSize = $(this).children("option:selected").val();
        
    });
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