<?php 

$servername = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'hotel';

// Connect
$conn = new mysqli($servername, $username, $password, $dbname);

// Check
if ($conn->connect_error) {
    echo 'connection failed';
}

?> 