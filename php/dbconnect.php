<?php
//error_reporting(0);
ob_start();
session_start();
$siteName = "Cipet.in";

//DEFINE("BASE_URL","http://cipetbhopal.com/");
DEFINE("BASE_URL","http://localhost/rainbow/");

DEFINE ('DB_HOST', 'localhost'); 
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PSWD', ''); 
DEFINE ('DB_NAME', 'paysystem_db'); 

date_default_timezone_set('Asia/Calcutta'); 
$conn = mysqli_connect("localhost", "root", "", "paysystem_db");
// if($conn->connect_error);
// die("Failed to connect database ".$conn->connect_error );

?>