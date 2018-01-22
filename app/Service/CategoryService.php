<?php

namespace App\Service;

use App\Genre;
use App\Event;
use App\Category;
use App\Service\GenreService;
use DB;

class CategoryService{

	public static function deleteChilds($categoryId){
        $genres = DB::table('genres')->where('category_id', $categoryId)->get();

        foreach ($genres as &$genre) {
            GenreService::deleteChilds($genre->id);
            Genre::borrarGenero($genre->id);
        }
	}
}