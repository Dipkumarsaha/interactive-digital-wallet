<?php

$numberErr = $amountErr = "";
$number= $amount = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["number"])) {
    $numberErr = "Number is required";
  } else {
    $number= test_input($_POST["number"]);

  }
  
  if (empty($_POST["amount"])) {
    $amountErr= "Amount is required";
  } else {
    $amount= test_input($_POST["amount"]);
  }
  
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<html>
<head><title> First Page </title>  </head>
<body>
<fieldset>
 <b><h2><b>Page 1 [Home]</b></h2></b>
 <b><h2><b>Digital wallet</b></h2></b>
 <a   href="Page1.php">1.Home</a>
 <a   href="Page2.php">2.Transaction History</a>
 
 

  <b><h3>Fund Transfer</h3></b>
  <label for="option">Select a Category:<label>
 <select id="option" name="option">
 <option value="0" style ="display:none" selected> select a value</option>
 <option>1.mobile recharge</option>
 <option>2.send money</option>
 <option>3.merchent pay</option>
 </select><br><br>
 
 <form  action="action.php" method="GET" name="mFORM" onsubmit="getdata(this)"; return false;>
<label for="number">To:<label>
    <input type="text" id="number" name="number">
    <span style="color: red;"class="error">* <?php echo $numberErr;?></span>
    <br>
 <label for="amount">Amount:<label>
    <input type="text" id="amount" name="amount">
    <span style="color: red;"class="error">* <?php echo $amountErr;?></span>
    <br>
 
 
 </fieldset>
 <input type="submit" name="submit" value="Submit">
 <script>
  function isvalid() {
        var flag = true;
        var numberErr = document.getElementById("numberErr");
        var amountErr = document.getElementById("amountErr");

    numberErr.innerHTML= "";
    amountErr.innerHTML = "";
    if (number === "") {
            flag = false;
            numberErr.innerHTML ="Number is required";
        }

         if (amount === "") {
            flag = false;
            amountErr.innerHTML ="Amount is required";
        }

    return flag;
}


</script>
 </body>
 </html>
 </label>
 