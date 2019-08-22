<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Validator;
use App\User;

class UserController extends Controller
{
    public function index()
    {   
        $USERS = 'usuarios';//User::all();
        return view('users.index_users',compact('USERS'));
    }

    public function create()
    {
        return view('users.create_user');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        //
    }

    public function update(Request $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        //
    }
}
