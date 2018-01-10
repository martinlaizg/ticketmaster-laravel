<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Event;
use App\Service\EventService;

class EventController extends Controller
{
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
}
