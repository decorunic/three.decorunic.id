<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductsController;
use App\Models\Category;
use App\Models\User;
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

Route::get('/coba', function () {
    return view('coba', [
        'siteName' => 'Decorunic AR Management',
        'title' => 'Coba'
    ]);
});

Route::get('/', [AuthController::class, 'index']);
Route::get('/login', [AuthController::class, 'index']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'registerStore']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/products/list', [ProductsController::class, 'index']);
Route::get('/products/categories/', function(){
    return view('products/listCategory', [
        'siteName' => 'Decorunic 3D Management',
        'title' => 'Product Categories',
        'isActive' => 'Product Categories',
        'categories' => Category::all()
    ]);
});
Route::get('/products/categories/{category:slug}', function(Category $category){
    return view('products/list', [
        'siteName' => 'Decorunic 3D Management',
        'title' => 'Products by Category: ' . $category->name,
        'isActive' => 'Product Categories',
        'products' => $category->products->load('category', 'publisher'),
    ]);
});
Route::get('/products/publishers/{publisher:username}', function(User $publisher){
    return view('products/list', [
        'siteName' => 'Decorunic 3D Management',
        'title' => 'Products by Publisher: ' . $publisher->name,
        'isActive' => 'Products by Publisher',
        'products' => $publisher->products->load('category', 'publisher'),
    ]);
});
Route::get('/products/add', [ProductsController::class, 'add']);
Route::post('/products/save', [ProductsController::class, 'save']);
Route::get('/products/edit/{id}', [ProductsController::class, 'edit']);
Route::post('/products/update/{id}', [ProductsController::class, 'update']);
Route::get('/products/{id}', [ProductsController::class, 'products']);
Route::get('/products/view-3d/{product:slug}', [ProductsController::class, 'view3D']);
Route::get('/products/view-ar/{product:slug}', [ProductsController::class, 'viewAR']);