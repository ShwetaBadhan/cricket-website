<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    protected $fillable = [
        'player_name',
        'base_price',
        'winning_bid',
        'category',
        'result',
        'is_active'
    ];
    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }

    public function scopeSold($query)
    {
        return $query->where('result', 'sold');
    }

    public function scopeUnsold($query)
    {
        return $query->where('result', 'unsold');
    }

}