<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $table = 'reviews';

    protected $fillable = [
        'first_name',
        'last_name',
        'tweet',
        'tweet_id',
        'date',
        'status'
    ];
}
