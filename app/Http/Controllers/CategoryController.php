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

    public function editCategoryView($id) {
        $genres = Genre::all()->lists('name');
        $e = Category::findOrFail($id);

        return view('edit_category', ['category' => $e, 'genres' => $genres]);
    }

    public function editCategory(Request $request, $id) {
        Category::editCategory($request->name, $request->genre, $id);

        return redirect()->action('HomeController@adminZone');
    }
}
