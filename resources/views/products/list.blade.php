@extends('layouts.main')

@section('container')
    <h1 class="h3 mb-4 text-gray-800">{{ $title }}</h1>
    <div class="row">
        <div class="col-12 mb-3">
            <a href="{{ '/products/add' }}" class="btn btn-primary">Add Product</a>
        </div>
        <div class="col-12 mb-3">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product['id'] }}</td>
                                    <td>{{ $product['name'] }}</td>
                                    <td>
                                        <img class="img-thumbnail" style="width: 150px;height: 100px; object-fit:cover" src="{{ $product['image_url'] }}" alt="Gambar {{ $product['name'] }}">
                                    </td>
                                    <td>{{ $product['created_at'] }}</td>
                                    <td>{{ $product['updated_at'] }}</td>
                                    <td>
                                        <button class="btn btn-info m-1">
                                            <i class="fas fa-copy"></i>
                                        </button>
                                        <a href="{{ '/products/edit/'. $product['id'] }}" class="btn btn-warning m-1">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a href="{{ '/products/delete/'. $product['id'] }}" class="btn btn-danger m-1">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
