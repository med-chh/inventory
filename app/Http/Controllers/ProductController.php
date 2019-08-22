<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Validator;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $PRODUCTS = 'productos';//Product::all();
        return view('products.index_products',compact('PRODUCTS'));
    }

    public function create()
    {
        return view('products.create_product');
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
