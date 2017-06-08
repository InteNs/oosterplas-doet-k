<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use MaddHatter\LaravelFullcalendar\IdentifiableEvent;

class Activity extends Model
{
    /**
     * Get the entries for the activity.
     */
    public function entries()
    {
        return $this->hasMany('App\Entry');
    }

    public function reports()
    {
        return $this->hasMany('App\Report');
    }

    public function getNumberOfEntries()
    {
        return $this->entries()->count();
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
        return false;
    }

    /**
     * Get the start time
     *
     * @return DateTime
     */
    public function getStart()
    {
        return new DateTime($this->datetimestart);
    }

    /**
     * Get the end time
     *
     * @return DateTime
     */
    public function getEnd()
    {
        return new DateTime($this->datetimeend);
    }

    /**
     * Get the event's ID
     *
     * @return int|string|null
     */
    public function getId()
    {
        return $this->id;
    }
}
