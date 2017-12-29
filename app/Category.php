<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function genre()
    {
        return $this->belongsTo('App\Genre');
    }

    protected $fillable = [
        'name'
    ];
}
