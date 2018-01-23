<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Show;
use App\Event;
use App\Ubication;

class ShowController extends Controller
{
    public function createShowView() {
        $events = Event::all()->lists('name', 'id');
        $ubications = Ubication::all()->lists('location', 'id');

        return view('create_show', ['events' => $events, 'ubications' => $ubications]);
    }

    public function createShow(Request $request) {
        $show = new Show();
        $show->createShow($request->date, $request->event, $request->ubication);

        return redirect()->action('HomeController@adminZone');
    }

    public function deleteShow($id) {

        Show::borrarShow($id);

        return redirect()->action('HomeController@adminZone');
    }

    public function editShowView($id) {
        $e = Show::findOrFail($id);
        $events = Event::all()->lists('name', 'id');
        $ubications = Ubication::all()->lists('location', 'id');

        return view('edit_show', ['show' => $e, 'events' => $events, 'ubications' => $ubications]);
    }

    public function editShow(Request $request, $id) {
        Show::editShow($request->date, $request->event, $request->ubication, $id);

        return redirect()->action('HomeController@adminZone');
    }
}
