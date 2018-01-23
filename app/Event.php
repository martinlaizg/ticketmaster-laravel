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
        'name', 'description', 'image'
    ];

    public function createEvent($name, $description, $genre) {
    
        $this->name = $name;
        $this->description = $description;
        $this->genre_id = $genre;

        $this->save();
    }

    public static function borrarEvento($id) {
        $e = Event::find($id);
        $e->delete();
    }

    public static function editEvent($name, $description, $genre, $id) {

        $e = Event::find($id);

        if($name != null)
            $e->name = $name;

        if($description != null)
            $e->description = $description;

        $e->genre_id = $genre;

        $e->save();
    }
}
