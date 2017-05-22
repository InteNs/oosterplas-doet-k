<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageCount extends Model
{
    protected $fillable = array('url', 'count');
    protected $primaryKey = 'url';
    public $incrementing = false;
}
