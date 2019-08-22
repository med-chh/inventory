<?php

namespace App\Http\Controllers;

use App\Groups;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    public function index()
    {
        return view('groups.index_groups');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Groups $groups)
    {
        //
    }

    public function edit(Groups $groups)
    {
        //
    }

    public function update(Request $request, Groups $groups)
    {
        //
    }

    public function destroy(Groups $groups)
    {
        //
    }
}
