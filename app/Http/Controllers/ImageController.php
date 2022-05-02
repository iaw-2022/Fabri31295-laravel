<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{

    public function index() {

        $data = DB::table('images')->get();
        return view('images.index',['data' => $data]);
    }

    function create() {

        $categories = DB::table('categories')->get();
        $resolutions = DB::table('resolutions')->get();

        return view('images.create',['categories' => $categories, 'resolutions' => $resolutions]);
    }

    function store(Request $request) {

        $filepath = $_FILES['newImage']['name'];
        $filename = pathinfo($filepath, PATHINFO_FILENAME);
        $extension = pathinfo($filepath, PATHINFO_EXTENSION);
        $name = $filename.'.'.$extension;
        $imagen = exif_thumbnail($request->file('newImage'), $width, $height, $type);
        Storage::disk('google')->put($name,$imagen);


        $image = new Image();
        $image->name = $request->get('name');
        $image->filename = $name;
        $image->date = $request->get('date');
        $image->price = $request->get('price');
        $image->url = Storage::disk('google')->url($name);
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

        $name = $request->file('newImage')->getClientOriginalName();
        $image = Image::find($id);

        if(strcmp($name, $image->filename) !== 0) {
            Storage::disk('google')->delete($imagen->filename);
            $newimagen = exif_thumbnail($request->file('newImage'), $width, $height, $type);
            Storage::disk('google')->put($name,$newimagen);
            $image->filename = $name;
        }

        $image->name = $request->get('name');
        $image->date = $request->get('date');
        $image->price = $request->get('price');
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
