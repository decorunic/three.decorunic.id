@extends('layouts.main')

@section('container')
    <h1 class="h3 mb-4 text-gray-800">{{ $title }} <a href="{{ '/products/add' }}" class="btn btn-sm btn-outline-primary">Add New</a></h1>
    <div class="row">
        <div class="col-12 mb-3">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Publisher</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Publisher</th>
                                    <th>Created at</th>
                                    <th>Updated at</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @php
                                $no = 1;
                                function TimeFormater($time) { return date('H:i, d/m/Y',strtotime($time));}
                                @endphp
                                @foreach ($products as $product)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td><a href="{{ '/products/'.$product->id }}">{{ $product->name }}</a></td>
                                    <td><a href="{{ '/products/categories/'. $product->category->slug  }}">{{ $product->category->name }}</a></td>
                                    <td><a href="#">{{ $product->user->name }}</a></td>
                                    <td>{{ TimeFormater($product->created_at) }}</td>
                                    <td>{{ TimeFormater($product->updated_at) }}</td>
                                    <td>
                                        <a href="{{ '/products/edit/'. $product->id }}" class="btn btn-warning mb-1">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a href="{{ '/products/delete/'. $product->id }}" class="btn btn-danger mb-1">
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
