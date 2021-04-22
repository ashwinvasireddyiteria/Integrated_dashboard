<?php

  include('config.php');
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
$create_usersave_button = search($menu_validation, 'menu_code', 'CREATE_USER_SAVE');
$create_usercancel_button = search($menu_validation, 'menu_code', 'CREATE_USER_CANCEL'); 
// Menu and Page code validations ends here //

// Processing form data when form is submitted //
if(isset($_POST['submit'])) {
    
    $emailerror = '';
    $emailid = $_POST['email'];
	
    $sql1 = "SELECT * FROM Integrated_dashboard_users WHERE email ='$emailid' ";
    $result1 = mysqli_query($conn, $sql1);

    if (mysqli_num_rows($result1) > 0) {
        $emailerror = "User Already Exist";
		
    } else {
       
        // Define variables
		$email = $_POST['email'];
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
		$mname = $_POST['middle_name'];
        $phone = $_POST['phone'];
        $uname = $_POST['email'];
		
        $jobtitle = $_POST['job_title'];
		
		
       $sql = "INSERT INTO Integrated_dashboard_users (user_name,first_name, last_name, middle_name,email,job_title,contact_number1, status, creation_date) 
                      VALUES ('$uname','$fname','$lname','$mname','$email','$jobtitle','$phone', 'Active' , CURDATE())";

       $result= mysqli_query($conn, $sql);
		If($result){
			$mailer = "mailer";
		}
		if(isset($mailer)){
	echo "<script type='text/javascript'>
	window.location.href='createuser_mailer.php?mailer=$email';
	</script>";
       }
		else {
			$display_error1 =" Connection error";
		}
		if(isset($display_error1)){
	?>
	   <div id="box" class="font">
	      <a href='create_user.php' onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 20px;">Connection error</h6>
       </div>
    <?php
    }
	}
}	
?>
<html lang="en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
    
	/* Set a style for the submit/register button */
  .btn {
            
            border: none;
            
            }
  .hide{
	  display: none;
      } 
	
   body {   
       margin:0; padding:0; }
    .container{ width:50%; }	
	
	
</style>
</head>
<body>
<?php  ?>
 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype = "multipart/form-data">

<br>
<div class="col-sm col-md col-lg">
           <div class="page-header text-center">
                <div class="font page-title">
                      <h4> Create New User</h4>
                </div>
            </div>
</div>

<br>
 
 <div class="container-fluid"> 
      	<div class="col-lg-12"> 
		<table class="table">
		
    <div class="form-group row justify-content-center">
	   	    	
		<div class="col-xs-4 px-4">
		<label for="email" class="font" style="width: 250px;height: auto;"><b>Email<span style="color: #f44336">*</span></b></label>    
		<input type="text" class="font form-control border-dark" placeholder="Enter Email" name="email" id="email" onkeyup="populateUsername();" >
		<span class="error_form" id="email_error_message" style="color: #f44336"></span>
		<span class="help-block" style="color: #f44336"><?php echo $emailerror; ?></span>
        </div>
			
		<div class="col-xs-4 px-4">
		</div>
		<div class="col-xs-4 px-4">
		</div>	
		<div class="col-xs-4 px-4">
		</div>	
		<div class="col-xs-4 px-4">
		</div>	
		<div class="col-xs-4 px-4">
		</div>
		<div class="col-xs-4 px-4">
		</div>
			
		<div class="col-xs-4 px-4">
		<label for="job_title" class="font" style="width: 250px;height: auto;"><b>Job Title</b></label>    
		<input type="text" class="font form-control border-dark" placeholder="Enter Job Title" name="job_title" id="job_title">
		</div>				
	</div>	
	
	<div class="form-group row justify-content-center">
	  		
		<div class="col-xs-2 px-4">
		<label for="first_name" class="font" style="width: 250px;height: auto;"><b>First Name<span style="color: #f44336">*</span></b></label>   
		<input type="text" class="font form-control border-dark" placeholder="Enter First Name" name="first_name" id="first_name">
		<span class="error_form" id="fname_error_message" style="color: #f44336"></span>
		</div>
				
		<div class="col-xs-4 px-4">
		</div>			
		<div class="col-xs-4 px-4">
		</div>		
		<div class="col-xs-4 px-4">
		</div>		
		<div class="col-xs-4 px-4">
		</div>		
		<div class="col-xs-4 px-4">
		</div>		
		<div class="col-xs-4 px-4">
		</div>
				
		<div class="col-xs-2 px-4">
		<label for="middle_name" class="font" style="width: 250px;height: auto;"><b>Middle Name</b></label>    
		<input type="text" class="font form-control border-dark" placeholder="Enter Middle Name" name="middle_name" id="middle_name">
		</div>	
		
	</div>	
	
	<div class="form-group row justify-content-center">
	   			
		<div class="col-xs-2 px-4">
		<label for="last_name" class="font" style="width: 250px;height: auto"><b>Last Name<span style="color: #f44336">*</span></b></label>    
		<input type="text" class="font form-control border-dark" placeholder="Enter Last Name" name="last_name" id="last_name">
		<span class="error_form" id="lname_error_message" style="color: #f44336"></span>
		</div>		
			
		<div class="col-xs-4 px-4">
		</div>		
		<div class="col-xs-4 px-4">
		</div>		
		<div class="col-xs-4 px-4">
		</div>			
		<div class="col-xs-4 px-4">
		</div>	
		<div class="col-xs-4 px-4">
		</div>
		<div class="col-xs-4 px-4">
		</div>
				
		<div class="col-xs-2 px-4">
		<label for="phone" class="font" style="width: 250px;height: auto;"><b>Phone Number</b></label>    
		<input type="text" class="font form-control border-dark" placeholder="Enter Phone Number" onkeypress="return isNumber(event)" pattern="[0-9]{10}"  maxlength="10"  name="phone" id="phone">
		</div>	
		<span class="error_form" id="phone_error_message" style="color: #f44336"></span>
		
	</div>

    <div class="form-group row justify-content-center">
	   	    	
		<div class="col-xs-2 px-4" style="margin-right: 10px;">
		<label for="email" class="font" style="width: 250px;height: auto;"><b>Username<span style="color: #f44336">*</span></b></label>    
		<input type="text" class="font form-control border-dark" readonly placeholder="Enter Email" id="uemail" name="uemail" >
		</div>
				
		<div class="col-xs-4 px-4">
		</div>
		<div class="col-xs-4 px-4">
		</div>
		<div class="col-xs-4 px-4">
		</div>	
		<div class="col-xs-4 px-4">
		</div>		
		<div class="col-xs-4 px-4">
		</div>		
		<div class="col-xs-4 px-4">
		</div>
		<div class="col-xs-4 px-4">
		</div>		
		<div class="col-xs-4 px-4">
		</div>
		<div class="col-xs-4 px-4">
		</div>
		<div class="col-xs-4 px-4">
		</div>		
		<div class="col-xs-4 px-4">
		</div>
		<div class="col-xs-4 px-4">
		</div>
			
		
		
	</div>	
	
	<br>
	<div class="form-group row justify-content-center">
	     <div class="col-xs-2 px-2">		 
         <?php if(!empty($create_usercancel_button)): ?>
		 <a href="admin_user.php" class="btn font-weight-bold text-center" style="width: 135px;"  name="cancel" id="cancel" role="button"><b> Cancel</b></a>
		 <?php endif; ?>
		 </div>
		
		 
		 <div class="col-xs-2 px-2">
		 <?php if(!empty($create_usersave_button)): ?>
		 <button type="submit" style="width: 135px; margin-left: 40px;" name="submit" id="submit" href="#" class="btn font-weight-bold text-center" onclick="return validate()"><b> Save </b></button>
		 <?php endif; ?>
		 </div>
		 
	</div>	

</table>
</div>
</div>	
</form>
<br>
</html>
</body>

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.slimscroll.js"></script>
<script type="text/javascript" src="js/select2.min.js"></script>
<script type="text/javascript" src="js/moment.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css" type="text/css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.js"></script>
<script type="text/javascript">


    
    function validateEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }
   
    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if(charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
		else {
        return true;
		}
    }
    function populateUsername() {
        document.getElementById('uemail').value = document.getElementById('email').value;
    }

	function validatePhone(str){
		var re = /^[0-9]{10}$/;
		return re.test(str);
	}
   

	
   function validate() {
        var email=$('#email').val();
        var fname=$("#first_name").val();
        var lname=$('#last_name').val();
		var mname=$("#middle_name").val();
		var uname=$("#uemail").val();
        var phone=$('#phone').val();
		
		$("#fname_error_message").hide();	
	    $("#lname_error_message").hide();
	    $("#email_error_message").hide();
	    $("#user_email_error_message").hide();
	    $("#password_error_message").hide();
	    $("#phone_error_message").hide();
	
	    var error_fname = false;	
	    var error_lname = false;
	    var error_email = false;
	    var error_username = false;
	    var error_password = false;
	    var error_phone = false;
        
        if(email===""||email==null)
        {
            $("#email_error_message").html("Enter Email");
		    $("#email_error_message").show();
		    $("#email").css("border-bottom", "2px solid #f44336");
            error_email = true;
            return false;
		}else if(!validateEmail(email))
        {
			$("#email_error_message").html("Email Format ***@example.com");
		    $("#email_error_message").show();
		    $("#email").css("border-bottom", "2px solid #f44336");
            error_email = true;
            return false;
        }else if(fname===""||fname==null)
        {
            $("#fname_error_message").html("Enter First name");
			$("#fname_error_message").show();
		    $("#first_name").css("border-bottom", "2px solid #f44336");
            error_fname = true;
            return false;
        }else if(lname===""||lname==null)
        {
            $("#lname_error_message").html("Enter Last name");
			$("#lname_error_message").show();
		    $("#last_name").css("border-bottom", "2px solid #f44336");
            error_lname = true;
            return false;
        }
		else{
            return true;
        }
    }			

    function mobileChange() {
        var mobile = $("#phone").val();
        if(mobile.length>=10 && mobile.length<12)
        {
            $.ajax({
                url: "/application/mobilecheck",
                type: "POST",
                dataType: "json",
                data: {mobile: mobile},
                async:      true,
                success: function (data,status) {
                    debugger
                    if(data['result']!==1){
                    }else
                    {
                        $("#phone").val("");
                        alert("number already registered..!");
                        $("#phone").focus();
                    }
                },
                error: function (data) {

                }
            });
        }else
        {
            alert('invalid phone number')
            $('#phone').val("");
            $('#phone').focus();
        }
    }

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
	
	
		
		
