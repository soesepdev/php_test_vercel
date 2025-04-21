<?php
error_reporting(0);

$path = $_SERVER['REQUEST_URI'];
$segments = explode('/', trim($path, '/')); 

if (isset($segments[1])) {
    $route = $segments[0];
    echo $route;
} else {
    phpinfo();
}
    
?>
