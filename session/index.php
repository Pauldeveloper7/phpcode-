<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login page</h1>
    <form action="index.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="usernamr">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="submit" name="submit">
    </form>
    <a href="home.php">a link </a>
</body>
</html>
<?php
$session = session_start();
if(isset($_POST["submit"])){

if(empty($_POST["username"]) && empty($_POST["password"])){
echo"Kindly fill the details";
}
else{
$_SESSION["username"] = $_POST["username"];
$_SESSION["password"] = $_POST["password"];
// header("Location : loop.php");
echo $_SESSION["username"]. "<br>";
echo $_SESSION["password"]. "<br>";
}

}
?>