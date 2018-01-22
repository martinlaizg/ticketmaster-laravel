<?php

namespace App\Service;

use App\Genre;
use App\Event;
use App\Category;
use DB;

class GenreService{

	public static function deleteChilds($genreId){
        $events = DB::table('events')->where('genre_id', $genreId)->get();
        
        foreach ($events as &$event) {
            Event::borrarEvento($event->id);
        }
	}
}