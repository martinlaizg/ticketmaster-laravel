<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $table = 'seats';

    public function tickets()
    {
        return $this->hasMany('App\Ticket');
    }

    protected $fillable = [
        'row', 'column'
    ];
}
