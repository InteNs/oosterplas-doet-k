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

    public function getSortingDate()
    {
        return new DateTime($this->sorting_date);
    }

    public function getDisplayDate()
    {
        return new DateTime($this->display_date);
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
