function getAllNumber() {
$conn = connect(); 
$sql = $conn->prepare("SELECT number FROM digital-wallet"); 
$sql->execute(); 
$res = $sql->get_result(); 
return $res->fetch_all(MYSQLI_ASSOC);
}
function getNumber($username) {
$conn = connect(); 
$sql = $conn->prepare("SELECT number FROM digital-wallet WHERE username = ?"); 
$sql->bind param("s", $number); 
$sql->execute(); 
$res = $sql->get_result(); 
return $res->fetch_all(MYSQLI ASSOC);
}