<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'department_id',
        'firstname',
        'lastname',
        'middle_name',
        'ext_name',
        'gender',
        'position',
        'role',
        'email'
    ];

}
