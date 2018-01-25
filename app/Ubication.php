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

    public function createUbication($name, $ubication, $seatable, $rows, $cols) {

        $this->name = $name;
        $this->location = $ubication;
        $this->seatable = $seatable;
        $this->rows = $rows;
        $this->cols = $cols;
        $this->seats = $rows * $cols;

        $this->save();
    }

    public static function borrarUbicacion($id) {
        $e = Ubication::find($id);
        $e->delete();
    }

    public static function editUbication($name, $ubication, $seatable, $rows, $cols, $id) {
        $e = Ubication::find($id);

        $e->name = $name;

        if($ubication != null) 
            $e->location = $ubication;

        $e->seatable = $seatable;
        $e->rows = $rows;
        $e->cols = $cols;
        $e->seats = $rows * $cols;

        $e->save();
    }
}
