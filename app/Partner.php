<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{

    protected $fillable = ['name', 'description', 'rank'];

    public function getTitle()
    {
        return $this->name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getRank()
    {
        return $this->rank;
    }

    public function getDescription()
    {
        return $this->description;
    }
}
