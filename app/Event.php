<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    public function shows()
    {
        return $this->hasMany('App\Show');
    }

    protected $fillable = [
        'name', 'description'
    ];
}
