<?php 

include("config.php");
session_start(); 

$page_code = $_POST["page_code"];
if(!empty($page_code)){ 
    // Fetch menu code data based on the specific page_code 
    $query = "SELECT menu_code FROM Integrated_dashboard_permission_setup WHERE page_code = '". $page_code ."'  "; 
    $result = mysqli_query($conn, $query);
     
    // Generate HTML of menu code options list 
    if (mysqli_num_rows($result) > 0){
        echo '<option value=""> </option>'; 
        while ($row = mysqli_fetch_assoc($result)) {  
            echo '<option value="'.$row['menu_code'].'">'.$row['menu_code'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">menu_code not available</option>'; 
    } 
    } 



?>