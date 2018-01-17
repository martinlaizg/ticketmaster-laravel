<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Category;
use App\Genre;

class CategoryController extends Controller
{
    public function createCategoryView() {

        $genres = Genre::all()->lists('name');

        return view('create_category', ['genres' => $genres]);
    }

    public function createCategory(Request $request) {
        $category = new Category();
        $category->createCategory($request->name, $request->genre);

        return redirect()->action('HomeController@adminZone');
    }

    public function deleteCategory($id) {
        Category::borrarCategoria($id);

        return redirect()->action('HomeController@adminZone');
    }
}
