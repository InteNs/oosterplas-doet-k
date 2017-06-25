<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'activity_id',
        'title',
        'message',
        'activity_id'
    ];


    public function activity()
    {
        return $this->belongsTo('App\Activity');
    }

    public function getActivityTitle()
    {
        return Activity::find($this->activity_id)->title;
    }
}
