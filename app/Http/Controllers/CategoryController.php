<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories.index_categories',['categories' => Category::all()]);
    }

    public function create()
    {
        return view('categories.create_category');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories'
        ]);

        Category::create($request->all());
        return redirect()->action([CategoryController::class,'index'])->with('success','Categoria creada correctamente!...');
    }

    public function edit($id)
    {
        return view('categories.edit_category',['category' => Category::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);
        Category::findOrFail($id)->update($request->all());
        return redirect()->action([CategoryController::class,'index'])->with('success','Categoria actualizada correctamente!...');
    }

    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return redirect()->action([CategoryController::class,'index'])->with('success','Categoria eliminada correctamente!...');
    }
}
