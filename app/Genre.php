<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres';

    public function events()
    {
        return $this->hasMany('App\Event');
    }

    protected $fillable = [
        'name'
    ];
}
