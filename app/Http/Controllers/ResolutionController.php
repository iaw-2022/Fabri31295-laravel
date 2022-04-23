<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResolutionController extends Controller
{
    function index() {
        $data = DB::table('resolutions')->get();
        return view('resolutions.index',['data' => $data]);
    }
}
