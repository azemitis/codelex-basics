<?php

require_once 'vendor/autoload.php';

$apiClient = new \App\ApiClient();

$regcode = readline("Enter regcode: ");
$record = $apiClient->getInfo($regcode);

if ($record !== null) {
    foreach ($record as $field => $value) {
        echo $field . ": " . $value . PHP_EOL;
    }
} else {
    echo "Record not found" . PHP_EOL;
}