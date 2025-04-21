<?php
//error_reporting(0);

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', trim($path, '/'));
$route = implode('/', $segments);

if (!empty($route)) {
    $dir = __DIR__ . "/$route.php";
    var_dump(file_exists($dir));
    echo __DIR__ . "/$route.php";
    // include "$route.php";
} else {
    phpinfo();
}
?>
