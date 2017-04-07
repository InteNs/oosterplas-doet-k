<?php

namespace App;

use DateTime;
use Eloquent;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class EventModel extends Eloquent implements \MaddHatter\LaravelFullcalendar\Event
{

    protected $dates = ['start', 'end'];

    /**
     * Get the event's id number
     *
     * @return int
     */
    public function getId() {
    return $this->id;
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
    return (bool)$this->all_day;
}

    /**
     * Get the start time
     *
     * @return DateTime
     */
    public function getStart()
{
    return $this->start;
}

    /**
     * Get the end time
     *
     * @return DateTime
     */
    public function getEnd()
{
    return $this->end;
}
}
