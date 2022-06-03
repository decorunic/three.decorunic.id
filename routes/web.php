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
    return view('login');
});

Route::get('/', function () {
    return 'dashboard';
});

Route::get('/products/{id}', function ($id) {
    return 'Product '.$id;
});

Route::get('/products/list', function () {
    return 'Product List';
});

Route::get('/products/add', function () {
    return 'Product Add';
});

Route::get('/products/save', function () {
    return 'Product Save';
});

Route::get('/products/edit/{id}', function ($id) {
    return 'Product Edit '.$id;
});

Route::get('/products/update/{id}', function ($id) {
    return 'Product Update '.$id;
});