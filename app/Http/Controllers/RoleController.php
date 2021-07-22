<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        return view('roles.index_roles',['roles' => Role::all()]);
    }

    public function create()
    {
        return view('roles.create_role');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles'
        ]);

        Role::create($request->all());
        return redirect()->action([RoleController::class,'index'])->with('success', 'Rol creado exitosamente!...');
    }

    public function show($id)
    {
        return view('roles.show_role',['role' => Role::findOrFail($id)]);
    }

    public function edit($id)
    {
        return view('roles.edit_role',['role' => Role::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        Role::findOrFail($id)->update($request->all());
        return redirect()->action([RoleController::class,'index'])->with('success','Rol actualizado correctamente!...');
    }

    public function destroy($id)
    {
        Role::findOrFail($id)->delete();
        return redirect()->action([RoleController::class,'index'])->with('success','Rol eliminado exitosamente!...');
    }
}
