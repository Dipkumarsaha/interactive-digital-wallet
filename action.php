<?php
require  'DbConnect.php'; 
require 'DbRead.php';

$number = empty($_GET['number']) ? "" : 
$_GET['number'];
 if(empty($username)) {
$numberList = getAllNumber();
}
else {
$numberList = getNumber($number);
}
if(count($numberList) > 0) {
echo "<table>"; 
echo "<tr>"; 
echo "<th>Id</th>"; 
echo "<th>number</th>"; 
echo "</tr>"; 
for($i = 0; $i < count($numberList); $i++) {
echo "<tr>"; 
echo "<td>" . $numberList[$i]["amount"] ."
</td>"; 
echo "<td>" . $userList[$i]["number"] . "</td>";
}
echo "</table>";
}
?>
