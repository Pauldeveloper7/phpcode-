<?php 
echo "I love golgappa";
echo "I really good";
//this is comment 
/* this is multi line comment 
*/
// Data types in php 
//string
$ename = "Komal paul";
$food = "Pizza";
$email = "Komalpaul689@gmail.com";

//number
$age = 22;
$users = 2;
$quantity = 9 ;
$total = 56;
//float
$gpa = 2.5;
$price = 4.8;
$taxrate = 5.3;

// boolean 
$employed = true;
$online = true;
$for_sale = true;

// operators in php 

// ***Arithematic operators ***
// + - * / ** % 
$x = 10;
$y = 3;
$z = null;
// $z = $x+$y;
// $z = $x-$y;
// $z = $x*$y;
// $z = $x/$y;
$z = $x%$y; // It gives you remainder 
//$z = $x**$y; // the power of first digit 

//*Increment / Decrement operators */
$counter =0 ;
// $counter++;
 $counter+=4;
 $counter-=4;
// $counter--;

// operator precedence 
// 1. ()
// 2. **
// 3. * / % 
// 4. + -
// "15, 625 is 5**6 ";
$total = 1+2-3*4/5**6;
// 1+2-12/15,625 , 1+2-0.000768;
echo " the total is {$total}";
echo "<br> $counter <br>";
echo "$z is the total number ";
echo "{$ename} <br>";
echo "Hello {$food} <br>";
echo "Hello {$ename}";
echo "Your gpa is  {$gpa}";
echo "Your pizza is \${$price}";  // when you want dollar sign use backslash /
echo "Your sales tax rate is {$taxrate}";
echo "Online status : {$online} <br>";
echo " You have ordered {$quantity} x {$food}s";
$total = $quantity* $price;
echo "Total price is \${$total}";

      
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <button>Order pizza</button>
</body>
</html>