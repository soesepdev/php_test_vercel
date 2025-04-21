<?php

// define('BASE_PATH', __DIR__);
// include "config/route.php";

$host = "localhost";       // Contoh: 127.0.0.1 atau db-host.example.com
$user = "root";            // Contoh: root
$pass = "";            // Contoh: secret
$dbname = "test";     // Contoh: myapp

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully!";
