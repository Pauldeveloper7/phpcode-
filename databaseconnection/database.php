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
