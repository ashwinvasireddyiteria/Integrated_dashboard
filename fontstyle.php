<?php 
session_start();
   
   $font_sql = " SELECT * FROM Integrated_dashboard_branding WHERE id = '1' " ;  
   $font_query = mysqli_query($conn, $font_sql);
   $font_fetch = mysqli_fetch_assoc($font_query);
   $font_style = $font_fetch['font_style'];
   $font_size = $font_fetch['font_size'];
   $button_color = $font_fetch['button_color'];
   $text_color = $font_fetch['text_color'];
?>
<link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Chango&family=Lato:ital,wght@0,400;1,300;1,400&family=Lora:ital,wght@0,400;0,500;1,400;1,500&family=Merriweather:ital,wght@0,300;0,400;1,300;1,400&family=Montserrat:wght@100&family=Mukta:wght@300;400&family=Open+Sans:ital,wght@0,300;1,300&family=Oswald:wght@300;400&family=Poppins:ital,wght@0,400;0,500;1,300;1,400&family=Raleway:ital,wght@0,400;0,500;1,300;1,400&family=Ranchers&family=Recursive:wght@300;400&family=Roboto:ital,wght@0,400;0,500;1,400;1,500&family=Rubik:wght@300&family=Spectral:wght@200&family=Trirong:ital,wght@0,200;0,400;0,500;1,400;1,500&family=Ubuntu:ital,wght@0,300;0,400;0,500;1,300;1,400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Tahoma:wght@400" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Trebuchet+MS" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Calibri" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Verdana:wght@400" rel="stylesheet">


<script>
@import url("https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800");
@import url("https://fonts.googleapis.com/css2?family=Redressed");
@import url("https://fonts.googleapis.com/css2?family=Ubuntu");
@import url("https://fonts.googleapis.com/css2?family=Spectral");
@import url("https://fonts.googleapis.com/css2?family=Montserrat");
@import url("https://fonts.googleapis.com/css2?family=Rubik");
@import url("https://fonts.googleapis.com/css2?family=Tahoma");
@import url("https://fonts.googleapis.com/css2?family=Trebuchet+MS");
@import url("https://fonts.googleapis.com/css2?family=Calibri");
@import url("https://fonts.googleapis.com/css2?family=Trirong");
@import url("https://fonts.googleapis.com/css2?family=Verdana");
@import url("https://fonts.googleapis.com/css2?family=Roboto");
@import url("https://fonts.googleapis.com/css2?family=Poppins");
@import url("https://fonts.googleapis.com/css2?family=Lora");
@import url("https://fonts.googleapis.com/css2?family=Oswald");
@import url("https://fonts.googleapis.com/css2?family=Merriweather");
@import url("https://fonts.googleapis.com/css2?family=Raleway");
@import url("https://fonts.googleapis.com/css2?family=Mukta");
@import url("https://fonts.googleapis.com/css2?family=Recursive");
@import url("https://fonts.googleapis.com/css2?family=Lato");
@import url("https://fonts.googleapis.com/css2?family=Chango");
@import url("https://fonts.googleapis.com/css2?family=Ranchers");
//@import url('https://fonts.googleapis.com/css2?family=Ranchers&display=swap');


</script>

<style type="text/css">

.font {
  font-family: '<?php echo $font_style ?>';
  font-size :  <?php echo $font_size."px" ; ?>; 
 
}
.btn , .btn:hover {
  font-family: '<?php echo $font_style ?>';
  font-size :  <?php echo $font_size."px" ; ?>; 
  background-color: <?php echo $button_color ?> ;
  color: <?php echo $text_color ?> ;
  text-decoration: none;
}
.table{
  font-family: '<?php echo $font_style ?>';
  font-size :  <?php echo $font_size."px" ; ?>; 
}
.div{
  font-family: '<?php echo $font_style ?>';
  font-size :  <?php echo $font_size."px" ; ?>; 
}
.thread{
	background-color: <?php echo $button_color ?> ;
    color: <?php echo $text_color ?> ;
}

</style>

