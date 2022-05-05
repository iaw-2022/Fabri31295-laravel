<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    function index() {
        $data = DB::table('categories')->get();
        return view('categories.index',['data' => $data]);
    }
}
