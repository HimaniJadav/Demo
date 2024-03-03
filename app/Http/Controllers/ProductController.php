<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    function create()
    {
        $category = Category::all();
        return view('admin.products.create', compact('category'));
    }
    function store(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'detail' => 'required',
            'price' => 'required',
            'description' => 'required',


        ]);
        $products =  new Product();
        $products->name = $req->name;
        $products->detail = $req->detail;
        $products->price = $req->price;
        $products->c_id = $req->c_id;

        $products->description = $req->description;
        $products->image = time() . '.' . $req->image->extension();
        $req->image->move(public_path('product'), $products->image);


        $products->save();
        return redirect()->back()
            ->with('success', 'product created successfully.');
    }

    function index()
    {
        $product = Product::all();
        return view('admin.products.index', compact('product'));
    }
    function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back()
            ->with('success', 'products deleted successfully.');
    }
    function edit($id)
    {
        $eproduct = Product::find($id);
        $category = Category::find($id);

        return view('admin.products.edit', compact('category', 'eproduct'));
    }
    function update(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'detail' => 'required',
            'price' => 'required',
            'description' => 'required',

        ]);
        $id = $req->id;
        $products =  new Product();
        $products->name = $req->name;
        $products->detail = $req->detail;
        $products->price = $req->price;
        $products->c_id = $req->c_id;

        $products->description = $req->description;
        $products->image = time() . '.' . $req->image->extension();
        $req->image->move(public_path('product'), $products->image);


        $products->save();
        return redirect()->back()
            ->with('success', 'Product updated successfully.');
    }
}
