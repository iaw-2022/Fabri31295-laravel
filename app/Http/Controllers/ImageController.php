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

}
