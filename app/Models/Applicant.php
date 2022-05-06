<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;
    protected $fillable =
    [   'id',
        'Region',
        'Province',
        'City',
        'Firstname',
        'Middlename',
        'Lastname',
        'Sex',
        'Age',
        'Maritalstatus',
        'course',
        'positionapplied',
        'accountstatus'

    ];
}
