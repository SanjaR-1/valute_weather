<?php
namespace App\Services;
use App\Http\Integrations\Valute\Requests\ValuteRequest;
use App\Http\Integrations\Valute\ValuteConnector;
use App\Models\Valute;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
class ValuteService{
    public function fetchAndStore():Valute{
        $connector = new ValuteConnector();
        $response = $connector -> send(new ValuteRequest());
        if (!$response->successful()){
            throw new \Exception('Valute Api dan ma\'lumot kelmayaptiiii!'); 
        }
        $currentValute = collect($response->json())->first();
        if (!$currentValute){
            throw new \Exception('hech nima yo\'q bu manzilda');
        }
        return Valute::create([
            'Ccy' => $currentValute['Ccy']??null,
            'Rate'=>$currentValute['Rate']?? null,
            'Date'=>isset($currentValute['Date'])?Carbon::parse($currentValute['Date']):null,
        ]);
    }
}
