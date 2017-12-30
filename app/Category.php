<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function genre()
    {
        return $this->belongsTo('App\Genre');
    }

    protected $fillable = [
        'name'
    ];
}
