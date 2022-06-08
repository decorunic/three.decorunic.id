@extends('layouts.main')

@section('container')
  <h1 class="h3 mb-4 text-gray-800">{{ $title }}</h1>
  <div class="row">
    <div class="col-lg-6 col-md-8 mb-3">
      <form action="{{ '/products/save' }}">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="e.g. Meja TV Minimalis Kekinian Ishana">
        </div>
        <div class="form-group">
          <label for="name">Image URL</label>
          <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="e.g. https://decorunic.id/wp-content/uploads/2021/10/2-7-scaled.jpg">
        </div>
        <div class="form-group">
          <label for="file_name">3D File</label>
          <div class="custom-file">
            <input type="file" class="custom-file-input" name="file_name" id="file_name" aria-describedby="file_nameHelp" accept=".glb">
            <small id="file_nameHelp" class="form-text text-muted">Hanya menerima format file .glb</small>
            <label class="custom-file-label" for="customFile">Choose file</label>
          </div>
        </div>
        <a href="{{ '/products/list' }}" class="btn btn-secondary">&larr; Back</a>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
    </div>
  </div>
@endsection