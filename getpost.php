<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="getpost.php" method="post">
        <label for="username">User Name :</label><br>
        <input type="text" name="username" id="username"><br>
        <label for="">Password :</label><br>
        <input type="text" name="password" id="password"><br>
        <input type="submit" value="Log in" id="login"><br>
    </form> -->
    <!-- //order page for restraurant  -->
     <form action="getpost.php" method="post">
        <label for="">Quantity:</label><br>
        <input type="text" name="quantity" id="quantity"><br>
        <input type="submit" value="total">
     </form> 
</body>
</html>
<?php 
/*
$_GET, $_POST = special variables used to collect data from an HTML form data is sent to the file in the action attribute of <form>
<form action="some_file.php" method="get">
$_GET = Data is appended to the url 
 NOT SECURE 
 CHAR LIMIT 
 BOOKMARK is possible w/values 
 GET requests can be cached 
 Better for a search page 

$_POST  = Data is packaged inside the body of the http request 
 MORE SECURE 
 NO DATA LIMIT 
 CANNOT BE BOOKMARKED
 GET REQUEST ARE NOT CACHED 
 BETTER FOR SUBMITTING CREDENTIALS 

*/
$item = "pizza";
$price = 10.99;
$quantity =  $_POST["quantity"];
$total = null;
$total = $quantity*$price;
echo "You have ordered  {$quantity} x {$item}/s";
echo "<br>Your total is : \${$total}";
// echo "{$_POST["username"]} <br>";
// echo "{$_POST["password"]} <br>";

?>