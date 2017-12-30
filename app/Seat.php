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

    public function zone()
    {
        return $this->belongsTo('App\Zone');
    }

    protected $fillable = [
        'row', 'column'
    ];
}
