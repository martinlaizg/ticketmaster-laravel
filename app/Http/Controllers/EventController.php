<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Event;

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

		$event = new Event();
		$event->name = $request->name;
		$event->description = $request->description;
		$event->save();
		return redirect()->action('EventController@getCreateForm');
	}
}
