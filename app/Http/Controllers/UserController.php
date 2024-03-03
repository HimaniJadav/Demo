<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function home()
    {
        return view("user.home");
    }
    function blog()
    {
        return view("user.blog");
    }
    function user_view_gallery()
    {
            $gat = Gallery::inRandomOrder()->take(8)->get();
        return view('user.user_view_gallery', compact('gat'));
    }
    function user_view_category()
    {
        // $cat = Category::all();  
        $cat = Category::inRandomOrder()->take(8)->get();
        return view('user.user_view_category', compact('cat'));
    }
    function user_view_products()
    {
        // $pro = Product::all();
        $pro = Product::inRandomOrder()->take(8)->get();
        return view('user.user_view_products', compact('pro'));
    }
    function user_view_product_details($id)
    {
        $product = Product::find($id);
        $cat = Category::find($id);
        return view('user.user_view_product_details', compact('product', 'cat',));
    }
    function index_users()
    {
        $users = User::all();
        return view('admin.index_user', compact('users'));
    }
    function register()
    {
        return view('user.register');
    }
    function register_code(Request $request)
    {
        $request->validate([
            'name' => 'required',

            'email' => 'required',
            'password' => 'required',
            'mobile_no' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->mobile_no = $request->mobile_no;
        $user->save();
        return redirect('user/user_login');
    }
    public function index()
    {
        return view('user.user_login');
    }
}
