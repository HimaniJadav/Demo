<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;



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
Route::get('/layout/index', function () {
    return view('layout.index');
});

Route::get('/layouts/user', function () {
    return view('layouts.user');
});

Route::get('/', function () {
    return view('visitor');
});




Route::get('admin/admin_login', [AdminController::class, 'index'])->name('admin.admin_login');
Route::post('admin/auth', [AdminController::class, 'auth'])->name('admin.auth');
Route::group(
    ['middleware' => 'admin_auth'],
    function () {
        Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

        // logout
        Route::get('admin/logout', function () {
            session()->forget('admin_login');
            session()->forget('admin_id');
            session()->has('error', 'logout successfull');

            return redirect('/admin/admin_login');
        });
    }
);

// admin ends 



// admin Layut 

Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

// ADMIN START
Route::get('admin/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
Route::post('admin/category/store', [CategoryController::class, 'store'])->name('admin.category.store');
Route::get('admin/category/index', [CategoryController::class, 'index'])->name('admin.category.index');
Route::get('admin/category/delete/{id}', [CategoryController::class, 'delete'])->name('admin.category.delete');
Route::get('admin/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
Route::post('admin/category/update', [CategoryController::class, 'update'])->name('admin.category.udpate');


// Route::get('admin/index_feedback_admin', [AdminController::class, 'index_feedback_admin'])->name('admin.index_feedback_admin');

Route::get('admin/products/create', [ProductController::class, 'create'])->name('admin.products.create');
Route::post('admin/products/store', [ProductController::class, 'store'])->name('admin.products.store');
Route::get('admin/products/index', [ProductController::class, 'index'])->name('admin.products.index');
Route::get('admin/products/delete/{id}', [ProductController::class, 'delete'])->name('admin.products.delete');
Route::get('admin/products/edit/{id}', [ProductController::class, 'edit'])->name('admin.products.edit');
Route::post('admin/products/update', [ProductController::class, 'update'])->name('admin.products.udpate');

// admin gallery start 
Route::get('admin/gallery/create', [GalleryController::class, 'create'])->name('admin.gallery.create');
Route::post('admin/gallery/store', [GalleryController::class, 'store'])->name('admin.gallery.store');
Route::get('admin/gallery/index', [GalleryController::class, 'index'])->name('admin.gallery.index');
Route::get('admin/gallery/delete/{id}', [GalleryController::class, 'delete'])->name('admin.gallery.delete');
Route::get('admin/gallery/edit/{id}', [GalleryController::class, 'edit'])->name('admin.gallery.edit');
Route::post('admin/gallery/update', [GalleryController::class, 'update'])->name('admin.gallery.udpate');
// admin gallery end


// admin feedback start
Route::get('admin/index_feedback', [FeedbackController::class, 'index'])->name('admin.index_feedback');
// admin feedback end

Route::get('admin/index_user', [UserController::class, 'index_users'])->name('admin.index_user');






Route::get('user/register', [UserController::class, 'register'])->name('user.register');
Route::get('user/register_code', [UserController::class, 'register_code'])->name('user.register_code');
Route::get('user/user_login', [UserController::class, 'index'])->name('user.user_login');
Route::get('user/home', [UserController::class, 'home'])->name('user.home');
Route::get('user/blog', [UserController::class, 'blog'])->name('user.blog');
Route::get('user/user_view_gallery', [UserController::class, 'user_view_gallery'])->name('user.user_view_gallery');
Route::get('user/user_view_category', [UserController::class, 'user_view_category'])->name('user.user_view_category');
Route::get('user/user_view_products', [UserController::class, 'user_view_products'])->name('user.user_view_products');
Route::get('user/user_view_product_details/{id?}', [UserController::class, 'user_view_product_details'])->name('user.user_view_product_details');
