<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function genres()
    {
        return $this->hasMany('App\Genre');
    }

    protected $fillable = [
        'name'
    ];

    public function createCategory($name) {
    
        $this->name = $name;

        $this->save();
    }

    public static function borrarCategoria($id) {
        $e = Category::find($id);
        $e->delete();
    }

    public static function editCategory($name, $id) {

        $e = Category::find($id);

        if($name != null)
            $e->name = $name;

        $e->save();
    }
}
