<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeWorkSection extends Model
{
    
      use HasFactory;

    protected $fillable = [
       
        'main_title',
        'image',
        'step_1',
        'description_1',
        'step_2',
        'description_2',
        'step_3',
        'description_3',
        'step_4',
        'description_4',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public static function getActive()
    {
        return self::where('is_active', true)->first();
    }
}
