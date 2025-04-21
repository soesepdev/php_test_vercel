<?php
//error_reporting(0);

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', trim($path, '/'));
$route = implode('/', $segments);

// var_dump($segments);
if($segments[0] == 'config') {
    echo "Forbidden!";
}

if (!empty($route)) {
    $dir = BASE_PATH . "/modules/$route";
    if(file_exists("$dir.php")) {
        include "$dir.php";
    } else {
        if(file_exists("$dir/index.php")) {
            include "$dir/index.php";
        } else {
            echo "Not found!";
        }
    }
} else {
    phpinfo();
}
?>
