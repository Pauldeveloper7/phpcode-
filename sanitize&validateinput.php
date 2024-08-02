<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sanitize&validateinput.php" method="post">
        <label for="username">User Name:</label><br>
        <input type="text" name="username" id="username"><br>
        <label for="age">User age:</label><br>
        <input type="number" name="age" id="age"><br>
        <label for="age">User email:</label><br>
        <input type="email" name="email" id="email"><br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</body>
</html>
<?php
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
$age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST, "email",FILTER_SANITIZE_EMAIL );
// validate

$username = filter_input(INPUT_POST, "username", FILTER_VALIDATE_MAC);
$email = filter_input(INPUT_POST, "age", FILTER_VALIDATE_EMAIL);
$age = filter_input(INPUT_POST, "email",FILTER_VALIDATE_INT );
echo " $username , $age , $email";
?>
