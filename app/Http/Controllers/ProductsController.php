<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Models\Category;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class ProductsController extends Controller
{
    public function index()
    {
        return view('products/list', [
            'siteName' => 'Decorunic 3D Management',
            'title' => 'Product List',
            'products' => Products::latest()->get()
            // 'products' => Products::where('user_id', auth()->user()->id)->latest()->get()
        ]);
    }

    public function products($id)
    {
        $product = Products::find($id);
        // $product = Products::where('user_id', auth()->user()->id)->find($id);

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

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Products::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
    
    public function add()
    {
        return view('products/add', [
            'siteName' => 'Decorunic 3D Management',
            'title' => 'Product Add',
            'categories' => Category::all()
        ]);
    }

    public function save(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'slug' => ['required','unique:products', 'max:255'],
            'category_id' => ['required'],
            'image_url' => ['required'],
            'file' => ['required'],
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        Products::create($validatedData);

        return redirect('/products/list')->with('messageSuccess', 'New product has been added');
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
