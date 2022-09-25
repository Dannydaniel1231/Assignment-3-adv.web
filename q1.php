<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
  <form class="forms" action="index.php" method="GET">
Frist number x : <input type="number" name="number1"><br><br>
Second number y : <input type="number" name="number2"><br><br>
<input type="submit" value="Calculate">
</form>
<u><h1> Results</h1></u>
<?php  
$x=$_GET['number1'];
$y=$_GET['number2'];
$sum=$x+$y;
echo "|x+y| :".abs($sum)."<br>";
echo "|x|+|y| :".(abs($x)+abs($y))."<br>";
echo "x^3/(x+y):" .pow($x,3)/($x+$y)."<br>";
echo "sqrt(x^6+y^5) : ". sqrt(pow($x,6)+pow($y,5))."<br>";
echo "pow((x +sqrt(y)),7) :".pow(($x+sqrt($y)),7);
?>
</body>
</html>