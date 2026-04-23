<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\ValuteService;

class FetchValute extends Command
{
    protected $signature = 'valute:fetch';
    protected $description = 'open apidan kurslarni bazaga yozadi';
    public function handle()
    {
        $valuteService= new ValuteService();
        try{
            $valuteService->fetchAndStore();
            $this->info('muvaffaqiyat');
            return self::SUCCESS;
        }catch (\Throwable $e){
            $this->error($e->getMessage());
            return self::FAILURE;
        }
        
    }
}