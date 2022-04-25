<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as InterventionImage;

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

        $image = new Image();
        $image->name = $request->get('name');
        $image->date = $request->get('date');
        $image->category = $request->get('category');
        $image->resolution = $request->get('resolution');

        Storage::disk('google')->insert($request->image);
        $image->url = Storage::disk('google')->url($image->name);



        $image->save();

        return redirect('/images');
    }

    function edit($id) {

        $image = Image::find($id);
        return view('images.edit')->with('image',$image);
    }

    public function update(Request $request, $id)
    {
        $resolution = Image::find($id);
        $image->name = $request->get('name');
        $image->date = $request->get('date');
        $image->category = $request->get('category');
        $image->resolution = $request->get('resolution');
        $resolution->save();

        return redirect('/resolutions');
    }

    function destroy($id) {

        $image = Image::find($id);
        $image->delete();

        return redirect('/images');
    }

}
