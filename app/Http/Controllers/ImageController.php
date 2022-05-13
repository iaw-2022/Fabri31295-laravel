<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller {

    function __construct() {
        $this->middleware('permission:ver-imagen|crear-imagen|editar-imagen|borrar-imagen', ['only' => ['index','show']]);
        $this->middleware('permission:crear-imagen', ['only' => ['create','store']]);
        $this->middleware('permission:editar-imagen', ['only' => ['edit','update']]);
        $this->middleware('permission:borrar-imagen', ['only' => ['destroy']]);
    }

    public function index() {

        $data = DB::table('images')->get();
        return view('images.index',['data' => $data]);
    }

    function show($id) {
        $image = Image::find($id);

        return view('images.show',['image' => $image]);
    }

    function create() {

        $categories = DB::table('categories')->get();
        $resolutions = DB::table('resolutions')->get();

        return view('images.create',['categories' => $categories, 'resolutions' => $resolutions]);
    }

    function store(Request $request) {

        $filepath = $_FILES['newImage']['name'];
        $imagen = file_get_contents($request->file('newImage'));
        Storage::disk('google')->put($filepath,$imagen);

        $image = new Image();
        $image->name = $request->get('name');
        $image->filename = $filepath;
        $image->extension = pathinfo($filepath, PATHINFO_EXTENSION);
        $image->date = $request->get('date');
        $image->price = $request->get('price');
        $image->description = $request->get('description');
        $image->url = Storage::disk('google')->url($filepath);
        $image->category = $request->get('category');
        $image->resolution = $request->get('resolution');
        $image->save();

        return redirect('/images');
    }

    function edit($id) {

        $image = Image::find($id);
        $categories = DB::table('categories')->get();
        $resolutions = DB::table('resolutions')->get();

        return view('images.edit',['image' => $image,'categories' => $categories, 'resolutions' => $resolutions]);
    }

    function update(Request $request, $id) {

        $image = Image::find($id);

        if($_FILES["newImage"]["error"] != 4) {
            $filepath = $_FILES['newImage']['name'];

            if(strcmp($filepath, $image->filename) !== 0) {  // si la imagen subida es nueva
                Storage::disk('google')->delete($image->filename);
                $newimagen = file_get_contents($request->file('newImage'));
                Storage::disk('google')->put($filepath,$newimagen);
                $image->filename = $filepath;
                $image->url = Storage::disk('google')->url($filepath);
                $image->extension = pathinfo($filepath, PATHINFO_EXTENSION);
            }
        }

        $image->name = $request->get('name');
        $image->date = $request->get('date');
        $image->price = $request->get('price');
        $image->description = $request->get('description');
        $image->category = $request->get('category');
        $image->resolution = $request->get('resolution');
        $image->save();

        return redirect('/images');
    }

    function destroy($id) {
        $image = Image::find($id);
        Storage::disk('google')->delete($image->filename);
        $image->delete();

        return redirect('/images');
    }

}
