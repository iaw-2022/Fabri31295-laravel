<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Password;
use App\Models\User;

class UserController extends Controller
{
    function index() {
        $data = DB::table('users')->get();
        return view('users.index',['data' => $data]);
    }

    function create() {

        return view('users.create');
    }

    function store(Request $request) {

        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');

        $user->save();

        return redirect('/users');
    }

    function edit($id) {

        $user = User::find($id);
        return view('users.edit')->with('user',$user);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->save();

        return redirect('/users');
    }

    function destroy($id) {

        $user = User::find($id);
        $user->delete();

        return redirect('/users');
    }
}
