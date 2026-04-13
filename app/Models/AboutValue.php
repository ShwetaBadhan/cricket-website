<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutValue extends Model
{
    protected $fillable = [

        'small_card_1_description',
        'small_card_2_description',
        'small_card_3_description',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
