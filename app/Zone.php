<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    protected $table = 'zones';

    public function seats()
    {
        return $this->hasMany('App\Seat');
    }

    public function ubication()
    {
        return $this->belongsTo('App\Ubication');
    }

    protected $fillable = [
        'name'
    ];
}
