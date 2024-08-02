<?php
// cookie = information about a user stored in auser's web browser targeted advertiseents , browsing preferences and other non-sensitive data 
// in set cookie  first element is key  , second element is value and third argument is experation time 
// to find your cookies inspect the web page go to application  then cookies 
setcookie("fav_food", "pizaa", time()+(86400*2), "/");
setcookie("food", "burger", time()-0, "/");
foreach ($_COOKIE as $key => $value) {
    echo "<h1>Cookies</h1> $key = $value <br>";
}
if(isset($_COOKIE["fav_food"])){
    echo "Buy Some {$_COOKIE["fav_food"]} !!!";
}
else{
    echo "No favorite food found";
}
?>