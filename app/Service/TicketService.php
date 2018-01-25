<?php

namespace App\Service;

use DB;
use Carbon\Carbon;

use App\Ticket;

class TicketService{

	public static function nextTickets($userId){
		$userTickets = DB::table('ticket_user')->where('user_id', '=', $userId)->pluck('ticket_id');
		$tickets = DB::table('tickets')
			->whereIn('tickets.id', $userTickets)
			->leftJoin('shows', 'tickets.show_id', '=', 'shows.id')
			->orderBy('date')
			->leftJoin('ubications', 'ubication_id', '=', 'ubications.id')
			->leftJoin('events', 'event_id', '=', 'events.id')
			->select('tickets.id as ticket_id', 'events.name as show_name',
			'shows.date as show_date', 'shows.id as show_id', 'ubications.seatable as seatable',
			'ubications.name as ubication', 'ubications.location as location', 'col', 'row')
			->where('shows.date','>', Carbon::now()->toDateString())
			->get();
		//dd($tickets);
		return $tickets;
	}

	public static function returnTicket($show, $col, $row) {
		$ticket = Ticket::where('show_id', $show)->where('col', $col)->where('row', $row)->first();
		if( $ticket ) {
			$ticket->delete();
			return true;
		}
		return false;
	}
}