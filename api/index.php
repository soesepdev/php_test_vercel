<?php

require_once __DIR__ . '/vendor/autoload.php';

// define('BASE_PATH', __DIR__);
// include "config/route.php";


use MongoDB\Client;

try {
    // Ganti dengan Mongo URI yang sesuai
    $client = new Client("mongodb://localhost:27017");
    $database = $client->selectDatabase('test');
    echo "MongoDB connection successful!";
} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}
