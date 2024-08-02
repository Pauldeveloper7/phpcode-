<?php
// hashing = tranforming sensitive data (password) into letters , numbers , and/or symbols via a mathematical process / Similar to encrpytion  hides the original data from 3rd parties 
$password = "pizza123";
$hash = password_hash($password, PASSWORD_DEFAULT);
// password default , use bcrypt 
echo "$hash";

// verifying the password

$passwordToCheck = "pizza123";
$hashFromDb = "$2y$10$t6.z9sXw.K9a39.K9xZ4qO3/i4Yq6t.w5.0h.g5";

if(password_verify($passwordToCheck, $hashFromDb)){
    echo "Password is correct";
} else {
    echo "Password is incorrect";
}
?>

