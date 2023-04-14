<?php

require 'C:\Users\aivis\AppData\Roaming\Composer\vendor\autoload.php';

use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Client;

$request = new Request('GET', 'https://api.openweathermap.org/data/2.5/weather?q=Riga,Latvia&appid=a9c8fa44930ae69b1e907d66861550a7&units=metric');

$promise = (new Client())->sendAsync($request)->then(function (Response $response) {
    $data = json_decode($response->getBody());

    echo "Current weather in " . $data->name . ", " . $data->sys->country . ":\n";
    echo "Temperature: " . $data->main->temp . "°C\n";
    echo "Description: " . $data->weather[0]->description . "\n";
    echo "Wind speed: " . $data->wind->speed . "m/s\n";
});

$promise->wait();