<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HardwareCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category'
    ];

    public function getAllCategory(){
        return HardwareCategory::all();
    }
}
