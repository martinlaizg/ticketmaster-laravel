<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    protected $table = 'shows';

    public function tickets()
    {
        return $this->hasMany('App\Ticket');
    }

    public function event()
    {
        return $this->belongsTo('App\Event');
    }

    protected $fillable = [
        'date'
    ];
}
