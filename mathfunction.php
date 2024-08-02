<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="mathfunction.php" method="post">
        <label for="x">Enter the value of x :</label>
        <input type="text" name="x" id="x">
        <label for="y">Enter the value of y :</label>
        <input type="text" name="y" id="y">
        <label for="z">Enter the value of z :</label>
        <input type="text" name="z" id="z">
        <input type="submit" value="submit">
    </form>

</body>
</html>
<?php 
echo"<h1>Welcome to php coding session of tomorrow</h1>";
//math functions
$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];

// Will give us the absolute value 
$total = abs($x);
// Will give us the square root of the number
$total = sqrt($x);
// Will give us the square of the number
$total = pow($x,2);
//Will give us the round value
$total = round($x);
//Will give us the down floor value of the number 
 $total = floor($x);
 //Will give us the up value of the number 
 $total = ceil($x);
 // will give us the random nmber 
 $total = rand(1,100);
 // will give the min and max in the numbers 
 $total = min($x,$y,$z);
 $total = max($x,$y,$z);
 // Will give us pi() value
 $total = pi();
echo " The total is $total";
?>
