<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="loop.php" method="post">
        <label for="">Counter</label>
        <input type="number" name="counter" id="counter">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
$counter = $_POST["counter"];

for ($i=1; $i <= $counter; $i++) { 
    echo"$i";
}
while($counter<=10){
    echo "$counter";
    $counter--;
    if($counter==0){
        break;
    }
}
?>