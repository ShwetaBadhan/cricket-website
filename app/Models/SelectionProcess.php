<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SelectionProcess extends Model
{
    protected $fillable = [
        'step_1',
        'step_2',
        'step_3',
        'step_4',
        'step_5',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
