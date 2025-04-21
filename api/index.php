<?php
//error_reporting(0);

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', trim($path, '/'));
$route = implode('/', $segments);

if (!empty($route)) {
    $dir = __DIR__ . "/$route.php";
    if(file_exists($dir)) {
        include "$route.php";
    } else {
        include "$route/index.php";
    }
} else {
    phpinfo();
}
?>
