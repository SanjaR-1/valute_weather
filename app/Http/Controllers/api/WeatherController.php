<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Weather;
use App\Services\WeatherService;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function storeWeather(){
        $WeatherService= new WeatherService();
        $data=$WeatherService->fetchAndStore();
        return response()->json([
            'success' => true,
            'message' => 'muvaffaqiyatli yozildi',
            'valute'=>$data,
        ]);
    }
    public function indexWeather(){
        $data = Weather::latest()->get();
        return response()->json([
            'success'=>true,
            'valute'=>$data,
        ]);
    }
    public function findWeather(int $id){
        $data = Weather::findOrFail($id);
        return response()->json([
            'success'=>true,
            'valute'=>$data,
        ]);
    }
}
