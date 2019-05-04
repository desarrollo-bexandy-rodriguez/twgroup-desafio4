<?php

$dbhost = 'localhost';

$dbuser = 'usuario';

$dbpass = 'password';

$dbname='desafio4';

// Creating a connection
$conn = new mysqli($dbhost, $dbuser, $dbpass);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>