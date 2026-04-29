<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameMatch extends Model
{
    //
    protected $fillable = [
        'title',
        'sport_type',
        'match_type',
        'status',
        'team_1_name',
        'team_2_name',
        'team_1_logo',
        'team_2_logo',
        'match_date',
        'match_time',
        'timezone',
        'venue',
        'result_text',
        'score_data',
        'video_link',
        'is_featured',
        'is_published'
    ];

    protected $casts = [
        'score_data' => 'array', 
    ];

}