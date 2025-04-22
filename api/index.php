<?php

// require_once __DIR__ . '/../vendor/autoload.php';

define('BASE_PATH', __DIR__);
include "config/route.php";

// $host = getenv('PGHOST');
// $port = getenv('PGPORT');
// $dbname = getenv('PGDATABASE');
// $user = getenv('PGUSER');
// $password = getenv('PGPASSWORD');

// echo $host;

// $client = new MongoDB\Client("mongodb+srv://soesepdev:ORN3ZV3IYeIYsZNf@cluster0.nj1riyy.mongodb.net/");

// $conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

// if (!$conn) {
//     echo "❌ Gagal konek ke PostgreSQL";
//     exit;
// }

// echo "✅ Koneksi PostgreSQL sukses!<br>";

// Contoh query
// $result = pg_query($conn, "SELECT * FROM users");

// $data = [];

// while ($row = pg_fetch_assoc($result)) {
//     $data[] = $row;
// }

// header('Content-Type: application/json');
// echo json_encode($data);

// pg_close($conn);
