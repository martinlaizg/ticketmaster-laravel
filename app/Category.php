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

    public function createCategory($name, $genre) {
    
        $this->name = $name;

        $this->genre_id = $genre[0] + 1;

        $this->save();
    }

    public static function borrarCategoria($id) {
        $e = Category::find($id);
        $e->delete();
    }

    public static function editCategory($name, $genre, $id) {

        $e = Category::find($id);

        if($name != null)
            $e->name = $name;
            
        $e->genre_id = $genre[0] + 1;

        $e->save();
    }
}
