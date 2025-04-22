<?php
// header('Content-Type: application/json');

// $response = [
//     "status" => "success",
//     "message" => "Users",
//     "data" => [
//         "id" => 1,
//         "name" => "Soesep Dev",
//         "gender" => "Male"
//     ]
// ];

// echo json_encode($response);

    $collection = $database->selectCollection('users');
    $cursor = $collection->find();
var_dump($collection);

    // foreach ($cursor as $value) {
    //     echo $value->name;
    //     echo "</br>";
    // }
