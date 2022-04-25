<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    function index() {
        $data = DB::table('categories')->get();
        return view('categories.index',['data' => $data]);
    }

    function create() {

        return view('categories.create');
    }

    function store(Request $request) {

        $category = new Category();
        $category->name = $request->get('name');

        $category->save();

        return redirect('/categories');
    }

    function edit($id) {

        $category = Category::find($id);
        return view('categories.edit')->with('category',$category);
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->get('name');
        $category->save();

        return redirect('/categories');
    }

    function destroy($id) {

        $category = Category::find($id);
        $category->delete();

        return redirect('/categories');
    }
}
