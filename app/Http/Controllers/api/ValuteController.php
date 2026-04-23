<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Services\ValuteService;
use App\Models\Valute;
use Illuminate\Http\Request;

class ValuteController extends Controller
{
    public function storeValute(){
        $valuteService= new ValuteService();
        $data=$valuteService->fetchAndStore();
        return response()->json([
            'success' => true,
            'message' => 'muvaffaqiyatli yozildi',
            'valute'=>$data,
        ]);
    }
    public function indexValute(){
        $data = Valute::latest()->get();
        return response()->json([
            'success'=>true,
            'valute'=>$data,
        ]);
    }
    public function findValute(int $id){
        $data = Valute::findOrFail($id);
        return response()->json([
            'success'=>true,
            'valute'=>$data,
        ]);
    }
}
