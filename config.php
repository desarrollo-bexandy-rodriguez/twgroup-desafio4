<?php

$dbhost = 'localhost';

$dbuser = 'usuariodb';

$dbpass = 'passworddb';

$dbname='desafio4';

// Creating a connection
$conn = new mysqli($dbhost, $dbuser, $dbpass);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>