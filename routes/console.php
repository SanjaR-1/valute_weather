<?php
use Illuminate\Support\Facades\Schedule;
Schedule::command('valute:fetch')->dailyAt('13:00')->timezone('Asia/Tashkent');
Schedule::command('valute:fetch')->everyMinute()->timezone('Asia/Tashkent');
Schedule::command('weather:fetch')->dailyAt('13:00')->timezone('Asia/Tashkent');
Schedule::command('weather:fetch')->everyMinute()->timezone('Asia/Tashkent');