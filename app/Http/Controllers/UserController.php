<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   
        return view('users.index_users',['users' => User::paginate(10)]);
    }

    public function create()
    {
        return view('users.create_user',['roles' => Role::all()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'role_id' => 'required'
        ]);

        User::create($request->all());
        return redirect()->action([UserController::class,'index'])->with('success','Usuario creado correctamente!...');
    }

    public function show($id)
    {
        return view('users.show_user', ['user' => User::findOrFail($id)]);
    }

    public function edit($id)
    {
        return view('users.edit_user',['user' => User::findOrFail($id), 'roles' => Role::all()]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role_id' => 'required'
        ]);

        User::findOrFail($id)->update($request->all());
        return redirect()->action([UserController::class,'index'])->with('success', 'Usuario actualizado correctamente!...');
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->action([UserController::class,'index'])->with('success', 'Usuario eliminado correctamente...');
    }
}
