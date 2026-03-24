<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlayerRegistration extends Model
{
    //
    protected $fillable = [
        'name',
        'email',
        'phone',
        'organization',
        'city',
        'state',
        'address',
        'password'
    ];
}
