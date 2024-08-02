<?php
$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "businessdb";
$connect = "";
try {
    $connect = mysqli_connect($db_server, 
                      $db_user,
                      $db_password,
                      $db_name);
    //code...
    if($connect){
        echo"You are connected";
    }else{
        echo"Connection failed";
    }
} catch (mysqli_sql_exception) {
    echo "Could not connect!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>)" method="POST">
    <h1>Welcome to FakeBook</h1>
<label for="username">Enter your sweet name:</label>
<input type="text" name="username" id="username">
<label for="password">Enter your password:</label>
<input type="text" name="password" id="password">
<button type="submit">Submit</button>
</form>
</body>
</html>
<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
    if(empty($username)){
        echo "Please enter a username and password";
    }elseif(empty($password)){
        echo "Please enter a password";
    }
    else{
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (user, password)
             VALUES ('$username, '$hash') ";
             mysqli_query($connect, $sql);
        echo "Username: $username, Password: $password";
    }
}
mysqli_close(($connect))
?>