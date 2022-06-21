<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductsController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'loginAuthenticate']);
Route::post('/logout', [AuthController::class, 'logoutAuthenticate']);
Route::get('/register', [AuthController::class, 'register'])->middleware('guest');
Route::post('/register', [AuthController::class, 'registerStore']);


Route::get('/products/list', [ProductsController::class, 'index'])->middleware('auth');
Route::get('/products/categories/', function(){
    return view('products/listCategory', [
        'siteName' => 'Decorunic 3D Management',
        'title' => 'Product Categories',
        'isActive' => 'Product Categories',
        'categories' => Category::all()
    ]);
})->middleware('auth');
Route::get('/products/categories/{category:slug}', function(Category $category){
    return view('products/list', [
        'siteName' => 'Decorunic 3D Management',
        'title' => 'Products by Category: ' . $category->name,
        'isActive' => 'Product Categories',
        'products' => $category->products->load('category', 'publisher'),
    ]);
})->middleware('auth');
Route::get('/products/publishers/{publisher:username}', function(User $publisher){
    return view('products/list', [
        'siteName' => 'Decorunic 3D Management',
        'title' => 'Products by Publisher: ' . $publisher->name,
        'isActive' => 'Products by Publisher',
        'products' => $publisher->products->load('category', 'publisher'),
    ]);
})->middleware('auth');
Route::get('/products/add', [ProductsController::class, 'add'])->middleware('auth');
Route::post('/products/save', [ProductsController::class, 'save'])->middleware('auth');
Route::get('/products/edit/{id}', [ProductsController::class, 'edit'])->middleware('auth');
Route::post('/products/update/{id}', [ProductsController::class, 'update'])->middleware('auth');
Route::get('/products/{id}', [ProductsController::class, 'products'])->middleware('auth');
Route::get('/products/view-3d/{product:slug}', [ProductsController::class, 'view3D'])->middleware('auth');
Route::get('/products/view-ar/{product:slug}', [ProductsController::class, 'viewAR'])->middleware('auth');