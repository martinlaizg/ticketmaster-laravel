<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Event;
use App\Category;
use App\Genre;

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
    public function adminZone() {
        $events = Event::all();
        $genres = Genre::all();
        $categories = Category::all();

        return view('adminZone', ['events'=>$events, 
            'categories'=>$categories, 'genres'=>$genres]);
    }
}
