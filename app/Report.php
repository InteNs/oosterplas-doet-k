<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'title',
        'message',
        'activity_id'
    ];


    public function activity()
    {
        return $this->belongsTo('App\Activity');
    }
}
