<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

use App\Service\UserService;

class UserController extends Controller
{
	public function getUpdateForm() {
		return view('home');
	}

	public function getProfile() {
		$user = Auth::user();
		return view('user.profile', [
			'user' => $user,
			'nextTickets' => UserService::nextTickets($user->id)
		]);
	}
}
