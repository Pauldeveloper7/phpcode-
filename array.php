<?php
$foods = array('apple', 'orange', 'banana','coconuts', 'pineapple');
$foods[0] = 'dragon fruit';
array_push($foods,'graphes');
array_pop($foods);
array_shift($foods);
$reverse_food =  array_reverse($foods);
echo count($foods);
// to get single elment from food
echo $foods[0];
foreach ($foods as $food) {
    echo $food ."<br>";
}
// associative array = An array made of key => value pairs 
$capitals = array("USA"=>"Washington D.C","JAPAN"=>"Kyoto","SOUTH KOREA"=>"Seuol" , "INDIA"=>"New Delhi");
echo $capitals["JAPAN"];
echo "<br>
<h1>Helllo world </h1>";
foreach($capitals as $key => $value){
echo "<br> {$key} = {$value} <br>";
}
?>