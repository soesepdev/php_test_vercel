<?php
header('Content-Type: application/json');

$response = [
    "status" => "success",
    "message" => "Data User",
    "data" => [
        "id" => 1,
        "name" => "Soesep Dev",
        "gender" => "Male"
    ]
];

echo json_encode($response);
