<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    function create()
    {
        return view('admin.gallery.create');
    }
    function store(Request $req)
    {
        $req->validate([
            'name' => 'required',
        ]);
        $gallery =  new gallery();
        $gallery->name = $req->name;

        $gallery->photo = time() . '.' . $req->photo->extension();
        $req->photo->move(public_path('gallery'), $gallery->photo);

        $gallery->save();
        return redirect()->back()
            ->with('success', 'gallery created successfully.');
    }
    function index()
    {
        $gdata = gallery::all();
        return view('admin.gallery.index', compact('gdata'));
    }
    function delete($id)
    {
        $gdata = gallery::find($id);
        $gdata->delete();
        return redirect()->back()
            ->with('success', 'gallery deleted successfully.');
    }
    function edit($id)
    {
        $gadata = gallery::find($id);
        return view('admin.gallery.edit', compact('gadata'));
    }
    function update(Request $req)
    {
        $req->validate([
            'name' => 'required',
        ]);

        $id = $req->id;
        $gallery = gallery::find($id);
        $gallery->name = $req->name;
        $gallery->photo = time() . '.' . $req->photo->extension();
        $req->photo->move(public_path('/gallery'), $gallery->photo);

        $gallery->save();
        return redirect()->back()
            ->with('success', 'gallery updated successfully.');
    }
}
