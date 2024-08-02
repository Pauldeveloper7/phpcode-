<!-- this document will guide you  how to use switch statemnet in php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="grade" id="grade" placeholder="Enter your grade">
        <input type="submit" value="submit">
    </form>
</body>

</html>
<?php
// switch = replacement to using many elseif statements more efficient,less code to write 
$grade = $_POST["grade"];
$date = date("l");

// switch statements according to day 
switch ($date) {
    case 'Monday':
        echo " Work day";
        break;
    case 'Tuesday':
        echo " gud day";
        break;
    case 'Wednesday':
        echo " white  day";
        break;
    case 'Thursday':
        echo " amazinf day";
        break;
    case 'Friday':
        echo " wow day";
        break;
    case 'Saturday':
            echo" relax day";
        break;
    case 'Sunday':
            echo" hurry day";
        break;
    default:
        echo "Invalid day";
        break;
}

// switch statement to display the grade
switch ($grade) {
    case "A":
        echo "Excellent";
        break;
    case "B":
        echo "Good";
        break;
    case "C":
        echo "Average";
        break;
    case "D":
        echo "Below Average";
        break;
    default:
        echo "Invalid Grade";
        break;  // optional, will be executed if no case matches
}
?>