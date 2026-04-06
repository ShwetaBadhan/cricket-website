<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MembershipAccess extends Model
{
    //
    protected $table = 'membership_access';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'plan',
        'benefits',
        'occupation',
        'notes',
        'ip'
    ];
}
