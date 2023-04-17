<?php declare(strict_types=1);

namespace App;

use App\WeatherReport;
use GuzzleHttp\Client;


class ApiClient
{
    private Client $client;

    private const API_KEY = 'a9c8fa44930ae69b1e907d66861550a7';

    public function __construct()
    {
        $this->client = new Client();
    }

    public function getReport(string $country, string $city): WeatherReport
    {
        $apiKey = self::API_KEY;
        $url = "https://api.openweathermap.org/data/2.5/weather?q={$city},{$country}&appid={$apiKey}&units=metric";
        $response = $this->client->request('GET', $url);
        $weatherData = json_decode($response->getBody()->getContents());

        return new WeatherReport(
            $weatherData->main->temp,
            $weatherData->main->humidity
        );
    }
}



