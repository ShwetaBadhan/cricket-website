<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    protected $table = 'team';
    protected $fillable = [

        'name',
        'image',
        'description',
        'designation',
        'facebook_link',
        'twitter_link',
        'instagram_link',
        'status'

    ];
}
