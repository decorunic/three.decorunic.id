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

Route::get('/', function () {
    return view('login', [
        'siteName' => 'Decorunic AR Management',
        'title' => 'Login'
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        'siteName' => 'Decorunic AR Management',
        'title' => 'Dashboard'
    ]);
});

Route::get('/products/list', function () {
    return view('products-list', [
        'siteName' => 'Decorunic AR Management',
        'title' => 'Product List'
    ]);
});

Route::get('/products/add', function () {
    return 'Product Add';
});

Route::post('/products/save', function () {
    return 'Product Save';
});

Route::get('/products/edit/{id}', function ($id) {
    return 'Product Edit '.$id;
});

Route::post('/products/update/{id}', function ($id) {
    return 'Product Update '.$id;
});

Route::get('/products/{id}', function ($id) {
    return 'Product '.$id;
});