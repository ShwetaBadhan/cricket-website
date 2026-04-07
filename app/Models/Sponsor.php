<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    //
    protected $fillable = [
    'name',
    'email',
    'phone',
    'state',
    'city',
    'address',
    'company_name',
    'company_website',
    'company_address',
    'company_phone',
    'message'
];
}
