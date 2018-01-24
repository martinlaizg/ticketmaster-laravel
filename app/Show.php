<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Service\ShowService;

class Show extends Model
{
    protected $table = 'shows';

    public function tickets()
    {
        return $this->hasMany('App\Ticket');
    }

    public function event()
    {
        return $this->belongsTo('App\Event');
    }

    public function ubication()
    {
        return $this->belongsTo('App\Ubication');
    }

    protected $fillable = [
		'date',
		'price'
    ];

    public function createShow($date, $event, $ubication) {
    
        $this->date = $date;

        $this->event_id = $event;

        $this->ubication_id = $ubication;

        $this->save();
    }

    public static function borrarShow($id) {
        $e = Show::find($id);
        $e->delete();
    }

    public static function editShow($date, $event, $ubication, $id) {

        $e = Show::find($id);

        if($date != null)
            $e->date = $date;

        $e->event_id = $event;

        $e->ubication_id = $ubication;

        $e->save();
	}
	
	public function isOcupied($id, $col, $row) {
		return ShowService::isOcupied($id, $col, $row);
	}
}
