<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller {

    function __construct() {
        $this->middleware('permission:ver-categoria|crear-categoria|editar-categoria|borrar-categoria', ['only' => ['index']]);
        $this->middleware('permission:crear-categoria', ['only' => ['create','store']]);
        $this->middleware('permission:editar-categoria', ['only' => ['edit','update']]);
        $this->middleware('permission:borrar-categoria', ['only' => ['destroy']]);
    }

    function index() {
        $data = DB::table('categories')->get();
        return view('categories.index',['data' => $data]);
    }

    function create() {

        return view('categories.create');
    }

    function store(Request $request) {

        $this->validate($request, [
            'name' => 'required|unique:categories,name'
        ]);

        Category::create($request->all());
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
