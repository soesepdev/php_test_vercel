<?php

define('BASE_PATH', __DIR__);
include "config/route.php";

// $host = getenv('PGHOST');
// $port = getenv('PGPORT') ?: 5432;
// $dbname = getenv('PGDATABASE');
// $user = getenv('PGUSER');
// $password = getenv('PGPASSWORD');

// try {
//     $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
//     $pdo = new PDO($dsn, $user, $password, [
//         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
//     ]);
//     echo "✅ Connected to PostgreSQL!";
    
//     // Tes query
//     $stmt = $pdo->query("SELECT version()");
//     $version = $stmt->fetchColumn();
//     echo "<br>PostgreSQL version: $version";
// } catch (PDOException $e) {
//     http_response_code(500);
//     echo "❌ Connection failed: " . $e->getMessage();
//     exit;
// }
