<?php 
 
$conn = new mysqli("localhost", "dip", "123", "digital-wallet");
if ($conn->connect_errno){
	die("Database connection failed ..." . $conn->connect_error);
}
return $conn;
?>