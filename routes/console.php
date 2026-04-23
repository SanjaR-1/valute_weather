<?php
use Illuminate\Support\Facades\Schedule;
Schedule::command('valute:fetch')->dailyAt('13:00')->timezone('Asia/Tashkent');
Schedule::command('weather:fetch')->dailyAt('13:00')->timezone('Asia/Tashkent');