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

    protected $fillable = [
        'date'
    ];
}
