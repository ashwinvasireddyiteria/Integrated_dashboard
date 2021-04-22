<?php
include('session.php');
include('fontstyle.php');

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
     <link href="sticky-footer.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
 <?php
if (isset($_GET["user_id"])) {

?>
  <?php
	}
	?>
    <style>
    .navbar { 
            background-color: #F5FFFA; 
        } 
		
		html{
			position: relative;
			min-height: 100%;
		}
		
	 body { 
       min-height: 100%;  
       margin:0; padding:0; overflow-x:hidden; }
    .container{ width:auto; }	
	
   
  .footer {
   position: absolute;
   left: 0px;
   bottom: 0;
   width: 100%;
   }


    .table {
	border-width : thick;
	border-color : #A6A6A6;
	}
	
	hr.solid {
    border-top: 1px solid #999;
    }

	.h:hover{
		color: #e65c00 !important;
	}
	
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
  <nav class="navbar navbar-expand-lg">
       <div class="container-fluid">
          <div class="navbar-header">
          <a class="navbar-brand" href="index.php"><img src="images/new_logo.jpg" alt="Logo" style="max-width: 140px;"></a>
          </div>
		  
		  <div class="page-header float-center">
                            <div class="page-title">
                                <a class="navbar-brand" href="index.php"><img src="images/idea_logo.png" alt="Logo" style="max-width: 180px;"></a>
                            </div>
                        </div>
     
   <ul class="nav navbar-nav navbar-right">

      <li class="font dropdown" style="margin-right: 50px;">
         <a class="h dropdown-toggle font-weight-bold" style="color: #000080;" data-toggle="dropdown" href="#"><b> My Profile </b><span class="caret"></span></a>
           <ul class=" font dropdown-menu text-center" style="width: 10% ">
              <li style="font-size: 16px"><a href="profile.php">Profile</a></li>
			  <div class="dropdown-divider"></div>
              <li style="font-size: 16px"><a href="admin.php">Admin</a></li>
			  <div class="dropdown-divider"></div>
			  <li style="font-size: 16px"><a href="logout.php">Logout</a></li>
            </ul>
       </li>
   </ul>
   </div>
   </nav>

 
   <footer class="footer"> 
                <div class="row">
				 <div class="col-xs-2 px-2">
				 </div>
                    <div class="col-sm-4">
                        <b>Copyright &copy; 2020 iteria.us</b>
                    </div>
                    <div class="col-sm-7 text-right">
                        <img src="images/IteriaLogo.png" alt="Logo" style="max-width: 100px; margin-right:-80px;margin-top: -15px">
                    </div>
					
            </div>
        </footer> 
  


     <!-- Scripts -->
     <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    
 </body>
</html>
