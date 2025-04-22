<?php

use MongoDB\Client;

try {
    $client = new Client("mongodb+srv://soesepdev:SoesepDev2025@cluster0.nj1riyy.mongodb.net/");
    $database = $client->selectDatabase('portfolio');
} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}
