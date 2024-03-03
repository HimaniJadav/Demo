<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Admins;
use app\Models\Feedback;

class AdminController extends Controller
{
    public function index()
    {

        return view('admin.admin_login');
    }


    public function auth(Request $request)
    {
        $email = $request->post('email');
        $password = $request->post('password');

        $result = Admins::where(['email' => $email, 'password' => $password])->get();
        if (isset($result['0']->id)) {
            $request->session()->put('admin_login', true);
            $request->session()->put('admin_login', $result['0']->id);
            return redirect('/admin/dashboard');
        } else {
            $request->session()->has('error', 'please enter valid login details');
            //  return redirect('/Admin/login');
            return back()->with('error', 'please enter valid login details.');
        }
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
