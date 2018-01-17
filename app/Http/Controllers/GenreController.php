<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Genre;
use App\Service\GenreService;

class GenreController extends Controller
{
    public function createGenreView() {
        return view('create_genre');
    }

    public function createGenre(Request $request) {
        $genre = new Genre();
        $genre->createGenre($request->name);

        return redirect()->action('HomeController@adminZone');
    }

    public function deleteGenre($id) {

        GenreService::deleteChilds($id);
        Genre::borrarGenero($id);

        return redirect()->action('HomeController@adminZone');
    }

    public function editGenreView($id) {
        $e = Genre::findOrFail($id);

        return view('edit_genre', ['genre' => $e]);
    }

    public function editGenre(Request $request, $id) {
        Genre::editGenre($request->name, $id);

        return redirect()->action('HomeController@adminZone');
    }
}
