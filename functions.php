<?php
function happybirthday(){
    echo "Happy Birthday!";
}
function happybirthdaywishwithname($name){
    echo "Happy Birthday, $name!";
}
function evenodd( float $number){
    if($number % 2 == 0){
        echo "$number is an even number.";
    } else {
        echo "$number is an odd number.";
    }
}
happybirthday();
happybirthdaywishwithname("John Doe");
evenodd(90.6);

?>