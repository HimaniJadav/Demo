<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/himani', function () {
    return view('welcome');
});


// admin Layut 

Route::get('/layout/admin_app', function () {
    return view('layout.admin_app');
 }); 