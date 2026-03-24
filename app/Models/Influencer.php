<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Influencer extends Model
{
    //
    protected $fillable = [
        'name',
        'email',
        'phone',
        'state',
        'city',
        'address',
        'facebook',
        'instagram',
        'youtube',
        'other',
        'message'
    ];
}
