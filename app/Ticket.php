<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'tickets';

    public function user()
    {
        return $this->belongsToMany('App\User');
    }

    public function seat()
    {
        return $this->belongsTo('App\Seat');
    }

    public function show()
    {
        return $this->belongsTo('App\Show');
    }

    public function payment()
    {
        return $this->belongsTo('App\PaymentMethod');
    }


}
