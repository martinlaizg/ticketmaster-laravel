<?php

namespace App\Service;

use App\User;

class UserService{
	public static function nextEvents($id){
		$events = User::find($id)->tickets->toArray();
		//dd($events);
		return $events;
	}
}