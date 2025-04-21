<?php
error_reporting(0);

$path = $_SERVER['REQUEST_URI']; // Contoh: /api/users
$segments = explode('/', trim($path, '/')); // Menghapus '/' di awal dan akhir, lalu memecah string

if (isset($segments[1])) {
    $afterApi = $segments[1]; // Mengambil segmen setelah 'api'
    echo $afterApi; // Output: users
} else {
    echo 'Segmen setelah /api/ tidak ditemukan.';
}
?>
