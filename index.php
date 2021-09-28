<?php declare(strict_types=1);

require_once 'vendor/autoload.php';
/*
use App\WeatherGetter;

$getWheather =new WeatherGetter();
$getWheather->getWeather();
*/
$cache_file = 'data.json';
if (file_exists($cache_file)) {
    $data = json_decode(file_get_contents($cache_file));
} else {

    $data = file_get_contents("http://api.weatherapi.com/v1/current.json?key=24a27666f03a4af597d73903212809&q=Riga&aqi=no/forecast.json ");
    $days = json_decode($data);

}

$cache_file = 'weekly.json';
if(file_exists($cache_file)){
    $weekly = json_decode(file_get_contents($cache_file));
}else{


    $weekly = file_get_contents("https://api.weatherapi.com/v1/forecast.json?key=1f83d8311f7043c5aa3122953212809&q=Riga&days=7");
    $weekly = json_decode($weekly);


    $forecast = $weekly['forecast']['forecastday']['data'][0]['conditions'];

}






include 'Template.php';
?>
