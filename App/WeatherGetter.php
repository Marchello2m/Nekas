<?php
namespace App;
use Forecast\Forecast;
class WeatherGetter
{
public function getWeather()
{
    $cache_file = 'data.json';
    if (file_exists($cache_file)) {
        $data = json_decode(file_get_contents($cache_file));
    } else {

        //  $api_key='24a27666f03a4af597d73903212809';
        $data = file_get_contents("http://api.weatherapi.com/v1/current.json?key=24a27666f03a4af597d73903212809&q=Riga&aqi=no/forecast.json ");
        $days = json_decode($data);

    }
    return $data;
}

}
