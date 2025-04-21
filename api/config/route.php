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
    $module = "modules";
    $dir = BASE_PATH . "/$module/$route";
    if(file_exists("$dir.php")) {
        include "$route.php";
    } else {
        if(file_exists("$dir/index.php")) {
            include "$module/$route/index.php";
        } else {
            echo "$dir/index.php";
        }
    }
} else {
    phpinfo();
}
?>
