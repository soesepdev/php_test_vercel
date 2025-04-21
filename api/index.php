<?php
error_reporting(0);

// Ambil path URI tanpa query string
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Pecah menjadi segmen-segmen
$segments = explode('/', trim($path, '/'));

// Gabungkan semua segmen menjadi satu string
$route = implode('/', $segments);

// Tampilkan route jika ada
if (!empty($route)) {
    echo $route;
} else {
    phpinfo();
}
?>
