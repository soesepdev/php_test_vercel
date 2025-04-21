<?php

// define('BASE_PATH', __DIR__);
// include "config/route.php";

$host = getenv('PGHOST');
$port = getenv('PGPORT');
$dbname = getenv('PGDATABASE');
$user = getenv('PGUSER');
$password = getenv('PGPASSWORD');

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    echo "❌ Gagal konek ke PostgreSQL";
    exit;
}

echo "✅ Koneksi PostgreSQL sukses!<br>";

// Contoh query
// $result = pg_query($conn, "SELECT * FROM users");

// $data = [];

// while ($row = pg_fetch_assoc($result)) {
//     $data[] = $row;
// }

// header('Content-Type: application/json');
// echo json_encode($data);

pg_close($conn);
