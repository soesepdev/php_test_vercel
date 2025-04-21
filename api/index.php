<?php
//error_reporting(0);

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', trim($path, '/'));
$route = implode('/', $segments);

if (!empty($route)) {
    if (file_exists("/$route.php")) {
        echo "https://" .$_SERVER['HTTP_HOST']. "/$route.php");
    }else{
        echo "Not found!";
    }
} else {
    phpinfo();
}
?>
