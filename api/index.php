<?php

require_once __DIR__ . '/../vendor/autoload.php';

// define('BASE_PATH', __DIR__);
// include "config/route.php";


use MongoDB\Client;

try {
    // Ganti dengan Mongo URI yang sesuai
    $client = new Client("mongodb+srv://soesepdev:SoesepDev2025@cluster0.nj1riyy.mongodb.net/");
    $database = $client->selectDatabase('portfolio');
    echo "MongoDB connection successful!";
    var_dump($client);
} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}
