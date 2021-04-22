<?php 
include("fontstyle.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Integrated Dashboard </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="expires" content="Sun, 01 Jan 2014 00:00:00 GMT"/>
    <meta http-equiv="pragma" content="no-cache" />	

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="apple-touch-icon" href="https://iteria-us.in/salesorder/images/IteriaLogo.png">
    <link rel="shortcut icon" href="https://iteria-us.in/salesorder/images/IteriaLogo.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <!--<link rel="stylesheet" href="assets/css/style.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
 
<?php
if (isset($_GET["user_id"])) {

?>
 <?php
	}
	?>
  
    <style>

    .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   text-align: center;
   }
   
  .navbar-brand {
  transform: translateX(-50%);
  left: 50%;
  position: absolute;
  top: 0;
  text-align: center;
  margin: auto;
    
  }
 
  .body { 
       margin:0; padding:0; overflow-x:hidden; }
    .container{ width:50%; }	

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
</head> 
<body>
<nav class="navbar navbar-expand-sm" style="background-color: #F5FFFA;">
<div class="row">
  <div class="container-fluid">
   <a class="navbar-header" href="./"><img>
    <img src="images/new_logo.jpg" alt="Logo" style="width:140px;">
   </a>
 
		 <div class="page-header">
                            
                <a class="navbar-brand" href="index.php"><img src="images/idea_logo.png" alt="Logo" style="max-width: 180px;"></a>
                            
         </div>
</div>
</div>   		 
</nav>
   
   
   <footer class="site-footer"> 
            <div class="footer-inner fixed-bottom bg-white">
                <div class="row">
                    <div class="col-sm-4">
                        <b>Copyright &copy; 2020 iteria.us</b>
                    </div>
                   <div class="col-sm-7 text-right">
                        <img src="images/IteriaLogo.png" alt="Logo" style="max-width: 100px; margin-right:-80px;margin-top: -15px">
                    </div>
                </div>
            </div>
   </footer> 
  
  
</body>
</html>