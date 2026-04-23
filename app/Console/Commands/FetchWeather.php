<?php

namespace App\Console\Commands;

use App\Services\WeatherService;
use Illuminate\Console\Command;

class FetchWeather extends Command
{
    protected $signature = 'weather:fetch';
    protected $description = 'Urldan current weatherni olish va DB ga yozish';
    public function handle(): int
    {
        $weatherService = new WeatherService();
        try{
            $weatherService->fetchAndStore();
            $this->info('muvaffaqiyat');
            return self::SUCCESS;
        }catch (\Throwable $e){
            $this->error($e->getMessage());
            return self::FAILURE;
        }
    }
}
