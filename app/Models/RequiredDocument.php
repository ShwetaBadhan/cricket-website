<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequiredDocument extends Model
{
    protected $fillable = [
        'main_title_1',
        'main_title_2',
        'main_title_3',
        'main_title_4',
        'sub_title_1',
        'sub_title_2',
        'sub_title_3',
        'sub_title_4',
        'small_card_1_description',
        'small_card_2_description',
        'small_card_3_description',
        'small_card_4_description',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
