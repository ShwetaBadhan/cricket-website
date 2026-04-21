<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ColourSetting extends Model
{
    protected $fillable = [
        'primary_color',
        'secondary_color',
        'gradient_colors', 
        'light_color1',
        'light_color2',
        'primary_button_color',
        'is_active',
    ];

    protected $casts = [
        'gradient_colors' => 'array',
    ];
}