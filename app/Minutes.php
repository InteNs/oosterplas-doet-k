<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Minutes extends Model
{
    protected $fillable = ['name', 'date', 'minutes'];
}
