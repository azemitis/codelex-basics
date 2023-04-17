<?php declare(strict_types=1);

namespace App;

class WeatherReport {
    private float $temperature;
    private float $humidity;
    public function __construct(float $temperature, float $humidity)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
    }

    public function getTemperature(): float
    {
        return $this->temperature;
    }

    public function getHumidity(): float
    {
        return $this->humidity;
    }
}