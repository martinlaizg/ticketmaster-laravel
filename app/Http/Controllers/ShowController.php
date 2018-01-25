<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Show;
use App\Event;
use App\Ubication;

use App\Service\ShowService;
use App\Service\TicketService;

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
        Show::editShow($request->date, $request->event[0], $request->ubication[0], $id);

        return redirect()->action('HomeController@adminZone');
	}

	public function getShow(Request $request, $id) {
		$show = Show::find($id);

		return view('event.show', ['show' => $show]);
	}

	public function buySeatableTickets(Request $request, $id) {
		$inputs = $request->all();
		unset($inputs['_token']);
		
		foreach( $inputs as $seat => $value ){
			$col = explode("-", $seat)[0];
			$row = explode("-", $seat)[1];
			if( ShowService::isOcupied($id, $col, $row) ) {
				return redirect()->back()->withErrors(['message' => 'Ese asiento está ocupado.'])->withInput();
			}
		}

		foreach( $inputs as $seat => $value ){
			$col = explode("-", $seat)[0];
			$row = explode("-", $seat)[1];
			ShowService::buySeatTicket($id, Auth::user()->id, $col, $row);
		}
		return redirect()->action('ShowController@getShow', $id);
	}

	public function returnTicket(Request $request, $id){
		$returned = TicketService::returnTicket($id, $request->col, $request->row);
		if($returned) {
			return redirect()->back();
		}
		return redirect()->back()->withErrors(['error' => 'Ticket fail']);
	}
}
