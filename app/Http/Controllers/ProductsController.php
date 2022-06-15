<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products/list', [
            'siteName' => 'Decorunic 3D Management',
            'title' => 'Product List',
            'products' => Products::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
