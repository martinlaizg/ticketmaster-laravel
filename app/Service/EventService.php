<?php

namespace App\Service;

use Carbon\Carbon;
use DB;

use App\Event;
use App\Show;

class EventService{

	public static function nextEvents(){
		$events = Event::whereHas('shows', function($query) {
			$query->whereDate('date', '>=', Carbon::today()->toDateString());
		});
		return $events;
	}
	
	public static function createEvent($name, $description, $genre_id){
		$event = new Event();
		$event->name = $name;
		$event->description = $description;
		$event->genre_id = $genre_id;
		$event->save();
		return $event;
	}

	public static function getEventsFilter($genre, $date, $ubication){
		$events = Event::with('shows');

		if($genre) {
			$events = $events->where('genre_id', $genre);
		}

		if($date) {
			$events = $events->whereHas('shows', function($query) use($date) {
				$query->whereDate('date', '=', $date);
			});
		}
		else {
			$events = $events->whereHas('shows', function($query) {
				$query->whereDate('date', '>=', Carbon::today()->toDateString());
			});
		}

		if($ubication) {
			$events = $events->where('ubication', $ubication);
		}

		return $events;
	}

	public static function deleteChilds($eventId){
        $shows = DB::table('shows')->where('event_id', $eventId)->get();
        
        foreach ($shows as &$show) {
            Show::borrarShow($show->id);
        }
	}
}