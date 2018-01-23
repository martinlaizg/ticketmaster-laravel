<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Genre;
use App\Service\GenreService;
use App\Category;

class GenreController extends Controller
{
    public function createGenreView() {
        $categories = Category::all()->lists('name', 'id');

        return view('create_genre', ['categories' => $categories]);
    }

    public function createGenre(Request $request) {
        $genre = new Genre();
        $genre->createGenre($request->name, $request->category);

        return redirect()->action('HomeController@adminZone');
    }

    public function deleteGenre($id) {

        GenreService::deleteChilds($id);
        Genre::borrarGenero($id);

        return redirect()->action('HomeController@adminZone');
    }

    public function editGenreView($id) {
        $e = Genre::findOrFail($id);
        $categories = Category::all()->lists('name', 'id');

        return view('edit_genre', ['genre' => $e, 'categories' => $categories]);
    }

    public function editGenre(Request $request, $id) {
        Genre::editGenre($request->name, $request->category, $id);

        return redirect()->action('HomeController@adminZone');
    }
}
