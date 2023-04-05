<?php


//Using https://openweathermap.org/ API free plan (No credit card adding)
//create terminal application that displays weather and weather related information.
//The input that terminal asks is Country and city name (for example: Riga Latvia or Latvia Riga)

$country = readline("Enter country: ");
$city = readline("Enter city: ");

$response = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=$city,$country&appid=a9c8fa44930ae69b1e907d66861550a7&units=metric");

$data = json_decode($response);

print_r($data);

echo "Current weather in $city, $country:\n";
echo "Temperature: " . $data->main->temp . "°C\n";
echo "Description: " . $data->weather[0]->description . "\n";
echo "Wind speed: " . $data->wind->speed . "m/s\n";