<?php

namespace App\Service;

use App\Event;

class EventService{

	public static function proximosEventos(){
		$events = Event::get();
		return $events;
	}

}