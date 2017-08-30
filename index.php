<?php

date_default_timezone_set('Asia/Tokyo');

$date = getdate();

$response = [
    "date" => $date["year"]."/".$date["mon"]."/".$date["mday"],
    "time" => $date["hours"].":".$date["minutes"].":".$date["seconds"]
];

echo json_encode($response);
