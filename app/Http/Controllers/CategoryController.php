<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Category;
use App\Service\CategoryService;

class CategoryController extends Controller
{
    public function createCategoryView() {

        return view('create_category');
    }

    public function createCategory(Request $request) {
        $category = new Category();
        $category->createCategory($request->name);

        return redirect()->action('HomeController@adminZone');
    }

    public function deleteCategory($id) {
        CategoryService::deleteChilds($id);
        Category::borrarCategoria($id);

        return redirect()->action('HomeController@adminZone');
    }

    public function editCategoryView($id) {
        $e = Category::findOrFail($id);

        return view('edit_category', ['category' => $e]);
    }

    public function editCategory(Request $request, $id) {
        Category::editCategory($request->name, $id);

        return redirect()->action('HomeController@adminZone');
    }
}
