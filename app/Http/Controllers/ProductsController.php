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
            'isActive' => 'Product List',
            'products' => Products::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function products($id)
    {
        $product = Products::find($id);

        return view('products/detail', [
            'siteName' => 'Decorunic 3D Management',
            'title' => 'Detail Produk '. $product['name'],
            'product' => $product,
        ]);
    }
    
    public function view3D(Products  $product)
    {
        return view('products/view3d', [
            'siteName' => 'Decorunic 3D Management',
            'title' => '3D View '. $product,
            'product' => $product
        ]);
    }
    
    public function viewAR(Products  $product)
    {
        return view('products/viewar', [
            'siteName' => 'Decorunic 3D Management',
            'title' => 'AR View '. $product,
            'product' => $product
        ]);
    }
    
    public function add()
    {
        return view('products/add', [
            'siteName' => 'Decorunic 3D Management',
            'title' => 'Product Add',
            'isActive' => 'Product Add'
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
