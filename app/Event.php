<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    public function shows()
    {
        return $this->hasMany('App\Show');
    }

    public function genre()
    {
        return $this->belongsTo('App\Genre');
    }

    protected $fillable = [
        'name', 'description'
    ];

    public function createEvent($name, $description, $genre) {
    
        $this->name = $name;
        $this->description = $description;
        $this->genre_id = $genre[0];

        $this->save();
    }

    public static function borrarEvento($id) {
        $e = Event::find($id);
        $e->delete();
    }
}
