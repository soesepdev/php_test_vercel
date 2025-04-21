<?php
error_reporting(0);

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', trim($path, '/'));
$route = implode('/', $segments);

if($segments[0] == 'config') {
    http_response_code(403);
    exit('403 Forbidden');
}

if (!empty($route)) {
    $dir = BASE_PATH . "/modules/$route";
    if(file_exists("$dir.php")) {
        include "$dir.php";
    } else {
        if(file_exists("$dir/index.php")) {
            include "$dir/index.php";
        } else {
            http_response_code(404);
            exit('404 Not found');
        }
    }
} else {
    phpinfo();
}
