<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Spatie\Dropbox\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;

class ImageController extends Controller
{

    public function index($path = '/images') {

        $data = DB::table('images')->get();
        return view('images',['data' => $data]);
    }

}
