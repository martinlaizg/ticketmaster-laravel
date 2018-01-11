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

    public function genre()
    {
        return $this->belongsTo('App\Genre');
    }

    protected $fillable = [
        'name', 'description', 'image'
    ];
}
