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

    public function createUbication($ubication) {
        $this->location = $ubication;

        $this->save();
    }

    public static function borrarUbicacion($id) {
        $e = Ubication::find($id);
        $e->delete();
    }

    public static function editUbication($ubication, $id) {
        $e = Ubication::find($id);

        if($ubication != null) 
            $e->location = $ubication;

        $e->save();
    }
}
