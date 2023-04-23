<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hardware extends Model
{
    use HasFactory;

    protected $fillable = [
        'asset_tag',
        'item',
        'brand',
        'model',
        'processor',
        'memory',
        'storage',
        'serial_#',
        'purchase_date',
        'vendor',
        'warranty'
    ];

    public function getAllHardware(){
        return Hardware::all();
    }
}
