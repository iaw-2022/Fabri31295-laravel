<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\Dropbox\Client;
use App\Models\Image;

class ImageController extends Controller
{

    public function __construct() {

        $this->dropbox = Storage::disk('dropbox')->getDriver()->getAdapter()->getClient();

    }

    public function index() {
        $images = Image::orderBy('created_at', 'desc')->get();

        return view('images', compact('images'));
    }

}
