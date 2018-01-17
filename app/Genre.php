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

    public function categories()
    {
        return $this->hasMany('App\Category');
    }

    protected $fillable = [
        'name'
    ];

    public function createGenre($name) {
    
        $this->name = $name;

        $this->save();
    }

    public static function borrarGenero($id) {
        $e = Genre::find($id);
        $e->delete();
    }

    public static function editGenre($name, $id) {

        $e = Genre::find($id);

        if($name != null)
            $e->name = $name;

        $e->save();
    }
}
