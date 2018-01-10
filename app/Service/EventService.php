<?php

namespace App\Service;

use App\Event;

class EventService{

	public static function createEvent($name, $description, $genre_id){
		$event = new Event();
		$event->name = $name;
		$event->description = $description;
		$event->genre_id = $genre_id;
		$event->save();
		return $event;
	}

}