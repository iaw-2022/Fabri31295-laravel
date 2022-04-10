<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Spatie\Dropbox\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{

    public function __construct() {

        //$this->dropbox = Storage::disk('dropbox')->getDriver()->getAdapter()->getClient();

    }

    public function index() {
       // $images_dropbox = Image::orderBy('id', 'desc')->get();
       // return view('images', compact('images_dropbox'));
       return view('images');
    }

}
