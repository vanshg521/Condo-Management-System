<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parking extends Model
{
    protected $fillable = ['id', 'location', 'state'];
}
