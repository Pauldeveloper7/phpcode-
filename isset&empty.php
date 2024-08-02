<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Hello this is document where i explain about functionality of isset and empty function in php 
    </h1>
    <form action="isset&empty.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>
<?php
// ***ISSET() = return True if a variable is declared and not null 
// ***EMPTY() = return false if a variable is not declared , false , and null 
if(isset($_POST['name'])){
    if(!empty($_POST['name'])){
        echo "Your name is: ". $_POST['name'];
    }else{
        echo "Name field is empty";
    }
}

?>
