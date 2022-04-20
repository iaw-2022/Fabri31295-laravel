<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Spatie\Dropbox\Client;
use Illuminate\Http\Request;
use Dcblogdev\Dropbox\Facades\Dropbox;

class ImageController extends Controller
{

    public function index() {

       // $contents = Dropbox::get("file_requests/get");
        return view('images');
    }

}
