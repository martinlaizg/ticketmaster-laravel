<?php

namespace App\Service;

use Carbon\Carbon;
use DB;

use App\Event;
use App\Show;
use DB;

class EventService{

	public static function nextEvents(){
		//$events = Event::where('date', '>', Carbon::now())->get();
		$events = Event::get();
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
		//$events = DB::table('events')->join('shows', 'events.id', '=', 'shows.event_id');
		if($genre) {
			$events = $events->where('genre_id', $genre);
		}
		// if($date) {
		// 	$events = $events->where('date', $date);
		// }
		// dd($events->get());
		// if($ubication) {
		// 	$events = $events->where('ubication', $ubication);
		// }
		return $events;
	}

	public static function deleteChilds($eventId){
        $shows = DB::table('shows')->where('event_id', $eventId)->get();
        
        foreach ($shows as &$show) {
            Show::borrarShow($show->id);
        }
	}
}