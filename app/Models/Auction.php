<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    protected $fillable = [
        'player_name',
        'player_image',
        'base_price',
        'current_bid',
        'highest_bidder',
        'status'
    ];

    public function bids()
    {
        return $this->hasMany(Bid::class);
    }
}
