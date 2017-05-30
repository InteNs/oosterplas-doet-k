<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'activity_id'
    ];

    public function activity()
    {
        return $this->belongsTo('App\Activity');
    }
}
