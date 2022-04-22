<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Spatie\Dropbox\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;

class ImageController extends Controller
{

    public function index() {

        $data = DB::table('images')->get();
        return view('images',['data' => $data]);
    }

    public function preview($path = '/images') {


        //$image = Storage::disk('dropbox')->read('/images/'.$item->name.'-preview.jpg');
        //$imgData = base64_encode($image);
        //$array[] = $imgData;


    }

}
