<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model implements \MaddHatter\LaravelFullcalendar\Event
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    /**
     * Get the event's title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Is it an all day event?
     *
     * @return bool
     */
    public function isAllDay()
    {
        return true;
    }

    /**
     * Get the start time
     *
     * @return DateTime
     */
    public function getStart()
    {
//        return $this->date;
        return DateTime::createFromFormat('Y-m-d',$this->date);
    }

    /**
     * Get the end time
     *
     * @return DateTime
     */
    public function getEnd()
    {
        return DateTime::createFromFormat('Y-m-d',$this->date);
    }
}
