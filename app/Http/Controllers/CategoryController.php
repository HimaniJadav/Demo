<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function create()
    {
        return view('admin.category.create');
    }
    function store(Request $req)
    {
        $req->validate([
            'name' => 'required',
        ]);
        $category =  new Category();
        $category->name = $req->name;

        $category->photo = time() . '.' . $req->photo->extension();
        $req->photo->move(public_path('category'), $category->photo);

        $category->save();
        return redirect()->back()
            ->with('success', 'category created successfully.');
    }
    function index()
    {
        $cdata = Category::all();
        return view('admin.category.index', compact('cdata'));
    }
    function delete($id)
    {
        $cdata = Category::find($id);
        $cdata->delete();
        // return redirect('admin/category/index');
        return redirect()->back()
            ->with('success', 'category deleted successfully.');
    }
    function edit($id)
    {
        $cadata = Category::find($id);
        return view('admin.category.edit', compact('cadata'));
    }
    function update(Request $req)
    {
        $req->validate([
            'name' => 'required',
        ]);

        $id = $req->id;
        $category = Category::find($id);
        $category->name = $req->name;
        $category->photo = time() . '.' . $req->photo->extension();
        $req->photo->move(public_path('/category'), $category->photo);

        $category->save();
        return redirect()->back()
            ->with('success', 'category updated successfully.');
    }
}
