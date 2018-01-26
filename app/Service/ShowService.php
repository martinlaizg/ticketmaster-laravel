<?php

namespace App\Service;

use Carbon\Carbon;
use DB;

use App\Event;
use App\User;
use App\Show;
use App\Ticket;

class ShowService{

	public static function isOcupied($show, $col, $row) {
		$ticket = Ticket::where('show_id', '=', $show)
			->where('col', '=', $col)
			->where('row', '=', $row)
			->get();
		return count($ticket) != 0;
	}

	public static function buySeatTicket($showId, $userId, $col, $row) {
		$ticket = new Ticket();
		$ticket->col = $col;
		$ticket->row = $row;
		$ticket->show_id = $showId;
		$ticket->save();

		$ticket->user()->save(User::find($userId));
	}

	public static function buyTicket($show, $numTickets, $userId) {
		for($i=1; $i<=$numTickets; $i++) {
			$ticket = new Ticket();
			$ticket->show_id = $show;
			$ticket->save();
			$ticket->user()->save(User::find($userId));
		}
	}

	public static function deleteChilds($id) {
		$tickets = DB::table('tickets')->where('show_id', $id)->get();

		foreach($tickets as $ticket) {
			Ticket::borrarTicket($ticket->id);
		}
	}
}
