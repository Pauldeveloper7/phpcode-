<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>
<?php
$age = 100;
$adult = true;
$hours = 40;
$rate = 15;
$weekly_pay = null;
// age conditional statement
if ($age >= 100) {
    echo "Itna lamba chalegye";
} elseif ($age >= 18) {
    echo "You are eligible to vote";
} elseif ($age <= 0) {
    echo "Invalid value";
} else {
    echo "You are be  not eligible to vote";
}
// adult conditional statement
if ($adult == true) {
    echo "You may enter this site";
} else {
    echo "You must be an adult to enter";
}
// salary count function
if($hours<=0){
    $weekly_pay = 0;
}
elseif($hours<=40){
    $weekly_pay = $hours * $rate;
    echo "Your weekly pay is $weekly_pay";
}
else {
 $weekly_pay = ($rate*40)+(($hours-40)*($rate*1.5));
 echo "Your weekly pay is $weekly_pay";
}
//.logical operators = combine conditional statements 
/*
 && = true if both conditions are true ;
 || = true if at least one of the conditions is true;
 ! = true if the condition is false ;
 
*/
?>