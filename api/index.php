<?php

define('BASE_PATH', __DIR__);
include "config/route.php";

use MongoDB\Client;

try {
    $mongoClient = new Client("mongodb+srv://soesepdev:ORN3ZV3IYeIYsZNf@cluster0.nj1riyy.mongodb.net/");
    $db = $mongoClient->selectDatabase("portfolio"); // Ganti dengan nama database kamu
} catch (Exception $e) {
    die("MongoDB Connection Error: " . $e->getMessage());
}
