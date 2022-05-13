<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PermissionController extends Controller {

    function __construct() {
        $this->middleware('permission:ver-permiso|crear-permiso|editar-permiso|borrar-permiso', ['only' => ['index']]);
        $this->middleware('permission:crear-permiso', ['only' => ['create','store']]);
        $this->middleware('permission:editar-permiso', ['only' => ['edit','update']]);
        $this->middleware('permission:borrar-permiso', ['only' => ['destroy']]);
    }

    public function index() {
        $data = DB::table('permissions')->get();

        return view('permissions.index',['data' => $data]);
    }

    public function create() {
        return view('permissions.create');
    }

    public function store(Request $request) {

        $validatedData = $request->validate([
            'name' => ['required', 'unique:permissions', 'max:255'],
        ]);
        Permission::create($request->all());

        return redirect('/permissions');
    }

    public function edit(Permission $permission) {
        return view('permissions.edit', ['permission' => $permission]);
    }

    public function update(Request $request, Permission $permission) {
        $permission->update($request->all());

        return redirect('/permissions');
    }

    public function destroy(Permission $permission) {
        $permission->delete();
        return redirect('/permissions');
    }

}
