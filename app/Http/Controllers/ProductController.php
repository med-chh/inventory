<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('products.index_products',['poducts' => Product::paginate(20)]);
    }

    public function create()
    {
        return view('products.create_product',['categories' => Category::all()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'quantity' => 'required|numeric',
            'buy_price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'category_id' => 'required|numeric',
            'media_id' => 'required'
        ]);

        Product::create($request->all());
        return redirect()->action([ProductController::class,'index'])->with('success','Producto creado correctamente!...');
    }

    public function show($id)
    {
        return view('products.show_product',['product' => Product::findOrFail($id)]);
    }

    public function edit($id)
    {
        return view('products.edit_product',['product' => Product::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'quantity' => 'required|numeric',
            'buy_price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'category_id' => 'required|numeric',
            'media_id' => 'required'
        ]);

        Product::findOrFail($id)->update($request->all());
        return redirect()->action([ProductController::class,'index'])->with('success','Producto actualizado correctamente!...');
    }

    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return redirect()->action([Product::class,'index'])->with('success','Producto eliminado correctamente!...');
    }
}
