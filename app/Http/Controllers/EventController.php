<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Event;
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
}
