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
        return view('products/detail', [
            'siteName' => 'Decorunic 3D Management',
            'title' => 'Product Detail '.$id
        ]);
    }
    
    public function view3D($slug)
    {
        return view('products/view3d', [
            'siteName' => 'Decorunic 3D Management',
            'title' => '3D View '.$slug
        ]);
    }

    public function viewAR($slug)
    {
        return view('products/viewar', [
            'siteName' => 'Decorunic 3D Management',
            'title' => 'AR View '.$slug
        ]);
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
