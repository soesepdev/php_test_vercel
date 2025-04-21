<?php
//error_reporting(0);

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', trim($path, '/'));
$route = implode('/', $segments);

if (!empty($route)) {
    var_dump(file_exists("api/$route.php"));
    echo "api/$route.php";
    // include "$route.php";
} else {
    phpinfo();
}
?>
