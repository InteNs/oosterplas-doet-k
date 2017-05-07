<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'address',
        'zipcode',
        'email',
        'RSIN-number',
        'KvK-number',
        'SBI-code'
    ];
}
