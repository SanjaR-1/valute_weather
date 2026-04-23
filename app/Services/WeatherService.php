<?php
namespace App\Services;
use App\Http\Integrations\Weather\Requests\WeatherRequest;
use App\Http\Integrations\Weather\WeatherConnector;
use App\Models\Weather;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class WeatherService{
    public function fetchAndStore():Weather{
    $connector = new WeatherConnector();
    $response = $connector -> send(new WeatherRequest());
        if (!$response->successful()){
            throw new \Exception('Weather Api dan ma\'lumot kelmayaptiiii!'); 
        }
        $data = $response->json();
        $currentWeather = $data['current_weather']?? null;
        if (!$currentWeather){
            throw new \Exception('current_weather yo\'q bu manzilda');
        }
        return Weather::create([
            'temperature'=> $currentWeather['temperature']?? null,
            'windspeed' => $currentWeather['windspeed']??null,
            'winddirection'=>$currentWeather['winddirection']?? null,
            'is_day'=>$currentWeather['is_day']??0,
            'weathercode'=>$currentWeather['weathercode']??null,
            'weather_time'=>isset($currentWeather['weather_time']) ? Carbon::parse($currentWeather['weather_time']):null
        ]);

    }
}
