<?php

$conn = mysqli_connect("localhost","root","");

if(!$conn){
    die("connection error");
}
$account_no =$_POST[`account_no`];
$bank_name=$_POST[`bank_name`];
$amount=$_POST[`amount`];

$sql = "SELECT * FROM `transfer`.`transfer` (`account_no`, `bank_name`, `amount`) VALUES ('$account_no', '$bank_name', '$amount');";

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>Transfer Money</h1>
    <form action="" method="post">
        <p>Sender Details</p>
        <br>
        <label for="account_number">account no.: </label>
        <input type="number" id="num" placeholder="enter the account number" required>
        <br>
        <label for="bank">Bank Name: </label>
        <input type="text" id="bank" placeholder="enter the bank name" required>
        <br>
        <label for="amount">Amount: </label>
        <input type="number" id="amount" placeholder="enter the amount" required>
        <br>
        <button class="btn" onclick="show()">Send</button>
    </form>
    </div>
    <script src="script.js"></script>
    <!-- INSERT INTO `transfer` (`account_no`, `bank_name`, `amount`) VALUES ('2112345678', 'Punjab National Bank', '40');  -->
</body>
</html>