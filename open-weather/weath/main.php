<?php

require_once 'vendor/autoload.php';

$url = 'https://api.openweathermap.org/data/2.5/weather?q=Riga,Latvia&appid=a9c8fa44930ae69b1e907d66861550a7&units=metric';

$client = new \GuzzleHttp\Client();

$response = $client->request('GET', $url);

$weatherData = json_decode($response->getBody()->getContents());

$apiClient = new \App\ApiClient();
$weatherReport = $apiClient->getReport('Riga', 'Latvia');

echo "OOP Guzzle weather report:\n";
echo "Temperature: " . $weatherReport->getTemperature() . "°C\n";
echo "Description: " . $weatherReport->getHumidity() . "\n";

echo "Simple Guzzle weather report:\n";
echo "Temperature: " . $weatherData->main->temp . "°C\n";
echo "Description: " . $weatherData->weather[0]->description . "\n";
echo "Wind speed: " . $weatherData->wind->speed . "m/s\n";