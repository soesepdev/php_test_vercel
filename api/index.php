<?php

// define('BASE_PATH', __DIR__);
// include "config/route.php";

$conn = pg_connect("host=db.zbnysbkzjcidikfgmqsm.supabase.co port=5432 dbname=postgres user=postgres password=SoesepDev2025");

if (!$conn) {
    http_response_code(500);
    echo "Connection failed.";
    exit;
}else{
    echo "Connect";
}
