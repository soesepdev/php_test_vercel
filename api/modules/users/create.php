<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Request ini pakai POST";
} else {
    echo "Method: " . $_SERVER['REQUEST_METHOD'];
}
