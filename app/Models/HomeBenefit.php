<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class HomeBenefit extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_title',
        'image',
        'small_card_1_image',
        'small_card_1_title',
        'small_card_1_description',
        'small_card_2_image',
        'small_card_2_title',
        'small_card_2_description',
        'small_card_3_image',
        'small_card_3_title',
        'small_card_3_description',
        'small_card_4_image',
        'small_card_4_title',
        'small_card_4_description',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
