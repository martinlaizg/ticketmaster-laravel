<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Event;
use App\Service\EventService;
use App\Genre;

class EventController extends Controller
{
    public function createEventView() {

        $genres = Genre::all()->lists('name');

        return view('create_event', ['genres' => $genres]);
    }

    public function createEvent(Request $request) {
        $event = new Event();
        $event->createEvent($request->name, $request->description, $request->genre);    

        return redirect()->action('HomeController@adminZone');
    }

    public function deleteEvent($id) {
        Event::borrarEvento($id);

        return redirect()->action('HomeController@adminZone');
    }

    /**
     * Devolver formulario creación de evento
     * 
     */
    public function getCreateForm() {
		return view('event.create');
	}

	/**
	 * Crear evento
	 */
    public function createForm(Request $request) {
		$this->validate($request, [
			'name' => 'required|max:50|unique:events',
			'description' => 'required|max:1000'
		]);

		$event = EventService::createEvent($request->name, $request->description, $request->genre_id);
		return redirect()->action('EventController@getCreateForm');
    }
    
    public function editEventView($id) {
        $genres = Genre::all()->lists('name');
        $e = Event::findOrFail($id);

        return view('edit_event', ['event' => $e, 'genres' => $genres]);
    }

    public function editEvent(Request $request, $id) {
        Event::editEvent($request->name, $request->description, $request->genre, $id);

        return redirect()->action('HomeController@adminZone');
    }
}
