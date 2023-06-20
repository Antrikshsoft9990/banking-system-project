<?php
try{
$conn = mysqli_connect("localhost","root","","customer");

if(!$conn){
    die("connection error");
}

$query="select * from customer";
$result=mysqli_query($conn,$query);
}
catch(Exceptin $e){
    echo "Error";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view customer details</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<style>
  .customer{
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
th {
  border: 1px solid black;
  background-color:green;
  padding: 8px;
}
td{
    border:2px solid black;
    padding:8px;
}

</style>
<body>
<h1>customer details</h1>
    <table class="customer">
        <tr>
            <th>sno.</th>
            <th>Name</th>
            <th>account no.</th>
            <th>email</th>
            <th>balance</th>
        </tr>
        <tr>
            <?php
            while($row=mysqli_fetch_assoc($result)){
           ?>  
           <td><?php echo $row['sno']; ?></td>
           <td><?php echo $row['name']; ?></td>
           <td><?php echo $row['account_no']; ?></td>
           <td><?php echo $row['email']; ?></td>
           <td><?php echo$row['balance']; ?></td>
           </tr>
           <?php
            }
            ?>
<script src="script.js"></script>
</body>
</html>
<!-- INSERT INTO `customer` (`sno`, `name`, `account_no`, `email`, `balance`) VALUES ('1', 'Aniket chatterjee', '2112345678', 'aniketch789@gmail.com\r\n', '20000'), ('2', 'Amit jha', '2112345679', 'amitjha456@gmail.com', '30000'), ('3', 'pranva kumar pandey', '2112345680', 'pranvavp123@gmail.com', '40000'), ('4', 'Ayush singh', '2112345681', 'ayushsi852@gmail.com', '50000'), ('5', 'sakshi yadav', '2112345682', 'sakshisi852@gmail.com', '6000'), ('6', 'Roshni singh', '2112345683', 'roshnisi852@gmail.com', '7000'), ('7', 'Reshmi kumari', '2112345684', 'reshmisi852@gmail.com', '8000'), ('8', 'sanjay petal', '2112345685', 'sanjaysi852@gmail.com', '90000'), ('9', 'sejal nayak', '2112345686', 'sejalsi852@gmail.com', '100000'), ('10', 'Devrani kumari', '2112345687', 'devranisi852@gmail.com', '1100'); -->