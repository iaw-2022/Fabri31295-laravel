<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Resolution;

class ResolutionController extends Controller
{
    function index() {
        $data = DB::table('resolutions')->get();
        return view('resolutions.index',['data' => $data]);
    }

    function create() {

        return view('resolutions.create');
    }

    function store(Request $request) {

        $resolution = new Resolution();
        $resolution->name = $request->get('name1').'x'.$request->get('name2');
        $resolution->aspect_ratio = $request->get('aspect_ratio');

        $resolution->save();

        return redirect('/resolutions');
    }

    function edit($id) {

        $resolution = Resolution::find($id);
        $array = explode('x',$resolution->name,2);
        return view('resolutions.edit')
            ->with('resolution',$resolution)
            ->with('name1',$array[0])
            ->with('name2',$array[1]);
    }

    public function update(Request $request, $id)
    {
        $resolution = Resolution::find($id);
        $resolution->name = $request->get('name1').'x'.$request->get('name2');
        $resolution->aspect_ratio = $request->get('aspect_ratio');
        $resolution->save();

        return redirect('/resolutions');
    }

    function destroy($id) {

        $resolution = Resolution::find($id);
        $resolution->delete();

        return redirect('/resolutions');
    }

}
