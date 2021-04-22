<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
include("config.php");

if(isset($_GET['mailer'])){
$email = $_GET['mailer'];
$id_query = mysqli_query($conn,"SELECT * from Integrated_dashboard_users where email = '". $email ."' ");
$id_fetch = mysqli_fetch_assoc($id_query);
$id = $id_fetch['user_id'];
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.office365.com';
$mail->Port       = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth   = true;
$mail->Username = 'idea@iteria.us';
$mail->Password = 'tskfsvrnggdhmlvw';
$mail->SetFrom('idea@iteria.us', 'idea');
$mail->addAddress($email, $email);
//$mail->SMTPDebug  = 3;
//$mail->Debugoutput = function($str, $level) {echo "debug level $level; message: $str";}; //$mail->Debugoutput = 'echo';
$mail->IsHTML(true);

$mail->Subject = 'Password reset link from idea';
$mail->Body    = '<p><b>Please click the link below to reset your password </b></p>
				https://iteria-us.in/Integrated_dashboard/set_password.php?id='.$id;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    ?>
	   <div id="box" class="font">
	      <a href='login.php' onclick="pop()" class="close"><i style="solid" class="fa fa-window-close"></i></a>
          <h6 class="justify-content-center" style="margin-top: 20px;">Password reset mail sent</h6>
       </div>
    <?php
}
}
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
#box{
	width: 300px;
	height: 100px;
	overflow: hidden;
	background: #f1f1f1;
	box-shadow: 0 0 20px black;
	border-radius: 8px;
	position: absolute;
	top: 23%;
	left: 50%;
	transform: translate(-50%, -50%);
	z-index: 9999;
	padding: 10px;
	text-align: center;
}

#box h6{
	color: #FF0000;
}

.close{
	color: white;
	padding: 10px
	cursor: pointer;
	background: #3498db;
	display: inline-block;
}

</style>


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

