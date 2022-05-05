<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function index() {
        $data = DB::table('users')->get();
        return view('users.index',['data' => $data]);
    }
}
