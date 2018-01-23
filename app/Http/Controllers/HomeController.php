<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Event;
use App\Category;
use App\Genre;
use App\Ubication;
use App\Show;

use App\Service\EventService;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
	}
	
	public function home()
	{
		$events = EventService::nextEvents();
		return view('main',[
			'events' => $events->paginate(20)
		]);
	}
	
    public function adminZone() {
        $events = Event::all();
        $genres = Genre::all();
        $categories = Category::all();
        $ubications = Ubication::all();
        $shows = Show::all();

        return view('adminZone', ['events'=>$events, 
            'categories'=>$categories, 'genres'=>$genres, 
            'ubications'=>$ubications, 'shows'=>$shows]);
    }
}
