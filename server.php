<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER['php_self'])?>)" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
    </form>
</body>
</html>
<?php
// $_server = sgb that contain headers , paths , and script locations. The entries in this array are created by web server shows nearly everything you need to know about the current  
// nearly everything you need to know about 
foreach ($_SERVER as $key => $value) {
    echo $key. " => ". $value. "<br>";
}
?>