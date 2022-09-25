
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
  <form action="q2.php" method="GET">
Width : <input type="number" name="width"><br><br>
Height : <input type="number" name="height"><br><br>
<input type="submit" value="Calculate">
</form>
<h1>Results</h1>
<?php   
$width=$_GET['width'];
$height=$_GET['height'];
echo "Perimeter of Rectangle : ".(($width+$height)*2)."<br>";
echo "Area of Rectangle : ".($width*$height)."<br>";
?>
</body>
</html>