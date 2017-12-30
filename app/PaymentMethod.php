<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $table = 'payment_methods';

    public function tickets()
    {
        return $this->hasMany('App\Ticket');
    }

    protected $fillable = [
        'name', 'apiURL'
    ];
}
