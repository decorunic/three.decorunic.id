<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return view('products/list', [
            'siteName' => 'Decorunic 3D Management',
            'title' => 'Product List'
        ]);   
    }

    public function products($id)
    {
        return $id;
    }
    
    public function add()
    {
        return view('products/add', [
            'siteName' => 'Decorunic 3D Management',
            'title' => 'Product Add'
        ]);
    }

    public function save()
    {
        
    }

    public function edit($id)
    {
        return $id;
    }

    public function update($id)
    {
        return $id;
    }
}
