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

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    protected $fillable = [
        'name'
    ];

    public function createGenre($name, $category) {
    
        $this->name = $name;

        $this->category_id = $category;

        $this->save();
    }

    public static function borrarGenero($id) {
        $e = Genre::find($id);
        $e->delete();
    }

    public static function editGenre($name, $category, $id) {

        $e = Genre::find($id);

        if($name != null)
            $e->name = $name;

        $e->category_id = $category;

        $e->save();
    }
}
