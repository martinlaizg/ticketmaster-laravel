<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

class UserController extends Controller
{
	public function getProfile() {
		return view('user.profile', [
			'user' => Auth::user()
		]);
	}
}
