<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 
        'last_name', 
        'phone',
        'email',
        'gender',
        'age',
        'addedby',
        'country_id',
        'city_id',
        'password',
        // other attributes
    ];
}
