<?php

use App\Http\Controllers\api\ValuteController;
use App\Http\Controllers\api\WeatherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/valute/{id}',[ValuteController::class,'findValute']);
Route::post('/valute',[ValuteController::class,'storeValute']);
Route::get('/valutes',[ValuteController::class,'indexValute']);

Route::get('/weather/{id}',[WeatherController::class,'findWeather']);
Route::post('/weather',[WeatherController::class,'storeWeather']);
Route::get('/weathers',[WeatherController::class,'indexWeather']);

