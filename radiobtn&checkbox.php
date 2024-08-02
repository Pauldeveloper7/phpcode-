<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <!-- <form action="radiobtn&checkbox.php" method="post">
        <label for="india">
            <input type="radio" name="country" id="india" value="india">
            india
            </label>
            <br>
        <label for="indonesia">
            <input type="radio" name="country" value="indonesia" id="indonesia">
            indonesia</label>
            <br>
            <label for="china">
                <input type="radio" name="country" value="china" id="china">
            China
    </label>
    <br>
        <label for="Australia">
            <input type="radio" name="country" value="Australia" id="Australia">
            Australia
            </label>
            <br>
        <label for="canada">
            <input type="radio" name="country" value="Canada" id="Canada">
            Canada
            </label>
            <br>
            <input type="submit" value="Submit" name="submit">
    </form> -->
    <form action="radiobtn&checkbox.php" method="post">
        <label for="pizza">Pizza</label>
        <input type="checkbox" value="pizza" name="fooditems[]" id="pizza">
        <br>
        
        <label for="smoothie">Smoothie</label>
        <input type="checkbox" value="smoothie" name="fooditems[]" id="smoothie">
        <br>

        <label for="milkshake">Milkshake</label>
        <input type="checkbox" value="milkshake" name="fooditems[]" id="milkshake">
        <br>

        <label for="burger">Burger</label>
        <input type="checkbox" value="burger" name="fooditems[]" id="burger">
        <br>

        <label for="soda">Soda</label>
        <input type="checkbox" value="soda" name="fooditems[]" id="soda">
        <br>

        <label for="water">Water</label>
        <input type="checkbox" value="water" name="fooditems[]" id="water">
        <br>

        <input type="submit" value="Submit" name="submit">
</body>

</html>
<?php
// if(isset($_POST["submit"])){
    //     $country = $_POST["country"];
    //     echo "You selected: ".$country;
    // }
    // checkbox code 
    if (isset($_POST["submit"])) {
        if(empty($_POST["fooditems"])){
            echo "No food items selected";
            exit;
        }
        else{
        foreach ($_POST['fooditems'] as $key => $value) {
            echo $value . " ,";
        }
    }
    }
   
?>