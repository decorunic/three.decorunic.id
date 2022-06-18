<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductsController;
use App\Models\Category;
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

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/products/list', [ProductsController::class, 'index']);
Route::get('/products/categories/', function(){
    return view('products/listCategory', [
        'siteName' => 'Decorunic 3D Management',
        'title' => 'Product Categories',
        'categories' => Category::all()
    ]);
});
Route::get('/products/categories/{category:slug}', function(Category $category){
    return view('products/listByCategory', [
        'siteName' => 'Decorunic 3D Management',
        'title' => $category->name,
        'products' => $category->products,
        'category' => $category->name
    ]);
});
Route::get('/products/add', [ProductsController::class, 'add']);
Route::post('/products/save', [ProductsController::class, 'save']);
Route::get('/products/edit/{id}', [ProductsController::class, 'edit']);
Route::post('/products/update/{id}', [ProductsController::class, 'update']);
Route::get('/products/{id}', [ProductsController::class, 'products']);
Route::get('/products/view-3d/{product:slug}', [ProductsController::class, 'view3D']);
Route::get('/products/view-ar/{product:slug}', [ProductsController::class, 'viewAR']);