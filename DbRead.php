<?php 

require 'DbConnect.php';

function login($number, $amount) {
$conn = connect();
$sql = $conn->prepare("SELECT * FROM WALLET Where number = ? and amount = ?");
$sql->bind_param("ss", $username, $password);
$sql->execute();
$res = $sql->get_result();

return $res->num_rows === 1;
 }


?> 