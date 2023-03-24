<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Employee;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'dept_id',
        'firstname',
        'lastname',
        'middle_name',
        'name_ext',
        'gender',
        'position',
        'role',
        'email'
    ];

}
