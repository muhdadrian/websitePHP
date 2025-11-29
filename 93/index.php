<?php
/*
hashing = transforming sensitive data (password) into letters, numbers, and/or symbols via a mathematical process (similar to encryption but technically different). Hides the original data from 3rd parties like hackers. 
*/

$password = "pizza123";

$hash = password_hash($password, PASSWORD_DEFAULT); // 2nd argument is technically a constant that specify the algorithm, which is the hashing algorithm

echo $hash;

?>