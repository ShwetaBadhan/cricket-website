<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organizer extends Model
{
    //
     protected $table = 'organizers';
    protected $fillable = [

    'name',
    'tag',
    'image',
    'designation',
    'facebook_link',
    'twitter_link',
    'instagram_link',
    'status'

    ];
}
