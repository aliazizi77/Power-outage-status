<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DefiniteTime extends Model
{
    protected $fillable = [
        'name', 'from', 'to',
    ];
}
