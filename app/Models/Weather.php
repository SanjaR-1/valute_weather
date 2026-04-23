<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    protected $fillable = [
        'temperature',
        'windspeed',
        'winddirection',
        'is_day',
        'weathercode',
        'weather_time',
    ];

}
