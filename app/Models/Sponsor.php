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
        'address',
        'state',
        'city',
        'company_name',
        'company_address',
        'company_phone',
        'company_website',
        'message'
    ];
}
