<?php 
$servername = "localhost";
$database = "Iteria";
$username = "root";
$password = "Iteria2020!";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}
else{
	mysqli_set_charset($conn,'utf8');
}
?>