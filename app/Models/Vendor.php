<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = [
        'vendor_name',
        'vendor_address',
        'cellphone_#',
        'telephone_#',
        'vendor_email'
    ];
}
