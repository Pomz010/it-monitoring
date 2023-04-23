<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toner extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'version',
        'license',
        'exp_date',
        'developer',
        'category',
        'date_installed',
        'serial_#',
        'purchase_date',
        'vendor',
        'product_key'
    ];

    public function getAllToner(){
        return Toner::all();
    }
}
