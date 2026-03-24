<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookATrial extends Model
{
    //
    protected $fillable = [
        'name',
        'email',
        'phone',
        'sports',
        'dob',
        'gender',
        'level',
        'message'
    ];
}
