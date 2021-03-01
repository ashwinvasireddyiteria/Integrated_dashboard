<?php

  include('config.php');
  include("header.php");

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $emailerror = '';
    $emailid = $_POST['email'];

    $sql1 = "SELECT * FROM salesorder_dashboard_users WHERE email ='$emailid' ";
    $result1 = mysqli_query($conn, $sql1);

    if (mysqli_num_rows($result1) > 0) {
        $emailerror = "email already exists";
    } else {
       
        // Define variables
		$email = $_POST['email'];
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
		$mname = $_POST['middle_name'];
        $phone = $_POST['phone'];
        $uname = $_POST['email'];
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $jobtitle = $_POST['job_title'];
		
		
       $sql = "INSERT INTO salesorder_dashboard_users (user_name,first_name, last_name, middle_name,email,password,job_title,contact_number1) 
                      VALUES ('$uname','$fname','$lname','$mname','$email','$password','$jobtitle','$phone')";

       $result= mysqli_query($conn, $sql);
		If($result){
			$Success = "Successfully Inserted";
		}
		if(isset($Success)){
	echo "<script type='text/javascript'>
	window.alert('$Success');
	window.location.href='admin1.php';
	</script>";
       }
		else {
			$display_error1 =" Connection error";
		}
		if(isset($display_error1)){
	echo "<script type='text/javascript'>
	window.alert('$display_error1');
	</script>";
    }
	}
}	
?>
<html lang="en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
    
	/* Set a style for the submit/register button */
  .registerbtn {
            
            border: none;
            
            }
  .hide{
	  display: none;
      } 
	
   body {   
       margin:0; padding:0; overflow-y:hidden; }
    .container{ width:50%; }	
	
	
</style>
</head>
<body>
<?php  ?>
 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype = "multipart/form-data">

<br>
<div class="col-sm col-md col-lg">
           <div class="page-header text-center">
                <div class="page-title">
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
		<label for="email"  style="width: 250px;height: auto;"><b>Email<span style="color: #f44336">*</span></b></label>    
		<input type="text" class="form-control border-dark" placeholder="Enter email" name="email" id="email">
		<span class="help-block"><?php echo $emailerror; ?></span>
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
		<label for="email" style="width: 250px;height: auto;"><b>Job Title</b></label>    
		<input type="text" class="form-control border-dark" placeholder="Enter job_title" name="job_title" id="job_title">
		</div>				
	</div>	
	
	<div class="form-group row justify-content-center">
	  		
		<div class="col-xs-2 px-4">
		<label for="email" style="width: 250px;height: auto;"><b>First Name<span style="color: #f44336">*</span></b></label>   
		<input type="text" class="form-control border-dark" placeholder="Enter first_name" name="first_name" id="first_name">
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
		<label for="email" style="width: 250px;height: auto;"><b>Middle Name</b></label>    
		<input type="text" class="form-control border-dark" placeholder="Enter middle_name" name="middle_name" id="middle_name">
		</div>	
		
	</div>	
	
	<div class="form-group row justify-content-center">
	   			
		<div class="col-xs-2 px-4">
		<label for="email" style="width: 250px;height: auto"><b>Last Name<span style="color: #f44336">*</span></b></label>    
		<input type="text" class="form-control border-dark" placeholder="Enter last_name" name="last_name" id="last_name">
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
		<label for="email" style="width: 250px;height: auto;"><b>Phone Number</b></label>    
		<input type="text" class="form-control border-dark" placeholder="Enter phone_number" onkeypress="return isNumber(event)" pattern="[0-9]*" name="phone" id="phone">
		</div>	
		
	</div>

    <div class="form-group row justify-content-center">
	   	    	
		<div class="col-xs-2 px-4">
		<label for="email" style="width: 250px;height: auto;"><b>Username<span style="color: #f44336">*</span></b></label>    
		<input type="text" class="form-control border-dark" placeholder="Enter email" id="email" value="<?php echo $_POST['email']; ?>">
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
		<label for="password" style="width: 250px;height: auto"><b>Password<span style="color: #f44336">*</span></b></label>   
		<input type="password" class="form-control border-dark" placeholder="Enter password" name="password" id="password">
		</div>
		
	</div>	
	
	<br>
	<div class="form-group row justify-content-center">
	     <div class="col-xs-2 px-2">
		 <a href="admin1.php" class="btn btn-lg font-weight-bold" style="background-color:#ADD8E6;"  name="cancel" id="cancel" role="button"><i class="fa fa-times"><b> Cancel</b></i></a>
		 </div>
		
		 
		 <div class="col-xs-2 px-2">
		 <button type="submit" style="background-color:#ADD8E6;margin-left: 40px;" name="create" id="create" href="#" class="registerbtn btn-lg font-weight-bold" onclick="return validate()"><i class="fa fa-save"><b> Save </b></i></button>
		</div>
		 
	</div>	

</table>
</div>
</div>	
</form>
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
    function checkPassword(str)
    {
        var re = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
        return re.test(str);
    }
    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if(charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }
	
	
    function validate() {
        var email=$('#email').val();
        var fname=$("#first_name").val();
        var lname=$('#last_name').val();
		var mname=$("#middle_name").val();
		var uname=$("#email").val();
        var password=$('#password').val();
        var phone=$('#phone').val();
        
        if(email===""||email==null)
        {
            alert('enter Email');
            return false;
		}else if(!validateEmail(email))
        {
            alert('invalid Email');
            return false;
        }else if(fname===""||fname==null)
        {
            alert('enter first_name.');
            return false;
        }else if(lname===""||lname==null)
        {
            alert('enter Last_name.');
            return false;
        }else if(password==null)
        {
            alert('enter password');
            return false;
        }else if(!checkPassword(password))
        {
            alert('password must contain at-least 1 uppercase,1 lowercase,1 special character and minimum length of 8 characters');
            return false;
        }else{
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

    function emailChange() {
        var mail = $("#email").val().toLocaleLowerCase();
        if((mail!=null||mail!==undefined)&&validateEmail(mail)) {
            if (mail.endsWith('iteria.us')) {
                $.ajax({
                    url: "/application/mailcheck",
                    type: "POST",
                    dataType: "json",
                    data: {mail: mail},
                    success: function (data) {

                        if (data['result'] !== 1) {

                        } else {
                            $("#email").val("");
                            alert("email already registered..!");
                            $("#email").focus();
                        }
                    },
                    error: function (data) {

                    }
                });
            } else {
                $('#email').val("");
                $('#email').focus();
                alert('Email is not valid')
            }
        }
    }

				
</script>
	
	
		
		