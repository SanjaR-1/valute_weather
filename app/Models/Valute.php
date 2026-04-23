<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Valute extends Model
{
    protected $fillable=[
        'Ccy',
        'Rate',
        'Date',
    ];
    protected $casts=[
        'rate'=>'float',
        'date'=>'date',
    ];
}
