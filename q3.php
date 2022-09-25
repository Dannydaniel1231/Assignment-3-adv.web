<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>q3</title>
</head>
<body>
   <form action="q3.php">
price of one kg : <input type="number" name="price" required><br><br>
Number of kg : <input type="number" name="kg" required><br><br>
Taxes : <input type="number" name="taxe" required><br><br>

<input type="submit" name="" id="" value="Total">

</form> 
<h1>RESULTS</h1>
<hr>
<?php
$price=$_GET['price'];
$kg=$_GET['kg'];
$taxe=$_GET['taxe'];
$net_price=$price*$kg;
$total_tax=($net_price*$taxe)/100;
$glabl_price=$net_price+$total_tax;
echo "Amount to pay with taxes :".$glabl_price;

?>
</body>
</html>