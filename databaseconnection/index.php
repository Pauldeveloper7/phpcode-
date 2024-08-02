<?php
include("database.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
</head>
<body>
    <br>
    <h1>Welcome to lkc canteen</h1> 
    
</body>
</html>
<?php
$username = "Username";
$password  ="pass4567yyyy";
$hash = password_hash($password, PASSWORD_DEFAULT);
$sqlquery = "INSERT INTO users(user,password ) VALUES ('$username', '$hash')";
try {
    //code...
    mysqli_query($connect, $sqlquery);
    echo" User is now registered ..";
} catch (mysqli_sql_exception) {
    echo "Could not register user";
}
?>