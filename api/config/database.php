<?php

use MongoDB\Client;

try {
    $client = new Client("mongodb+srv://soesepdev:SoesepDev2025@cluster0.nj1riyy.mongodb.net/");
    $database = $client->selectDatabase('portfolio');

    $collection = $database->selectCollection('users');
    $cursor = $collection->find();

    foreach ($cursor as $value) {
        echo $value->name;
        echo "</br>";
    }
} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage();
}
