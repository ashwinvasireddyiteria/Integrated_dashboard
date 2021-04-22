<?php
include 'config.php';
session_start();
   
   $user_check = $_SESSION["user_id"];
   
   $ses_sql = mysqli_query($conn,"select * from Integrated_dashboard_users where user_id = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   if(!isset($_SESSION['user_id'])){
      header("location:login.php");
      die();
   }
   
?>
