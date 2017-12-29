<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubication extends Model
{
    protected $table = 'ubications';

    public function shows()
    {
        return $this->hasMany('App\Show');
    }

    public function zones()
    {
        return $this->hasMany('App\Zone');
    }

    protected $fillable = [
        'ubication'
    ];
}
